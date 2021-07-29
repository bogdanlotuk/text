<?php
// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);

//include_once('admin/config.php');
//include_once('admin/startup.php');
//include_once('admin/Model/Model.php');

//startup();
//$db = Model::Instance();
//$current_date = date('Y-m-d');

$accepted_modal = ['modal_contact'];

if (!isset($_SESSION['finalCaptchaNumber'])) $_SESSION['finalCaptchaNumber'] = rand(10,20);
$firstCaptchaNumber = rand(1,$_SESSION['finalCaptchaNumber']-1);
$secondCaptchaNumber = $_SESSION['finalCaptchaNumber'] - $firstCaptchaNumber;
//$services = $db->Array_clean('SELECT name, thumbnail, url FROM subsections WHERE id_sect = 3 ORDER BY position');
//$blog_last_posts = $db->Array_clean('SELECT name, url, `date`, value FROM articles WHERE checkbox = 1 AND date <= "'.$current_date.'" ORDER by date DESC LIMIT 5');
//$contactPage = $db->Row_by_id('sections',4);
//if  ($contactPage) {
//    $CPhone = $contactPage['field_1'];
$CPhone = '416.578.2692';
//    $CAddress = $contactPage['field_2'];
$CAddress = '116 Viceroy Rd. Unit 10, Building B Vaughan, ON L4K 2M4';
//    $CEmail = $contactPage['field_3'];
$CEmail = 'info@turfinc.ca';

//    $CSocial = $contactPage['value'];
//    $CMap = $contactPage['value_1'];
//    $CALL_TO_ACTION = $contactPage['value_2'];
//    $temp = explode(PHP_EOL,$contactPage['value']);
//    foreach ($temp as $t){
//        if (strpos($t, 'facebook.com') == true) $Cfacebook = $t;
//        if (strpos($t, 'google.com') == true) $Cgoogle = $t;
//        if (strpos($t, 'instagram.com') == true) $Cinstagram = $t;
//        if (strpos($t, 'linkedin.com') == true) $Clinkedin = $t;
//    }
//}
//function cutting($text, $length) {
//    $text = strip_tags($text);
//    $length = abs((int)$length);
//    if(strlen($text) > $length) {
//        $text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
//    }
//    return($text);
//}



function svg($svgName, $svgClassName){
    return '<svg class="icon '.$svgClassName.'">
                <use xlink:href="/img/svgdefs.svg#'.$svgName.'" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
           </svg>';
}

function dump($i){
    echo '<pre>';
    print_r($i);
    echo '</pre>';
}

?>
