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
</head>
<body>
    <!--    侧滑界面-->
    <section>
        <div class="">
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-6 col-xs-12 left" >
                <!--左侧按钮-->
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
                    <button type="button" class="btn btn-default btn-lg ">
                        <span class="glyphicon glyphicon glyphicon-chevron-left "></span>
                    </button>
                </div>
                <!--手机屏幕-->
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 left overflow-hid">
                    <img src="image/phone_border.jpg" class="img-responsive" class="left">
                    <div class="left">
                        <img src="image/pic.png" class="img-responsive left">
                        <img src="image/pic.png" class="img-responsive left">
                        <img src="image/pic.png" class="img-responsive left">
                        <img src="image/pic.png" class="img-responsive left">
                    </div>
                </div>
               <!--右侧按钮-->
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <button type="button" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon glyphicon-chevron-right"></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-6 col-xs-12 left" >
                <!--内容介绍-->
                <div class="">
                        <div class="" style="display: block;">
                            <a href=""><img src="image/word-9.png" class="img-responsive"></a>
                        </div>
                        <div class="" style="display: none">
                            <a href=""><img src="image/word-9.png" class="img-responsive"></a>
                        </div>
                        <div class="" style="display: none">
                            <a href=""><img src="image/word-9.png" class="img-responsive"></a>
                        </div>
                        <div class="" style="display: none">
                            <a href=""><img src="image/word-9.png" class="img-responsive"></a>
                        </div>
                </div>
                <!--内容切换按钮-->
                <div class="">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a href=""><img src="image/book.png" class="img-responsive"></a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a href=""><img src="image/book.png" class="img-responsive"></a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a href=""><img src="image/book.png" class="img-responsive"></a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a href=""><img src="image/book.png" class="img-responsive"></a>
                        </div>
                </div>
            </div>
        </div>
        <div class="left">
            <img src="image/phone_border.jpg" width="273" height="528">
            <div>
                <div>
                    <img src="image/pic.png" width="237">
                    <img src="image/pic.png" width="237">
                    <img src="image/pic.png" width="237">
                    <img src="image/pic.png" width="237">
                    <img src="image/pic.png" width="237">
                </div>
            </div>
        </div>

    </section>
</body>
</html>