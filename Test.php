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
    <section >
    <!--站点地图显示    -->
    <div class="col-md-12" >
        <div class="col-md-5 col-md-offset-1" style="background-color: #e6e6e6;width: 600px;height: 500px">
            <!--地图显示-->
            <div style="padding: 4px 4px 4px 4px;border: 1px solid black">
                <img src="image/site.png" class="img-responsive" width="600px" height="500px">
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
                                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                        <li><a href="javascript:;">北京</a></li>
                                        <li class="dropdown-submenu">
                                            <a tabindex="-1" href="javascript:;">山东</a>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="javascript:;">济南</a></li>
                                                <li class="dropdown-submenu">
                                                    <a href="javascript:;">临沂</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="javascript:;">河东</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!-- /btn-group -->
                                <input type="text" class="form-control" placeholder="请输入你要查询的站点">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
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
                    <a href="#" class="list-group-item active " data-toggle="collapse"
                       data-target="#demo0">
                        <h4 class="list-group-item-heading">
                            紫禁城小区
                        </h4>
                    </a>
                    <div id="demo0" class="collapse">
                        详细地址：1111111111111111111111111111111111111
                        11111111111111111111111111111111111111111111111
                    </div>
                    <a href="#" class="list-group-item active " data-toggle="collapse"
                       data-target="#demo1">
                        <h4 class="list-group-item-heading">
                            紫禁城小区
                        </h4>
                    </a>
                    <div id="demo1" class="collapse">
                        详细地址：1111111111111111111111111111111111111
                        11111111111111111111111111111111111111111111111
                    </div>
                    <a href="#" class="list-group-item " data-toggle="collapse"
                       data-target="#demo2">
                        <h4 class="list-group-item-heading">
                            紫禁城小区
                        </h4>
                    </a>
                    <div id="demo2" class="collapse">
                        详细地址：1111111111111111111111111111111111111
                        11111111111111111111111111111111111111111111111
                    </div>
                    <a href="#" class="list-group-item" data-toggle="collapse"
                       data-target="#demo3">
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

</body>
</html>