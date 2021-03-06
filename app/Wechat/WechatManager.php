<?php
namespace App\Wechat;
use Illuminate\Support\Facades\Log;

class WechatManager {

    public function __construct() {
    }

//    public function getSignPackage() {
//        return $signPackage;
//    }
    public function getJson($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        log::info("getjson output".$output);
        curl_close($ch);
        return json_decode($output, true);
    }
}