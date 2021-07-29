<!doctype html>
<html lang="en">
<head>
    <?php include('blocks/head_tags.php'); ?>
</head>
<body class="home_page">

    <?php include('blocks/header.php'); ?>

    <section class="main_top">
        <div class="top_slider hidden_slider" data-slider="top_slider">
            <?php for ($j = 1; $j < 5; $j++): ?>
                <div>
                    <div class="banner" style="background-image: url('/img/banner<?= $j?>.jpg')"></div>
                    <div class="main_content">
                        <div class="wrapper">
                            <div class="text">
	                            <p>Canada’s leading turf wholesaler</p>
	                            <a href="#" data-modals="modal_contact" class="button || large || light">get a quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </section>
    
    <section class="industries">
	    <div class="wrapper">
		    <h2>INDUSTRIES SERVED</h2>
		    
		    <div class="industries_wrap">
			    <a href="#!" class="industry_item">
				    <div class="img_wrap">
					    <img src="/img/product_cat_icon_1.png" alt="">
				    </div>
				    <h3>Landscapers</h3>
				    <div class="button">LEARN MORE</div>
			    </a>
			    <a href="#!" class="industry_item">
				    <div class="img_wrap">
					    <img src="/img/product_cat_icon_2.png" alt="">
				    </div>
				    <h3>Commercial Developers</h3>
				    <div class="button">LEARN MORE</div>
			    </a>
			    <a href="#" class="industry_item">
				    <div class="img_wrap">
					    <img src="/img/product_cat_icon_3.png" alt="">
				    </div>
				    <h3>Retail</h3>
				    <div class="button">LEARN MORE</div>
			    </a>
			    <a href="#" class="industry_item">
				    <div class="img_wrap">
					    <img src="/img/product_cat_icon_4.png" alt="">
				    </div>
				    <h3>Residential Development</h3>
				    <div class="button">LEARN MORE</div>
			    </a>
			    <a href="#" class="industry_item">
				    <div class="img_wrap">
					    <img src="/img/product_cat_icon_5.png" alt="">
				    </div>
				    <h3>Contractors</h3>
				    <div class="button">LEARN MORE</div>
			    </a>
		    </div>
	    </div>
    </section>
    
    <div class="cta_large">
	    <div class="wrapper">
		    <div class="cta_large_wrap">
			    <div class="cta_large_item">
				    <h3>Interested in installation services?</h3>
				    <a href="#!" class="button || light">CLICK HERE</a>
			    </div>
			    <div class="cta_large_item">
				    <h3>No time to pick up? Delivery Services are Available. </h3>
				    <a href="#!" class="button">LEARN MORE</a>
			    </div>
		    </div>
	    </div>
    </div>
    
    <section class="about">
	    <div class="wrapper" style="background-image:linear-gradient(#000000, #000000), url('/img/about_bg.jpg')">
		    <div class="about_block || content">
			    <h2>ABOUT TURF INC.</h2>
				<p>Turf Inc. Synthetic Grass is second to none in the synthetic turf industry. Since 1991 we have been providing the Canadian market with high-quality artificial turf products that are ideal for putting or golf greens, playgrounds, landscaping and more. Due to increasing water shortages and environmental concerns regarding chemicals and lawn fertilizers, more homeowners, business owners and city governments are opting to install our products. Our synthetic grass eliminates the need for constant maintenance such as irrigation, mowing, fertilizing, aerating and more.</p>
			    <a href="/about" class="button || black_2">Learn more</a>
		    </div>
	    </div>
    </section>

    <?php include('blocks/counters.php'); ?>
    
    <?php include('blocks/logos.php'); ?>

    <?php include('blocks/grass_block.php'); ?>
    
    <section class="reviews" style="background-image: url('/img/reviews_bg.jpg')">
        <div class="wrapper">
            <div class="tc">
                <h2>WHAT PEOPLE ARE SAYING</h2>
            </div>
            <div class="reviews_slider hidden_slider" data-slider="reviews_slider">
                <?php for ($i = 0; $i < 2; $i++): ?>
                    <div>
	                    <div class="reviews_item">
		                    <div class="desc">
			                    <p>“Superb! Professional! Reliable! I shopped around before choosing an installer and did not choose the cheapest quote. The Lieff brothers and their entire team of installers were professional, courteous and eager to answer any questions we had. We are thrilled with the result and would highly recommend them to anyone without any hesitation at all.”</p>
		                    </div>
		                    <p class="name">Michael</p>
	                    </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <?php include('blocks/instagram_block.php'); ?>

    <div class="contact_form_block">
	    <div class="wrapper">
		    <h2>INTERESTED IN OUR PRODUCTS? LET’s CONNECT</h2>
		    <?php include('blocks/modals/modal_contact.php');?>
		    <a href="#" data-modals="modal_contact" class="button || button_cta_mobile">CONTACT US</a>
	    </div>
    </div>
    
    <?php include('blocks/footer.php'); ?>
</body>
</html>