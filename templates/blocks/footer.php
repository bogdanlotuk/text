<footer>
    <div class="wrapper">
        <div class="row_f">
            <div class="col_3 || col_md_6 || col_mobile">
                <p class="footer_title">Contact & Info</p>
                <address>
                    <a href="https://goo.gl/maps/zgMiAeyieLxWPFpB7" target="_blank" class="location_link">
	                    <?= svg('icon_location', '') ?>
	                    <?= $CAddress ?>
                    </a>
	                <a href="tel:<?= $CPhone ?>">
                        <?= svg('icon_tel', '') ?>
                        <?= $CPhone ?>
                    </a>
                    <a href="mailto:<?= $CEmail ?>">
                        <?= svg('icon-mail', 'mail') ?>
                        <?= $CEmail ?>
                    </a>
                </address>
	
	            <div class="social">
		            <a href="/" target="_blank" class="social_block">
			            <?= svg('iconFacebookC2','')?>
		            </a>
		
		            <a href="/" target="_blank" class="social_block">
			            <?= svg('iconGoogleC','')?>
		            </a>
		
		            <a href="/" target="_blank" class="social_block">
			            <?= svg('iconYtPlC','')?>
		            </a>
		
		            <a href="/" target="_blank" class="social_block">
			            <img src="/img/instagram-c.svg" alt="instagram logo">
		            </a>
	            </div>


            </div>
            <div class="col_3 || col_md_6 || col_mobile">
                <p class="footer_title">Industries Served</p>
                <ul>
                    <li><a href="#">Landscapers</a></li>
                    <li><a href="#">Contractors</a></li>
                    <li><a href="#">Commercial Developers</a></li>
                    <li><a href="#">Residential Development</a></li>
                    <li><a href="#">Retail</a></li>
                </ul>
	
	            <div class="footer_logo">
		            <img src="/img/waranty.png" alt="10 Year Warranty">
		            <p>10 Year Warranty</p>
	            </div>
            </div>
            <div class="col_3 || col_md_6 || col_mobile">
                <p class="footer_title">Recent Post</p>
                <div class="footer_blog">
                    <a href="#" class="name">Everything You Need to Know About BUYING TURF WHOLESALE</a>
	                <div class="desc">
                        <p>No more hassle, commercial lawn maintenance, or heavy costs with Turf Inc. Read on for everything you need to know about commercial artificial turf.</p>
                    </div>
                    <a href="#" class="button || small">read more</a>
                </div>
            </div>
            <div class="col_3 || col_md_6 || col_mobile">
                <p class="footer_title">Join Our Mailing List</p>
                <p class="mailing_heading">Enter your email to sign up</p>
                <form action="/mailer.php" method="POST" autocomplete="off" class="subscribe_form || validate_form">
	                <label>
		                <input type="email" class="input || validate_email" placeholder="Email Address">
	                </label>
	                <label>
		                <input name="a" type="text" placeholder="Answer: <?= $firstCaptchaNumber ?>+<?= $secondCaptchaNumber ?> = ?" class="input || validate_cap" autocomplete="off">
	                </label>
                    <button class="button || small">SUBMIT</button>
                </form>
            </div>
        </div>
	    <div class="footer_bottom">
            <div class="row">
                <div class="col_8 || tl || mobile_p">
                    <p><?= date('Y') ?> All Rights Reserved. Turf Inc. ©</p>
                </div>
	            
                <div class="col_4 || tr">
                    <p>Web Development by <a href="http://www.xi-digital.com/" target="_blank">Xi Digital</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php include('dialog.php'); ?>
<?php include('script.php'); ?>


