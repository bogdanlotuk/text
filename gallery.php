<?php
include 'init.php';
$active_menu = 4;
//$result = 0;
//$html = '';
//if (isset($_POST['modal'],$_POST['dataArray']) && $_POST['modal'] == 'modal_gallery' && !empty($_POST['dataArray']) && $_POST['dataArray']['galleryId'] > 0 && $_POST['dataArray']['galleryIdItem'] > 0) {
//    $images = $db->Array_where('gallery_images','WHERE id_gallery = '.$_POST['dataArray']['galleryId'].'
//        ORDER BY CASE id
//            WHEN '.$_POST['dataArray']['galleryIdItem'].' THEN 1
//            ELSE 2
//        END, position');
//    ob_start();
//        include('templates/blocks/modal_gallery.php');
//        $html = ob_get_clean();
//        $result = 'ok';
//    die(json_encode(['result' => $result, 'html' => $html]));
//}
//$active_menu =  4;
//$page = $db->Row_by_id('sections', 3);
//$title = $page['title'];
//$keywords = $page['keywords'];
//$description = $page['description'];
//$galleries = $db->Array_clean('SELECT id, name FROM galleries ORDER BY position');
//$images = $db->Array_where('gallery_images','ORDER BY id_gallery, position');
//$page_title = '<h1>Our Portfolio</h1>';
//$banner_img = '/img/inner_banner.jpg';
header('Content-type: text/html; charset=utf-8');
include_once('templates/gallery.php');

?>