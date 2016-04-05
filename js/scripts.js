function GetXmlHttpObject() {
    var xmlHttp = null;

    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
        // Internet Explorer
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

/***************** Waypoints ******************/

$(document).ready(function () {

    $('.wp1').waypoint(function () {
        $('.wp1').addClass('animated fadeInLeft');
    }, {
        offset: '75%'
    });
    $('.wp2').waypoint(function () {
        $('.wp2').addClass('animated fadeInUp');
    }, {
        offset: '75%'
    });
    $('.wp3').waypoint(function () {
        $('.wp3').addClass('animated fadeInDown');
    }, {
        offset: '55%'
    });
    $('.wp4').waypoint(function () {
        $('.wp4').addClass('animated fadeInDown');
    }, {
        offset: '75%'
    });
    $('.wp5').waypoint(function () {
        $('.wp5').addClass('animated fadeInUp');
    }, {
        offset: '75%'
    });
    $('.wp6').waypoint(function () {
        $('.wp6').addClass('animated fadeInDown');
    }, {
        offset: '75%'
    });
    checkCookie('email');
    checkCookie('like');
    if (mobileDetect()) {
        $('video').remove();
    }
});

/***************** Slide-In Nav ******************/

$(window).load(function () {

    $('.nav_slide_button').click(function () {
        $('.pull').slideToggle();
    });

});

/***************** Smooth Scrolling ******************/

$(function () {
    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 2000);
                return false;
            }
        }
    });

});

/***************** Nav Transformicon ******************/

document.querySelector("#nav-toggle").addEventListener("click", function () {
    this.classList.toggle("active");
});

/***************** Overlays ******************/

$(document).ready(function () {
    if (Modernizr.touch) {
        // show the close overlay button
        $(".close-overlay").removeClass("hidden");
        // handle the adding of hover class when clicked
        $(".img").click(function (e) {
            if (!$(this).hasClass("hover")) {
                $(this).addClass("hover");
            }
        });
        // handle the closing of the overlay
        $(".close-overlay").click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            if ($(this).closest(".img").hasClass("hover")) {
                $(this).closest(".img").removeClass("hover");
            }
        });
    } else {
        // handle the mouseenter functionality
        $(".img").mouseenter(function () {
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function () {
                $(this).removeClass("hover");
            });
    }

});

/***************** Flexsliders ******************/

$(window).load(function () {

    $('#portfolioSlider').flexslider({
        animation: "slide",
        directionNav: false,
        controlNav: true,
        touch: false,
        pauseOnHover: true,
        start: function () {
            $.waypoints('refresh');
        }
    });

    $('#servicesSlider').flexslider({
        animation: "slide",
        directionNav: false,
        controlNav: true,
        touch: true,
        pauseOnHover: true,
        start: function () {
            $.waypoints('refresh');
        }
    });

    $('#friendSlider').flexslider({
        animation: "slide",
        directionNav: false,
        controlNav: true,
        touch: true,
        pauseOnHover: true,
        start: function () {
            $.waypoints('refresh');
        }
    });
});

/*** Hero Control ****/
jQuery(window).scroll(function () {
    var $top_limit = $('#home').offset().top;
    var $current_top = jQuery(this).scrollTop();
    var $bottom_limit = $('.wp2').height() + 300;
    var $pause_limit = $('.wp1').height();
    if ($current_top > $top_limit) {
        if ($current_top > $pause_limit) {
            $('video').trigger('pause');
        }
        if ($current_top >= $bottom_limit) {
            return;
        }
        $('video').trigger('play');
        $current_top -= $top_limit;
        $('#hero .section-background div').css({
            'filter': 'blur(' + parseFloat($current_top / 30) + 'px)',
            '-webkit-filter': 'blur(' + parseFloat($current_top / 30) + 'px)',
            '-moz-filter': 'blur(' + parseFloat($current_top / 30) + 'px)',
            'transform': 'scale3d(' + parseFloat(1 + $current_top / 2000) + ',' + parseFloat(1 + $current_top / 2000) + ',1)'
        });
    } else {
        $('#hero .section-background div').css({
            'filter': 'blur(0px)',
            '-moz-filter': 'blur(0px)',
            '-webkit-filter': 'blur(0px)',
            'transform': 'scale3d(1,1,1)'
        });
    }
});

jQuery(window).scroll(function () {
    if (mobileDetect()) {
        return;
    }
    var $current_top = jQuery(this).scrollTop();
    var $pos = $('#home').offset().top;
    var $bottom_limit = $('#intro').offset().top;
    if ($current_top >= $pos && $current_top < $bottom_limit) {
        $current_top -= $pos;
        $('#welcome').css({
            'transform': 'scale3d(' + parseFloat(1 - $current_top / 1500) + ',' + parseFloat(1 - $current_top / 1500) + ',1)',
            'opacity': parseFloat(1 - $current_top / 300)
        });
        $('#desc').css('opacity', parseFloat(1 - $current_top / 250));
    } else {
        $('#welcome').css({
            'transform': 'scale3d(1,1,1)',
            'opacity': '1'
        });
        $('#desc').css('opacity', '1');
    }
    var $pos1 = $('#experience').offset().top + $('#experience').height();
    var $bottom_limit1 = $('.ignite-cta').offset().top;

    if ($current_top >= $pos1 && $current_top < $bottom_limit1) {
        $current_top -= $pos1;
        $('#portfolioSlider').css('transform', 'translate3d(0,' + parseFloat($current_top / 13) + 'px,0)');
    } else {
        $('#portfolioSlider').css('transform', 'translate3d(0px,0px,0px)');
    }
    var $pos2 = $('#experience').offset().top;
    var $bottom_limit2 = $('#portfolio').offset().top;
    if ($current_top >= $pos2 && $current_top < $bottom_limit2) {
        $current_top -= $pos2;
        $('.swag .container .row .col-md-8 h1').css('transform', 'translate3d(0,' + parseFloat($current_top / 20) + 'px,0) scale3d(' + parseFloat(1 + $current_top / 5000) + ',' + parseFloat(1 + $current_top / 5000) + ',1)');
    } else {
        $('.swag .container .row .col-md-8 h1').css('transform', 'translate3d(0,0,0)');
    }
    var $pos3 = $('.ignite-cta').offset().top;
    var $bottom_limit3 = $('.subscribe').offset().top;
    if ($current_top >= $pos3 && $current_top < $bottom_limit3) {
        $current_top -= $pos3;
        $('#friendSlider').css('transform', 'translate3d(0px,' + parseFloat(-$current_top / 12) + 'px,0px)');
    } else {
        $('#friendSlider').css('transform', 'translate3d(0px,0px,0px)');
    }
    var $pos4 = $('.subscribe').offset().top;
    var $bottom_limit4 = $('#contact').offset().top + $('#contact').height();
    if ($current_top >= $pos4 && $current_top < $bottom_limit4) {
        $current_top -= $pos4;
        $('.contact-details').css('transform', 'translate3d(0px,' + parseFloat($current_top / 10) + 'px,0px)');
        $('.social-buttons').css('transform', 'scale3d(' + parseFloat(1 + $current_top / 10000) + ',' + parseFloat(1 + $current_top / 10000) + ',1)')
    } else {
        $('.contact-details').css('transform', 'translate3d(0,0,0)');
        $('.social-buttons').css('transform', 'scale3d(1,1,1)');
    }
});

$('#like').on('click', function () {
    if (jQuery(this).hasClass('liked-btn')) {
        return;
    }
    jQuery(this).text('非常感谢！<(￣▽￣)> ');
    jQuery(this).removeClass('like-btn');
    jQuery(this).addClass('liked-btn');
    var $likes = parseInt($('#likes-num').text()) + 1;
    $('#likes-num').attr('data-likes', $likes);
    $('#likes-num').addClass('liked-num');
    setTimeout(function () {
        $('#likes-num').text($likes);
        $('#likes-num').removeAttr('data-likes');
        $('#likes-num').removeClass('liked-num');
    }, 300);
    likeXmlHttp = GetXmlHttpObject();
    if (likeXmlHttp == null) {
        alert("抱歉哦，您的浏览器不支持此功能");
        return;
    }
    var url = "like.php";
    likeXmlHttp.onreadystatechange = likeClicked;
    likeXmlHttp.open("GET", url, true);
    likeXmlHttp.send(null);
});

$('#subscribe-btn').on('click', function () {
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("抱歉哦，您的浏览器不支持此功能");
        return;
    }
    var url = "email-subscribe.php";
    url += "?email=" + $('#email-field')[0].value;
    xmlHttp.onreadystatechange = subscribeClicked;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
});

function likeClicked() {
    if (likeXmlHttp.readyState == 4 || likeXmlHttp.readyState == "complete") {
        setCookie('like', 'liked', 365);
    }
}

function subscribeClicked() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
        if (xmlHttp.responseText == "-2") {
            $('#subscribe-info').text('该邮箱已经订阅过啦~');
        } else if (xmlHttp.responseText == "-3") {
            $('#subscribe-info').text('请输入正确的邮箱地址');
        } else if (xmlHttp.responseText == "-1") {
            $('#subscribe-info').text('服务器忙，稍后重试 T^T');
        } else if (xmlHttp.responseText == "1") {
            subscribeSucceed();
            var $email = $('#email-field')[0].value;
            setCookie('email', $email, 365);
        } else {
            $('#subscribe-info').text('未知错误...');
        }
    }
}

function subscribeSucceed() {
    var $offsetX = $('.subscribe .container').width();
    $offsetX += parseInt('15');
    $('.subscribe .container ul').css('transform', 'translate3d(-' + $offsetX + 'px,0,0)');
}

function setCookie(c_name, value, expiredays) {
    var exdate = new Date()
    exdate.setDate(exdate.getDate() + expiredays)
    document.cookie = c_name + "=" + escape(value) +
        ((expiredays == null) ? "" : ";expires=" + exdate.toGMTString())
}

function checkCookie($code) {
    if ($code == "email") {
        var email = getCookie('email');
        if (email != null && email != "") {
            subscribeSucceed();
        }
    } else {
        var like = getCookie('like');
        if (like != null && like != "") {
            $('#like').text('非常感谢！<(￣▽￣)> ');
            $('#like').removeClass('like-btn');
            $('#like').addClass('liked-btn');
        }
    }
}

function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=")
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1
            c_end = document.cookie.indexOf(";", c_start)
            if (c_end == -1) c_end = document.cookie.length
            return unescape(document.cookie.substring(c_start, c_end))
        }
    }
    return "";
}

function mobileDetect() {
    var ua = navigator.userAgent;
    var ipad = ua.match(/(iPad).*OS\s([\d_]+)/),
        isIphone = !ipad && ua.match(/(iPhone\sOS)\s([\d_]+)/),
        isAndroid = ua.match(/(Android)\s+([\d.]+)/),
        isMobile = isIphone || isAndroid;
    if (isMobile) {
        return true;
    } else {
        return false;
    }
}

$('.lang-changer').on('click', function () {
    var current_lang = window.location.href.split('?lang=')[1];
    if (current_lang == "en"){
        window.location.href="?lang=zh";
    } else {
        window.location.href="?lang=en";
    }
});