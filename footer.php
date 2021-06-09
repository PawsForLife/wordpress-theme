<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pet_Circle
 */

?>

<!-- Footer -->
<footer id="footer">
    <section class="footer-top">
        <div class="container">

            <div class="auto-sign-up">
                <div id="forSubscribe" style="order: 2;margin-bottom: 20px;">
                    <h3>Get the best deals!</h3>
                    <p>Hear first about our exclusive offers and pet care advice.</p>
                    <div class="subscribe">
                        <form class="hidden" id="hiddenSubscribeForm" method="POST" action="/register">
                            <input type="hidden" id="hiddenEmail" name="email" />
                        </form>
                        <form id="subscribeForm" method="post" action="/">
                            <input type="email" id="subscribeEmail" name="subscribeEmail" placeholder="Enter your email address" />
                            <button type="submit" id="subscribeSubmit" class="secondary-btn">Sign me up</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="social">
                <div class="social-wrapper">
                    <h3> Follow us</h3>
                    <ul>
                        <li>
                            <a href="//www.facebook.com/petcircle.aus?fref=ts" target="none">
                                <i class="facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="//instagram.com/petcircle?ref=badge" target="none">
                                <i class="instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/user/petcircleau" target="none">
                                <i class="youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="bottom-footer">
        <div class="container">
            <div class="footer-links-wrapper">
                <div class="footer-links">
                    <div class="site-map">
                        <div class="info">
                            <h3>company info</h3>
                            <ul>
                                <li>
                                    <a href="/about-us">About Us</a>
                                </li>
                                <li>
                                    <a href="/community">Community</a>
                                </li>
                                <li>
                                    <a href="/media">Media</a>
                                </li>
                                <li>
                                    <a href="/careers">Careers</a>
                                </li>
                                <li>
                                    <a href="/privacy">Security and Privacy</a>
                                </li>
                                <li>
                                    <a href="/terms-of-use">Terms of use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="site-map">
                        <div class="help">
                            <h3>help centre</h3>
                            <ul>
                                <li>
                                    <a href="/contact-us">Contact Us</a>
                                </li>
                                <li>
                                    <a href="/shipping-policy">Shipping</a>
                                </li>
                                <li>
                                    <a href="/returns-policy">Returns</a>
                                </li>
                                <li>
                                    <a href="/best-price-guarantee">Best Price Guarantee</a>
                                </li>
                                <li>
                                    <a href="/auto-delivery">Auto Delivery</a>
                                </li>
                                <li>
                                    <a href="/faq">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="site-map">
                        <div class="partners">
                            <h3>Our partners</h3>
                            <ul class="partners">
                                <li>
                                    <a href="https://www.serviceseeking.com.au/" title="Service Seeking">ServiceSeeking.com.au</a>
                                </li>
                                <li>
                                    <a href="https://www.crackawines.com.au/" title="Cracka Wines"> Cracka Wines </a>
                                </li>
                                <li>
                                    <a href="https://www.showpo.com/" title="Showpo ">Showpo</a>
                                </li>
                                <li>
                                    <a href="https://www.harrisfarm.com.au/" title="Harris Farm Markets"> Harris Farm Markets </a>
                                </li>
                                <li>
                                    <a href="https://www.cocorepublic.com.au" title="Coco Republic"> Coco Republic </a>
                                </li>
                                <li>
                                    <a href="https://www.appliancesonline.com.au/" title="Appliances Online">Appliances Online</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-box">
                <div class="customer-hotline">
                    <h3>customer service</h3>
                    <span class="schedule">
                        <a href="/contact-us">available 7 days</a>
                    </span>
                    <i class="icomoon-icons">phone</i>
                    <span class="hotline-number hidden-xs">
                        1300 608 003
                    </span>
                    <span class="hotline-number visible-xs">
                        <a href="tel:1300608003">1300 608 003</a>
                    </span>
                    <ul class="payment-logo">
                        <li><img data-src="https://www.petcircle.com.au/petcircle-assets/images/icons/pc-visa.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="footer visa" /></li>
                        <li><img data-src="https://www.petcircle.com.au/petcircle-assets/images/icons/pc-master-card.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt=" footer mastercard" /></li>
                        <li><img data-src="https://www.petcircle.com.au/petcircle-assets/images/icons/pc-amex.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="footer amex" /></li>
                        <li><img data-src="https://www.petcircle.com.au/petcircle-assets/images/icons/pc-paypal.png" src="https://www.petcircle.com.au/petcircle-assets/images/placeholder.png" alt="footer paypal" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright">
        <div class="container">
            &copy; 2011-2021 Millell Pty Ltd | ABN: 17 148 151 213 | S01(REL-1.2030.2)
        </div>
    </section>
</footer>
</div>
<!-- min.css -->

<script src="<?php echo get_template_directory_uri();?>/js/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>


<!-- <script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/vendor/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script> -->
<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/vendor/jquery.validate.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/vendor/js.cookie-2.2.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/vendor/bootstrap.js"></script>
<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/vendor/jquery.noty.packaged.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/vendor/jquery.magnific-popup.js"></script>

<script type="text/javascript">
    var ScarabQueue = ScarabQueue || [];
    (function(id) {
        if (document.getElementById(id)) return;
        var js = document.createElement('script');
        js.id = id;
        js.src = '//cdn.scarabresearch.com/js/12338E77BBE8C25F/scarab-v2.js';
        var fs = document.getElementsByTagName('script')[0];
        fs.parentNode.insertBefore(js, fs);
    })('scarab-js-api');
</script>




<!-- <script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/web-extends-min.js"></script> -->
<!-- <script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/auth/auth-min.js"></script> -->
<!-- <script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/validations-min.js"></script> -->
<!-- <script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/auto-delivery/auto-delivery-min.js" id="autoDeliveryEvents" data-isSignIn=""></script> -->
<!-- <script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/tiered-incentive-min.js" type="text/javascript" charset="utf-8"></script> -->
<!-- <script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/product-box-min.js" type="text/javascript" charset="utf-8"></script> -->


<script src="<?php echo get_template_directory_uri();?>/js/mega-nav-min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri();?>/js/shiba-min.js"    type="text/javascript" charset="utf-8"></script>

<!-- 
 <script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/mega-nav-min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/shiba-min.js" type="text/javascript" charset="utf-8"></script>  -->





<!-- <script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/templates-min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/pccart-min.js"></script>
<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/pccustomer-min.js"></script>
<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/shiba-components-min.js"></script>
<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/tracking-min.js"></script> -->
<!--  add to GTM DL -->
<script type="text/javascript">
    
    dataLayer[0].device_type = determineDeviceType();
    dataLayer[0].page_template = 'org.apache.jsp.s1.content.discover_jsp';
    var sliStub = 'https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/sli-rac.stub-min.js'.replace(/(\.js)/, '');

</script>


<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/sli-rac.config-min.js" type="text/javascript"> </script>

<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/build/ga-min.js" async></script>


<script>
    ! function() {
        var analytics = window.analytics = window.analytics || [];
        if (!analytics.initialize)
            if (analytics.invoked) window.console && console.error && console.error("MetaRouter snippet included twice.");
            else {
                analytics.invoked = !0;
                analytics.methods = ["trackSubmit", "trackClick", "trackLink", "trackForm", "pageview", "identify", "reset", "group", "track", "ready", "alias", "page", "once", "off", "on"];
                analytics.factory = function(t) {
                    return function() {
                        var e = Array.prototype.slice.call(arguments);
                        e.unshift(t);
                        analytics.push(e);
                        return analytics
                    }
                };
                for (var t = 0; t < analytics.methods.length; t++) {
                    var e = analytics.methods[t];
                    analytics[e] = analytics.factory(e)
                }
                analytics.load = function(t) {
                    var e = document.createElement("script");
                    e.type = "text/javascript";
                    e.async = !0;
                    e.src = ("https:" === document.location.protocol ? "https://" : "http://") + "cdn.metarouter.io/a/v1/" + t + ".js";
                    var n = document.getElementsByTagName("script")[0];
                    n.parentNode.insertBefore(e, n)
                };
                analytics.SNIPPET_VERSION = "3.1.0";
                analytics.load("GvXa5B8GZD2NcGBgy376P");
            }
    }();



    var pflmrId = Cookies.get('pflmrId');
    if (pflmrId !== undefined) {
        analytics.ready(function() {
            var astronomerUser = analytics.user();
            var astronomerUserId = astronomerUser.id();
            if (pflmrId > -1 && astronomerUserId === null) {

                analytics.identify(pflmrId)
            } else if (pflmrId == -1 && astronomerUserId !== null) {

                analytics.reset()
            }

            analytics.page();

        });
    } else {
        analytics.page();
    }
</script>

<script>
    $.htmlPrefilter = function(html) {
        return html;
    };
    $(window).on('load', function() {
        "use strict";
        $(".sitemap h4").on("click", function() {
            $(this).hasClass("first") ? ($(this).addClass("active"), $(this).next().slideDown()) : $(this).hasClass("active") ? ($(this).removeClass("active"), $(this).next().slideUp()) : ($(this).addClass("active"), $(this).next().slideDown())
        }), $(".eq-ie8 .checkbox label").click(function() {
            $(this).parent().find("input").is(":checked") ? $(this).parent().find("input").removeAttr("checked").removeClass("checked") : $(this).parent().find("input").attr("checked", "checked").addClass("checked")
        }), $(".options").on("click", function() {
            return $(this).hasClass("hide") ? ($(this).parents(".section").find(".content").slideUp(), $(this).removeClass("hide").html("Show Options")) : ($(this).parents(".section").find(".content").slideDown(), $(this).addClass("hide").html("Hide Options")), !1
        }), $(".actions .button2").on("click", function() {
            return $(this).hasClass("active") ? ($(".dropdown").slideUp(), $(".button2").removeClass("active")) : ($(".dropdown").hide(), $(".button2").removeClass("active"), $(this).toggleClass("active").parent().find(".dropdown").slideToggle()), !1
        }), $(".button .dropdown .section h3 a").on("click", function() {
            return $(this).parent().toggleClass("active").parents(".section").find(".content").slideToggle(), !1
        })
    });
</script>

<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/vendor/webvitals.js"></script>

<script>
    function sendWebVitals(data) {
        ga('send', 'event', "Web Vitals", data.name, 'org.apache.jsp.s1.content.discover_jsp', data.value, {
            nonInteraction: true
        });
    }

    $(window).on('load', function() {
        (function checkIfAnalyticsLoaded() {
            var checker = null;
            if (window.ga !== undefined) {
                webVitals.getCLS(function(data) {
                    sendWebVitals(data);
                }, true);
                webVitals.getFID(function(data) {
                    sendWebVitals(data);
                });
                webVitals.getLCP(function(data) {
                    sendWebVitals(data);
                }, true);
                webVitals.getFCP(function(data) {
                    sendWebVitals(data);
                });
                webVitals.getTTFB(function(data) {
                    sendWebVitals(data);
                });

                clearTimeout(checker)
            } else {
                checker = setTimeout(checkIfAnalyticsLoaded, 500);
            }
        })();
    })
</script>

<script src="https://www.google.com/recaptcha/api.js?render=6LfZ1sMZAAAAAIn7oEnZ57Qbbc8taKRqGLVcugGR"></script>

<script type="text/javascript">
    (function() {
        var linkList = $('.discover-landing .panel ul');



        linkList.each(function(index) {


            var collapseUl = $(this).find('li').slice(5),
                //ulId = $(this).attr('id'),
                ulWrap = $('<ul class="panel-collapse collapse" id="linkwrap-' + index + '"></ul>'),
                //build anchor tag
                anchor = $('<a>', {
                    'data-toggle': 'collapse',
                    'href': '#linkwrap-' + index,
                    'text': 'show more',
                    'class': 'ui-more'
                }).appendTo($(this));

            collapseUl.wrapAll(ulWrap);



            anchor.on('click', function() {
                $(this).toggleClass('ui-more ui-less');
                $(this).text(function(i, text) {
                    return text === "show more" ? "show less" : "show more";
                })
            });

            if ($(this).find('li').length <= 4) {
                anchor.hide();
            }
        })
    }());
</script>
<script src="https://www.petcircle.com.au/static-assets/520077FA65D15599/javascripts/vendor/jquery.flexslider-min.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(window).on('load', function() {
        $('#discover-slide').flexslider({
            animation: "slide",
            controlNav: false,
            directionNav: true,
            animationLoop: false,
            slideshow: false,
            itemWidth: 230,
            maxItems: 3,
            itemMargin: 30,
            prevText: " ",
            nextText: " "
        });
    });

    $(document).ready(function() {
        if ($('#content').data('page-type') === 'lading-page') {
            var videoPop = $('#discover-slide li a.video');
        } else if ($('#content').data('page-type') === 'article-page') {
            var videoPop = $('#article .copy a.video');
        }
        $(videoPop).magnificPopup({
            type: 'iframe',
            iframe: {
                markup: '<div class="mfp-iframe-scaler sss">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '<div class="mfp-title">Some caption</div>' +
                    '</div>'
            },
            callbacks: {
                markupParse: function(template, values, item) {
                    values.title = item.el.attr('title');
                }
            }
        });
    });
</script>


<script type="text/javascript">
    window.NREUM || (NREUM = {});
    NREUM.info = {
        "errorBeacon": "bam-cell.nr-data.net",
        "licenseKey": "bd514727ac",
        "agent": "",
        "beacon": "bam-cell.nr-data.net",
        "applicationTime": 58,
        "applicationID": "215759043",
        "transactionName": "YFdaMkIHVkoFURJbC1kdcjVgSUsIS1EJXBBSXExJVA9LWgtEA0BKXUFI",
        "queueTime": 0
    }
</script>
</body>

</html>