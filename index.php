<!doctype html>
<html lang="en-zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>奥德科技有限公司</title>
    <link type="image/x-icon" href="" rel="icon">
    <link href="image/ico.png" rel="shortcut icon">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="base.css" type="text/css">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- 可选的Bootstrap主题文件（一般不使用） -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <!--1.首页标签-->
    <nav style="background-color: #ffffff " class="navbar  navbar-fixed-top " role="navigation">
        <div class="navbar-header col-md-2 col-md-offset-2">
            <a class="navbar-brand" href="#"><img src="image/logo.jpg" class="img-responsive col-md-8" alt="Logo" ></a>
        </div>
        <div class="col-md-8">
            <ul class="nav navbar-nav col-md-12">
                <li class="col-md-2"><a href="index.php" target="_self" style="color: #ec8400">首页</a></li>
                <li class="col-md-2"><a href="liveServer.php" target="_self">生活缴费</a></li>
                <li class="col-md-2"><a href="enterprisepurchasing.php">企业采购</a></li>
                <li class="col-md-2"><a href="communityES.php">社区电商</a></li>
                <li class="col-md-2"><a href="addvalueservices.php">增值服务</a></li>
            </ul>
        </div>
        <div class="adkj_menu_border"></div>
    </nav>
    <div>
        <!--2.轮播图-->
        <section>
            <div class="imgwh">
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
        <!--3.功能模块-->
        <section class="index_block_img overflow-hid">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="http://"><img src="image/function.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <a href="http://"><img src="image/function.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <a href="http://"><img src="image/function.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                <a href="http://"><img src="image/function.png" class="img-responsive" alt=""></a>
            </div>
        </section>
        <!--4.logo+新闻展示-->
        <section class="overflow-hid index_block_img">
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <a href="http://"><img src="image/function.png" class="img-responsive" alt="ShowPicture"></a>
            </div>
            <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                <div style="border-left:2px solid #ec8400;height:30px;width:100%;padding-left:10px;">
                    <span style="font-size:21px;color:#333333;font-family: 'FZLTXHJW'">新闻动态</span>
                </div>
                <div class="index_news">
                    <ul id="news_ul">
                        <li><span>奥德科技有限公司新闻动态奥德科技有限公司新闻动态</span></li>
                        <li><span>奥德科技有限公司新闻动态奥德科技有限公司新闻动态</span></li>
                        <li><span>奥德科技有限公司新闻动态奥德科技有限公司新闻动态</span></li>
                        <li><span>奥德科技有限公司新闻动态奥德科技有限公司新闻动态</span></li>
                        <li><span>奥德科技有限公司新闻动态奥德科技有限公司新闻动态</span></li>
                        <li><span>奥德科技有限公司新闻动态奥德科技有限公司新闻动态</span></li>
                        <li><span>奥德科技有限公司新闻动态奥德科技有限公司新闻动态</span></li>
                    </ul>
                </div>
                <div style="height:16px;width:100%;padding-left:18px;margin-bottom:0px;">
                     <span style="color:#878787;font-size:14px;cursor: pointer"
                           onclick="">更多 >></span>
                </div>
            </div>
        </section>
    </div>

    <!--5.页脚-->
    <footer class="index_footer">
        2017@奥德科技有限公司|<span>2013 ORDERCHINA 版权所有 鲁ICP备10203198号</span>
    </footer>
</body>
</html>