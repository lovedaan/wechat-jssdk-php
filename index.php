<?php
require_once "./php/jssdk.php";
$url = urldecode($_POST['url']);  //获取前端传过来的地址
$jssdk = new JSSDK("wx388260d8a13a0e28", "e0ba3a493f1380e3d6f78ed4d6123b5f",$url);  //增加一个参数
$signPackage = $jssdk->GetSignPackage();
$result = array();

$result["appId"] = $signPackage["appId"];
$result["timestamp"] = $signPackage["timestamp"];
$result["nonceStr"] = $signPackage["nonceStr"];
$result["signature"] = $signPackage["signature"];

echo json_encode($result);


