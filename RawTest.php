<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap 3 的多级下拉菜单示例</title>
    <script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <link rel="stylesheet" href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
    <script type="text/javascript" src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="RawTest.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <h2>Bootstrap 3多级下拉菜单</h2>
        <hr>
        <div class="dropdown">
            <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#"
               href="javascript:;">
                全部 <span class="caret"></span>
            </a>
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
<!--                <li><a href="javascript:;">北京</a></li>-->
<!--                <li class="dropdown-submenu ">-->
<!--                    <a href="javascript:;">山东</a>-->
<!--                    <ul class="dropdown-menu ">-->
<!--                        <li><a  href="javascript:;">济南</a></li>-->
<!--                        <li class="dropdown-submenu ">-->
<!--                            <a href="javascript:;">临沂</a>-->
<!--                            <ul class="dropdown-menu ">-->
<!--                                <li><a href="javascript:;">河东</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>
        </div>
    </div>
</div>
</body>
</html>

