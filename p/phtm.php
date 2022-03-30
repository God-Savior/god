<?php
header('Content-type: application/json; charset=utf-8');

$data1 = file_get_contents(rawurldecode($_GET['url']));
$result = $_GET['callback'] . "({htm:'" . rawurlencode($data1) . "'})";
echo($result);

//http%3A%2F%2Fnews.baidu.com%2Fwidget%3Fid%3DLocalNews%26ajax%3Djson
?>