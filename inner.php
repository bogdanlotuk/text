<?php
include 'init.php';
$active_menu =  2;
// $page = $db->Row_by_id('sections', 1);
// $title = $page['title'];
// $keywords = $page['keywords'];
// $description = $page['description'];
// $value = $page['value'];
$page_title = '<h1>Our Privacy Policy</h1>';
$banner_img = '/img/inner_banner.jpg';
header('Content-type: text/html; charset=utf-8');
include_once('templates/inner.php');

?>