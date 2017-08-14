<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- 可选的Bootstrap主题文件（一般不使用） -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="Test.js"></script>
    <link rel="stylesheet" href="Test.css" type="text/css">
    <link rel="stylesheet" href="base.css" type="text/css">
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=6406a6c571b61311ef059706c7273018"></script>
</head>
<body>
<section >
    <!--站点地图显示    -->
    <div class="col-md-12" >
        <div class="col-md-5 col-md-offset-1" style="background-color: #e6e6e6;">
            <!--地图显示-->
            <div id="siteMap">
            <!--显示百度地图-->
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1" style="background-color: #e6e6e6" >
            <!--搜索框-->
            <div style="margin-top: 40px">
                <form class="bs-example bs-example-form" role="form">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    全部
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu multi-level " role="menu" aria-labelledby="dropdownMenu">
                                    <?php
                                    $chargeSite = array(
                                        "山东" => array(
                                            "济南" => array("历城", "历下"),
                                            "济宁" => array("曲阜"),
                                            "临沂" => array("兰山", "河东", "罗庄"),
                                        ),
                                        "河南" => array(
                                            "开封" => array("鼓楼", "兰考"),
                                        ),
                                        "北京" => array("朝阳", "海淀"),
                                        "雄县"
                                    );
                                    foreach ($chargeSite as $keySheng => $sheng) {
                                        if (is_array($sheng)) {
                                            echo '<li class="dropdown-submenu "><a href="javascript:;">'.$keySheng . '</a><ul class="dropdown-menu ">';
                                            foreach ($sheng as $keyShi => $shi) {
                                                if (is_array($shi)) {
                                                    echo '<li class="dropdown-submenu "><a href="javascript:;">'.$keyShi.'</a><ul class="dropdown-menu ">';
                                                    foreach ($shi as $keyXian => $xian) {
                                                        echo '<li><a href="javascript:;">'.$xian.'</a></li>';
                                                    }
                                                    echo '</ul></li>';
                                                } else {
                                                    echo '<li><a  href="javascript:;">'.$shi.'</a></li>';
                                                }

                                            }
                                            echo '</ul></li>';
                                        } else {
                                            echo '<li><a href="javascript:;">'.$sheng.'</a></li>';
                                        }
                                    }
                                    ?>
                            </div><!-- /btn-group -->
                            <input type="text" class="form-control" placeholder="请输入你要查询的站点">
                            <span class="input-group-btn" id="searchbtn">
                                    <button id="searchbtn" class="btn btn-default" type="button">
                                        <span class="glyphicon glyphicon-search"> </span>
                                    </button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </form>
            </div>
            <!--站点列表-->
            <div style="margin-top: 100px">
                <div class="list-group">
                    <a href="javascript:;" class="list-group-item active " data-toggle="collapse"
                       data-target="#demo0">
                        <h4 class="list-group-item-heading">
                            紫禁城小区
                        </h4>
                    </a>
                    <div id="demo0" class="collapse">
                        详细地址：1111111111111111111111111111111111111
                        11111111111111111111111111111111111111111111111
                    </div>
                    <a href="javascript:;" class="list-group-item active " data-toggle="collapse"
                       data-target="#demo1">
                        <h4 class="list-group-item-heading">
                            紫禁城小区
                        </h4>
                    </a>
                    <div id="demo1" class="collapse">
                        详细地址：1111111111111111111111111111111111111
                        11111111111111111111111111111111111111111111111
                    </div>
                    <a href="javascript:;" class="list-group-item " data-toggle="collapse"
                       data-target="#demo2">
                        <h4 class="list-group-item-heading">
                            紫禁城小区
                        </h4>
                    </a>
                    <div id="demo2" class="collapse">
                        详细地址：1111111111111111111111111111111111111
                        11111111111111111111111111111111111111111111111
                    </div>
                    <a href="javascript:;" class="list-group-item" data-toggle="collapse"
                       data-target="#demo3" >
                        <h4 class="list-group-item-heading">
                            紫禁城小区
                        </h4>
                        <div id="demo3" class="collapse">
                            详细地址：1111111111111111111111111111111111111
                            11111111111111111111111111111111111111111111111
                        </div>
                    </a>

                </div>

            </div>
        </div>
    </div>

</section>
<script type="text/javascript">
    var points= new Array();
    points[0]=new BMap.Point(118.383737 ,35.130189 );
    points[1]=new BMap.Point(118.4102 ,35.278136 );
    points[2]=new BMap.Point(117.966885 ,35.278489 );
    points[3]=new BMap.Point(119.147483 ,35.131858 );
    points[4]=new BMap.Point(116.404, 39.915);
    function initMap() {
        // 百度地图初始化
        var map = new BMap.Map("siteMap");    // 创建Map实例
        map.centerAndZoom(new BMap.Point(116.404, 39.915), 12);  // 初始化地图,设置中心点坐标和地图级别
        map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
        //map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
        function myFun(result){
            var cityName = result.name;
            map.setCenter(cityName);
        }
        var myCity = new BMap.LocalCity();
        myCity.get(myFun);//获取定位地址之后必须通过get来回掉函数
        map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
    }

    //百度地图显示更新 points并加注标签
    function refreshMap(points) {
        console.log("refresh");
        var map = new BMap.Map("siteMap");    // 创建Map实例
        var view = map.getViewport(eval(points));
        var mapZoom = view.zoom;
        console.log("mapZoom"+mapZoom);
        var centerPoint = view.center;
        console.log("centerPoint"+centerPoint.lng+" "+centerPoint.lat);
        map.centerAndZoom(centerPoint,mapZoom);
        map.enableScrollWheelZoom(true);
        for(var i=0;i<points.length;i++){
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

    refreshMap(points);
    //特定点的地图显示
    function refreshMapPoint(points,point) {
        console.log("refresh");
        var map = new BMap.Map("siteMap");    // 创建Map实例
        var view = map.getViewport(eval(points));
        var mapZoom = view.zoom;
        console.log("mapZoom"+mapZoom);
        var centerPoint = view.center;
        console.log("centerPoint"+centerPoint.lng+" "+centerPoint.lat);
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
    $("#searchbtn").click(function(){
//        var point=points[0];
//        refreshMapPoint(points,point);
        $.post("RawTest.php",
           {},
            function(data,status){
                var obj = JSON.parse(data);
                //var obj = eval(data);
                console.log(obj);
                alert(status);
            });
    });
</script>
</body>
</html>