



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

  const slider = new Myslider("[data-myslider-container='sliderID']", {
    slides: 3,
    responsive: [
    {
        width: 992,
        slides: 2
    },
    {
        width: 480,
        slides: 1
    }
    ]
})
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
})

   
    if (document.querySelector('[data-headertabs]')) {

    document.querySelector('[data-headertabs]').addEventListener('click', function(e) {
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

    const $searchinput = document.querySelector('[data-search="searchinlist"]')
    const $searchlist = this.document.querySelectorAll('[data-searchvalue]')

    const searchinlist = () => {
        let value = $searchinput.value.toLowerCase()
        if (value.length > 1) {
            $searchlist.forEach((item) => {
                if (typeof item.textContent  === 'string') {
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
    

    document.querySelector('[data-form="shopsearch"]').addEventListener('submit', function(e) {
        e.preventDefault()
    })
}




  

/* function closeModal()  {
    if (document.querySelector('.modal-bg')) {
        document.querySelector('.modal-bg').classList.remove('in')
    }
    if ( document.querySelector('.modal.in')) {
        document.querySelector('.modal.in').classList.remove('in')
    }
} */
/* function openModal(selector) {
    if (document.querySelector('.modal-bg')) {
        document.querySelector('.modal-bg').classList.add('in')
    }
    if ( document.querySelector(selector)) {
        document.querySelector(selector).classList.add('in')
    }
} */


});

(function passwordInit(){
  if (document.querySelectorAll('[data-toggle="password"]')) {
    document.querySelectorAll('[data-toggle="password"]').forEach((e=>{e.addEventListener("click",(i=>{let t=e.previousElementSibling;"password"===t.type?t.type="text":t.type="password"; e.classList.contains('active') ? e.classList.remove('active') : e.classList.add('active')}))}))
  }
})();


function fillStars($stars, e) {
  const current = +e.target.dataset.star
  $stars.forEach(item => {
    if (+item.dataset.star <= current) {
      item.classList.add('active')
    } else {
      item.classList.remove('active')
    }
  })
}

(function ratingInit(){
  const $rating = document.querySelector('[data-rating]')
  if ($rating) {
    const ratingID = $rating.dataset.rating
    const $stars = $rating.querySelectorAll('[data-star]') 
    if ($stars.length > 0) {
      $stars.forEach(star => {
        star.addEventListener('mouseover', (e) => {
         
          fillStars($stars, e)
        })
       /*  star.addEventListener('mouseout', (e) => {
          let counter = 0
          let cur = $stars.forEach((st, index) => {
            counter = +st.classList.contains('current') + counter
          })
          if (!counter && $rating.classList.contains('clicked')) {
            $stars.forEach(item => {
              item.classList.remove('active')
            })
          }
          
        }) */
        star.addEventListener('click', (e) => {
          fillStars($stars, e)
          $stars.forEach(st => st.classList.remove('current'))
          e.target.classList.add('current')
          $rating.classList.add('clicked')
          const $input = $rating.querySelector(`input[data-input=${ratingID}]`)
          if ($input instanceof HTMLInputElement) {
            $input.value = e.target.dataset.star
          }
        })
      })
    }
   
  }

  const $reviews = document.querySelectorAll('[data-ratingreview]')
  if ($reviews && $reviews.length) {
    $reviews.forEach(review => {
      let rating = +review.dataset.ratingreview
      let $stars = review.querySelectorAll('[data-star]') 
      if (rating) {
        $stars.forEach(item => {
          if (+item.dataset.star <= rating) {
            item.classList.add('active')
          } else {
            item.classList.remove('active')
          }
        })
      } 
    })
  }
})();

(function() {
  'use strict';

  var body = document.querySelector('.sms__input');

  if (body) {
    function goToNextInput(e) {
      let val = ''
      var key = e.which,
        t = e.target,
        sib = t.nextSibling;
  
      if (key != 9 && (key < 48 || key > 57)) {
        e.preventDefault();
        return false;
      }
  
      if (key === 9) {
        return true;
      }
  
      if (sib.nextSibling && sib.nextSibling.id && sib) {
        body.querySelector(`#${sib.nextSibling.id}`).focus();
  
      } else {
        sib = body.querySelector('input');
      }
  
      
      body.querySelectorAll('input').forEach((inp) => {
        val += inp.value
      })
  
      document.querySelector("[data-value='smscode']").value = val
    }
  
    function onKeyDown(e) {
      var key = e.which;
  
      if (key === 9 || (key >= 48 && key <= 57)) {
        return true;
      }
  
      e.preventDefault();
      return false;
    }
  /*   
    function onFocus(e) {
      e.target.select();
    } */
  
    body.addEventListener('keyup', goToNextInput);
    body.addEventListener('input', goToNextInput);
    body.addEventListener('keydown', onKeyDown);
    body.addEventListener('input', onKeyDown);
  /*   body.addEventListener('click', onFocus);
    body.addEventListener('input', onFocus); */
  
  }

  

})();



(function(){
  const $quantityInput = document.getElementById('product_count')
  if ($quantityInput) {
    function incrementValue() {
      $quantityInput.value = parseInt($quantityInput.value, 10) + 1;
  }
  function decrementValue() {
      if(parseInt($quantityInput.value, 10) > 1){
        $quantityInput.value = parseInt($quantityInput.value, 10) - 1;
      }
  }

  document.querySelector('.quantity-plus').addEventListener('click', (e) => {
    incrementValue()
    console.log($quantityInput.value)
  })

  document.querySelector('.quantity-minus').addEventListener('click', (e) => {
    decrementValue()
    console.log($quantityInput.value)

  })
  }
 
})();


/* 
(function() {
  const prefixNumber = (str) => {
		if (str === "7") {
			return "7 (";
		}
		if (str === "8") {
			return "8 (";
		}
		if (str === "9") {
			return "7 (9";
		}
		return "7 (";
	};
  
  document.querySelectorAll('input[type="tel"]').forEach((el) => {

		el.addEventListener('focus', function(e) {
			e.target.value = prefixNumber(e.target.value.substring(0, e.target.value.length - 1));
		})
	
		el.addEventListener('input', function(e) {
			input = e.target
			const value = input.value.replace(/\D+/g, "");
			const numberLength = 11;

			let result;
			if (input.value.includes("+8") || input.value[0] === "8") {
				result = "";
			} else {
				result = "+";
			}

	
			for (let i = 0; i < value.length && i < numberLength; i++) {
				switch (i) {
					case 0:
						result += prefixNumber(value[i]);
						continue;
					case 4:
						result += ") ";
						break;
					case 7:
						result += "-";
						break;
					case 9:
						result += "-";
						break;
					default:
						break;
				}
				result += value[i];
			}
	
			input.value = result;
			

		})
	})
})() */








