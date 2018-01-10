<?php
/**
 * Created by PhpStorm.
 * User: songh
 * Date: 2017-12-20
 * Time: 3:59 PM
 */
$secret_id = "AKIDOhx42CV4PbkqpeApCUQHzYxIVaCIPE5o";
$secret_key = "iHhyBIj0CKMG0hOSVQDwa6T7d0DtU0Oe";

// 确定签名的当前时间和失效时间
$current = time();
$expired = $current + 86400;  // 签名有效期：1天

// 向参数列表填入参数
$arg_list = array(
    "secretId" => $secret_id,
    "currentTimeStamp" => $current,
    "expireTime" => $expired,
    "random" => rand());

// 计算签名
$orignal = http_build_query($arg_list);
$signature = base64_encode(hash_hmac('SHA1', $orignal, $secret_key, true).$orignal);
header("Content-Type: application/json; charset=UTF-8");
$obj = new stdClass();

$obj->returnValue = 0;
$obj->returnMsg = "return successfully!";
$obj->returnData = new stdClass();
$obj->returnData->signature = $signature;
echo json_encode($obj);
