$().ready(function () {
    var siteSearch=new Array();//站点搜索数组
    var sitelist=new Array();//站点名称  用于列表显示
    sitelist[0]=['1','11'];
    sitelist[1]=['2','22'];
    sitelist[2]=['3','33'];
    sitelist[3]=['4','44'];
    sitelist[4]=['5','55'];
    var points= new Array();//站点经纬度信息  用于地图显示
    points[0]=new BMap.Point(118.383737 ,35.130189 );
    points[1]=new BMap.Point(118.4102 ,35.278136 );
    points[2]=new BMap.Point(117.966885 ,35.278489 );
    points[3]=new BMap.Point(119.147483 ,35.131858 );
    points[4]=new BMap.Point(116.404, 39.915);
    function refreshList(list) {
        $('#list-group').empty();
        $('#list-group').prepend('<a id="forSiteList"></a>');
        for(var i=0;i<list.length;i++){
            var txt1='<a href="javascript:;" class="list-group-item active" data-toggle="collapse" data-target="#demo'+i+'" > <h4 class="list-group-item-heading">'+list[i][0]+'</h4> </a>' ;
            var txt2='<div id="demo'+i+'" class="collapse">'+list[i][1]+'</div>';
            $('#forSiteList').before(txt1,txt2);
        }
    }
    //获取站点信息函数
    function siteSearch(searchkey) {
        if(keyword.length==0){
            $.post("getsite.php",{},function (data,status) {
                siteSearch = JSON.parse(data);
            });
        }else{
            $.post("getsite.php",{'keyword':searchkey},function (data,status) {
                siteSearch = JSON.parse(data);
            });
        }

    }
    function initMap() {
        // 百度地图初始化
        var key="";
        siteSearch(key);
        siteDataDeal();
        refreshList(sitelist);
        refreshMap(points);
    }
    initMap();// 打开网页获取all站点并显示
    //百度地图显示更新 points并加注标签
    function refreshMap(points) {
        console.log(points);
        //console.log("refresh");
        var map = new BMap.Map("siteMap");    // 创建Map实例
        var view = map.getViewport(eval(points));
        var mapZoom = view.zoom;
        //console.log("mapZoom"+mapZoom);
        var centerPoint = view.center;
        //console.log("centerPoint"+centerPoint.lng+" "+centerPoint.lat);
        map.centerAndZoom(centerPoint,mapZoom);
        map.enableScrollWheelZoom(true);
        for(var i=0;i<points.length;i++){
            if(isNaN(points[i]['lat'])||isNaN(points[i]['lng'])){
                continue;
            }//判断经纬度不合法，跳过
            var redIcon = new BMap.Icon("image/mapbiaozhu.png", new BMap.Size(21, 33), {
                // 指定定位位置。
                // 当标注显示在地图上时，其所指向的地理位置距离图标左上
                // 角各偏移10像素和25像素。您可以看到在本例中该位置即是
                // 图标中央下端的尖角位置。
                anchor: new BMap.Size(10, 16),
                // 设置图片偏移。
                // 当您需要从一幅较大的图片中截取某部分作为标注图标时，您
                // 需要指定大图的偏移位置，此做法与css sprites技术类似。
                imageOffset:new BMap.Size(i*(-21),0)   // 设置图片偏移
            });
            var marker = new BMap.Marker(points[i],{icon:redIcon});
            map.addOverlay(marker);
        }
    }

    //refreshMap(points);
    //特定点的地图显示
    function refreshMapPoint(points,point) {
        //console.log("refresh");
        var map = new BMap.Map("siteMap");    // 创建Map实例
        var view = map.getViewport(eval(points));
        var mapZoom = view.zoom;
        //console.log("mapZoom"+mapZoom);
        var centerPoint = view.center;
        //console.log("centerPoint"+centerPoint.lng+" "+centerPoint.lat);
        map.centerAndZoom(centerPoint,mapZoom);
        map.enableScrollWheelZoom(true);
        for(var i=0;i<points.length;i++){
            if(points[i]==point){
                var myIcon = new BMap.Icon("image/mapblue.png", new BMap.Size(21, 33), {
                    // 指定定位位置。
                    // 当标注显示在地图上时，其所指向的地理位置距离图标左上
                    // 角各偏移10像素和25像素。您可以看到在本例中该位置即是
                    // 图标中央下端的尖角位置。
                    anchor: new BMap.Size(10, 16),
                });

                var marker_point = new BMap.Marker(point,{icon:myIcon});
                map.addOverlay(marker_point);
                continue;
            }
            var redIcon = new BMap.Icon("image/mapbiaozhu.png", new BMap.Size(21, 33), {
                // 指定定位位置。
                // 当标注显示在地图上时，其所指向的地理位置距离图标左上
                // 角各偏移10像素和25像素。您可以看到在本例中该位置即是
                // 图标中央下端的尖角位置。
                anchor: new BMap.Size(10, 16),
                // 设置图片偏移。
                // 当您需要从一幅较大的图片中截取某部分作为标注图标时，您
                // 需要指定大图的偏移位置，此做法与css sprites技术类似。
                imageOffset:new BMap.Size(i*(-21),0)   // 设置图片偏移
            });
            var marker = new BMap.Marker(points[i],{icon:redIcon});
            map.addOverlay(marker);
        }
    }
    //站点信息数据处理
    function siteDataDeal() {
        for(var i=0,j=0;i<siteSearch.length;i++)
        {
            if((siteSearch[i]['baidu_lng'].length<1)||(siteSearch[i]['baidu_lng'].length<1)){
                console.log("fail"+i)
                continue;
            }
            points[j]=new BMap.Point(siteSearch[i]['baidu_lng'],siteSearch[i]['baidu_lat']);
            console.log(i);
            sitelist[j]=new Array(siteSearch[i]['point_name'],siteSearch[i]['point_address']);
            j++;
        }
    }

    //搜索按钮的点击事件
    $("#searchbtn").click(function(){
                var key=$("#SearchText").text();
                siteSearch(key);
                siteDataDeal();
                refreshList(sitelist);
                refreshMap(points);
    });
    //列表item的点击事件，展开显示地址并且在地图显示点
    $(document).on('click','.list-group-item',function(){
        var i=$(this).index()/2;
        console.log(i);
        refreshMapPoint(points,points[i]);
    });
    $(document).on('change',"#dropdownmutilmenu",function () {
             console.log("ok");
        }
    );
});
