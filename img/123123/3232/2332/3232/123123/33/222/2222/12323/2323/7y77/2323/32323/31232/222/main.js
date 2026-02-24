function cityFunction(currentElem) {
  let input = currentElem
  let div = currentElem.parentElement
  div.classList.add("onprocess")
  div.classList.remove("complete")
  let filter = input.value.toUpperCase()
  let ul = currentElem.nextElementSibling
  ul.style.display = "block"
  let li = ul.getElementsByTagName("li")
  for (let i = 0; i < li.length; i++) {
    let a = li[i].getElementsByTagName("a")[0]
    let txtValue = a.textContent || a.innerText

    if (txtValue.toUpperCase().includes(filter)) {
      li[i].style.display = ""
    } else {
      li[i].style.display = "none"
    }
  }
}

// $(document).mouseup(function (e) {
//     var container = $(".cityList");
//     var ext = $(".inputLocation");
//
//     // if the target of the click isn't the container nor a descendant of the container
//     if (!ext.is(e.target) && !container.is(e.target) && ext.has(e.target).length === 0) {
//
//         if (ext.find('input').val() == "") {
//             ext.removeClass('onprocess');
//             ext.removeClass('complete');
//         } else {
//             ext.removeClass('onprocess');
//             ext.addClass('complete');
//         }
//         container.hide();
//
//     }
// });

$(document).ready(function () {
  $(".preloader").delay(1200).fadeOut("slow")

  $("#file_upload").change(function () {
    console.log(111)
    if (this.files[0]) {
      var filename = $(this).val().replace(/.*\\/, "")
      $(".upload__text").find(".filename").remove()
      $(".upload__text").html("")
      $(".upload__text").append(
        '<span class="filename"> ' + filename + " " + " </span>"
      )
    }
  })

  window.addEventListener("click", function (e) {
    if (document.getElementById("typesinput").contains(e.target)) {
    } else {
      document.getElementById("types1").style.display = "none"
    }
  })

  new WOW().init()

  $(document).on("click", ".pageform__check label", function () {
    $(this)
      .closest("form")
      .find(".manager-form__privacy .checkbox__box")
      .css("border-color", "#EBEBEB")
    var btn = $(this).closest("form").find(".pageform__button button")
    var attr = btn.attr("disabled")
    if ($(this).find("input").is(":checked")) {
      btn.removeAttr("disabled")
    } else {
      btn.attr("disabled", "disabled")
    }
  })

  $('input[type="tel"]').focus(function(){
    $(this).setCursorPosition(3);
  }).mask("+7 (999) 999-99-99")


  $("input.phonedob").focus(function(){
    $(this).setCursorPosition(3);
  }).mask("9999", {autoclear: false})
  $('input[data-stepdata="send_pasp1"]').mask("9999")
  $('input[data-stepdata="send_pasp2"]').mask("999999")
  $('input[data-stepdata="receive_pasp1"]').mask("9999")
  $('input[data-stepdata="receive_pasp2"]').mask("999999")
  $('input[data-stepdata="payer_pasp1"]').mask("9999")
  $('input[data-stepdata="payer_pasp2"]').mask("999999")
  $('input[data-stepdata="send_kpp"]').mask("99999999")
  $('input[data-stepdata="send_inn"]').mask("999999999?999")
  $('input[data-stepdata="receive_yurkpp"]').mask("99999999")
  $('input[data-stepdata="receive_yurinn"]').mask("999999999?999")
  $('input[name="FLOOR"]').mask("9?9")
  $('input[name="TO_FLOOR"]').mask("9?9")

  $('[data-click="newtel"]').each(function (e) {
    $(this).on("click", function (e) {
      e.preventDefault()
      $(this).hide()
      $(this).closest(".calcform__item_phones").find(".tel2").addClass("active")
    })
  })

  // $('input.quantity-level').mask('99');
  $("#weightSlider").inputSliderRange({
    min: 1,
    max: 10000,
    start: 1,
  })
  $("#volumeSlider").inputSliderRange({
    min: 1,
    max: 100,
    start: 1,
  })

  const pageslider = $(".pageslider__slider")
  pageslider.slick({
    dots: true,
    arrows: false,
    vertical: false,

    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 4000,
    speed: 800,
    infinite: true,
    customPaging: (mainslider, i) => "<span>0" + (i + 1) + "</span>",
    responsive: [
      {
        breakpoint: 1023,
        settings: "unslick",
      },
    ],
  })

  pageslider.on("wheel", function (e) {
    e.preventDefault()

    if (e.originalEvent.deltaY > 0) {
      $(this).slick("slickNext")
    } else {
      $(this).slick("slickPrev")
    }
  })

  function animationCounter1() {
    $(".stats__number span").each(function () {
      $(this)
        .prop("Counter", 0)
        .animate(
          {
            Counter: $(this).text(),
          },
          {
            duration: 2000,
            easing: "swing",
            step: function (now) {
              $(this).text(Math.ceil(now))
            },
          }
        )
    })
  }
  animationCounter1()

  $(".cityList li a").on("click", function (e) {
    e.preventDefault()
    $(this).closest("ul").siblings("input").val($(this).html())
    $(this)
      .closest(".calcform__item")
      .find(".codeInp")
      .val($(this).attr("data-id"))
    if ($(this).closest("ul").siblings("input").val() != "") {
      $(this).closest(".inputLocation").addClass("complete")
    }

    $(this).closest(".inputLocation").removeClass("onprocess")
    $(this).closest("ul").hide()
  })
  ;(function ($) {
    $(function () {
      $(".tabs__caption_js").on(
        "click",
        ".tabs__tab_js:not(.active)",
        function () {
          $(this)
            .addClass("active")
            .siblings()
            .removeClass("active")
            .closest("div.tabs")
            .find("div.tabs__content_js")
            .removeClass("active")
            .eq($(this).index())
            .addClass("active")
        }
      )
    })
  })(jQuery)

  $(".accordeonheader_js").click(function (event) {
    $(".accordeon__content_js").not($(this).next()).hide().removeClass("active")
    $(".accordeonheader_js").not($(this)).removeClass("active")
    $(this).toggleClass("active")
    $(this).next(".accordeon__content_js").slideToggle()
  })

  $(".accordeonbutton_js").click(function (event) {
    $(".accordeonbutton_js").not($(this)).removeClass("active")
    $(this).toggleClass("active")
    $(this).next(".accordeoncontent_js").slideToggle().toggleClass("active")
  })

  $(document).on("change", '.switches input[type="checkbox"]', function () {
    if ($(this).is(":checked")) {
      $(this).closest("li").find(".switches__name").addClass("active")
    } else {
      $(this).closest("li").find(".switches__name").removeClass("active")
    }
  })

  $(".newslist__slider").each(function () {
    $(this).slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      /* autoplay: true,
						autoplaySpeed: 3000,*/
      arrows: false,
      dots: false,
      fade: false,
      mobileFirst: false,
      responsive: [
        {
          breakpoint: 1023,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    })
  })

  $(".managerslider__slider").each(function () {
    $(this).slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      /* autoplay: true,
						autoplaySpeed: 3000,*/
      arrows: false,
      dots: false,
      fade: false,
      mobileFirst: false,
      fade: true,
      responsive: [
        {
          breakpoint: 1023,
          settings: {
            dots: true,
          },
        },
      ],
    })
  })

  $(".showmore__manager").on("click", function () {
    $(this).closest(".managerblock").find(".managerblock__form").slideToggle()
    $(this).hide()
  })

  $(".managerslider__slider").on("afterChange", function () {
    var dataId = $(".slick-current").attr("data-slick-index")
    $(".managerblock__tab").removeClass("active")
    $(".managerblock__tab[data-slickindex=" + dataId + "]").addClass("active")

    $(".select-manager-js option").eq(dataId).prop("selected", true)
  })

  $("[data-slickindex]").click(function (e) {
    e.preventDefault()
    actIndex = $(this).index()
    var slider = $(".managerslider__slider")
    slider[0].slick.slickGoTo(parseInt(actIndex))
  })

  $(".select-manager-js").change(function () {
    goTo = $(this).prop("selectedIndex")
    console.log(goTo)
    $(".managerslider__slider").slick("goTo", goTo)
  })

  /* $(".managerblock__tab").click(function () {
		goTo = $(this).index();
		console.log(goTo);
		$(".managerslider__slider").slick("goTo", goTo);
});
 */

  $(".slider__right").click(function (e) {
    $(this).parent().parent().find(".slick-slider").slick("slickNext")
  })
  $(".slider__left").click(function (e) {
    $(this).parent().parent().find(".slick-slider").slick("slickPrev")
  })

  $(".location__wno a").click(function (e) {
    e.preventDefault()
    $(".header-region").toggle()
    $(".header-region").toggleClass("header-region_active")
  })

  $(".js-region-close").click(function (e) {
    e.preventDefault()
    $(".header-region").toggle()
    $(".header-region").toggleClass("header-region_active")
  })

  $(".mobilebutton").click(function (e) {
    $(".mobilepanel").toggle()
    $(".overlay").toggle()
    $(".search").toggle()
  })

  $(".mobilemenu-js").click(function (e) {
    $(this).siblings(".mobilemenu__menu").slideToggle()
    $(this).toggleClass("active")
  })
  $(document).on("click", ".limittext__button", function () {
    $(this).closest(".limittext").toggleClass("full")
    $(this).toggleClass("active")
    $(this).siblings(".mask-hidden").toggle()
  })

  $(".tabs__caption_filials").slick({
    dots: false,
    infinite: false,
    arrows: true,
    centerMode: false,
    variableWidth: true,
  })
  ;(function ($) {
    $.fn.shuffle = function () {
      var allElems = this.get(),
        getRandom = function (max) {
          return Math.floor(Math.random() * max)
        },
        shuffled = $.map(allElems, function () {
          var random = getRandom(allElems.length),
            randEl = $(allElems[random]).clone(true)[0]
          allElems.splice(random, 1)
          return randEl
        })

      this.each(function (i) {
        $(this).replaceWith($(shuffled[i]))
      })

      return $(shuffled)
    }
  })(jQuery)

  $(function () {
    $(".object__slider > div").shuffle()

    $(".object__slider").slick({
      dots: true,
      infinite: true,
      slidesToShow: 1,
      arrows: false,
      centerMode: false,
    })
  })

  $(".accordeon-titlejs").click(function (event) {
    /* $(this).closest('.accordeon-js').find('.accordeon-contentjs').not($(this).next()).hide(300).removeClass('active'); */
    $(this)
      .closest(".accordeon-js")
      .find(".accordeon-titlejs")
      .not($(this))
      .removeClass("active")
    $(this).toggleClass("active")
    $(this).next(".accordeon-contentjs").slideToggle()
  })

  $(".accordeon-titlejs").click(function (event) {
    /* $(this).closest('.accordeon-js').find('.accordeon-contentjs').not($(this).next()).hide(300).removeClass('active'); */
    $(this)
      .closest(".accordeon-js")
      .find(".accordeon-titlejs")
      .not($(this))
      .removeClass("active")
    $(this).toggleClass("active")
    $(this).next(".accordeon-contentjs").slideToggle()
  })

  $(".location__title a").click(function (event) {
    event.preventDefault()
    $(this).toggleClass("active")
    $(".location_tooltip").slideToggle()
  })

  if ($(window).width() < 1024) {
    $(".footer__block_menu .footer__title").click(function (e) {
      $(this).siblings(".footer__list").slideToggle()
    })

    $(".ways__list").each(function () {
      if ($(this).innerHeight() > 420) {
        $(this).addClass("limittext")
        $(this).append(
          '<div class="mask-hidden"></div><div class="limittext__button"><svg width="87" height="92" viewBox="0 0 87 92" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d)"><rect x="56" y="21" width="40" height="40" rx="20" transform="rotate(90 56 21)" fill="#F8F8F8" stroke="white" stroke-width="2"></rect><path fill-rule="evenodd" clip-rule="evenodd" d="M35.9998 39.6203L40.7498 34.761L42.3911 36.44L35.9998 42.9784L29.6085 36.44L31.2498 34.761L35.9998 39.6203Z" fill="#F23F34"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M35.9998 45.4538L40.7498 40.5945L42.3911 42.2735L35.9998 48.8119L29.6085 42.2735L31.2498 40.5945L35.9998 45.4538Z" fill="#F23F34"></path></g><defs><filter id="filter0_d" x="-5" y="0" width="92" height="92" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix><feOffset dx="5" dy="5"></feOffset><feGaussianBlur stdDeviation="12.5"></feGaussianBlur><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"></feColorMatrix><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend></filter></defs></svg></div>'
        )
      }
    })

    $(".maccordeon_js").click(function (event) {
      /* $(this).closest('.accordeon-js').find('.accordeon-contentjs').not($(this).next()).hide(300).removeClass('active'); */
      /*$(this).closest('.tabscontent__wrapper').find('.maccordeon_js').not($(this)).removeClass('active');*/
      $(this).toggleClass("active")
      $(this).next().slideToggle().toggleClass("active")
    })
  }

  $(".moreDocsLink").on("click", function (e) {
    e.preventDefault()
    $(this).removeClass("active")
    $(this).siblings(".moreDocsLink").addClass("active")
    $(this).siblings(".moreDocs").toggleClass("active")
  })

  $(document).on("click", "label.checkbox", function () {
    console.log("check")
    let input = $(this).children("input[type=checkbox]")
    if (input.is(":checked")) {
      $(this)
        .closest(".pageform__buttons")
        .find("input[type=submit]")
        .removeAttr("disabled")
    } else $(this).closest(".pageform__buttons").find("input[type=submit]").attr("disabled", "true")
  })
  ;(function ($) {
    $(function () {
      $(".calctabs-js").on("click", "li:not(.active)", function () {
        $(this).addClass("active").siblings().removeClass("active")
        $(this)
          .closest("div.calcitem_tabs-js")
          .find("div.calcitem__content")
          .find("div.calcform-js")
          .removeClass("active")
          .eq($(this).index())
          .addClass("active")
        $(this)
          .closest("div.calcitem_tabs-js")
          .find("div.calctabs__action")
          .removeClass("active")
          .eq($(this).index())
          .addClass("active")
      })
    })
  })(jQuery)
  ;(function ($) {
    $(function () {
      $(".calctabs-js").on("click", "label:not(.active)", function () {
        $(this).addClass("active").siblings().removeClass("active")
        $(this)
          .closest("div.calcitem_tabs-js")
          .find("div.calcitem__content")
          .find("div.calcform-js")
          .removeClass("active")
          .eq($(this).index())
          .addClass("active")
        $(this)
          .closest("div.calcitem_tabs-js")
          .find("div.calctabs__action")
          .removeClass("active")
          .eq($(this).index())
          .addClass("active")
        if ($('input[name="fromAddress"]').val() !== "") {
          $('span[data-stepdata="p_otpravki"]')
            .closest(".dropdownJS")
            .find(".dropdownJS__menu li:first")
            .trigger("click")
        }
        if ($('input[name="toAddress"]').val() !== "") {
          $('span[data-stepdata="p_dostavki"]')
            .closest(".dropdownJS")
            .find(".dropdownJS__menu li:first")
            .trigger("click")
        }
      })
    })
  })(jQuery)

  function incrementValue(e) {
    e.preventDefault()
    var fieldName = $(e.target).data("field")
    var parent = $(e.target).closest("div")
    var currentVal = parseInt(parent.find("input[type=text]").val(), 10)
    if (!isNaN(currentVal)) {
      parent
        .find("input[type=text]")
        .val(currentVal + 1)
        .trigger("change")
    } else {
      parent.find("input[type=text]").val(1).trigger("change")
    }
  }

  function decrementValue(e) {
    e.preventDefault()
    var fieldName = $(e.target).data("field")
    var parent = $(e.target).closest("div")
    var currentVal = parseInt(parent.find("input[type=text]").val(), 10)
    if (!isNaN(currentVal) && currentVal > 1) {
      parent
        .find("input[type=text]")
        .val(currentVal - 1)
        .trigger("change")
    } else {
      parent.find("input[type=text]").val(1).trigger("change")
    }
  }

  $(document).on("click", ".quantity-plus", function (e) {
    incrementValue(e)
  })
  $(document).on("click", ".quantity-minus", function (e) {
    decrementValue(e)
  })

  /* $('.quantity').each(function(element) {
		element.on('click', '.quantity-plus', function (e) {
			incrementValue(e);
	});
	$('.quantity').on('click', '.quantity-minus', function (e) {
			decrementValue(e);
	});
 */
})

$(document).ready(function () {
  
  if ($(document).width() > 1023) {
    if (document.querySelector(".calcpage__aside")) {
      var a = document.querySelector(".calcpage__aside"),
        b = null,
        P = 30 // РµСЃР»Рё РЅРѕР»СЊ Р·Р°РјРµРЅРёС‚СЊ РЅР° С‡РёСЃР»Рѕ, С‚Рѕ Р±Р»РѕРє Р±СѓРґРµС‚ РїСЂРёР»РёРїР°С‚СЊ РґРѕ С‚РѕРіРѕ, РєР°Рє РІРµСЂС…РЅРёР№ РєСЂР°Р№ РѕРєРЅР° Р±СЂР°СѓР·РµСЂР° РґРѕР№РґС‘С‚ РґРѕ РІРµСЂС…РЅРµРіРѕ РєСЂР°СЏ СЌР»РµРјРµРЅС‚Р°. РњРѕР¶РµС‚ Р±С‹С‚СЊ РѕС‚СЂРёС†Р°С‚РµР»СЊРЅС‹Рј С‡РёСЃР»РѕРј
      window.addEventListener("scroll", Ascroll, false)
      document.body.addEventListener("scroll", Ascroll, false)
      function Ascroll() {
        if (b == null) {
          var Sa = getComputedStyle(a, ""),
            s = ""
          for (var i = 0; i < Sa.length; i++) {
            if (
              Sa[i].indexOf("overflow") == 0 ||
              Sa[i].indexOf("padding") == 0 ||
              Sa[i].indexOf("border") == 0 ||
              Sa[i].indexOf("outline") == 0 ||
              Sa[i].indexOf("box-shadow") == 0 ||
              Sa[i].indexOf("background") == 0
            ) {
              s += Sa[i] + ": " + Sa.getPropertyValue(Sa[i]) + "; "
            }
          }
          b = document.createElement("div")
          b.style.cssText =
            s + " box-sizing: border-box; width: " + a.offsetWidth + "px;"
          a.insertBefore(b, a.firstChild)
          var l = a.childNodes.length
          for (var i = 1; i < l; i++) {
            b.appendChild(a.childNodes[1])
          }
          a.style.height = b.getBoundingClientRect().height + "px"
          a.style.padding = "0"
          a.style.border = "0"
        }
        var Ra = a.getBoundingClientRect(),
          R = Math.round(
            Ra.top +
              b.getBoundingClientRect().height -
              document.querySelector("footer").getBoundingClientRect().top +
              0
          )
        if (Ra.top - P <= 0) {
          if (Ra.top - P <= R) {
            b.className = "stop"
            b.style.top = -R + "px"
          } else {
            b.className = "sticky"
            b.style.top = P + "px"
          }
        } else {
          b.className = ""
          b.style.top = ""
        }
        window.addEventListener(
          "resize",
          function () {
            a.children[0].style.width = getComputedStyle(a, "").width
          },
          false
        )
      }
    }
  }
})

$(document).ready(function () {
  $("#check_confirm").on("change", function () {
    if ($(this).is(":checked")) {
      $(this).closest("form").find("[type=submit]").removeAttr("disabled")
    } else {
      $(this).closest("form").find("[type=submit]").attr("disabled", "disabled")
    }
  })

  var something = (function () {
    var executed = false
    return function () {
      if (!executed) {
        executed = true
        $(".stats__number span").each(function () {
          $(this)
            .prop("Counter", 0)
            .animate(
              {
                Counter: $(this).text(),
              },
              {
                duration: 2000,
                easing: "swing",
                step: function (now) {
                  $(this).text(Math.ceil(now))
                },
              }
            )
        })
      }
    }
  })()

  $(window).scroll(function () {
    if ($(".stats").length) {
      var top_of_element = $(".stats").offset().top
      var bottom_of_element =
        $(".stats").offset().top + $(".stats").outerHeight()
      var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight()
      var top_of_screen = $(window).scrollTop()

      if (
        bottom_of_screen > top_of_element &&
        top_of_screen < bottom_of_element
      ) {
        something()
      }
    }
  })

  try {
    const progress = [
      {
        block: stats1,
        value: 53,
      },
      {
        block: stats2,
        value: 29,
      },
      {
        block: stats3,
        value: 14,
      },
      {
        block: stats4,
        value: 4,
      },
    ]
    const createProgress = function (block, percent) {
      var bar = new ProgressBar.Circle(block, {
        color: "#F23F34",
        // This has to be the same size as the maximum width to
        // prevent clipping
        strokeWidth: 5,
        trailWidth: 5,
        trailColor: "#eee",
        easing: "easeInOut",
        duration: 1400,
        text: {
          autoStyleContainer: false,
        },
        from: { color: "#F23F34", width: 5 },
        to: { color: "#F23F34", width: 5 },
        // Set default step function for all animate calls
        step: function (state, circle) {
          circle.path.setAttribute("stroke", state.color)
          circle.path.setAttribute("stroke-width", state.width)

          var value = Math.round(circle.value() * 100)
          if (value === 0) {
            circle.setText("")
          } else {
            circle.setText(value + "%")
          }
        },
      })
      bar.animate(percent * 0.01)
    }

    $(window).scroll(function () {
      if ($(".statblock.notcalled").length) {
        var top_of_element = $(".statblock").offset().top
        var bottom_of_element =
          $(".statblock").offset().top + $(".statblock").outerHeight()
        var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight()
        var top_of_screen = $(window).scrollTop()

        if (
          bottom_of_screen > top_of_element &&
          top_of_screen < bottom_of_element
        ) {
          $(".statblock").removeClass("notcalled")
          progress.forEach((item) => createProgress(item.block, item.value))
        }
      }
    })
  } catch (error) {}
})
