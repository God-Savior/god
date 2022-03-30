<?php
header('Content-type: application/json; charset=utf-8');

$headers = get_headers(rawurldecode($_GET['url']), TRUE);
$json_data = json_encode(array('realurl'=>$headers[Location],));
$result = $_GET['callback'] . "(" . $json_data . ")";
echo($result);

//$url = 'http://t.cn/Rp7YRQG';
//echo("<script>console.log(".$result.");</script>"); 
//print_r(get_headers($url));
//print_r(get_headers($url, 1));
?>