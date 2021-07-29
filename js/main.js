$(document).ready(function () {
    init();

});


function init() {

    var
        /* tm = TweenMax,*/
        $body = $('body'),
        $window = $(window),
        $footer = $('footer'),
        $header = $('header'),
        $heightHeader = $('header').outerHeight();


    function log($log) {
        console.log($log);
    }

    var $slidersArray = [];
    function findSliders() {
        $body.find('.hidden_slider').each(function () {
            var slider_Item = $(this).data('slider');
            $slidersArray.push(slider_Item);
        });
        for (var itemS = 0; itemS < $slidersArray.length; itemS++){
            var $sliderTimer = 'sliderTimer_'+itemS,
                $slides = $slidersArray[itemS];
            fixSlider($slides, $sliderTimer)
        }
    }
    findSliders();

    function fixSlider($sliderSlick, $Timer) {
        var slider = $('.'+$sliderSlick);
        $Timer = setInterval(function () {
            var $sliderSlick =  $body.find(slider);
            if ($sliderSlick.hasClass('slick-initialized')) {
                    $sliderSlick.removeClass('hidden_slider');
                clearInterval($Timer);
            }
        }, 10);
    }


    $('.top_slider').slick({
        infinite: true,
        autoplay: true,
        dots: true,
        arrows: false,
        autoplaySpeed: 5000,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
	
	$('.reviews_slider').slick({
		infinite: true,
		autoplay: false,
		dots: true,
		arrows: false,
		slidesToShow: 1,
		slidesToScroll: 1
	});
	
	$('.gallery_slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		draggable: false,
		asNavFor: '.gallery_slider_nav',
		responsive: [
			{
				breakpoint: 1330,
				settings: {
					arrows: false
				}
			}
		]
	});
	$('.gallery_slider_nav').slick({
		slidesToShow: 8,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		draggable: false,
		focusOnSelect: true,
		centerMode: false,
		asNavFor: '.gallery_slider',
		responsive: [
			{
				breakpoint: 993,
				settings: {
					slidesToShow: 6,
					slidesToScroll: 1,
					arrows: false
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					arrows: false
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 1,
					arrows: false
				}
			}
		]
	});
	
	$(".nextSlide").click(function() {
		$('.gallery_slider').slick("slickNext")
	})
	
	
	var wrapWidth = $body.width(),
        coutSlids = 6;

    if ($(window).width() < 768 ){
        coutSlids = 4;
    }else if ($(window).width() < 450 ) {
        coutSlids = 3;
    }else  {
        coutSlids = 6;
    }
    var slideWidth = wrapWidth / coutSlids;
    $('.logos_slider').bxSlider({
        minSlides: 1,
        maxSlides: coutSlids,
        slideWidth: slideWidth,
        slideMargin: 0,
        ticker: true,
        speed: 60000
    });
    
    $('.phone_us').mask('000.000.0000');
	
	$('.counter').countUp({
		delay: 10,
		time: 1000
	});


    $('.play, .overlay').click(function () {
        var parent = $(this).closest('.video_block'),
            src = parent.data('src'),
            html = '<iframe class="video_iframe" src="' + src + '?autoplay=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>';
        parent.addClass('video_play');
        parent.append(html);
    });


    function setHeight() {
        var target = $('body').find('iframe.video_frame');
        target.each(function () {
            var w = $(this).width(),
                h = w / 1.7;
            $(this).height(h);
        })
    }
    setHeight();


    $(window).on('scroll load resize', function () {

        var curPos = $(document).scrollTop(),
            fixPos = 400;
        if ($window.width() <= 992) fixPos = 100;

        if (curPos >= fixPos) {
            $('.header').addClass('fixed');
        } else {
            $('.header').removeClass('fixed');
        }

    });


    $window.on('resize', function () {
        footerPos();
    });

    function footerPos() {
        if ($window.outerHeight() > $body.outerHeight()) {
            $footer.addClass('fixed_footer');
        }
        else {
            $footer.removeClass('fixed_footer');
        }
    }

    if ($window.width() >= 992){
        footerPos();
    }

    $.fn.dialog = function () {
        var $this = $(this),
            $dialogWrapper = $('.dialog_wrapper'),
            $dialog = $('.dialog'),
            $dialogBg = $('.dialog_bg'),
            $dialogClose = $('body').find('.dialog_close'),
            wPosSet = $window.scrollTop(),
            wPosGet = $body.attr('data-scroll');
        $dialogWrapper.addClass('visible');
        $dialogBg.addClass('visible');
        $this.addClass('visible');
        $body.addClass('dialog_opened');
        $body.css('top', -wPosSet + 'px');
        $body.attr('data-scroll', wPosSet);
        if ($this.height() > $dialogWrapper.height()) {
            $body.addClass('dialog_scrollable');
        } else {
            $body.addClass('dialog_scrollable');
        }
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            $body.addClass('dialog_scrollable_mobile');
        }
        $body.on('click', '.dialog_close', function () {
            $dialog.removeClass('visible');
            $dialogBg.removeClass('visible');
            $dialogWrapper.removeClass('visible');
            $body.removeClass('dialog_opened', 'dialog_scrollable_mobile');

            $('.modal_ajax .modal_content').html('');
            $('.modal_ajax').removeClass('modal_video');
            $('.dialog')
                .removeClass('large')
                .removeClass('Xlarge')
                .removeClass('small')
                .removeClass('Xsmall')
                .removeClass('gallery_modal');


            setTimeout(function () {
                $window.scrollTop(wPosSet);
            }, 400);

            $window.scrollTop(wPosSet);
        });
    };

    $(document).keydown(function (e) {
        if (e.keyCode == 27) {
            $('.dialog_close').trigger('click');
        }
    });

    function validate_form(){
        var validate_form = $('body').find('.validate_form');
        validate_form.each(function () {
            var $this = $(this),
                $validate = $this.find('.validate'),
                $validateEmail = $this.find('.validate_email'),
                $validateTel = $this.find('.validate_tel'),
                $validatePass = $this.find('.validate_pass'),
                $validatePassConfirm = $this.find('.validate_pass_confirm'),
                $validateCaptcha = $this.find('.validate_captcha'),
                $validateCap = $this.find('.validate_cap'),
                $validateSelect = $this.find('.validate_select'),
                $validateCaptchaImg = $this.find('.validate_captcha_img'),
                checkEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/,
                checkTel = /[0-9 -()+]+$/,
                randCaptcha = Math.floor(Math.random() * 9),
                arrayCaptcha = [08532, 20864, 38204, 42032, 49146, 59749, 60880, 67185, 68880];

            $validateCaptchaImg.attr('src', '../img/captcha/captcha_' + randCaptcha + '.png');

            $this.on('submit', function () {

                $this.find('button').attr('disabled',true);
                setTimeout(function(){
                    $this.find('button').attr('disabled',false);
                },1000);

                var error = '',
                    passValue = $validatePass.val(),
                    passConfirmValue = $validatePassConfirm.val();
                $validate.each(function () {
                    var value = $(this).val();
                    checking(value.length === 0, $(this));
                });
                $validateEmail.each(function () {
                    var value = $(this).val();
                    checking(checkEmail.test(value) === false, $(this));
                });
                $validateTel.each(function () {
                    var value = $(this).val();
                    checking(value.length < 7 || (!checkTel.test(value)), $(this));
                });
                $validatePass.each(function () {
                    checking(passValue === '' || passValue.length <= 6, $(this));
                });
                $validatePassConfirm.each(function () {
                    checking(passValue != passConfirmValue || passValue === '', $(this));
                });
                $validateCaptcha.each(function () {
                    var value = $(this).val();
                    checking(value != arrayCaptcha[randCaptcha], $(this));
                });
                var $FCN = $('header').data('id');
                $validateCap.each(function () {
                    var value = $(this).val();
                    checking(value != $FCN, $(this));
                });
                $validateSelect.each(function () {
                    var value = $(this).find('option:selected').val();
                    checking(value == '', $(this));
                });

                function checking(check, $this) {

                    if (check) {
                        error++;
                        $this.addClass('validate_error');
                    } else {
                        $this.removeClass('validate_error');
                    }
                }
                if (error) {
                    toast('error', 'Incorrect values');
                    return false;
                }
            });
        });
    }
    validate_form();

    $('.navigation_btn').on('click', function () {
        $(this).toggleClass('isOpen');
        if ($(this).hasClass('isOpen')) {
            $(this).find('p').html('CLOSE')
        } else {
            $(this).find('p').html('MENU');
            $('.navigation').removeClass('show_sub');
            $('body').removeClass('no-scroll');
        }
        $('.dark_overlay').toggleClass('nav-opened');
        $('.navigation').toggleClass('nav-opened');
        
        if ($(this).hasClass('isOpen')) {
            $('body').addClass('no-scroll');
        } else {
            $('body').removeClass('no-scroll');
        }
    });
    
    $('.dark_overlay').click(function () {
        $(this).removeClass('nav-opened');
        $('.navigation').removeClass('nav-opened show_sub');
        $('.navigation_btn').removeClass('isOpen');
        $('body').removeClass('no-scroll');
        $('.navigation_btn').find('p').html('MENU');
    });

    // Drop Menu
    $('.dropDown > a').on('click', function (e) {
        if ($window.width() <= 992) {
            e.preventDefault();
            var parent = $(this).parent();
            $('.navigation').addClass('show_sub');
            $('.dropDown').not(parent).removeClass('visible')
            parent.addClass('visible');
        }
    });

    // click on sub menu
    $('.navigation_dropBtn a').on('click', function (e) {
        e.preventDefault();
        $('.navigation').removeClass('show_sub');
        $('.dropDown').removeClass('visible')
    });
    $('.drDown > a').on('click', function (e) {
        var parent = $(this).closest('li');
        if ($(window).width() < 992) {
            e.preventDefault();
            if (parent.hasClass('visibleSub')) {
                $('.drDown').removeClass('visibleSub');
            } else {
                $('.drDown').removeClass('visibleSub');
                parent.addClass('visibleSub');
            }
        }
    });

    $('.faqs_question').on('click', function () {
        var parent = $(this).closest('.faqs_item');
            if ($(window).height() <= 640) {
                setTimeout(function () {
                    $('html, body').animate({scrollTop: parent.offset().top - 58}, 400);
                }, 400);
            }
        $('.faqs_item').removeClass('active');
        parent.addClass('active');

    });

    /**Open Modal function*/

    var modalArray = {},
        $modalError = 0;
    $('body').on('click', '[data-modals]', function (e) {
        e.preventDefault();

        var type = $(this).data('modals');

        if(typeof type == "undefined"){
            log("undefined type");
             $modalError++;
        }else {
            $modalError = 0
          switch(type) {
            case 'modal_video':
                var src = $(this).data('src');
                if(src != ''){
                    modalArray.src = src;
                    $modalError = 0
                }else{
                    $modalError++;
                }
                break;
            case 'modal_search':
                break;
            case 'modal_estimate':
                var title = $(this).data('title');
                if(typeof title == "undefined" && title != ""){
                    log("no title");
                }else {
                    modalArray.title = title;
                }
                break;
              case 'modal_contact':
                  var title = $(this).data('title');
                  var ref = $(this).data('location-input');
                  if(typeof title == "undefined" && title != ""){
                      log("no title");
                  }else {
                      modalArray.modal_title = title;
                  }
                  
                  if(typeof ref == "undefined" && ref != ""){
            
                  }else {
                      modalArray.locationInput = ref;
                  }
                  break;
            }
        }
        log($modalError+'error');

        if($modalError == 0){
            $.ajax({
                type: 'POST',
                url: '/ajax.php',
                dataType: 'json',
                data: {
                    modal: type,
                    dataArray: modalArray
                },
                beforeSend: function () {
                },
                success: function (data) {

                    if (data.result == 'ok') {
                        $('.modal_ajax .modal_content').html(data.html);
                        $('.modal_ajax').dialog();
                        validate_form();

                        if(type == 'modal_video'){
                            setHeight();
                            $('.modal_ajax').addClass('modal_video');
                        }

                        if(type == 'modal_estimate'){
                            $('.modal_ajax').addClass('large');
                        }
                    }

                    $('.phone_us').mask('000.000.0000');
                },

                error:
                function () {
                    toast('error', "Error!");
                }
            });
        }else{
           toast('error', "Error!");
       }
        

    });
    $('body').on('click', '[data-modal]', function (e) {
        e.preventDefault();
        var data = $(this).data('modal');
        var modal = $('.' + data);

        modal.dialog();
    });



}

/**end init**/
function toast(cssClass, toastText) {
    var $this = $('#toast'),
        tl = new TimelineMax();
    $this.attr('class', false);
    $this.addClass(cssClass);
    $this.find('#toast_text').html(toastText);
    if (!$this.hasClass('active')) {
        tl.fromTo($this, 0.3, {display: 'none', y: '100%', autoAlpha: 0}, {
            display: 'block',
            y: '0%',
            autoAlpha: 1,
            ease: Back.easeOut
        }).to($this, 0.3, {
            display: 'none',
            y: '100%',
            autoAlpha: 0,
            ease: Back.easeIn,
            delay: 3,
            onComplete: function () {
                $this.removeClass('active');
            }
        });
    }
    $this.addClass('active');

}

function genRandStr(length) {
    length = length || 9;
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

    for (var i = 0; i < length; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}
