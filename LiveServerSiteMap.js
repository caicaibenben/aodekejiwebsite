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
	initMap();
	//console.log(sitelist);
	refreshList(sitelist);
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
	$("#searchbtn").click(function(){
		//        var point=points[0];
		//        refreshMapPoint(points,point);
		$.post("getsite.php", {},
			function(data,status){
				siteSearch = JSON.parse(data);
				//var obj = eval(data);
				//console.log(siteSearch);
				siteDataDeal();
				refreshList(sitelist);
				refreshMap(points);
			});
	});
	$(document).on('click','.list-group-item',function(){
		var i=$(this).index()/2;
		console.log(i);
		refreshMapPoint(points,points[i]);
	});
});
