<!doctype html>
<html lang="en">
<head>
    <?php include('blocks/head_tags.php'); ?>
</head>
<body class="second">
    <?php include('blocks/header.php'); ?>
    
    <section class="gallery">
        <div class="wrapper">
	        <div class="tc">
		        <h1>OUR GALLERY</h1>
	        </div>
	
	        <div class="gallery_slider hidden_slider" data-slider="gallery_slider">
		        <?php for ($i = 1; $i < 10; $i++):?>
		        <div>
			        <a data-fancybox="gallery" data-width="2000" href="/img/gallery_img_<?= $i?>.jpg" class="img_wrap">
			            <img src="/img/gallery_img_<?= $i?>.jpg" alt="">
		            </a>
		        </div>
		        <?php endfor;?>
	        </div>
	        <div class="gallery_slider_nav hidden_slider" data-slider="gallery_slider_nav">
		        <?php for ($i = 1; $i < 10; $i++ ) :?>
			        <div>
				        <div class="slider_item">
					        <img src="/img/gallery_img_<?= $i ?>.jpg" alt="">
				        </div>
			        </div>
		        <?php endfor; ?>
	        </div>
	        
        </div>
    </section>

    

    <?php include('blocks/logos.php'); ?>
    
    <?php include('blocks/grass_block.php'); ?>
    
    <?php include('blocks/instagram_block.php'); ?>

    <?php include('blocks/call_to.php'); ?>
    
    <?php include('blocks/footer.php'); ?>

</body>
</html>