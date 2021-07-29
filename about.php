<?php
include 'init.php';
$active_menu = 2;
//$page = $db->Row_by_id('sections', 2);
//$title = $page['title'];
//$keywords = $page['keywords'];
//$description = $page['description'];
//$value = $page['value'];
//$page_title = '<h1>OUR COMPANY</h1>';
//$banner_img = '/img/inner_banner.jpg';
//if ($page['background'] != '') $banner_img = '/pictures/sections/'.$page['background'];
header('Content-type: text/html; charset=utf-8');
include_once('templates/about.php');

?>