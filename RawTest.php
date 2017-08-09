<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap 3 的多级下拉菜单示例</title>
    <script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <link rel="stylesheet" href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
    <script type="text/javascript" src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="SecondTest.css"/>
</head>
<body>
<?php
echo "<pre>";
$chargeSite =array(
    "山东"=>array(
        "济南"=>array("历城","历下"),
        "济宁"=>array("曲阜"),
        "临沂"=>array("兰山","河东","罗庄"),
    ),
    "河南"=>array(
        "开封"=>array("鼓楼","兰考"),
    ),
    "北京"=>array("朝阳","海淀"),
    "雄县"
);
foreach($chargeSite as $keySheng=>$sheng ){
    if(is_array($sheng)){
        echo $keySheng."<br>";
        foreach($sheng as $keyShi=>$shi){
          if(is_array($shi)){
              echo "  ".$keyShi."<br>";
              foreach($shi as $keyXian=>$xian){
                echo "    ".$xian."<br>";
              }
          }else{
              echo "  ".$shi."<br>";
          }

        }
    }else{
        echo $sheng."<br>";
    }
}
echo "</pre>";
?>
</body>
