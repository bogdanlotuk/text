<header class="header" data-id="<?= $_SESSION['finalCaptchaNumber']?>">

    <div class="wrapper">
        <div class="header_row">
            <div class="header_col_1">
                <a href="/" class="header_logo">
                    <img src="/img/logo.png" alt="">
                </a>
            </div>
            <div class="header_col_2">
	            <div class="phones">
	                <a class="phone" href="tel:<?= $CPhone?>">
	                    <span>Call Us Today</span>
	                    <?= $CPhone?>
	                </a>
	            </div>
	            
                <nav class="navigation">
                    <ul class="header_nav">
                        <li data-id="active_menu_1">
                            <a href="/">Home</a>
                        </li>
                        <li data-id="active_menu_2">
                            <a href="/about">About</a>
                        </li>
                        <li data-id="active_menu_3" class="drDown"><a href="/products">OUR PRODUCTS</a>
                            <ul class="subMenu">
                                <li><a href="#">Landscapers</a></li>
                                <li><a href="#">Commercial Developers</a></li>
                                <li><a href="#">Retail</a></li>
                                <li><a href="#">Residential Development</a></li>
                                <li><a href="#">Contractors</a></li>
                            </ul>
                        </li>
                        <li data-id="active_menu_4"><a href="/gallery">Gallery</a></li>
                        <li data-id="active_menu_5"><a href="/blog">BLOG</a></li>
                        <li data-id="active_menu_6"><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="navigation_btn hamburger_squeeze">
	                <div class="hamburger_box">
		                <div class="hamburger_inner"></div>
	                </div>
                    <p>MENU</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="dark_overlay"></div>
</header>
<a class="mobile_phone" href="tel:<?= $CPhone?>"><?= svg('icon_tel', 'scale') ?>
    <?= $CPhone?></a>
