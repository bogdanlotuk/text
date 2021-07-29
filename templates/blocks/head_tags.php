<title><?=$title?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex, nofollow">
<?php if(isset($noindex)){ ?>
    <meta name="robots" content="noindex, nofollow">
<?php } ?>
<?php if (isset($CANONICAL) && $CANONICAL != ''):?>
    <link rel="canonical" href="<?=SITE_URL?><?=$CANONICAL?>" />
<?php endif; ?>
<meta name="keywords" content="<?=$keywords?>"/>
<meta name="description" content="<?=$description?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<meta property="og:site_name" content="<?=SITE_NAME?>"/>
<meta property="og:title" content="<?=$title?>" />
<meta property="og:description" content="<?=$description?>" />
<meta property="og:image" content="/img/logo_og.jpg" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="600" />
<meta property="og:url" content="http://<?=$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" />
<meta property="og:type" content="website" />

<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<link rel="stylesheet" href="/css/libs.css">
<link rel="stylesheet" href="/css/main.css?v<?=filemtime($_SERVER['DOCUMENT_ROOT'].'/css/main.css')?>">