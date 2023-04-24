var resizeEnd,
    limitX,
    limitY,
    page_loaded = !1,
    vh = 0.01 * window.innerHeight;
document.documentElement.style.setProperty("--vh", vh + "px");
var pad = 0.04 * window.innerWidth;
pad < 40 && (pad = 40), gsap.config({ nullTargetWarn: !1 });
var lastScrollTop = 0;
document.documentElement.style.setProperty("--pad", pad + "px"),
    document.documentElement.setAttribute("data-pad", pad),
    document.documentElement.setAttribute("data-vh", vh),
    (function (d) {
        ($win = d(window)),
            ($history = $win[0].history),
            ($doc = d(document)),
            ($scrolled = 0),
            ($bod = d("body")),
            ($winW = $win.width()),
            ($docH = $doc.height()),
            ($winH = $win.height()),
            ($scrolled = d("#global-wrapper").scrollTop());
        var t = $winW / 2,
            o = $winH / 2,
            s = $winW,
            a = $winH;
        d(".section.list").each(function () {
            ($this = d(this)),
                ($top = $this.offset().top),
                ($height = $this.outerHeight(!0)),
                $top < $scrolled + $winH && $top > $scrolled
                    ? $this.find(".sticky").css("top", $top - $scrolled + "px")
                    : $top + $height < $scrolled + $winH &&
                      $this
                          .find(".sticky")
                          .css(
                              "top",
                              $top + $height - $winH - $scrolled + "px"
                          );
        }),
            d('a[href^="#section-"]').click(function (e) {
                var t = d(this).attr("href");
                ($section =
                    d(t)[0].offsetTop - d("#global-wrapper")[0].offsetTop),
                    TweenMax.to(d("#global-wrapper"), 1, {
                        ease: Power2.easeOut,
                        scrollTo: { y: $section, autoKill: !1 },
                    }),
                    e.preventDefault();
            }),
            d(".mobile-toggle").click(function (e) {
                d("body").hasClass("show-nav")
                    ? d("body").removeClass("show-nav")
                    : d("body").addClass("show-nav"),
                    e.preventDefault();
            });
        var l,
            c,
            h,
            p,
            r = 0,
            $ = 2 * Math.PI,
            w = !1,
            u = [];
        function i() {
            d(".live-background").each(function () {
                (myCanvas = d(this).find(".lb-canvas")[0]),
                    (myContext = myCanvas.getContext("2d")),
                    (function (e, t, o) {
                        (l = e.width() / 2),
                            (c = e.height() / 2),
                            (t.width = l),
                            (t.height = c),
                            (h = l),
                            (p = c),
                            d(e).hasClass("darkmode")
                                ? (o.fillStyle = "#000000")
                                : (o.fillStyle = "#d99c47");
                        o.fillRect(0, 0, t.width, t.height);
                        var s = Math.max(
                                c / 3,
                                (c / 1.75) * parseFloat(Math.random())
                            ),
                            a = {
                                x: l * parseFloat(Math.random()),
                                y: -0.5 * c,
                            },
                            r = {
                                x: l * parseFloat(Math.random()),
                                y: c + 0.5 * c,
                            },
                            i = { x: -1.2 * s, y: c / 2 },
                            n = { fill: "#3181c5" };
                        d(e).hasClass("darkmode") &&
                            ((curTL = new TimelineMax({
                                repeat: -1,
                                repeatDelay: 0,
                                yoyo: !1,
                            })),
                            curTL
                                .to(n, 1, {
                                    fill: "#d99c47",
                                    ease: Linear.easeNone,
                                })
                                .to(n, 1, {
                                    fill: "#dc6731",
                                    ease: Linear.easeNone,
                                })
                                .to(n, 1, {
                                    fill: "#c7507c",
                                    ease: Linear.easeNone,
                                })
                                .to(n, 1, {
                                    fill: "#3181c5",
                                    ease: Linear.easeNone,
                                }));
                        new TimelineMax({
                            repeat: -1,
                            repeatDelay: 2,
                            yoyo: !0,
                        })
                            .to(
                                a,
                                4,
                                {
                                    x: l * parseFloat(Math.random()),
                                    y: 0,
                                    ease: Linear.easeNone,
                                },
                                0
                            )
                            .to(
                                r,
                                6,
                                {
                                    x: l * parseFloat(Math.random()),
                                    y: c,
                                    ease: Linear.easeNone,
                                },
                                0
                            )
                            .to(
                                i,
                                3 * parseFloat(Math.random()) + 12,
                                {
                                    x: l + 1.2 * s,
                                    y: c / 2,
                                    ease: Linear.easeNone,
                                },
                                0
                            ),
                            u.push(
                                setInterval(function () {
                                    !(function (e, t, o, s, a, r, i, n) {
                                        if (!w && !d(e).hasClass("darkmode"))
                                            for (var l = 0; l < 3; l++)
                                                o.beginPath(),
                                                    0 === l
                                                        ? ((x = r.x),
                                                          (y = r.y),
                                                          (o.fillStyle =
                                                              "#d99c47"),
                                                          o.arc(
                                                              x,
                                                              y,
                                                              1.2 * i,
                                                              0,
                                                              $,
                                                              0
                                                          ))
                                                        : 1 === l
                                                        ? ((x = a.x),
                                                          (y = a.y),
                                                          (o.fillStyle =
                                                              "#dc6731"),
                                                          o.arc(
                                                              x,
                                                              y,
                                                              i,
                                                              0,
                                                              $,
                                                              0
                                                          ))
                                                        : 2 === l &&
                                                          ((x = s.x),
                                                          (y = s.y),
                                                          (o.fillStyle =
                                                              "#c7507c"),
                                                          o.arc(
                                                              x,
                                                              y,
                                                              i,
                                                              0,
                                                              $,
                                                              0
                                                          )),
                                                    o.fill();
                                        o.beginPath(),
                                            (o.fillStyle = n.fill),
                                            o.arc(
                                                (e.attr("data-x") -
                                                    e.offset().left) /
                                                    2,
                                                (e.attr("data-y") -
                                                    e.offset().top +
                                                    $scrolled) /
                                                    2,
                                                i / 1.7,
                                                0,
                                                $,
                                                0
                                            ),
                                            o.fill(),
                                            StackBlur.canvasRGB(
                                                t,
                                                0,
                                                0,
                                                t.width,
                                                t.height,
                                                30
                                            );
                                    })(e, t, o, a, r, i, s, n);
                                }, 40)
                            ),
                            o.translate(0, 0),
                            o.drawImage(t, 0, 0);
                    })(d(this), myCanvas, myContext);
            });
        }
        i(),
            d(window).on("touchmove", function (e) {
                (h = e.touches[0].pageX),
                    (p = e.touches[0].pageY - $scrolled),
                    d(".live-background").attr("data-x", h).attr("data-y", p);
            }),
            d(window).on("mousemove", function (e) {
                (h = e.pageX),
                    (p = e.pageY - $scrolled),
                    d(".live-background").attr("data-x", h).attr("data-y", p),
                    (t = Math.min(e.pageX, s)),
                    (o = Math.min(e.clientY, a)),
                    t < 0 && (t = 0),
                    o < 0 && (o = 0);
            });
        var n,
            f,
            e = d("#work-cursor"),
            g = 0,
            m = 0;
        setInterval(function () {
            (g += (t - g) / 8), (m += (o - m) / 8), e.css({ left: g, top: m });
        }, 30);
        function v() {
            ($winW = $win.width()),
                ($winH = $win.height()),
                ($docH = $doc.height()),
                ($footerH = d("#global-footer").height());
            var e = 0.01 * window.innerHeight;
            document.documentElement.style.setProperty("--vh", e + "px");
            var t = 0.04 * window.innerWidth;
            t < 40 && (t = 40),
                1 <= d(".section.accordion").length &&
                    d(".section.accordion").each(function () {
                        d(".section.accordion .row").each(function () {
                            ($this = d(this)),
                                ($content = $this.find(".row-content")),
                                ($header = $this.find(".row-header")),
                                ($maxHeight =
                                    parseInt($header.height()) +
                                    parseInt(
                                        $content.actual("outerHeight", {
                                            includeMargin: !0,
                                        })
                                    )),
                                $this.attr(
                                    "style",
                                    "--maxHeight: " + $maxHeight + "px"
                                );
                        });
                    }),
                ($scrolled = d("#global-wrapper").scrollTop()),
                1 <= d(".section.contact").length &&
                    d(".section.contact").each(function () {
                        d(this).attr(
                            "style",
                            "--max-width:" +
                                d(this).find("h1").outerWidth() +
                                "px;--max-height:" +
                                d(this)
                                    .find(".gform_wrapper")
                                    .actual("outerHeight", {
                                        includeMargin: !0,
                                    }) +
                                "px"
                        );
                    }),
                b($scrolled),
                document.documentElement.style.setProperty("--pad", t + "px"),
                document.documentElement.setAttribute("data-pad", t),
                document.documentElement.setAttribute("data-vh", e);
        }
        function b(e) {
            e + $winH / 1.2 > d("#global-footer").offset().top &&
                d("#global-footer").addClass("shown"),
                r != $scrolled &&
                    ((p += r),
                    (r = $scrolled),
                    (p -= r),
                    d(".live-background").attr("data-y", p)),
                d(".section").each(function () {
                    ($this = d(this)),
                        ($top =
                            $this[0].offsetTop -
                            d("#global-wrapper")[0].offsetTop),
                        $top < $scrolled + $winH &&
                            page_loaded &&
                            $this.addClass("shown"),
                        $this.hasClass("list") &&
                            (($this = d(this)),
                            ($top =
                                $this[0].offsetTop -
                                d("#global-wrapper")[0].offsetTop),
                            ($height = $this.outerHeight(!0)),
                            $top < $scrolled + $winH && $top > $scrolled
                                ? $this
                                      .find(".sticky")
                                      .css(
                                          "top",
                                          Math.max(0, $top - $scrolled) + "px"
                                      )
                                : $top + $height < $scrolled + $winH
                                ? $this
                                      .find(".sticky")
                                      .css(
                                          "top",
                                          $top +
                                              $height -
                                              $winH -
                                              $scrolled +
                                              "px"
                                      )
                                : $scrolled > $top
                                ? $this.find(".sticky").css("top", "0px")
                                : $this
                                      .find(".sticky")
                                      .css(
                                          "top",
                                          Math.max(0, $top - $scrolled) + "px"
                                      )),
                        $this.hasClass("work_banner") &&
                            (($this = d(this)),
                            ($top =
                                $this[0].offsetTop -
                                d("#global-wrapper")[0].offsetTop),
                            ($height = $this.outerHeight(!0)),
                            $top < $scrolled + $winH && $top > $scrolled
                                ? ($this.find("figure").css("top", "0px"),
                                  $this.css("z-index", "10"),
                                  d("#work-cursor span#work-cursor-title").html(
                                      d(this).attr("data-title")
                                  ))
                                : $scrolled > $top
                                ? ($this
                                      .find("figure")
                                      .css("top", $top - $scrolled + "px"),
                                  $this.css("z-index", "100"))
                                : $this
                                      .find("figure")
                                      .css(
                                          "top",
                                          Math.max(0, $top - $scrolled) + "px"
                                      ));
                });
        }
        d(".work_banner .target").hover(
            function () {
                d("#work-cursor span#work-cursor-title").html(
                    d(this).attr("data-title")
                ),
                    d("#work-cursor").addClass("show"),
                    d("#work-cursor").hasClass("shape-1")
                        ? d("#work-cursor")
                              .removeClass("shape-1")
                              .addClass("shape-2")
                        : d("#work-cursor").hasClass("shape-2")
                        ? d("#work-cursor")
                              .removeClass("shape-2")
                              .addClass("shape-3")
                        : d("#work-cursor").hasClass("shape-3")
                        ? d("#work-cursor")
                              .removeClass("shape-3")
                              .addClass("shape-4")
                        : d("#work-cursor").hasClass("shape-4")
                        ? d("#work-cursor")
                              .removeClass("shape-4")
                              .addClass("shape-5")
                        : d("#work-cursor").hasClass("shape-5") &&
                          d("#work-cursor")
                              .removeClass("shape-5")
                              .addClass("shape-1");
            },
            function () {
                d("#work-cursor").removeClass("show");
            }
        ),
            ($caro = 0),
            1 <= d(".section.carousel .swiper-container").length &&
                d(".section.carousel .swiper-container").each(function () {
                    $caro++,
                        d(this).addClass("slider-" + $caro),
                        d(this).hasClass("fade")
                            ? new Swiper(".slider-" + $caro, {
                                  slidesPerView: 1,
                                  speed: 800,
                                  effect: "fade",
                                  slideToClickedSlide: !0,
                                  autoplay: { delay: 5e3 },
                                  pagination: {
                                      el:
                                          ".slider-" +
                                          $caro +
                                          " .swiper-pagination",
                                      type: "fraction",
                                      renderFraction: function (e, t) {
                                          return (
                                              '<span class="' +
                                              e +
                                              '"></span>/<span class="' +
                                              t +
                                              '"></span>'
                                          );
                                      },
                                  },
                              })
                            : new Swiper(".slider-" + $caro, {
                                  slidesPerView: 1,
                                  freeMode: !1,
                                  loop: !1,
                                  speed: 800,
                                  slideToClickedSlide: !0,
                                  navigation: { nextEl: ".swiper-next-btn" },
                                  on: {
                                      slideChangeTransitionEnd: function () {
                                          1 <= d(".swiper-next-btn").length &&
                                              d(".swiper-next-btn").addClass(
                                                  "hide"
                                              );
                                      },
                                  },
                              });
                }),
            1 <= d(".section.related_projects .swiper-container").length &&
                d(".section.related_projects .swiper-container").each(
                    function () {
                        $caro++, d(this).addClass("slider-" + $caro);
                        new Swiper(".slider-" + $caro, {
                            slidesPerView: "auto",
                            freeMode: !1,
                            autoHeight: !0,
                            loopFillGroupWithBlank: !1,
                            loop: !1,
                            slideToClickedSlide: !0,
                        });
                    }
                ),
            1 <= d(".section.slideshow .swiper-container").length &&
                d(".section.slideshow .swiper-container").each(function () {
                    $caro++, d(this).addClass("slider-" + $caro);
                    new Swiper(".slider-" + $caro, {
                        slidesPerView: "auto",
                        freeMode: !1,
                        autoHeight: !0,
                        speed: 800,
                        centeredSlides: !0,
                        loopFillGroupWithBlank: !1,
                        centeredSlidesBounds: !0,
                        loop: !0,
                        slideToClickedSlide: !0,
                        navigation: {
                            nextEl: ".swiper-btn-next",
                            prevEl: ".swiper-btn-prev",
                        },
                        on: {
                            slideChangeTransitionEnd: function () {
                                1 <=
                                d(".slider-" + $caro + " .swiper-slide-prev")
                                    .length
                                    ? d(
                                          ".slider-" +
                                              $caro +
                                              " .swiper-btn-prev"
                                      ).removeClass("hide")
                                    : d(
                                          ".slider-" +
                                              $caro +
                                              " .swiper-btn-prev"
                                      ).addClass("hide"),
                                    1 <=
                                    d(
                                        ".slider-" +
                                            $caro +
                                            " .swiper-slide-next"
                                    ).length
                                        ? d(
                                              ".slider-" +
                                                  $caro +
                                                  " .swiper-btn-next"
                                          ).removeClass("hide")
                                        : d(
                                              ".slider-" +
                                                  $caro +
                                                  " .swiper-btn-next"
                                          ).addClass("hide");
                            },
                            init: function () {
                                1 <=
                                d(".slider-" + $caro + " .swiper-slide-prev")
                                    .length
                                    ? d(
                                          ".slider-" +
                                              $caro +
                                              " .swiper-btn-prev"
                                      ).removeClass("hide")
                                    : d(
                                          ".slider-" +
                                              $caro +
                                              " .swiper-btn-prev"
                                      ).addClass("hide"),
                                    1 <=
                                    d(
                                        ".slider-" +
                                            $caro +
                                            " .swiper-slide-next"
                                    ).length
                                        ? d(
                                              ".slider-" +
                                                  $caro +
                                                  " .swiper-btn-next"
                                          ).removeClass("hide")
                                        : d(
                                              ".slider-" +
                                                  $caro +
                                                  " .swiper-btn-next"
                                          ).addClass("hide");
                            },
                        },
                    });
                }),
            1 <= d("#work_filters").length &&
                d("#work_filters-toggle").click(function (e) {
                    d("#work_filters").hasClass("expand")
                        ? d("#work_filters").removeClass("expand")
                        : d("#work_filters").addClass("expand"),
                        e.preventDefault();
                }),
            1 <= d(".section.accordion").length &&
                d(".section.accordion .row-header").click(function (e) {
                    d(this).parents(".row").hasClass("expand")
                        ? d(this).parents(".row").removeClass("expand")
                        : d(this).parents(".row").addClass("expand");
                }),
            1 <= d(".section.presentation .swiper-container").length &&
                d(".section.presentation .swiper-container").each(function () {
                    $caro++, d(this).addClass("slider-" + $caro);
                    new Swiper(".slider-" + $caro, {
                        slidesPerView: 1,
                        freeMode: !1,
                        speed: 800,
                        autoHeight: !0,
                        navigation: {
                            nextEl: ".swiper-btn-next",
                            prevEl: ".swiper-btn-prev",
                        },
                        on: {
                            slideChangeTransitionEnd: function () {
                                1 <=
                                d(".slider-" + $caro + " .swiper-slide-prev")
                                    .length
                                    ? d(
                                          ".slider-" +
                                              $caro +
                                              " .swiper-btn-prev"
                                      ).removeClass("hide")
                                    : d(
                                          ".slider-" +
                                              $caro +
                                              " .swiper-btn-prev"
                                      ).addClass("hide"),
                                    1 <=
                                    d(
                                        ".slider-" +
                                            $caro +
                                            " .swiper-slide-next"
                                    ).length
                                        ? (d(
                                              ".slider-" +
                                                  $caro +
                                                  " .swiper-btn-next"
                                          ).removeClass("hide"),
                                          d(".slider-" + $caro)
                                              .parents(".section.presentation")
                                              .find(".next-title")
                                              .html(
                                                  d(
                                                      ".slider-" +
                                                          $caro +
                                                          " .swiper-slide-next"
                                                  ).attr("data-title")
                                              ))
                                        : (d(
                                              ".slider-" +
                                                  $caro +
                                                  " .swiper-btn-next"
                                          ).addClass("hide"),
                                          d(".slider-" + $caro)
                                              .parents(".section.presentation")
                                              .find(".next-title")
                                              .html(""));
                            },
                            init: function () {
                                1 <=
                                d(".slider-" + $caro + " .swiper-slide-prev")
                                    .length
                                    ? d(
                                          ".slider-" +
                                              $caro +
                                              " .swiper-btn-prev"
                                      ).removeClass("hide")
                                    : d(
                                          ".slider-" +
                                              $caro +
                                              " .swiper-btn-prev"
                                      ).addClass("hide"),
                                    1 <=
                                    d(
                                        ".slider-" +
                                            $caro +
                                            " .swiper-slide-next"
                                    ).length
                                        ? (d(
                                              ".slider-" +
                                                  $caro +
                                                  " .swiper-btn-next"
                                          ).removeClass("hide"),
                                          d(".slider-" + $caro)
                                              .parents(".section.presentation")
                                              .find(".next-title")
                                              .html(
                                                  d(
                                                      ".slider-" +
                                                          $caro +
                                                          " .swiper-slide-next"
                                                  ).attr("data-title")
                                              ))
                                        : (d(
                                              ".slider-" +
                                                  $caro +
                                                  " .swiper-btn-next"
                                          ).addClass("hide"),
                                          d(".slider-" + $caro)
                                              .parents(".section.presentation")
                                              .find(".next-title")
                                              .html(""));
                            },
                        },
                    });
                }),
            ($randPreload = Math.ceil(5 * Math.random())),
            1 == $randPreload
                ? (($totBlocks = d(".loader-block").length),
                  (loaderInt = setInterval(function () {
                      d(".loader-block.shown").removeClass("shown"),
                          ($rand = Math.random() * $totBlocks),
                          d(
                              ".loader-block:nth-of-type(" +
                                  parseInt($rand.toFixed(0)) +
                                  ")"
                          ).addClass("shown"),
                          ($rand = Math.random() * $totBlocks),
                          d(
                              ".loader-block:nth-of-type(" +
                                  parseInt($rand.toFixed(0)) +
                                  ")"
                          ).addClass("shown");
                  }, 100)))
                : 2 === $randPreload
                ? (($totBlocks = d(".loader-block").length),
                  ($b = 1),
                  (loaderInt = setInterval(function () {
                      d(".loader-block:nth-of-type(" + $b + ")").addClass(
                          "shown"
                      ),
                          $b++,
                          $b > $totBlocks + 4 &&
                              (($b = 1),
                              d(".loader-block.shown").removeClass("shown"));
                  }, 100)))
                : 3 === $randPreload
                ? (d(".loader-block").addClass("shown"),
                  gsap.set(d("#global-loader"), {
                      clipPath: "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)",
                  }),
                  (loaderTL1 = new TimelineMax({
                      repeat: -1,
                      repeatDelay: 0.25,
                      yoyo: !1,
                  })),
                  loaderTL1
                      .to(
                          d("#global-loader"),
                          0.5,
                          {
                              clipPath:
                                  "polygon(100% 0%, 100% 0%, 100% 100%, 100% 100%)",
                              ease: Linear.easeNone,
                          },
                          0.25
                      )
                      .to(
                          d("#global-loader"),
                          0,
                          {
                              clipPath:
                                  "polygon(0% 0%, 0% 0%, 0% 100%, 0% 100%)",
                              ease: Linear.easeNone,
                          },
                          0.75
                      )
                      .to(
                          d("#global-loader"),
                          0.5,
                          {
                              clipPath:
                                  "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)",
                              ease: Linear.easeNone,
                          },
                          1.25
                      ))
                : 4 === $randPreload
                ? d("#global-loader").addClass("blurred")
                : 5 === $randPreload &&
                  d("#global-loader").addClass("stretched"),
            window.addEventListener("resize", function () {
                u.map((e) => {
                    clearInterval(e), (u = []);
                }),
                    gsap.globalTimeline.clear();
            }),
            window.addEventListener(
                "resize",
                ((n = function (e) {
                    (w = !1), i();
                }),
                function (e) {
                    f && clearTimeout(f), (f = setTimeout(n, 300, e));
                })
            ),
            $win
                .load(function () {
                    ($scrolled = d("#global-wrapper").scrollTop()),
                        v(),
                        setTimeout(function () {
                            (page_loaded = !0),
                                $bod.addClass("loaded"),
                                b($scrolled);
                        }, 500),
                        d("img.lazyload").each(function () {
                            ($src = d(this).attr("data-src")),
                                d(this).attr("src", $src),
                                d(this).load();
                        }),
                        d("video.lazy").each(function () {
                            ($src = d(this).find("source").attr("data-src")),
                                d(this).find("source").attr("src", $src),
                                d(this)[0].load(),
                                d(this)[0].play();
                        });
                })
                .resize(function () {
                    ($winW = $win.width()),
                        ($winH = $win.height()),
                        ($docH = $doc.height()),
                        ($footerH = d("#global-footer").height());
                    var e = 0.01 * window.innerHeight;
                    document.documentElement.style.setProperty(
                        "--vh",
                        e + "px"
                    );
                    var t = 0.04 * window.innerWidth;
                    t < 40 && (t = 40),
                        (s = $winW),
                        (a = $winH),
                        document.documentElement.style.setProperty(
                            "--pad",
                            t + "px"
                        ),
                        document.documentElement.setAttribute("data-pad", t),
                        document.documentElement.setAttribute("data-vh", e),
                        clearTimeout(resizeEnd),
                        (resizeEnd = setTimeout(function () {
                            v();
                        }, 300));
                }),
            d("#global-wrapper").scroll(function (e) {
                ($scrolled = d(this).scrollTop()), b($scrolled);
            }),
            d(document).bind("gform_post_render", function () {
                v();
            }),
            d(document).on("click", ".gform_button", function () {
                d(this).parents(".form-wrapper").addClass("activated");
            });
    })(jQuery),
    window.addEventListener("unload", function () {});
