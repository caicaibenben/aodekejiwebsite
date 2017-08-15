<!doctype html>
<html lang="en-zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>奥德科技有限公司</title>
    <link type="image/x-icon" href="" rel="icon">
    <link href="image/ico.png" rel="shortcut icon">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- 可选的Bootstrap主题文件（一般不使用） -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="LiveServer.css" type="text/css">
    <link rel="stylesheet" href="base.css" type="text/css">
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=6406a6c571b61311ef059706c7273018"></script>
    <script type="application/javascript" src="LiveServerSiteMap.js"></script>
</head>
<body>
<!--1.首页标签-->
    <nav style="background-color: #ffffff " class="navbar  navbar-fixed-top " role="navigation">
      <div class="navbar-header col-md-2 col-md-offset-2">
        <a class="navbar-brand" href="#"><img src="image/logo.jpg" class="img-responsive col-md-8" alt="Logo" ></a>
      </div>
      <div class="col-md-8">
        <ul class="nav navbar-nav col-md-12">
            <li class="col-md-2"><a href="index.php" target="_self">首页</a></li>
            <li class="col-md-2"><a href="liveServer.php" target="_self" style="color: #ec8400">生活缴费</a></li>
            <li class="col-md-2"><a href="enterprisepurchasing.php">企业采购</a></li>
            <li class="col-md-2"><a href="communityES.php">社区电商</a></li>
            <li class="col-md-2"><a href="addvalueservices.php">增值服务</a></li>
        </ul>
      </div>
    <div class="adkj_menu_border"></div>
    </nav>
    <!--2.轮播图-->
    <section>
        <div class="imgwh" style="margin-top: 50px;">
            <div id="myCarouse"  class="carousel slide " data-ride="carousel" data-interval="2700" data-wrap="true">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="image/blue_2.png" alt="First slide" class="img-responsive" width="100%">
                    </div>
                    <div class="item">
                        <img src="image/blue_2.png" alt="Second slide" class="img-responsive" width="100%">
                    </div>
                    <div class="item">
                        <img src="image/blue_2.png" alt="Third slide" class="img-responsive" width="100%">
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#myCarouse" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouse" data-slide-to="1"></li>
                    <li data-target="#myCarouse" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
    <!--3.手机功能演示-->
    <section>
        <div class="intro">
            <div class="">
                <div class="">
                    <div class="phone_show">
                        <div class="">
                            <div class="right">
                                <!-- 左侧按钮-->
                                <div class="left">
                                    <button type="button" class="btn btn-default btn-lg btn_left">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </button>
                                </div>
                                <!--手机屏幕-->
                                <div class="mid_check left">
                                    <img class="" src="image/phone_border.jpg" width="273" height="528">
                                    <div class="img_out_box left">
                                        <div class="img_out left" id="img_out">
                                            <img src="image/pic.png" width="237">
                                            <img src="image/pic.png" width="237">
                                            <img src="image/pic.png" width="237">
                                            <img src="image/pic.png" width="237">
                                        </div>
                                    </div>
                                </div>
                                <!--右侧按钮-->
                                <div class="left">
                                    <button type="button" class="btn btn-default btn-lg btn_right" style="margin-right: 80px">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text_out_sider left">
                        <!--内容介绍-->
                        <div class="text_out_box">
                            <div class="text_img_box">
                                <h4><img src="image/word-1.png" class="img-responsive text_img" ></h4>
                            </div>
                            <div class="text_img_box none">
                                <h4><img src="image/word-2.png" class="img-responsive text_img" ></h4>
                            </div>
                            <div class="text_img_box none">
                                <h4><img src="image/word-3.png" class="img-responsive text_img" ></h4>
                            </div>
                            <div class="text_img_box none">
                                <h4><img src="image/word-4.png" class="img-responsive text_img" ></h4>
                            </div>
                        </div>
                        <!--图标按钮-->
                        <p class="icon-out"  id="icon-out" style="margin-top:50px;">
                            <a class="icon"><img src="image/book_active.png" class="img-responsive" alt="0"></a>
                            <a class="icon"><img src="image/book.png" class="img-responsive" alt="1"></a>
                            <a class="icon"><img src="image/book.png" class="img-responsive" alt="2"></a>
                            <a class="icon"><img src="image/book.png" class="img-responsive" alt="3"></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    4.站点地图显示-->
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
    <script type="application/javascript"src="LiveServer.js"></script>
    <script type="application/javascript" src="LiveServerSiteMap.js?ver=1"></script>
</section>
    <!--    5.页脚-->
    <footer class="index_footer">
        2017@奥德科技有限公司|<span>2013 ORDERCHINA 版权所有 鲁ICP备10203198号</span>
    </footer>
</body>
</html>