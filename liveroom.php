<?php

header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE');
header('Access-Control-Allow-Credentials: true'); 
header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin');

$params = [
	"room_id" => $_POST["room_id"],
	"no_playurl" => 0,
	"mask" => 0,
	"qn" => 0,
	"platform" => "web",
	"protocol" => "0,1",
	"format" => "0,2",
	"codec" => "0,1",
];

$res = file_get_contents('https://api.live.bilibili.com/xlive/web-room/v2/index/getRoomPlayInfo?' . http_build_query($params));

echo $res;
exit;
