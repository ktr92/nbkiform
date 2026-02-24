var st;
$(document).ready(function () {
    $("[data-headertabs]").on("click", "li:not(.active)", function () {
        $(this)
          .addClass("active")
          .siblings()
          .removeClass("active")
          .closest("[data-tabs]")
          .find("[data-contenttabs]")
          .removeClass("active")
          .eq($(this).index())
          .addClass("active")
      })
      
    $(".mask").mask("+7 (999) 999-99-99");

    $(function () {
        $('[data-toggle="tooltip"]').tooltip({container: 'body'})
    })


    var windowHeight = $(window).height();

    $(document).on('scroll', function () {
        $('.Animation__Slide').each(function () {
            var self = $(this);
            var height = self.offset().top + self.height() / 2.3;
            if ($(document).scrollTop() + windowHeight >= height) {
                self.addClass('Animation__Slide__active');
            }
        });
    });

    // СЛАЙДЕР НОВОСТЕЙ НА ГЛАВНОЙ СТРАНИЦЕ

    $('.block-news__imgs__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.block-news__news__slider',
        responsive: [
            {
                breakpoint: 1920,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    fade: false,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    fade: false,
                }
            },
        ]
    });

    $('.block-news__news__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.block-news__imgs__slider',
        prevArrow: '<div data-role="none" class="block-news__news__slider__slick-prev" aria-label="Previous" tabindex="0" role="button"></div>',
        nextArrow: '<div data-role="none" class="block-news__news__slider__slick-next" aria-label="Next" tabindex="0" role="button"></div>',
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1920,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    fade: true,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    fade: false,
                }
            },
        ]

    });

    $("img.lazy").lazyload({
        effect: "fadeIn"
    });
});









