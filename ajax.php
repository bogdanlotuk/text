<?php
include 'init.php';
$result = 0;
$html = '';

if (isset($_POST['modal']) && $_POST['modal'] != '') {
    if (isset($_POST['dataArray'])){
        $data = $_POST['dataArray'];
    }

    $modal_name = $_POST['modal'];
    if(!isset($modal_name) || empty($modal_name)){
        die(json_encode(['result' => 'error2']));
    }
    if(!in_array($modal_name, $accepted_modal)){
        die(json_encode(['result' => 'error3']));
    }

    ob_start();
    $tmp = 'templates/blocks/modals/'.$modal_name.'.php';
    if(file_exists($tmp)){
        include($tmp);
        $html = ob_get_clean();
        $result = 'ok';
    }else{
        $result = 'error4';
    }
}
die(json_encode(['result' => $result, 'html' => $html]));