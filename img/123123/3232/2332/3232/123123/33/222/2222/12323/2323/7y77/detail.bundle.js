!function () {
    "use strict";
    var e, t = {
        218: function (e, t, o) {
            var n, r, i, a, c, d, l, s, u = o(649), m = o(235), v = o(486);

            function _(e) {
                document.querySelectorAll(".detail__color__i").forEach((function (e) {
                    e.classList.remove("available"), e.classList.add("not-available")
                })), document.querySelectorAll('.detail__color__i[data-offer-wing="' + e.currentTarget.dataset.offerWing + '"]').forEach((function (e) {
                    e.classList.remove("not-available"), e.classList.add("available")
                })), document.querySelectorAll(".detail__wing__i").forEach((function (e) {
                    e.classList.remove("active")
                })), e.currentTarget.classList.add("active"), y(e.currentTarget.dataset.artNumber),
                    document.getElementById("customart").innerHTML = e.currentTarget.dataset.artNumber,
                    document.getElementById("customcolor").innerHTML = e.currentTarget.title
            }

            function f(e) {
                document.querySelectorAll(".detail__tabs__scrl > div").forEach((function (e) {
                    e.classList.remove("active")
                })), document.querySelectorAll(".detail__tabs__body > div").forEach((function (e) {
                    e.style.display = "none"
                })), e.target.classList.add("active"), document.querySelector("#" + e.target.dataset.tab).style.display = "block", b()
            }

            function y(e) {
                var t = document.querySelectorAll(".detail__color__i"),
                    o = document.querySelectorAll(".detail__wing__i");
                if (o.length > 0 && (o.forEach((function (e) {
                    e.classList.remove("active")
                })), document.querySelector('.detail__wing__i[data-art-number="' + e + '"]').classList.add("active")), t.length > 0) {
                    t.forEach((function (e) {
                        e.classList.remove("active")
                    }));
                    var n = document.querySelector('.detail__color__i[data-art-number="' + e + '"]');
                    n.classList.add("active"), document.querySelector(".detail__cover__artnumber").innerHTML = "артикул " + e + ".", g(n.dataset.offerPrice), L(), L(n.dataset.offerId)
                } else L()
            }

            function p(e) {
                document.querySelectorAll(".detail__color__i.active").forEach((function (e) {
                    e.classList.remove("active")
                })), e.currentTarget.classList.add("active"), document.querySelector(".detail__cover__artnumber").innerHTML = "артикул " + e.currentTarget.dataset.artNumber,
                    document.getElementById("customart").innerHTML = e.currentTarget.dataset.artNumber, document.getElementById("customcolor").innerHTML = e.currentTarget.title, g(e.currentTarget.dataset.offerPrice), L(e.currentTarget.dataset.offerId), window.myLazyLoad.update()
            }

            function g(e) {
                document.querySelector(".detail__cover__cell-price > div") && ("0 ₽" === e ? document.querySelector(".detail__cover__cell-price > div").style.display = "none" : (document.querySelector(".detail__cover__cell-price > div").style.display = "block", document.querySelector(".detail__cover__cell-price > div > div").innerHTML = e))
            }

            function L(e) {
                void 0 !== window.detail_images && (window.detail_images.destroy(), document.querySelectorAll(".detail__images > div.active").forEach((function (e) {
                    e.classList.remove("active")
                })), document.querySelectorAll(".detail__images__controls__nav > div.active").forEach((function (e) {
                    e.classList.remove("active")
                }))), void 0 === e && (e = defaultOfferId), document.querySelector("#detail-images-offer-id-" + e).classList.add("active"), document.querySelector("#detail-images-nav-offer-id-" + e).classList.add("active"), window.detail_images = (0, u.W)({
                    container: "#detail-images-offer-id-" + e,
                    items: 1,
                    slideBy: "page",
                    mode: "gallery",
                    controlsContainer: ".detail__images__controls__controls",
                    navContainer: "#detail-images-nav-offer-id-" + e,
                    arrowKeys: !0,
                    speed: 500,
                    mouseDrag: !0,
                    swipeAngle: 60,
                    preventScrollOnTouch: "auto",
                    lazyload: !0
                }), window.detail_images.events.on("indexChanged", (function () {
                    window.myLazyLoad.update()
                })), window.myLazyLoad.update(), (0, v.Np)(), (0, v.W7)(), (0, v.gN)()
            }

            o(732), (0, m.Q)("modal-video", "modal.bundle.js", ".pd__video-block__wrp"), (0, m.Q)("video", "product_video.bundle.js", ".pd__video-block__wrp"), document.addEventListener("DOMContentLoaded", (function () {
                var e = window.top.location.hash.substr(1);
                "" !== e ? y(e) : L(), document.querySelectorAll(".detail__tabs__item").forEach((function (e) {
                    e.removeEventListener("click", f), e.addEventListener("click", f)
                })), document.querySelectorAll(".detail__wing__i").forEach((function (e) {
                    e.removeEventListener("click", _), e.addEventListener("click", _)
                }))
            })), document.addEventListener("DOMContentLoaded", (function () {
                document.querySelectorAll(".detail__color__i").forEach((function (e) {
                    e.removeEventListener("click", p), e.addEventListener("click", p)
                }))
            }));
            var S = !1;

            function b() {
                d = document.querySelector(".detail__cover__cell-img").offsetWidth, (n = document.querySelector(".detail__cover__cell-img-floating")).classList.remove("active"), n.classList.remove("absolute"), n.style.left = "0px", n.style.top = "0px", n.style.width = d + "px", r = 0, i = 0, a = 0, c = 0, l = 0, s = 0, h()
            }

            function h() {
                document.documentElement.clientWidth < 1024 || (s = window.pageYOffset, n = document.querySelector(".detail__cover__cell-img-floating"), r = n.offsetHeight, n.offsetWidth, i = Number(n.getBoundingClientRect().top + s), a = Number(n.getBoundingClientRect().left), c = document.querySelector(".detail__cover").offsetHeight, d = document.querySelector(".detail__cover__cell-img").offsetWidth, c > r + 400 && (S = !0, n.style.width = d + "px", n.style.top = "30px", n.style.left = a + "px", n.classList.add("active"), window.removeEventListener("scroll", w, {passive: !0}), window.addEventListener("scroll", w, {passive: !0}), w()))
            }

            function w() {
                !0 === S && (c = document.querySelector(".detail__cover").offsetHeight, (l = Number(document.documentElement.scrollTop)) + 30 > i ? i + c > l + 30 + r ? !1 === n.classList.contains("active") && (n.classList.add("active"), n.classList.remove("absolute"), n.style.top = "30px", n.style.left = a + "px") : !0 === n.classList.contains("active") && (n.style.left = "0px", n.style.top = c - r + "px", n.classList.remove("active"), n.classList.add("absolute")) : n.classList.remove("active"))
            }

            document.addEventListener("DOMContentLoaded", (function () {
                h()
            })), window.addEventListener("resize", (function () {
                S = !1, document.documentElement.clientWidth >= 1024 && setTimeout((function () {
                    b()
                }), 500)
            }))
        }, 486: function (e, t, o) {
            o.d(t, {
                Np: function () {
                    return i
                }, W7: function () {
                    return c
                }, gN: function () {
                    return a
                }
            });
            var n = o(649), r = null;

            function i() {
                var e = document.querySelectorAll('[data-zoomable="yes"]'),
                    t = document.querySelectorAll('[data-zoomable-video="yes"]');
                if (e.length || t) {
                    if (e.length && e.forEach((function (e) {
                        e.removeEventListener("click", l), e.addEventListener("click", l)
                    })), t && (t.forEach((function (e) {
                        e.removeEventListener("click", s), e.addEventListener("click", s)
                    })), document.querySelectorAll(".detail__images__nav__offer .video").forEach((function (e) {
                        e.removeEventListener("click", u), e.addEventListener("click", u)
                    }))), !document.querySelector(".t-zoomer__wrapper")) {
                        var o = document.createElement("div");
                        document.querySelector("body").append(o), o.classList.add("t-zoomer__wrapper"), o.innerHTML += '<div>    <div class="t-zoomer__container">    <div class="t-zoomer__video"><div></div>    </div>    </div>    <button type="button" class="t-zoomer__close">        <span></span>    </button></div>'
                    }
                    document.addEventListener("keydown", (function (e) {
                        27 === e.keyCode && S()
                    })), document.querySelectorAll(".t-zoomer__close").forEach((function (e) {
                        e.removeEventListener("click", S), e.addEventListener("click", S)
                    }))
                }
            }

            function a() {
                if (void 0 === window.YT) {
                    var e = document.createElement("script");
                    e.src = "https://www.youtube.com/iframe_api";
                    var t = document.getElementsByTagName("script")[0];
                    t.parentNode.insertBefore(e, t)
                }
            }

            function c() {
                document.querySelectorAll(".detail__images__controls__nav .video").forEach((function (e) {
                    e.classList.add("show")
                })), document.querySelectorAll('[data-zoomable-video="yes"]').forEach((function (e) {
                    e.classList.add("show")
                }))
            }

            window.onYouTubeIframeAPIReady = function () {
                c()
            };
            var d, l = function (e) {
                v(e.currentTarget)
            }, s = function (e) {
                v(e.currentTarget), p(e.currentTarget.dataset.videoId)
            }, u = function (e) {
                var t = e.currentTarget.closest(".detail__images__nav__offer").dataset.offerId;
                var s = e.currentTarget.dataset.nav;
                var o = document.querySelector("#detail-images-offer-id-" + t  + '-item' + s + ' [data-zoomable-video="yes"]');
                    console.log(o.dataset.videoId);

                v(o), p(o.dataset.videoId)
            }, m = [];

            function v(e) {
                document.querySelector("body").classList.add("t-zoomer__show"), document.querySelector(".t-zoomer__container").innerHTML += '<div class="t-zoomer__slider"><div></div></div>';
                var t = e.closest(".zoomer-root").querySelectorAll('[data-zoomable="yes"], [data-zoomable-video="yes"]');
                t.forEach((function (e) {
                    "yes" === e.dataset.zoomableVideo ? document.querySelector(".t-zoomer__slider > div").innerHTML += '<div><div class="t-zoomer__slider__item"><div class="t-zoomer__slider__item__video"></div></div>' : -1 === m.indexOf(e.dataset.imgZoomUrl) && void 0 !== e.dataset.imgZoomUrl && (document.querySelector(".t-zoomer__slider > div").innerHTML += '<div><div class="t-zoomer__slider__item"><img class="t-zoomer__slider__item__img tns-lazy-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII=" data-src="' + e.dataset.imgZoomUrl + '"></div>'), m.push(e.dataset.imgZoomUrl)
                }));
                var o = document.createElement("div");
                document.querySelector(".t-zoomer__container").append(o), o.classList.add("tns-nav-custom-wrp");
                var r = document.createElement("div");
                o.append(r), r.classList.add("tns-nav-custom-body");
                for (var i = 1; i < t.length; i++) r.append(document.createElement("button"));
                var a = e.closest(".zoomer-root").querySelector('[data-zoomable-video="yes"]');
                if (a) {
                    o.classList.add("has-video");
                    var c = document.createElement("div");
                    o.append(c), c.classList.add("tns-nav-video-toggle-btn"), c.dataset.videoId = a.dataset.videoId, c.addEventListener("click", _), document.querySelector(".t-zoomer__slider__item__video").addEventListener("click", _), document.querySelector(".t-zoomer__slider__item__video").dataset.videoId = a.dataset.videoId
                }
                (d = (0, n.W)({
                    container: ".t-zoomer__slider > div",
                    items: 1,
                    mode: "gallery",
                    slideBy: "page",
                    arrowKeys: !0,
                    speed: 500,
                    mouseDrag: !0,
                    autoplay: !1,
                    navContainer: ".tns-nav-custom-body",
                    swipeAngle: 60,
                    preventScrollOnTouch: "auto",
                    lazyload: !0
                })).events.on("indexChanged", (function () {
                    window.myLazyLoad.update()
                })), window.myLazyLoad.update(), d.goTo(e.dataset.index)
            }

            var _ = function (e) {
                p(e.target.dataset.videoId)
            }, f = function () {
                y()
            };

            function y() {
                var e = document.querySelector(".tns-nav-custom-body"),
                    t = document.querySelector(".tns-nav-custom-wrp"),
                    o = document.querySelector(".tns-nav-video-toggle-btn");
                document.querySelector(".tns-inner").style.display = "block", document.querySelector(".tns-controls").style.display = "block", document.querySelector(".t-zoomer__video").style.display = "none", t.classList.add("has-video"), t.classList.remove("only-btn"), null == o || o.classList.remove("to-photo"), e.style.display = "block", null == o || o.removeEventListener("click", f), null == o || o.addEventListener("click", _), d.goTo(0), null !== r && r.stopVideo()
            }

            function p(e) {
                if (void 0 !== e && "" !== e) {
                    a();
                    var t = document.querySelector(".tns-nav-custom-body"),
                        o = document.querySelector(".tns-nav-custom-wrp"),
                        n = document.querySelector(".tns-nav-video-toggle-btn");
                    document.querySelector(".tns-inner").style.display = "none", document.querySelector(".tns-controls").style.display = "none", document.querySelector(".t-zoomer__video").style.display = "flex", o.classList.remove("has-video"), o.classList.add("only-btn"), n.classList.add("to-photo"), t.style.display = "none", n.removeEventListener("click", _), n.addEventListener("click", f);
                    var i = document.createElement("div");
                    console.log()
                    let videoCode = document.querySelector('#pd-video-modal').getAttribute('data-video-id')
                    if (!videoCode || !videoCode.length) {
                        videoCode = $('[data-zoomable-video][data-video-id]').attr('data-video-id')
                    }
                    i.innerHTML = videoCode;
                    document.querySelector(".t-zoomer__video > div").append(i);

                    /* document.querySelector(".t-zoomer__video > div").append(i), i.setAttribute("id", "t-zoomer-video-player"), null === r && (r = new YT.Player("t-zoomer-video-player", {
                        height: "100%",
                        width: "100%",
                        videoId: e,
                        playerVars: {rel: 0, showinfo: 0, ecver: 2, modestbranding: 1},
                        events: {onReady: L, onStateChange: g}
                    })) */

                }
            }

            function g(e) {
                e.data === YT.PlayerState.ENDED && r.playVideo()
            }

            function L() {
                r.playVideo()
            }

            function S() {
                document.querySelector(".t-zoomer__video").style.display = "none", y(), null !== r && (r.destroy(), r = null), document.querySelector("body").classList.remove("t-zoomer__show"), document.querySelector("body").classList.remove("t-zoomer__show_fixed"), document.querySelector(".t-zoomer__slider").remove(), document.querySelector(".tns-nav-custom-wrp").remove(), d.destroy(), m = [];
                document.querySelector('.t-zoomer__video > div').innerHTML = ''
               /*  const player = document.querySelector('.t-zoomer__video iframe');
                player.contentWindow.postMessage(JSON.stringify({
                    type: 'player:pause',

                }), '*'); */
            }
        }
    }, o = {};

    function n(e) {
        var r = o[e];
        if (void 0 !== r) return r.exports;
        var i = o[e] = {exports: {}};
        return t[e].call(i.exports, i, i.exports, n), i.exports
    }

    n.m = t, e = [], n.O = function (t, o, r, i) {
        if (!o) {
            var a = 1 / 0;
            for (s = 0; s < e.length; s++) {
                o = e[s][0], r = e[s][1], i = e[s][2];
                for (var c = !0, d = 0; d < o.length; d++) (!1 & i || a >= i) && Object.keys(n.O).every((function (e) {
                    return n.O[e](o[d])
                })) ? o.splice(d--, 1) : (c = !1, i < a && (a = i));
                if (c) {
                    e.splice(s--, 1);
                    var l = r();
                    void 0 !== l && (t = l)
                }
            }
            return t
        }
        i = i || 0;
        for (var s = e.length; s > 0 && e[s - 1][2] > i; s--) e[s] = e[s - 1];
        e[s] = [o, r, i]
    }, n.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return n.d(t, {a: t}), t
    }, n.d = function (e, t) {
        for (var o in t) n.o(t, o) && !n.o(e, o) && Object.defineProperty(e, o, {enumerable: !0, get: t[o]})
    }, n.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, n.j = "detail", function () {
        var e = {detail: 0, zoomer_detail: 0};
        n.O.j = function (t) {
            return 0 === e[t]
        };
        var t = function (t, o) {
            var r, i, a = o[0], c = o[1], d = o[2], l = 0;
            if (a.some((function (t) {
                return 0 !== e[t]
            }))) {
                for (r in c) n.o(c, r) && (n.m[r] = c[r]);
                if (d) var s = d(n)
            }
            for (t && t(o); l < a.length; l++) i = a[l], n.o(e, i) && e[i] && e[i][0](), e[i] = 0;
            return n.O(s)
        }, o = self.webpackChunkpaulmark = self.webpackChunkpaulmark || [];
        o.forEach(t.bind(null, 0)), o.push = t.bind(null, o.push.bind(o))
    }();
    var r = n.O(void 0, ["npm.tiny-slider", "npm.vanilla-lazyload", "local.visable_check", "local.loader"], (function () {
        return n(218)
    }));
    r = n.O(r)
}();
