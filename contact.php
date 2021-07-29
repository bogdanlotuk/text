<?php

include 'init.php';
$active_menu = 6;
// $page = $contactPage;
// $title = $page['title'];
// $keywords = $page['keywords'];
// $description = $page['description'];
// $value = $page['value_3'];

// $page_title = '<h1>CONTACT US</h1>';
// $banner_img = '/img/inner_banner.jpg';
// if ($page['background'] != '') $banner_img = '/pictures/sections/'.$page['background'];
 header('Content-type: text/html; charset=utf-8');
include_once('templates/contact.php');

?>