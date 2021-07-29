<!doctype html>
<html lang="en">
<head>
    <?php $map = true;
    include('blocks/head_tags.php'); ?>
</head>
<body class="second">

<?php include('blocks/header.php'); ?>

	<section class="page || inner_section || contact_page">
        <div class="wrapper">
	        <div class="tc">
		        <h1>CONTACT US</h1>
	        </div>
	
	        <address>
		        <a><?= svg('icon_location', '') ?> <?= $CAddress ?></a>
		        <a href="tel:<?= $CPhone ?>">
			        <?= svg('icon_tel', '') ?>
			        <?= $CPhone ?>
		        </a>
		        <a href="mailto:<?= $CEmail ?>">
			        <?= svg('icon-mail', 'mail') ?>
			        <?= $CEmail ?>
		        </a>
		        
	        </address>
	        
	        <?php include('blocks/modals/modal_contact.php');?>
        </div>
    </section>


    <?php include('blocks/map.php'); ?>

    <?php include('blocks/logos.php'); ?>

    <?php include('blocks/grass_block.php'); ?>

    <?php include('blocks/instagram_block.php'); ?>

    <?php include('blocks/call_to.php'); ?>

    <?php include('blocks/footer.php');?>
</body>
</html>