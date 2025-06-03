!(function (e) {
  "use strict";
  e(window).on("load", function () {
    e(".preloader").fadeOut();
  }),
    e(".preloader").length > 0 &&
      e(".preloaderCls").each(function () {
        e(this).on("click", function (t) {
          t.preventDefault(), e(".preloader").css("display", "none");
        });
      }),
    e(".mobile-menu-active").vsmobilemenu({
      menuContainer: ".vs-mobile-menu",
      expandScreenWidth: 992,
      menuToggleBtn: ".vs-menu-toggle",
    });
  var t,
    n,
    i,
    a,
    s,
    o,
    l = "",
    r = ".scrollToTop";
  function c() {
    let t = e(".main-menu > .menu-item-has-children > ul"),
      n = e(".main-menu .menu-item-has-children > ul > ul");
    t.each(function () {
      e(window).width() > 991 &&
        (e(this).offset().left + e(this).width() > e(window).width()
          ? e(this).css({ left: "auto", right: "100%" })
          : e(this).css({ left: "0", right: "auto" }));
    }),
      n.each(function () {
        e(window).width() > 991 &&
          e(this).offset().left + e(this).width() > e(window).width() &&
          (e(this).css({ left: "auto", right: "100%" }),
          e(this).find(".sub-menu").css({ left: "auto", right: "100%" }));
      });
  }
  (e(window).on("scroll", function () {
    var t, n, i;
    (t = e(".sticky-header")),
      (n = "active"),
      (i = e(window).scrollTop()),
      e(window).scrollTop() > 600
        ? i > l
          ? t.removeClass(n)
          : t.addClass(n)
        : t.removeClass(n),
      (l = i),
      e(this).scrollTop() > 400
        ? e(r).addClass("show")
        : e(r).removeClass("show");
  }),
  e(r).on("click", function (t) {
    return (
      t.preventDefault(), e("html, body").animate({ scrollTop: 0 }, 3e3), !1
    );
  }),
  e(".background-image").length > 0 &&
    e(".background-image").each(function () {
      var t = e(this).attr("data-vs-img");
      e(this).css({ "background-image": "url(" + t + ")" });
    }),
  (t = ".sidemenu-wrapper"),
  (n = ".sideMenuCls"),
  (i = "show"),
  e(".sideMenuToggler").on("click", function (n) {
    n.preventDefault(), e(t).addClass(i), e("body").addClass("overflow-hidden");
  }),
  e(t).on("click", function (n) {
    n.stopPropagation(),
      e(t).removeClass(i),
      e("body").removeClass("overflow-hidden");
  }),
  e(t + " > div").on("click", function (n) {
    n.stopPropagation(),
      e(t).addClass(i),
      e("body").addClass("overflow-hidden");
  }),
  e(n).on("click", function (n) {
    n.preventDefault(),
      n.stopPropagation(),
      e(t).removeClass(i),
      e("body").removeClass("overflow-hidden");
  }),
  (function (t, n, i, a) {
    e(n).on("click", function (n) {
      n.preventDefault(), e(t).addClass(a);
    }),
      e(t).on("click", function (n) {
        n.stopPropagation(), e(t).removeClass(a);
      }),
      e(t)
        .find("form")
        .on("click", function (n) {
          n.stopPropagation(), e(t).addClass(a);
        }),
      e(i).on("click", function (n) {
        n.preventDefault(), n.stopPropagation(), e(t).removeClass(a);
      });
  })(".popup-search-box", ".searchBoxTggler", ".searchClose", "show"),
  e(".counter").counterUp({ delay: 10, time: 1e3 }),
  e(".vs-hero-carousel").each(function () {
    var t = e(this);
    function n(e) {
      return t.data(e);
    }
    var i = ".thumb",
      a = "data-slide-go";
    t
      .on("sliderDidLoad", function (n, s) {
        var o = s.slides.current.index,
          l = 1;
        t.find(i).each(function () {
          e(this).attr(a, l),
            l++,
            e(this).on("click", function (n) {
              n.preventDefault();
              var i = e(this).attr(a);
              t.layerSlider(parseInt(i));
            });
        }),
          e(".thumb[" + a + '="' + o + '"').addClass("active");
      })
      .on("slideChangeDidComplete", function (t, n) {
        var i = n.slides.current.index,
          s = ".thumb[" + a + '="' + i + '"';
        e(s).addClass("active"), e(s).siblings().removeClass("active");
      }),
      t.on("sliderWillLoad", function (e, t) {
        var n = jQuery(this).find(".ls-responsive"),
          i = jQuery(window).width();
        n.each(function () {
          var e = jQuery(this);
          function t(t) {
            return "" === e.data(t) ? e.data(null) : e.data(t);
          }
          var n = t(
              i < 767
                ? "ls-mobile"
                : i < 992
                ? "ls-tablet"
                : i < 1025
                ? "ls-laptop"
                : "ls-desktop"
            ),
            a = void 0 !== e.attr("style") ? e.attr("style") : " ";
          e.attr("style", a + n);
        });
      }),
      t.find("[data-ls-go]").each(function () {
        e(this).on("click", function (n) {
          n.preventDefault();
          var i = e(this).data("ls-go");
          t.layerSlider(i);
        });
      }),
      t.layerSlider({
        allowRestartOnResize: !0,
        globalBGImage: !!n("globalbgimage") && n("globalbgimage"),
        maxRatio: n("maxratio") ? n("maxratio") : 3,
        type: n("slidertype") ? n("slidertype") : "responsive",
        pauseOnHover: !!n("pauseonhover"),
        navPrevNext: !!n("navprevnext"),
        hoverPrevNext: !!n("hoverprevnext"),
        hoverBottomNav: !!n("hoverbottomnav"),
        navStartStop: !!n("navstartstop"),
        navButtons: !!n("navbuttons"),
        loop: 0 != n("loop"),
        autostart: !!n("autostart"),
        height:
          e(window).width() < 767
            ? n("sm-height")
              ? n("sm-height")
              : n("height")
            : n("height")
            ? n("height")
            : 1080,
        responsiveUnder: n("responsiveunder") ? n("responsiveunder") : 1920,
        layersContainer: n("container") ? n("container") : 1920,
        showCircleTimer: !!n("showcircletimer"),
        skinsPath: "layerslider/skins/",
        thumbnailNavigation: 0 != n("thumbnailnavigation"),
      });
  }),
  e("select").length > 0 &&
    (e("select").niceSelect(),
    e("select").parent().addClass("select-box-area")),
  e(".dateTime-pick").datetimepicker({
    timepicker: !0,
    datepicker: !0,
    format: "y-m-d H:i",
    hours12: !1,
    step: 30,
  }),
  e(".date-pick").datetimepicker({
    timepicker: !1,
    datepicker: !0,
    format: "m-d-y",
    step: 10,
  }),
  e(".time-pick").datetimepicker({
    datepicker: !1,
    timepicker: !0,
    format: "H:i",
    hours12: !1,
    step: 10,
  }),
  e(".popup-image").magnificPopup({ type: "image", gallery: { enabled: !0 } }),
  e(".popup-video").magnificPopup({ type: "iframe" }),
  e(".bar-progress .progress-value").each(function () {
    var t = e(this).attr("data-value");
    e(this).css("width", t + "%");
  }),
  c(),
  e(window).on("resize", function () {
    c();
  }),
  e("#buyerShipAnother").on("click", function () {
    e(".vs-billing-differentAddress").toggle();
  }),
  e(".quantity-plus").each(function () {
    e(this).on("click", function () {
      var t = e(this).siblings(".qty-input"),
        n = parseInt(t.val());
      isNaN(n) || t.val(n + 1);
    });
  }),
  e(".quantity-minus").each(function () {
    e(this).on("click", function () {
      var t = e(this).siblings(".qty-input"),
        n = parseInt(t.val());
      !isNaN(n) && n > 1 && t.val(n - 1);
    });
  }),
  e(".vs-rating-input").length > 0 &&
    e(".vs-rating-input").each(function () {
      e(this)
        .find("span")
        .on("click", function () {
          e(".vs-rating-input span").addClass("active"),
            e(this).nextAll("span").removeClass("active");
        });
    }),
  e((a = ".onepage-nav, .main-menu, .vs-mobile-menu")).length > 0 &&
    e(a).each(function () {
      e(this)
        .find("a")
        .each(function () {
          e(this).on("click", function () {
            var t = e(this.getAttribute("href"));
            t.length &&
              (event.preventDefault(),
              e("html, body")
                .stop()
                .animate({ scrollTop: t.offset().top - 10 }, 1e3));
          });
        });
    }),
  e(".vs-btn").length > 0 &&
    e(".vs-btn").each(function () {
      e(this)
        .contents()
        .filter(function () {
          return 1 !== this.nodeType;
        })
        .wrap('<span class="vs-btn-text"></span>'),
        e(this).find("i").wrap('<span class="vs-btn-icon" />');
      var t = e(this).html();
      e(this).html(""),
        e(this).prepend(
          '<span class="vs-btn-shape"></span><span class="vs-btn-shape"></span><span class="vs-btn-shape"></span> <span class="vs-btn-shape"></span>' +
            t
        );
    }),
  e(".vs-progress .progress-value").each(function () {
    var t = e(this).attr("data-valuenow");
    e(this).css("width", t + "%");
  }),
  e("#slider-range").slider({
    range: !0,
    min: 40,
    max: 600,
    values: [60, 570],
    slide: function (t, n) {
      e("#amount").val("$" + n.values[0] + " - $" + n.values[1]);
    },
  }),
  e("#amount").val(
    "$" +
      e("#slider-range").slider("values", 0) +
      " - $" +
      e("#slider-range").slider("values", 1)
  ),
  new WOW({
    boxClass: "wow",
    animateClass: "animated",
    offset: 0,
    mobile: !0,
    live: !0,
    resetAnimation: !1,
  }).init(),
  e(".vs-setting-plate").length) &&
    (e(".vs-setting-plate .color-btn").each(function () {
      (o = e(this).attr("data-color")),
        e(this).css({ "background-color": o }),
        e(this).on("click", function () {
          (s = e(this).data("url")), e("#themeColor").attr("href", s);
        });
    }),
    e(".plateToggle").on("click", function (t) {
      return t.preventDefault(), e(".vs-setting-plate").toggleClass("open"), !1;
    }));
})(jQuery);
