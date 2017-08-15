<?php
/**
 * 
 *
 *
 *
 *
 * @copyright  Copyright (c) 2007-2016 ShopNC Inc. (http://www.shopnc.net)
 * @license    http://www.shopnc.net
 * @link       http://www.shopnc.net
 * @since      File available since Release v1.1
 */

use Shopnc\Tpl;

defined('InShopNC') or exit('Access Invalid!');

class authority_serviceControl extends mobileMemberControl {

    public function __construct() {
        parent::__construct();
    }
    
    public function authorityservice_listOp(){
        $model_authority_service = Model('authority_service');

        $baidu_lng  = isset($_GET['baidu_lng'])?$_GET['baidu_lng']:'';//经度
        $baidu_lat  = isset($_GET['baidu_lat'])?$_GET['baidu_lat']:'';//纬度

//         $baidu_lng = '4.9E-324';
//         $baidu_lat = '4.9E-324';

//         $baidu_lng = '';
//         $baidu_lat = '';
     
        $keyword    = isset($_GET['keyword'])?$_GET['keyword']:'';//关键字
        //$keyword = '公司';
        $condition = '1 = 1';
        
        if($keyword != ''){
            $condition .= ' and (point_name like "%'.$keyword.'%" or point_address like "%'.$keyword.'%" or area_name like "%'.$keyword.'%")';
        }
        
        if($_GET['area_id3']){
            $condition .= ' and area_id3 = '.$_GET['area_id3'];
        }   
        
        $authority_service_tmp = $model_authority_service -> getAuthorityServiceList($condition, $this -> page, 'point_id desc');

        if(empty($authority_service_tmp)){
            $page_count = $model_authority_service->gettotalpage();
            output_data(array('authority_service_list' => array()), mobile_page($page_count));
        }
        
        $authority_service_list = array();
        foreach($authority_service_tmp as $val){
            $point = array();
            $point['point_id'] = $val['point_id'];
            $point['point_name'] = $val['point_name'];
            $point['point_type_name'] = $val['point_type_name'];
            $point['area_name'] = $val['area_name'];
            $point['point_address'] = $val['point_address'];
            $point['baidu_lng'] = $val['baidu_lng'];
            $point['baidu_lat'] = $val['baidu_lat'];
            $point['point_phone'] = $val['point_phone'];
            $point['point_img'] = UPLOAD_SITE_URL.DS.ATTACH_GOODS_CLASS.DS.$val['point_img'];

            //距离计算
            $distance = self::getDistance($baidu_lng, $baidu_lat, $val['baidu_lng'], $val['baidu_lat']);
            
            if($distance > 1000){
                $point['distance'] = ($distance/1000)."km";
            }else{
                $point['distance'] = $distance."m";
            }

            $authority_service_list[$distance] = $point;
        }
//         print_r($authority_service_list);exit;
        ksort($authority_service_list);//按照距离远近排序
        
        foreach($authority_service_list as $v){
            if(empty($baidu_lat) || empty($baidu_lng) || ($baidu_lng == '4.9E-324') || ($baidu_lat == '4.9E-324')){
                $v['distance'] = '';//客户端定位失败后不需要距离
            }
            
            $authority_service_list_data[] = $v;
        }
        //print_r($authority_service_list_data);exit;
        $page_count = $model_authority_service->gettotalpage();
        
        output_data(array('authority_service_list' => $authority_service_list_data), mobile_page($page_count));
    }
    
    /**
     * @desc 根据两点间的经纬度计算距离
     * @param float $lat 纬度值
     * @param float $lng 经度值
     */
    function getDistance($lng1,$lat1,$lng2,$lat2)
    {
        $earthRadius = 6367000; //approximate radius of earth in meters
    
        /*
         Convert these degrees to radians
         to work with the formula
         */
    
        $lat1 = ($lat1 * pi() ) / 180;
        $lng1 = ($lng1 * pi() ) / 180;
    
        $lat2 = ($lat2 * pi() ) / 180;
        $lng2 = ($lng2 * pi() ) / 180;
    
        /*
         Using the
         Haversine formula
    
         http://en.wikipedia.org/wiki/Haversine_formula
    
         calculate the distance
         */
    
        $calcLongitude = $lng2 - $lng1;
        $calcLatitude = $lat2 - $lat1;
        $stepOne = pow(sin($calcLatitude / 2), 2) + cos($lat1) * cos($lat2) * pow(sin($calcLongitude / 2), 2);
        $stepTwo = 2 * asin(min(1, sqrt($stepOne)));
        $calculatedDistance = $earthRadius * $stepTwo;
    
        return round($calculatedDistance);
    }
    
    public function authorityservice_infoOp(){
        $id = intval($_GET['id']);
        if ($id <= 0) {
            output_error('参数错误');
        }
        $model_authority_service = Model('authority_service');
        $authority_service_info = $model_authority_service -> getAuthorityServiceInfo(array('point_id' => $id));

        $area_info = Model('area')->getAreaInfo(array('area_id'=>$authority_service_info['area_id3']),'area_name');
        $authority_service_info['area_id3_name'] = $area_info['area_name'];
        $time = explode(',', $authority_service_info['working_hours']);
        $authority_service_info['opentime'] = sprintf("%02d",$time[0]).":".sprintf("%02d",$time[1])." - ".sprintf("%02d",$time[2]).":".sprintf("%02d",$time[3]);
        $servicetype = json_decode($authority_service_info['service_type']);
        $a = 0;
        for ($i=0; $i < count($servicetype); $i++) { 
            if ($servicetype[$i]->sel == 1) {
                if ($a == 0) {
                    $authority_service_info['service_type_string'] = $servicetype[$i]->val;
                    $a = 1;
                }else{
                    $authority_service_info['service_type_string'] .= ",".$servicetype[$i]->val;
                }
            }
        }

        output_data(array('authority_service_info' => $authority_service_info));
    }
}