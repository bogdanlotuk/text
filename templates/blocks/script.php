<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
    window.jQuery || document.write('<script src="/js/jquery-3.3.1.min.js"><\/script>');
</script>

<script src="/js/libs.js"></script>
<script src="/js/main.js?v<?=filemtime($_SERVER['DOCUMENT_ROOT'].'/js/main.js')?>"></script>

<!--[if IE]>
    <script>$(document).ready(function(){$('input, textarea').placeholder()})</script>
<![endif]-->

<?php if(isset($active_menu)):?>
<script>
    $(document).ready(function () {
        $('[data-id="active_menu_<?=$active_menu?>"]').addClass('active');
    });
</script>
<?php endif;?>


<?php if(!empty($_SESSION['modal_success'])):?>
<script>
    $(document).ready(function () {
     $('.modal_success').dialog();
    });
</script>
<?php unset($_SESSION['modal_success']); endif;?>

<!-- Схема-->
<script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "LocalBusiness",
        "address": [
            {
                "@type": "PostalAddress",
                "addressLocality": "Ariss",
                "addressRegion": "ON",
                "postalCode": "N0B 1B0",
                "streetAddress": "5794 Wellington County Rd 86"
            }
        ],
        "description": "AM Window & Door Solutions is a windows & door systems suppliers and installation company serving Southwestern Ontario, Contact us today and get the best offer you can find!",
        "name": "AM Window & Door Solutions",
        "telephone": "877-281-6900",
        "openingHours": "Mo,Tu,We,Th,Fr 08:00-17:00",
        "url": "https://www.amwd.ca/",
        "logo": "https://www.amwd.ca/img/logo_og.png",
        "email": "info@amwd.ca",
        "sameAs": [
            "https://www.youtube.com/channel/UCBYALLDj8_dy6fgtaUKeCUQ",
            "https://www.facebook.com/amwindowanddoor/"
        ],
        "image": "https://www.amwd.ca/img/logo_og.png"
    }</script>

<!-- Схема поиск-->
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "url": "http://am.xidigital.pp.ua/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "http://am.xidigital.pp.ua//search?search_product={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }


</script>
