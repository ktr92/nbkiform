// Fancybox
$(document).ready(function () {
    $(".fancybox").fancybox();
});
// To top
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#scroller').fadeIn();
        } else {
            $('#scroller').fadeOut();
        }
    });
    $('#scroller').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});

// ������������ �������� � �������
$('.footer-bnnr a.active').show();
setInterval(function () {
    $('.footer-bnnr a').each(function () {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $(this).show(1000);
        } else {
            $(this).hide(1000);
        }
    });
}, 10000);
//������������ �������� � �������

$(document).ready(function ($) {
    jQuery('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav',
        dots: false
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        arrows: true,
        autoplay: false,
        vertical: true,
        prevArrow: $('.prevs'),
        nextArrow: $('.nexts'),
        responsive: [{
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
            }
        }]
    });



    $('span.cats__toggler').click(function (e) {
        // e.preventDefault();
        $(this).parent().toggleClass('cats__parent_active');
        $(this).siblings('.cats__level2').slideToggle();
        $(this).toggleClass('active');
    });


    $('.form .head span').click(function () {
        $('#overlay').css('display', 'none');
        $('#order').css('display', 'none');
        $('#order_catalog').css('display', 'none');
        $('#order_link').css('display', 'none');
    });

    $('#overlay').click(function () {
        $('#overlay').css('display', 'none');
        $('#order').css('display', 'none');
        $('#order_catalog').css('display', 'none');
        $('#order_link').css('display', 'none');
    });

    $('.catalog_download').click(function () {
        let link = $('.catalog_download').attr('data-href');
        let href = $('.catalog_download').attr('href');

        if (link != href) {
            $('#CATALOG_FIELD_CATALOG').val($('h1').text());
            $('#overlay').css('display', 'block');
            $('#order_catalog').css('display', 'block');
        }
    });

    $('.fancybox-inline').click(function () {
        if ($('#ORDER_FIELD_EQUIPMENT').val() == "") {
            $('#ORDER_FIELD_EQUIPMENT').val($('h1:first').text());
        }

        // $('#furl').val(document.location.href);
        $('#overlay').css('display', 'block');
        $('#order').css('display', 'block');

    });

    $('.unit_tabbed li a[href="#view_04"]').click(function () {
        $('#view_04 a').each(function () {
            $(this).attr("data-href", $(this).attr("href")).attr("href", "#").addClass("form_up");

            $('#view_04 a.form_up').each(function () {
                $(this).click(function () {
                    if ($(this).attr('href') == '#') {
                        $('#CATALOG_FIELD_CATALOG').val($(this).text());
                        $('#overlay').css('display', 'block');
                        $('#order_catalog').css('display', 'block');
                    }
                });
            });
        });
    });


    $('a.jdownload').each(function () {
        $(this).attr("data-href", $(this).attr("href")).attr("href", "#").addClass("form_up");

        jQuery('a.jdownload.form_up').each(function () {
            $(this).click(function () {
                console.log($(this).data('title'));
                let title = $(this).data('title');
                if (title === undefined || title == '') {
                    title = $(this).html();
                }

                if ($(this).attr('href') == '#') {
                    $('#LINK_FIELD_LINK').val(title);
                    $('#overlay').css('display', 'block');
                    $('#order_link').css('display', 'block');
                }
            });
        });
    });


    $('.accord__title').on('click', function () {
        let x = 0

        if (!($('.accord').hasClass('active'))) {
            $('.accord').addClass('active')
            x = 1
        }
        $(this).siblings('.accord__content').slideToggle();
        $(this).toggleClass('active');
        if ($('.accord').hasClass('active') && (x == 0)) {
            $('.accord').removeClass('active')
        }

    })

    $('.menu1').on('click', function () {
        $('#header_top_topmenu').slideToggle();
    })
    $('.largemenu_icon').on('click', function () {
        $('.menu_large').slideToggle();
    })

    if ($(window).width() < 950) {

        $('.menu_large > li .fa-angle-down').click(function (e) {
            e.preventDefault();

            $(this).parent().parent().find('.sub-menu_large').stop(true, true).slideToggle(250).end().siblings().find('.sub-menu_large').slideUp(250);

        });


        /*   $(' .menu_large > li > a').on('click', function (event) {
              event.preventDefault();
              $(this).siblings('.sub-menu_large').slideToggle();

          }) */
    }

});

function successFormCatalog() {
    let link = $('.catalog_download').attr('data-href');
    $('.catalog_download').attr('href', link);

    $('#order_catalog form').css('display', 'none');
    $('#order_catalog .wpcf7-mail-sent-ok').css('display', 'block');

 
}

function successFormLinkAll() {
    $('a.jdownload').each(function () {
        $(this).attr("href", $(this).attr("data-href")).removeAttr("data-href").removeClass("form_up");
    });

    $('#order_link form').css('display', 'none');
    $('#order_link .wpcf7-mail-sent-ok').css('display', 'block');


}

function successFormCatalogAll() {

    $('#view_04 a').each(function () {
        $(this).attr("href", $(this).attr("data-href")).removeAttr("data-href").removeClass("form_up");
    });

    $('#order_catalog form').css('display', 'none');
    $('#order_catalog .wpcf7-mail-sent-ok').css('display', 'block');

    console.log('reachGoal','ordercatalog')
    ym(31050146,'reachGoal','ordercatalog')
}
$(document).ready(function () {
    $('.js-change-image').hover(function () {
        var $link = $(this),
            img = $link.data('picture');
        if (img != '') {
            $link.parents('li').find('.largemenu__img img').prop('src', img);
        }
    })
})