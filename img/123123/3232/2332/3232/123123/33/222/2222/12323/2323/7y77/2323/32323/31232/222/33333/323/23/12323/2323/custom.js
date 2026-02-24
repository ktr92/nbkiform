

class Myslider {
    constructor(selector, settings) {
        if (!document.querySelector(selector)) {
            return
        }
      this.settings = settings
      this.slidesVisible = settings.slides ?? 1
      this.screen = window.screen.width
      this.$el = document.querySelector(selector)
      this.sliderID = this.$el.dataset.mysliderContainer
      this.$slider = this.$el.querySelector(`[data-myslider-slider='${this.sliderID}']`)
      this.$next = document.querySelector(`[data-myslider-next='${this.sliderID}']`)
      this.$prev = document.querySelector(`[data-myslider-prev='${this.sliderID}']`)
      this.$dots = document.querySelector(`[data-myslider-dots='${this.sliderID}']`)
      this.dotsItems = null
      this.activeId = 0
      this.slideWIdth =  this.$el.offsetWidth / this.slidesVisible
      this.slides = this.$slider.querySelectorAll(`[data-myslider-slide='${this.sliderID}']`)
      this.slidesCount =  this.slides.length
      this.sectionCount = Math.ceil(this.slidesCount / this.slidesVisible)
      this.position = this.$slider.style.left
      this.responsive = settings.responsive ?? null
      this.sliderInit()
    }


    sliderInit() {
      this.sizeInit()
      if (this.$next && this.$prev) {
        this.arrowsInit()
      }

      if (this.responsive && this.responsive.length > 0) {
        this.responsive.unshift({width: this.screen, slides: this.settings.slides ?? 1})
      }
      this.initSwipe()

      window.addEventListener('resize', () => {
        this.activateSlide(0)
        this.sizeInit()
      })
    }

    arrowsInit() {
      this.$next.addEventListener('click', () => {
        this.activateSlide(this.activeId + 1)
      });

      this.$prev.addEventListener('click', () => {
        this.activateSlide(this.activeId - 1)
      });
    }

    sizeInit() {
      if (this.responsive && this.responsive.length) {
        this.responsive.forEach((size, index) => {
          if (size.width > window.innerWidth) {
            this.screen = size.width
            this.slidesVisible = size.slides
            this.slidesCount =  this.slides.length
            this.sectionCount = Math.ceil(this.slidesCount / this.slidesVisible)
          }
        })
      }

      this.slideWIdth = this.$el.offsetWidth / this.slidesVisible

      let index = 0
      this.$slider.style.width = this.slideWIdth * this.slidesCount + 'px'
      this.slides.forEach($slide => {
        $slide.style.width =  this.slideWIdth + 'px'
        $slide.dataset.mysliderid = index
        index++
      })

      if (this.$dots) {
        this.dotsInit()
      }
    }

    dotsInit() {

      for (let i = 0; i < this.sectionCount; i++) {
        this.$dots.insertAdjacentHTML('beforeend', `<div class="myslider__dots__button" data-mysliderdot="${i * (this.slidesVisible)}" data-myslider-dotid='${this.sliderID}'></div>`)
      }
      const dots = document.querySelectorAll(`[data-myslider-dotid='${this.sliderID}']`)
      dots[0].classList.add('active')

      dots.forEach(el => {
        el.addEventListener('click', (e) => {
          const id = +e.target.dataset.mysliderdot
          if (id < this.slidesCount - (this.slidesVisible - 1)) {
            this.activateSlide(id)

          } else {
            this.activateSlide(this.slidesCount - this.slidesVisible)

          }
        })
      })

      this.dotsItems = dots
    }

    activateDot(dots, id) {
      const activeDot = document.querySelector(`[data-mysliderdot="${id}"][data-myslider-dotid='${this.sliderID}']`)
      if (activeDot) {
        dots.forEach(dot => {
          dot.classList.remove('active')
        })
        activeDot.classList.add('active')
      }
    }



    activateSlide(n) {
      if (n < 0) {
        this.position = this.slideWIdth * (this.slidesCount - this.slidesVisible)
        this.$slider.style.left = -this.position + 'px'
        this.activeId = this.slidesCount - this.slidesVisible
       } else {
        if (n < this.slidesCount - (this.slidesVisible - 1)) {
          this.position = this.slideWIdth * n
          this.$slider.style.left = -this.position + 'px'
          this.activeId = n
         } else {
          this.$slider.style.left = 0
          this.activeId = 0
         }
       }

       this.activateDot(this.dotsItems, this.activeId)

    }

    initSwipe() {
         let initialX = null;
         let initialY = null;

         const startTouch = (e) => {
           initialX = e.touches[0].clientX;
           initialY = e.touches[0].clientY;
         };

         const moveTouch = (e) => {
           if (initialX === null) {
             return;
           }

           if (initialY === null) {
             return;
           }

           let currentX = e.touches[0].clientX;
           let currentY = e.touches[0].clientY;
           let diffX = initialX - currentX;
           let diffY = initialY - currentY;

           if (Math.abs(diffX) > Math.abs(diffY)) {
             if (diffX > 0) {
              this.activateSlide(this.activeId + 1)
             } else {
              this.activateSlide(this.activeId - 1)
             }
           }

           initialX = null;
           initialY = null;

           e.preventDefault();
         };

         this.$slider.addEventListener("touchstart", startTouch, false);
         this.$slider.addEventListener("touchmove", moveTouch, false);
    }

  }
window.addEventListener('load', function() {

  function closeByClickOutside(element, button) {
    $(document).click(function (event) {
      if (!$(event.target).closest(`${element},${button}`).length) {
        $(button).removeClass("active")
        $(element).removeClass("active")
        $(element).closest('.active').removeClass("active")
        sessionStorage.setItem('custommodal_set', 1);
      }
    })
  
   
  }

  closeByClickOutside('.custommodal__wrapper', '[data-modal="close"]')

    const slider_rel = new Myslider("[data-myslider-container='slider_related']", {
        slides: 4,
        responsive: [

          {
              width: 1300,
              slides: 3
          },

          {
              width: 992,
              slides: 2
          }
          ]
    });
    const slider_spec = new Myslider("[data-myslider-container='slider_newsspecial']", {
        slides: 3,
        responsive: [

          {
              width: 1300,
              slides: 2
          },

          {
              width: 992,
              slides: 1
          }
          ]
    });
    const slider_spec_v2 = new Myslider("[data-myslider-container='slider_newsspecial_v2']", {
        slides: 3,
        responsive: [

          {
              width: 1300,
              slides: 3
          },

          {
              width: 992,
              slides: 2
          }
          ]
    });

    if ($('[data-headertabs]').length) {
        document.querySelector('[data-headertabs]').addEventListener('click', function (e) {
            const el = e.target
            if (el.tagName === 'LI') {
                if (!el.classList.contains('active')) {
                    let index = Array.from(el.parentNode.children).indexOf(el)

                    document.querySelectorAll('[data-headertabs] li').forEach(item => {
                        item.classList.remove('active')
                    })
                    el.classList.add('active')

                    document.querySelectorAll('[data-contenttabs]').forEach(item => {
                        item.classList.remove('active')
                    })
                    const items = Array.from(document.querySelector('[data-tabswrapper]').children)
                    items[index].classList.add('active')

                    const $search = document.querySelector('[data-shopsearch]')

                    if (document.querySelector('[data-shopsview="list"]').classList.contains('active')) {
                        $search.classList.add('active')
                    } else {
                        $search.classList.remove('active')
                    }
                }
            }
        })
    }

    const $searchinput = document.querySelector('[data-search="searchinlist"]')
    const $searchlist = this.document.querySelectorAll('[data-searchvalue]')
    if ($searchinput) {
        const searchinlist = () => {
            let value = $searchinput.value.toLowerCase()
            if (value.length > 1) {
                $searchlist.forEach((item) => {
                    if (typeof item.textContent === 'string') {
                        if (item.textContent.toLowerCase().indexOf(value) > -1) {
                            item.closest('[data-itemwrapper]').classList.remove('unmatch')
                        } else {
                            item.closest('[data-itemwrapper]').classList.add('unmatch')
                        }
                    }

                })
            } else {
                document.querySelectorAll('[data-itemwrapper]').forEach((item) => {
                    item.classList.remove('unmatch')
                })
            }

        }

        $searchinput.addEventListener('change', searchinlist)
        $searchinput.addEventListener('input', searchinlist)
        $searchinput.addEventListener('keyup', searchinlist)


        document.querySelector('[data-form="shopsearch"]').addEventListener('submit', function (e) {
            e.preventDefault()
        })
    }

})


if ($('[data-search="searchinlist"]').length) {
    document.querySelector('[data-search="searchinlist"]').addEventListener('input,change,keyup', function (e) {

    })
}
