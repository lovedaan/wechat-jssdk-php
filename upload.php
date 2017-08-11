<?php
/**
 * @Author: Marte
 * @Date:   2017-08-11 11:02:54
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-08-11 11:10:44
 */
$media_id = $_GET['id'];
$access_token = 'e0ba3a493f1380e3d6f78ed4d6123b5f';
$url = "http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=".$access_token."&media_id=".$media_id;

 if(!file_exists("./Uploads/")) {
        mkdir("./Uploads/", 0777, true);
}

$targetName = './Uploads/'.date('YmdHis').rand(1000,9999).'.jpg';
$ch = curl_init($url); // 初始化
$fp = fopen($targetName, 'wb'); // 打开写入
curl_setopt($ch, CURLOPT_FILE, $fp); // 设置输出文件的位置，值是一个资源类型
curl_setopt($ch, CURLOPT_HEADER, 0);
$obj = array();
$obj['errmsg'] = '上传成功';
echo json_encode($obj);
curl_exec($ch);
curl_close($ch);
fclose($fp);



