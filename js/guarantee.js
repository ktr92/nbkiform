const stickyBlock = (function () {
  "use strict";

  const Block = {
    $element: null,
    isactive: false,
    $slides: null,
    $dots: null,
    current: 0,
  };

  const turnOffScroll = () => {
    Block.isactive = true;
    /* document.body.style.setProperty("overflow", "hidden", "important");
    document.body.style.setProperty("padding-right", "15px", "important"); */
  };
  const turnOnScroll = () => {
    Block.isactive = false;
    /* document.body.style.setProperty("overflow", "unset", "important");
    document.body.style.setProperty("padding-right", "15px", "important"); */
    Block.$element.classList.add("notsticky");
  };

  const isElementAtTopOfScreen = (element) => {
    const rect = element.getBoundingClientRect();
    return rect.top >= -20 && rect.top <= 20;
  };

  let lastScrollTop = 0;

  const isSlidingDown = (el) => {
    if (Block.isactive) {
      const currentScrollTop = document.documentElement.scrollTop;
      console.log(currentScrollTop - lastScrollTop);
      const diff = currentScrollTop - lastScrollTop;
      if (diff > 200) {
        lastScrollTop = currentScrollTop;
        return;
      }

      if (diff > 150) {
        lastScrollTop = currentScrollTop;
        nextSlide();
      } else if (diff < -150) {
        lastScrollTop = currentScrollTop;
        prevSlide();
      }
    }
  };


  const nextSlide = () => {
    if (Block.current !== Block.$slides.length - 1) {
      deactivateSlide(Block.current);
      Block.current++;
    } else {
      endSlides();
      return;
    }

    if (Block.current >= Block.$slides.length) {
      Block.current = Block.$slides.length - 1;
      endSlides();
    } else {
      activateSlide(Block.current);
    }
  };
  const prevSlide = () => {
    if (Block.current !== 0) {
      deactivateSlide(Block.current);
      Block.current--;
    } else {
      endSlides();
      return;
    }

    Block.current--;

    if (Block.current < 0) {
      Block.current = 0;
      endSlides();
    } else {
      activateSlide(Block.current);
    }
  };

  const activateSlide = (index) => {
    Block.$slides[index].classList.add("active");
    Block.$dots[index].classList.add("active");
  };

  const deactivateSlide = (index) => {
    Block.$slides[index].classList.remove("active");
    Block.$dots[index].classList.remove("active");
  };

  const startSlides = () => {
    Block.isactive = true;
    if (Block.$element.nextSibling)
      Block.$element.classList.remove("notsticky");

    /* slidesOnScroll(document.documentElement.scrollTop) */
    /* Block.$element.addEventListener("scroll", slidesOnScroll); */
  };

  const endSlides = () => {
    Block.$element.classList.add("notsticky");

    /* Block.$element.removeEventListener("scroll", slidesOnScroll); */
    Block.isactive = false;
    /* turnOnScroll(); */
  };

  const init = (selector, slides, dots) => {
    if (!Block.$element) {
      Block.$element = document.querySelector(selector);
      Block.$slides = Block.$element.querySelectorAll(slides);
      Block.$dots = Block.$element.querySelectorAll(dots);
    }

    document.addEventListener("scroll", function (e) {
      if (isElementAtTopOfScreen(Block.$element)) {
        console.log(Block);
        startSlides();
        isSlidingDown();
      }
    });
  };

  return {
    init,
  };
})();

$(function () {
  stickyBlock.init(".stickysection", "[data-slide]", "[data-imgslide]");
});
