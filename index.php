<?php
include('init.php');
$active_menu =  1;

// $page = $db->Row_by_id('sections',1);
// $title = $page['title'];
// $keywords = $page['keywords'];
// $description = $page['description'];
// $value = $page['value'];

// $slider = $db->Array_where('slider_1', 'ORDER BY position LIMIT 10');
// $testimonials = $db->Array_clean('SELECT name, value, field_1 FROM testimonials ORDER BY position LIMIT 10');
header('Content-type: text/html; charset=utf-8');
include('templates/index.php');
