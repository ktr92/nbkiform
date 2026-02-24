import {tns} from "../../../../../../node_modules/tiny-slider/src/tiny-slider"
import {shouldLoadJs} from "./packages/loader";

shouldLoadJs('modal-video', 'modal.bundle.js', '.pd__video-block__wrp');
shouldLoadJs('video', 'product_video.bundle.js', '.pd__video-block__wrp');

import "./zoomer_detail.js"
import {t_initZoom, showVideo, LoadYT} from "./zoomer_detail";
import LazyLoad from "vanilla-lazyload";

//let detail_images
document.addEventListener('DOMContentLoaded', () => {
    let artNumber = window.top.location.hash.substr(1);

    if (artNumber !== '') {
        autoSelectColor(artNumber);
    } else {
        initSlider();
    }

    document.querySelectorAll('.detail__tabs__item').forEach((item) => {
        item.removeEventListener('click', TabInit)
        item.addEventListener('click', TabInit)
    });

    document.querySelectorAll('.detail__wing__i').forEach((item) => {
        item.removeEventListener('click', selectWing)
        item.addEventListener('click', selectWing)
    });
});

function selectWing(e) {
    document.querySelectorAll('.detail__color__i').forEach(item => {
        item.classList.remove('available');
        item.classList.add('not-available');
    });

    document.querySelectorAll('.detail__color__i[data-offer-wing="' + e.currentTarget.dataset.offerWing + '"]').forEach(item => {
        item.classList.remove('not-available');
        item.classList.add('available');
    });


    document.querySelectorAll('.detail__wing__i').forEach((item) => {
        item.classList.remove('active');
    });

    e.currentTarget.classList.add('active');

    autoSelectColor(e.currentTarget.dataset.artNumber);
}

function TabInit(e) {
    document.querySelectorAll('.detail__tabs__scrl > div').forEach((item) => {
        item.classList.remove('active');
    });
    document.querySelectorAll('.detail__tabs__body > div').forEach((item) => {
        item.style.display = 'none';
    });
    e.target.classList.add('active');
    document.querySelector('#' + e.target.dataset.tab).style.display = 'block';
    reInitFloat();
}

document.addEventListener('DOMContentLoaded', () => {

    //покупка
    /*document.querySelector('.detail__buy__count__m').addEventListener('click', (e) => {

        if (e.target.closest('.detail__buy').dataset.canBuy == 0) {
            return false
        }

        let input = e.target.closest('.detail__buy__count').querySelector('input')
        if (Number(input.value) > 1) {
            input.value = Number(input.value) - 1
        }
    })
    document.querySelector('.detail__buy__count__p').addEventListener('click', (e) => {

        if (e.target.closest('.detail__buy').dataset.canBuy == 0) {
            return false
        }

        let input = e.target.closest('.detail__buy__count').querySelector('input')
        if (Number(input.value) < 9999) {
            input.value = Number(input.value) + 1
        }
    })*/

    document.querySelectorAll('.detail__color__i').forEach((item) => {
        item.removeEventListener('click', selectColor)
        item.addEventListener('click', selectColor)
    })


})

function autoSelectColor(artNumber) {

    let detail__color__i = document.querySelectorAll('.detail__color__i');
    let detail__wing__i = document.querySelectorAll('.detail__wing__i');

    if (detail__wing__i.length > 0) {
        detail__wing__i.forEach((item) => {
            item.classList.remove('active')
        });
        let wingObj = document.querySelector('.detail__wing__i[data-art-number="' + artNumber + '"]');
        wingObj.classList.add('active');
    }

    if (detail__color__i.length > 0) {
        detail__color__i.forEach((item) => {
            item.classList.remove('active')
        });


        let colorObj = document.querySelector('.detail__color__i[data-art-number="' + artNumber + '"]');
        colorObj.classList.add('active');
        document.querySelector('.detail__cover__artnumber').innerHTML = 'артикул ' + artNumber + '.';

        setPrice(colorObj.dataset.offerPrice);

        initSlider();
        initSlider(colorObj.dataset.offerId);
    } else {
        initSlider();
    }
}

function selectColor(e) {

    document.querySelectorAll('.detail__color__i.active').forEach((item) => {
        item.classList.remove('active');
    })
    e.currentTarget.classList.add('active');


    //покупка
    /*document.querySelector('.detail__buy__btn').dataset.offerId = e.currentTarget.dataset.offerId
    document.querySelector('.detail__buy__btn').classList.remove('not-selected-color')
    if (e.currentTarget.dataset.offerCanBuy == '1') {
        document.querySelector('.detail__buy').classList.add('can-buy')
        document.querySelector('.detail__buy').dataset.canBuy = 1
        document.querySelector('.detail__buy input').value = 1
        document.querySelector('.detail__buy__btn').innerHTML = '<div>Купить</div><div>' + e.currentTarget.dataset.offerPrice + '</div>'
    } else {
        document.querySelector('.detail__buy').classList.remove('can-buy')
        document.querySelector('.detail__buy').dataset.canBuy = 0
        document.querySelector('.detail__buy input').value = 1
        document.querySelector('.detail__buy__btn').innerHTML = '<span>Нет в наличии</span>'
    }*/

    document.querySelector('.detail__cover__artnumber').innerHTML = 'артикул ' + e.currentTarget.dataset.artNumber;


    setPrice(e.currentTarget.dataset.offerPrice);

    initSlider(e.currentTarget.dataset.offerId);

    window.myLazyLoad.update();
}

function setPrice(price){
    if (document.querySelector('.detail__cover__cell-price > div')) {
        if (price === '0 ₽') {
            document.querySelector('.detail__cover__cell-price > div').style.display = 'none';
        } else {
            document.querySelector('.detail__cover__cell-price > div').style.display = 'block';
            document.querySelector('.detail__cover__cell-price > div > div').innerHTML = price;
        }
    }
}

//let detail_images
function initSlider(offerId) {
    if (window.detail_images !== undefined) {
        window.detail_images.destroy()
        document.querySelectorAll('.detail__images > div.active').forEach((item) => {
            item.classList.remove('active');
        })
        document.querySelectorAll('.detail__images__controls__nav > div.active').forEach((item) => {
            item.classList.remove('active');
        })
    }

    if (offerId === undefined) {
        offerId = defaultOfferId;
    }
    document.querySelector('#detail-images-offer-id-' + offerId).classList.add('active');
    document.querySelector('#detail-images-nav-offer-id-' + offerId).classList.add('active');

    window.detail_images = tns({
        container: '#detail-images-offer-id-' + offerId,
        items: 1,
        slideBy: 'page',
        mode: 'gallery',
        controlsContainer: '.detail__images__controls__controls',
        navContainer: '#detail-images-nav-offer-id-' + offerId,
        arrowKeys: true,
        speed: 500,
        mouseDrag: true,
        swipeAngle: 60,
        preventScrollOnTouch: 'auto',
        lazyload: true,
    });

    window.detail_images.events.on('indexChanged', () => {
        window.myLazyLoad.update();
    });

    window.myLazyLoad.update();
    t_initZoom();
    showVideo();
    LoadYT();
}

//покупка
/*document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.detail__buy__btn').removeEventListener('click', addToCart)
    document.querySelector('.detail__buy__btn').addEventListener('click', addToCart)
})*/

function addToCart(e) {

    if (e.currentTarget.closest('.detail__buy').dataset.canBuy == 0) {
        return false
    }

    let obj = e.currentTarget
    let quantity = obj.closest('.detail__buy').querySelector('input').value
    let href = "/ru/catalog/addtocart.php?action=ADD2BASKET&id=" + obj.dataset.offerId + "&quantity=" + quantity;

    if (obj.dataset.offerId == '') {
        obj.classList.add('not-selected-color')
        return false
    }

    if (obj.dataset.incart !== 'Y') {
        obj.innerHTML =
            '<div class="mixers__items__btn__loader loading">' +
            '<div class=" loader loader--lg loader--white-light ovl-loader">' +
            '<span class="loader_"></span>' +
            '</div>' +
            '</div>'
    }


    fetch(href + "&ajax_buy=1")
        .then((response) => {
            return response.text();
        })
        .then((data) => {

            obj.classList.add('incart')


            obj.innerHTML = 'Оформить заказ'
            obj.href = '/ru/cart/index.php'
            obj.dataset.incart = "Y"


            setTimeout(() => {

                if (document.querySelector('.header_scroll').classList.contains('header_fixed_show'))
                    document.querySelector('.header_scroll .header__cart').classList.add('active')
                else
                    document.querySelector('header .header__cart').classList.add('active')

            }, 500);

            setTimeout(() => {
                document.querySelectorAll('.header__cart').forEach(item => item.classList.remove('active'))
            }, 4000);


            document.querySelector('.detail__buy__btn').removeEventListener('click', addToCart)

            BX.onCustomEvent(window, 'OnBasketChange');

        });


}


let scrolledElement;
let elementHeight;
let elementWidth;
let positionFromTop;
let positionFromLeft;
let offsetHeightContainer;
let offsetWidthContainer;
let scrollY;
let scrollTop;
let initFloatFlag = false;

document.addEventListener('DOMContentLoaded', () => {
    initFloat();

    /*window.onYouTubeIframeAPIReady = () => {
        console.log('onYouTubeIframeAPIReady')
        reInitFloat();
    };*/
});
window.addEventListener('resize', () => {
    initFloatFlag = false;
    if (document.documentElement.clientWidth >= 1024) {
        setTimeout(() => {
            reInitFloat();
        }, 500);
    }
});

/*
window.onYouTubeIframeAPIReady = () => {
    console.log('onYouTubeIframeAPIReady')
    reInitFloat();
};
*/

function reInitFloat() {
    offsetWidthContainer = document.querySelector('.detail__cover__cell-img').offsetWidth;
    scrolledElement = document.querySelector('.detail__cover__cell-img-floating');
    scrolledElement.classList.remove('active');
    scrolledElement.classList.remove('absolute');
    scrolledElement.style.left = '0px';
    scrolledElement.style.top = '0px';
    scrolledElement.style.width = offsetWidthContainer + 'px';

    elementHeight = 0;
    elementWidth = 0;
    positionFromTop = 0;
    positionFromLeft = 0;
    offsetHeightContainer = 0;
    scrollY = 0;
    scrollTop = 0;

    initFloat();
}

function initFloat() {
    if (document.documentElement.clientWidth < 1024) return;

    scrollTop = window.pageYOffset;
    scrolledElement = document.querySelector('.detail__cover__cell-img-floating');
    elementHeight = scrolledElement.offsetHeight;
    elementWidth = scrolledElement.offsetWidth;
    positionFromTop = Number(scrolledElement.getBoundingClientRect().top + scrollTop);
    positionFromLeft = Number(scrolledElement.getBoundingClientRect().left);
    offsetHeightContainer = document.querySelector('.detail__cover').offsetHeight;
    offsetWidthContainer = document.querySelector('.detail__cover__cell-img').offsetWidth;

    if (offsetHeightContainer > elementHeight + 400) {
        initFloatFlag = true;
        scrolledElement.style.width = offsetWidthContainer + 'px';
        scrolledElement.style.top = '30px';
        scrolledElement.style.left = positionFromLeft + 'px';
        scrolledElement.classList.add('active');
        window.removeEventListener('scroll', doFloat, {passive: true});
        window.addEventListener('scroll', doFloat, {passive: true});

        doFloat();
    }

}

function doFloat() {

    if (initFloatFlag !== true) return;


    offsetHeightContainer = document.querySelector('.detail__cover').offsetHeight;
    scrollY = Number(document.documentElement.scrollTop);

    if (scrollY + 30 > positionFromTop) {
        if ((positionFromTop + offsetHeightContainer) > (scrollY + 30 + elementHeight)) {
            if (scrolledElement.classList.contains('active') === false) {
                scrolledElement.classList.add('active');
                scrolledElement.classList.remove('absolute');
                scrolledElement.style.top = '30px';
                scrolledElement.style.left = positionFromLeft + 'px';
            }
        } else {
            if (scrolledElement.classList.contains('active') === true) {
                scrolledElement.style.left = '0px';
                scrolledElement.style.top = (offsetHeightContainer - elementHeight) + 'px';
                scrolledElement.classList.remove('active');
                scrolledElement.classList.add('absolute');
            }
        }

    } else {
        scrolledElement.classList.remove('active');
    }
}
