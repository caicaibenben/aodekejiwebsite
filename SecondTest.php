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
                            <div class="input-group-btn dropdown" id="dropdownmutilmenu">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="dropdownbtn">
                                    全部
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu multi-level " role="menu" aria-labelledby="dropdownMenu" id="dropdownmenulist">
                                    <li class="dropdown-submenu ">
                                        <a href="javascript:;">山东</a>
                                        <ul class="dropdown-menu ">
                                            <li class="dropdown-submenu ">
                                                <a href="javascript:;">济南市</a>
                                                <ul class="dropdown-menu ">
                                                    <li><a href="javascript:;">商河县</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu ">
                                                <a href="javascript:;">日照市</a>
                                                <ul class="dropdown-menu ">
                                                    <li><a href="javascript:;">莒县</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu ">
                                                <a href="javascript:;">德州市</a>
                                                <ul class="dropdown-menu ">
                                                    <li><a href="javascript:;">齐河县</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu ">
                                                <a href="javascript:;">临沂市</a>
                                                <ul class="dropdown-menu ">
                                                    <li><a href="javascript:;">兰山区</a></li>
                                                    <li><a href="javascript:;">河东区</a></li>
                                                    <li><a href="javascript:;">罗庄区</a></li>
                                                    <li><a href="javascript:;">平邑县</a></li>
                                                    <li><a href="javascript:;">蒙阴县</a></li>
                                                    <li><a href="javascript:;">费县</a></li>
                                                    <li><a href="javascript:;">沂水县</a></li>
                                                    <li><a href="javascript:;">沂南县</a></li>
                                                    <li><a href="javascript:;">郯城县</a></li>
                                                    <li><a href="javascript:;">莒南县</a></li>
                                                    <li><a href="javascript:;">临沭县</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
<!--                                    --><?php
//                                    $chargeSite = array(
//                                        "山东" => array(
//                                            "济南" => array("历城", "历下"),
//                                            "济宁" => array("曲阜"),
//                                            "临沂" => array("兰山", "河东", "罗庄"),
//                                        ),
//                                        "河南" => array(
//                                            "开封" => array("鼓楼", "兰考"),
//                                        ),
//                                        "北京" => array("朝阳", "海淀"),
//                                        "雄县"
//                                    );
//                                    foreach ($chargeSite as $keySheng => $sheng) {
//                                        if (is_array($sheng)) {
//                                            echo '<li class="dropdown-submenu "><a href="javascript:;">'.$keySheng . '</a><ul class="dropdown-menu ">';
//                                            foreach ($sheng as $keyShi => $shi) {
//                                                if (is_array($shi)) {
//                                                    echo '<li class="dropdown-submenu "><a href="javascript:;">'.$keyShi.'</a><ul class="dropdown-menu ">';
//                                                    foreach ($shi as $keyXian => $xian) {
//                                                        echo '<li><a href="javascript:;">'.$xian.'</a></li>';
//                                                    }
//                                                    echo '</ul></li>';
//                                                } else {
//                                                    echo '<li><a  href="javascript:;">'.$shi.'</a></li>';
//                                                }
//                                            }
//                                            echo '</ul></li>';
//                                        } else {
//                                            echo '<li><a href="javascript:;">'.$sheng.'</a></li>';
//                                        }
//                                    }
//                                    ?>
                            </div><!-- /btn-group -->
                            <input id="SearchText" type="text" class="form-control" placeholder="请输入你要查询的站点">
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
                <div id="list-group" class="list-group pre-scrollable">
                    <!--                    <a href="javascript:;" class="list-group-item active " data-toggle="collapse"-->
                    <!--                       data-target="#demo0">-->
                    <!--                        <h4 class="list-group-item-heading">-->
                    <!--                            紫禁城小区-->
                    <!--                        </h4>-->
                    <!--                    </a>-->
                    <!--                    <div id="demo0" class="collapse">-->
                    <!--                        详细地址：1111111111111111111111111111111111111-->
                    <!--                        11111111111111111111111111111111111111111111111-->
                    <!--                    </div>-->
                    <!--                    <a id="forSiteList"></a>-->
                </div>
            </div>
        </div>
    </div>
    <script type="application/javascript" src="SecondTest.js?ver=1"></script>
</section>
</body>
<!--<script>-->
<!--    $('#dropdownmenulist').on('click','a',function () {-->
<!--        //$('#dropdownMenu').val($(this).text());-->
<!--        $('#dropdownbtn').text($(this).text());-->
<!--        $('#dropdownbtn').append('<span class="caret"></span>');-->
<!--    });-->
<!--</script>-->
</html>