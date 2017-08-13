<?php
$ch = curl_init();//初始化curl
curl_setopt($ch, CURLOPT_URL,"http://10.20.1.36/mobile/index.php?act=authority_service&op=authorityservice_list&key=306099a1b853ba9effedf5754702b716");//抓取指定网页
curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
$data = curl_exec($ch);//运行curl
curl_close($ch);
$site=json_decode($data, true);
var_dump($site);
//exit(json_encode($data));
//echo "RawTest";
?>