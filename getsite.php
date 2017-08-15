<?php
$url='http://10.20.1.36/mobile/index.php?act=authority_service&op=authorityservice_list&key=306099a1b853ba9effedf5754702b716';
if(array_key_exists("keyword",$_POST)&&$_POST['keyword']!=null){
    $data=$_POST['keyword'];
    $url='http://10.20.1.36/mobile/index.php?act=authority_service&op=authorityservice_list&key=306099a1b853ba9effedf5754702b716&keyword='.$data;
}
$ch = curl_init();//初始化curl
curl_setopt($ch, CURLOPT_URL,$url);//抓取指定网页
curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
//curl_setopt($ch, CURLOPT_POST, true);//post提交方式
//curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$data = curl_exec($ch);//运行curl
curl_close($ch);
$site=json_decode($data, true);
//var_dump($site['datas']['authority_service_list']);
exit(json_encode($site['datas']['authority_service_list']));
?>