<?php
include 'init.php';
$active_menu = 3;

//if (isset($_GET['url']) && $_GET['url'] != ''){
//	include 'init.php';
//	$url = sprintf($_GET['url']);
//	$page = $db->Row_where('products', 'WHERE url = "'.$url.'"');
//}
//if (!$page) {
//	header('Location: /');
//	die();
//}
//$title = $page['title'];
//$keywords = $page['keywords'];
//$description = $page['description'];
//$value = $page['value1'];
//$page_title = '<p>PRODUCTS</p>';
//$banner_img = '/img/inner_banner.jpg';
//if ($page['background'] != '') $banner_img = '/pictures/products/'.$page['background'];
header('Content-type: text/html; charset=utf-8');
include_once('templates/product.php');

?>