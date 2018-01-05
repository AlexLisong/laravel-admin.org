<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:description" content="页面描述">
        <title>未来编程学院</title>
        <!-- Meta -->
        <meta name="description" content="硅谷侠">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')
        <!-- Styles -->
        @yield('before-styles')
        <script src="https://www.google.com/js/google.js"></script>
        <script>
            new gweb.analytics.AutoTrack({profile:"UA-12481063-1"});
        </script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/jquery/1.10/jquery.min.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/misc/jquery.once.js?v=1.2"></script>
        <script src="https://csfirst.withgoogle.com/misc/drupal.js?ozs0lr"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.core.min.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.widget.min.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.position.min.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.menu.min.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.autocomplete.min.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.datepicker.min.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/modules/locale/locale.datepicker.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.button.min.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.mouse.min.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.draggable.min.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.resizable.min.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.dialog.min.js?v=1.10.2"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/ui/minified/jquery.ui.tabs.min.js?v=1.10.2"></script>
        <script src="//www.gstatic.com/glue/v15_0/glue-detect.min.js"></script>
        <script src="/sites/all/themes/csfirstmaia/js/jstweaks.js?ozs0lr"></script>
        <script src="https://csfirst.withgoogle.com/sites/all/modules/contrib/webform_conditional/webform_conditional.js?ozs0lr"></script>
        <script src="https://csfirst.withgoogle.com/profiles/gardens/modules/contrib/google_analytics/googleanalytics.js?ozs0lr"></script>
        <script>(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,"script","//www.google-analytics.com/analytics.js","ga");ga("create", "UA-47098937-4", {"cookieDomain":"auto"});ga("set", "dimension1", "anonymous user");var _page = document.location.pathname.replace(/club\/[0-9]+/, 'club');
            ga('set', 'page', _page);ga("send", "pageview");</script>
        <script src="https://csfirst.withgoogle.com/sites/all/themes/csfirstmaia/js/jstweaks.js?ozs0lr"></script>
        <script>jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"csfirstmaia","theme_token":"QUw4NISnc6hMXXFuJRXcDrfQ2HvORprkD_ZfpJNm7sQ","js":{"sites\/all\/modules\/contrib\/jquery_update\/replace\/jquery\/1.10\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.core.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.widget.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.position.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.menu.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.autocomplete.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.datepicker.min.js":1,"modules\/locale\/locale.datepicker.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.button.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.mouse.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.draggable.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.resizable.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.dialog.min.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.tabs.min.js":1,"\/\/www.gstatic.com\/glue\/v15_0\/glue-detect.min.js":1,"\/sites\/all\/themes\/csfirstmaia\/js\/jstweaks.js":1,"sites\/all\/modules\/contrib\/webform_conditional\/webform_conditional.js":1,"profiles\/gardens\/modules\/contrib\/google_analytics\/googleanalytics.js":1,"0":1,"sites\/all\/themes\/csfirstmaia\/js\/jstweaks.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"misc\/ui\/jquery.ui.core.css":1,"misc\/ui\/jquery.ui.theme.css":1,"misc\/ui\/jquery.ui.menu.css":1,"misc\/ui\/jquery.ui.autocomplete.css":1,"misc\/ui\/jquery.ui.datepicker.css":1,"misc\/ui\/jquery.ui.button.css":1,"misc\/ui\/jquery.ui.resizable.css":1,"misc\/ui\/jquery.ui.dialog.css":1,"misc\/ui\/jquery.ui.tabs.css":1,"modules\/book\/book.css":1,"profiles\/gardens\/modules\/contrib\/date\/date_api\/date.css":1,"profiles\/gardens\/modules\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"sites\/all\/modules\/contrib\/find_content\/find_content.css":1,"modules\/node\/node.css":1,"profiles\/gardens\/modules\/contrib\/role_indicators\/role_indicators.css":1,"modules\/user\/user.css":1,"profiles\/gardens\/modules\/contrib\/ctools\/css\/ctools.css":1,"\/\/fonts.googleapis.com\/css?family=Roboto:100,300,400,500,700\u0026lang=en":1,"\/\/fonts.googleapis.com\/css?family=Product+Sans:400\u0026lang=en":1,"\/\/fonts.googleapis.com\/css?family=Material+Icons":1,"\/\/www.gstatic.com\/glue\/v15_0\/glue.min.css":1,"\/\/www.gstatic.com\/glue\/v15_0\/hercules.min.css":1,"\/css\/csfirst-home.css":1,"\/css\/adjustments.css":1,"profiles\/gardens\/modules\/contrib\/taxonomy_access\/taxonomy_access.css":1,"sites\/all\/themes\/csfirstmaia\/system.menus.css":1,"sites\/all\/themes\/csfirstmaia\/system.messages.css":1,"sites\/all\/themes\/csfirstmaia\/system.theme.css":1,"sites\/all\/themes\/csfirstmaia\/css\/styles.css":1,"sites\/all\/themes\/csfirstmaia\/css\/jquery.ui.tooltip.css":1,"sites\/all\/themes\/csfirstmaia\/css\/jquery.timepicker.css":1,"sites\/all\/themes\/csfirstmaia\/css\/magnific-popup.css":1}},"webform_conditional_webform_client_form_332294":{"fields":false,"nid":"332294","showSpeed":null},"googleanalytics":{"trackOutbound":1,"trackMailto":1,"trackDownload":1,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"},"jquery":{"ui":{"datepicker":{"isRTL":false,"firstDay":"0"}}}});</script>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" rel="stylesheet">
        <link href="https://www.google.com/css/maia.experimental.css" rel="stylesheet">
        <style>
            @import url("https://csfirst.withgoogle.com/modules/system/system.base.css?ozs0lr");
        </style>
        <style>
            @import url("https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.core.min.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.theme.min.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.menu.min.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.autocomplete.min.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.datepicker.min.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.button.min.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.resizable.min.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.dialog.min.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/sites/all/modules/contrib/jquery_update/replace/ui/themes/base/minified/jquery.ui.tabs.min.css?ozs0lr");
        </style>
        <style>
            @import url("https://csfirst.withgoogle.com/modules/book/book.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/profiles/gardens/modules/contrib/date/date_api/date.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/profiles/gardens/modules/contrib/date/date_popup/themes/datepicker.1.7.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/modules/field/theme/field.css?ozs0lr");
        </style>
        <style>
            @import url("https://csfirst.withgoogle.com/modules/node/node.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/profiles/gardens/modules/contrib/role_indicators/role_indicators.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/modules/user/user.css?ozs0lr");
        </style>
        <style>
            @import url("https://csfirst.withgoogle.com/profiles/gardens/modules/contrib/ctools/css/ctools.css?ozs0lr");
        </style>
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&amp;lang=en" media="all" />
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Product+Sans:400&amp;lang=en" media="all" />
        <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Material+Icons" media="all" />
        <link type="text/css" rel="stylesheet" href="//www.gstatic.com/glue/v15_0/glue.min.css" media="all" />
        <link type="text/css" rel="stylesheet" href="//www.gstatic.com/glue/v15_0/hercules.min.css" media="all" />
        <link type="text/css" rel="stylesheet" href="/css/csfirst-home.css" media="all" />
        <link type="text/css" rel="stylesheet" href="/css/adjustments.css" media="all" />
        <style>
            @import url("https://csfirst.withgoogle.com/profiles/gardens/modules/contrib/taxonomy_access/taxonomy_access.css?ozs0lr");
        </style>
        <style>
            @import url("https://csfirst.withgoogle.com/sites/all/themes/csfirstmaia/css/styles.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/sites/all/themes/csfirstmaia/css/jquery.ui.tooltip.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/sites/all/themes/csfirstmaia/css/jquery.timepicker.css?ozs0lr");
            @import url("https://csfirst.withgoogle.com/sites/all/themes/csfirstmaia/css/magnific-popup.css?ozs0lr");
        </style>
        <link href="https://www.google.com/favicon.ico" rel="shortcut icon" type="image/x-icon">
        @yield('after-styles')
        <script type="text/javascript">
            $(function() {
                // Video click to play
                if (navigator.userAgent.toLowerCase().indexOf('firefox') == -1) {
                    $('video').click(function(event) {
                        var clickLocation = event.pageY - $(this).offset().top;
                        var videoHeight = parseInt($(this).height());

                        if (clickLocation < videoHeight - 20) {
                            this.paused ? this.play() : this.pause();
                        }
                    });
                }
            });
        </script>
    </head>
    <body class="html front not-logged-in no-sidebars page-materials" >
    <div style="display:none;"><img src="http://guiguxia.liunar.com/img/1.jpg" width="300" height="300"></div>        <div id="app">
            @include('includes.partials.logged-in-as')
        <div class="hercules-header h-c-header h-c-header--product-marketing-one-tier">
            <div class="h-c-header__bar">
                <div class="h-c-header__hamburger h-c-header__hamburger--first-tier">
                    <div class="h-c-header__hamburger-wrapper">
                        <button type="button"
                                class="h-js-header__hamburger-link h-c-header__hamburger-link"
                                aria-controls="h-js-header__drawer"
                                aria-expanded="false"
                                aria-label="Open the navigation drawer">
                            <svg role="img" class="h-c-header__hamburger-img
                  h-c-header__hamburger-img--standard"
                                 aria-label="Google">
                                <use xlink:href="#h-burger"></use>
                            </svg>
                            <svg role="img" class="h-c-header__hamburger-img
                  h-c-header__hamburger-img--reversed"
                                 aria-label="Google">
                                <use xlink:href="#h-burger"></use>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="h-c-header__hamburger h-c-header__hamburger--second-tier">
                    <div class="h-c-header__hamburger-wrapper">
                        <button type="button"
                                class="h-js-header__hamburger-link h-c-header__hamburger-link"
                                aria-controls="h-js-header__drawer"
                                aria-expanded="false"
                                aria-label="Open the navigation drawer">
                            <svg role="img" class="h-c-header__hamburger-img
                 h-c-header__hamburger-img--standard"
                                 aria-label="Google">
                                <use xlink:href="#h-burger"></use>
                            </svg>
                            <svg role="img" class="h-c-header__hamburger-img
                 h-c-header__hamburger-img--reversed"
                                 aria-label="Google">
                                <use xlink:href="#h-burger"></use>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="h-c-header__lockup">
                    <div class="h-c-header__product-logo">
                        <a href="/" class="h-c-header__product-logo-link">
            <span class="h-c-header__product-logo-text">
                CS First            </span>
                        </a>
                    </div>
                </div>

                <nav class="h-c-header__nav">
                    <ul class="h-c-header__nav-list">
                        <li class="h-c-header__nav-li" aria-level="1">
                            <a href="/materials" class="h-c-header__nav-li-link h-is-active h-is-highlighted">
                                Curriculum            </a>
                        </li>
                        <li class="h-c-header__nav-li" aria-level="1">
                            <a href="//support.google.com/csfirst" target="_blank" class="h-c-header__nav-li-link">
                                Help            </a>
                        </li>
                    </ul>
                </nav>
                <div class="h-c-header__cta">
                    <ul class="h-c-header__cta-list">
                        <li class="h-c-header__cta-li h-c-header__cta-li--primary">
                            <a href="/signin-front" class="h-c-header__cta-li-link h-c-header__cta-li-link--primary">
                                Sign In            </a>
                        </li>
                    </ul>
                </div>
                <div class="h-c-header__bar-underside"></div>
            </div>

            <div id="h-js-header__drawer" class="h-c-header__drawer"
                 aria-label="Navigation drawer">
                <div class="h-c-header__drawer-content">
                    <div class="h-c-header__drawer-bar">
                        <div class="h-c-header__drawer-lockup">
                            <div class="h-c-header__drawer-company-logo">
                                <div class="h-c-header__drawer-company-logo-link" title="Google">
                                    <svg role="img" class="h-c-header__drawer-company-logo-img"
                                         aria-label="Google">
                                        <use xlink:href="#h-color-google-logo"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="h-c-header__drawer-product-logo">
                                <div class="h-c-header__drawer-product-logo-link">
                <span class="h-c-header__drawer-product-logo-text">
                  For Education</span>
                                </div>
                            </div>
                        </div>
                        <div class="h-c-header__drawer-initiative-logo">
                            <div class="h-c-header__drawer-initiative-logo-link">
              <span class="h-c-header__drawer-initiative-logo-text">
                For Education</span>
                            </div>
                        </div>
                    </div>
                    <nav class="h-c-header__drawer-nav">
                        <ul class="h-c-header__drawer-nav-list">
                            <li class="h-c-header__drawer-nav-li" aria-level="1">
                                <a href="/" id="h-js-header__drawer-focus-item" class="h-c-header__drawer-nav-li-link">
                                    CS First              </a>
                            </li>
                            <li class="h-c-header__drawer-nav-li" aria-level="1">
                                <a href="/materials" id="h-js-header__drawer-focus-item" class="h-c-header__drawer-nav-li-link h-is-active h-is-highlighted">
                                    Curriculum              </a>
                            </li>
                            <li class="h-c-header__drawer-nav-li" aria-level="1">
                                <a href="//support.google.com/csfirst" target="_blank" id="h-js-header__drawer-focus-item" class="h-c-header__drawer-nav-li-link">
                                    Help              </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="h-c-header__drawer-cta">
                    <ul class="h-c-header__drawer-cta-list">
                        <li class="h-c-header__drawer-cta-li h-c-header__drawer-cta-li--primary">
                            <a href="/signin-front"
                               class="h-c-header__drawer-cta-li-link h-c-header__drawer-cta-li-link--primary">
                                Sign In              </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="h-js-header__drawer-backdrop" class="h-c-header__drawer-backdrop"></div>
        </div>



        <div class="container">
                {{--@include('includes.partials.messages')--}}
                @yield('content')
            </div><!-- container -->
        </div><!--#app-->
    <footer class="h-c-footer h-c-footer--standard h-has-social">
        <section class="h-c-footer__upper">
            <section class="disclaimers">
                <p>Except as otherwise <a href="http://creativecommons.org/policies#license" target="_blank">noted</a>, the contents on this site are licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank">Creative Commons Attribution-ShareAlike 4.0 International License</a>.</p>
                <p>Scratch is a project of the Lifelong Kindergarten group at the MIT Media Lab. It is available for free at <a href="http://scratch.mit.edu" target="_blank">http://scratch.mit.edu</a>.</p>
            </section>
            <section class="h-c-social">
                <div class="h-c-social__group">
                    <p class="h-c-social__title h-c-social__title--inline">Share</p>
                    <ul class="h-c-social__list h-no-bullet">
                        <li class="h-c-social__item">
                            <g:sharetoclassroom url="https://csfirst.withgoogle.com/materials" size="24" theme="dark"></g:sharetoclassroom>
                        </li>
                        <li class="h-c-social__item">
                            <a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.cs-first.com/en/" aria-label="Share on Google+" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                <svg role="img" class="h-c-icon h-c-icon--social h-c-icon--no-padding h-c-icon--24px">
                                    <use xlink:href="#social-gplus"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="h-c-social__item">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.cs-first.com/en/" aria-label="Share on Facebook" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                <svg role="img" class="h-c-icon h-c-icon--social h-c-icon--no-padding h-c-icon--24px">
                                    <use xlink:href="#social-facebook"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="h-c-social__item">
                            <a href="https://twitter.com/intent/tweet?text=%23CSFirst%20by%20Google%20is%20a%20fun%20and%20free%20way%20for%20students%20to%20learn%20code.%20Join%20thousands%20teaching%20computer%20science%20now%3A%20g.co%2Fcsfirst" aria-label="Share on Twitter" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                <svg role="img" class="h-c-icon h-c-icon--social h-c-icon--no-padding h-c-icon--24px">
                                    <use xlink:href="#social-twitter"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="h-c-social__group">
                    <p class="h-c-social__title h-c-social__title--inline">Follow us</p>
                    <ul class="h-c-social__list h-no-bullet">
                        <li class="h-c-social__item">
                            <a href="https://plus.google.com/communities/101908073547045310549" aria-label="Follow us on Google+" target="_blank">
                                <svg role="img" class="h-c-icon h-c-icon--social h-c-icon--no-padding h-c-icon--24px">
                                    <use xlink:href="#social-gplus"></use>
                                </svg>
                            </a>
                        </li>
                        <!-- additional social links as needed -->
                    </ul>
                </div>
            </section>
        </section>
        <section class="h-c-footer__global">
            <div class="h-c-footer__logo">
                <a href="https://www.google.com" aria-label="Google" target="_blank">
                    <svg role="img" class="h-c-footer__logo-img">
                        <use xlink:href="#google-logo"></use>
                    </svg>
                </a>
            </div>
            <ul class="h-c-footer__global-links h-no-bullet">
                <li class="h-c-footer__global-links-list-item">
                    <a class="h-c-footer__link" href="https://www.google.com/policies/privacy/" target="_blank">Privacy</a>        </li>
                <li class="h-c-footer__global-links-list-item">
                    <a class="h-c-footer__link" href="https://www.google.com/policies/terms/" target="_blank">Terms</a>        </li>
                <li class="h-c-footer__global-links-list-item">
                    <a class="h-c-footer__link" href="https://www.google.com/about/" target="_blank">About Google</a>        </li>
                <li class="h-c-footer__global-links-list-item">
                    <a class="h-c-footer__link" href="https://www.google.com/about/products/" target="_blank">Google Products</a>        </li>
            </ul>
            <ul class="h-c-footer__global-links h-c-footer__global-links--extra h-no-bullet">
                <li class="h-c-footer__global-links-list-item h-c-footer__global-links-list-item--extra">
                    <a class="h-c-footer__link" href="http://support.google.com/csfirst" target="_blank">
                        <svg role="img" class="h-c-icon h-c-icon--24px h-c-icon--footer">
                            <use xlink:href="#mi-help"></use>
                        </svg>
                        Help          </a>
                </li>
                <li class="h-c-footer__global-links-list-item h-c-footer__global-links-list-item--extra">
                    <label for="language-picker" class="h-u-visually-hidden">Change language or region</label>
                    <select name="language-picker" id="language-picker"
                            data-csrf="ZJ5jTs7Wueska_cCemHJW1at0XlApQTe6-CARefPprU+1511811203"
                            class="h-c-form__dropdown h-c-footer__lang-dropdown">
                        <option value="en"
                                selected>
                            English              </option>
                        <option value="sv"
                        >
                            Svenska              </option>
                        <option value="da"
                        >
                            Dansk              </option>
                        <option value="fr"
                        >
                            Français              </option>
                        <option value="de"
                        >
                            Deutsch              </option>
                        <option value="it"
                        >
                            Italiano              </option>
                        <option value="ja"
                        >
                            日本語              </option>
                    </select>
                </li>
            </ul>
        </section>
    </footer>
        <!-- Scripts -->
        @yield('before-scripts')


    <script src="//www.gstatic.com/glue/v15_0/glue-lite.min.js"></script>
    <script src="//www.gstatic.com/glue/v15_0/hercules.min.js"></script>

    <svg class="svg-assets" xmlns="http://www.w3.org/2000/svg">
        <!-- material design icons -->
        <symbol id="mi-arrow-forward" viewBox="0 0 18 18">
            <path d="M9,1.5C4.8,1.5,1.5,4.8,1.5,9s3.3,7.5,7.5,7.5s7.5-3.3,7.5-7.5S13.2,1.5,9,1.5z M9,14.5l-1-1
    l3.8-3.8H3.5V8.3h8.4L8.1,4.5L9,3.5L14.5,9L9,14.5z"></path>
        </symbol>

        <symbol id="mi-help" viewBox="0 0 48 48">
            <path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm2 34h-4v-4h4v4zm4.13-15.49l-1.79 1.84C26.9 25.79 26 27 26 30h-4v-1c0-2.21.9-4.21 2.34-5.66l2.49-2.52C27.55 20.1 28 19.1 28 18c0-2.21-1.79-4-4-4s-4 1.79-4 4h-4c0-4.42 3.58-8 8-8s8 3.58 8 8c0 1.76-.71 3.35-1.87 4.51z"></path>
        </symbol>

        <symbol id="mi-arrow-sort" viewBox="0 0 24 24">
            <path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"></path>
        </symbol>

        <symbol id="mi-arrow-forward-no-bg" viewBox="0 0 32 32">
            <polygon points="16,0 13.2,2.8 24.3,14 0,14 0,18 24.3,18 13.2,29.2 16,32 32,16"></polygon>
        </symbol>

        <symbol id="mi-arrow-circle" viewBox="0 0 16 16">
            <path d="M0,8c0,4.4,3.6,8,8,8s8-3.6,8-8s-3.6-8-8-8S0,3.6,0,8z M4.2,6.1L8,9.9l3.8-3.8L13,7.3 l-5,5l-5-5L4.2,6.1z"></path>
        </symbol>

        <symbol id="mi-arrow-item" viewBox="0 0 16 10">
            <polygon points="1.8,0 7.8,5.9 13.7,0 15.5,1.8 7.8,9.6 0,1.8"></polygon>
        </symbol>

        <symbol id="mi-keyboard-arrow-right" viewBox="0 0 24 24">
            <path d="M9.546 6.5l5.443 5.532L9.5 17.5"></path>
        </symbol>

        <symbol id="mi-chevron" viewBox="0 0 12 8">
            <path d="M10.6,8L6,3.4L1.4,8L0,6.6l6-6l6,6L10.6,8z"></path>
        </symbol>

        <symbol id="mi-youtube-icon" viewBox="0 0 28 20">
            <path d="M11.2,14.1V5.9l7.5,4.3L11.2,14.1z M27.7,4.2c0,0-0.3-1.9-1.1-2.8c-1.1-1.1-2.3-1.1-2.8-1.2 C19.9,0,14,0,14,0S8.1,0,4.2,0.2C3.7,0.3,2.5,0.3,1.4,1.4C0.6,2.3,0.3,4.2,0.3,4.2S0,6.5,0,8.8v2.4c0,2.3,0.3,4.6,0.3,4.6 s0.3,1.9,1.1,2.8c1.1,1.1,2.5,1.1,3.1,1.2C6.7,20,13.8,20,14,20c0,0,5.9,0,9.8-0.3c0.5-0.1,1.7-0.1,2.8-1.2c0.8-0.8,1.1-2.8,1.1-2.8 s0.3-2.3,0.3-4.6V8.8C28,6.5,27.7,4.2,27.7,4.2L27.7,4.2z"></path>
        </symbol>

        <symbol id="mi-pdf-icon" viewBox="0 0 24 24">
            <path d="M7 11.5h1v-1H7v1zM19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-9.5 8.5c0 .83-.67 1.5-1.5 1.5H7v2H5.5V9H8c.83 0 1.5.67 1.5 1.5v1zm10-1H17v1h1.5V13H17v2h-1.5V9h4v1.5zm-5 3c0 .83-.67 1.5-1.5 1.5h-2.5V9H13c.83 0 1.5.67 1.5 1.5v3zm-2.5 0h1v-3h-1v3z"></path>
        </symbol>

        <symbol id="mi-arrow-dropdown" viewBox="0 0 24 24">
            <path d="M7 10l5 5 5-5z"></path>
        </symbol>

        <symbol id="mi-search" viewBox="0 0 24 22">
            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
        </symbol>

        <symbol id="mi-expand" viewBox="0 0 24 24">
            <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
        </symbol>

        <symbol id="mi-mail" viewBox="0 0 24 24">
            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"></path>
        </symbol>

        <!-- Social icons -->

        <symbol id="social-facebook" viewBox="0 0 20 21">
            <path d="M18.9,0H1.1C0.5,0,0,0.5,0,1.1v17.8C0,19.5,0.5,20,1.1,20h9.6v-7.7H8.1v-3h2.6V7c0-2.6,1.6-4,3.9-4c1.1,0,2.1,0.1,2.3,0.1 v2.7l-1.6,0c-1.3,0-1.5,0.6-1.5,1.5v1.9h3l-0.4,3h-2.6V20h5.1c0.6,0,1.1-0.5,1.1-1.1V1.1C20,0.5,19.5,0,18.9,0z">
            </path>
        </symbol>

        <symbol id="social-gplus" viewBox="0 0 24 24">
            <path d="M8.5,10.745 L8.5,13.43 L12.3,13.43 C12,15.065 10.58,16.25 8.5,16.25 C6.195,16.25 4.33,14.305 4.33,12 C4.33,9.695 6.195,7.75 8.5,7.75 C9.535,7.75 10.465,8.105 11.2,8.805 L11.2,8.81 L13.185,6.825 C11.97,5.695 10.39,5 8.5,5 C4.635,5 1.5,8.135 1.5,12 C1.5,15.865 4.635,19 8.5,19 C12.545,19 15.22,16.16 15.22,12.16 C15.22,11.67 15.175,11.195 15.1,10.745 L8.5,10.745 L8.5,10.745 Z"></path>
            <polygon points="22.5 11 20.5 11 20.5 9 19 9 19 11 17 11 17 12.5 19 12.5 19 14.5 20.5 14.5 20.5 12.5 22.5 12.5"></polygon>
        </symbol>

        <symbol id="social-link" viewBox="2 7 20 11">
            <path d="M3.9,12 C3.9,10.29 5.29,8.9 7,8.9 L11,8.9 L11,7 L7,7 C4.24,7 2,9.24 2,12 C2,14.76 4.24,17 7,17 L11,17 L11,15.1 L7,15.1 C5.29,15.1 3.9,13.71 3.9,12 L3.9,12 Z M8,13 L16,13 L16,11 L8,11 L8,13 L8,13 Z M17,7 L13,7 L13,8.9 L17,8.9 C18.71,8.9 20.1,10.29 20.1,12 C20.1,13.71 18.71,15.1 17,15.1 L13,15.1 L13,17 L17,17 C19.76,17 22,14.76 22,12 C22,9.24 19.76,7 17,7 L17,7 Z">
            </path>
        </symbol>

        <symbol id="social-mail" viewBox="2 4 20 16">
            <path d="M20,4 L4,4 C2.9,4 2.01,4.9 2.01,6 L2,18 C2,19.1 2.9,20 4,20 L20,20 C21.1,20 22,19.1 22,18 L22,6 C22,4.9 21.1,4 20,4 Z M20,18 L4,18 L4,8 L12,13 L20,8 L20,18 Z M12,11 L4,6 L20,6 L12,11 Z"></path>
        </symbol>

        <symbol id="social-twitter" viewBox="2 4 20 17">
            <path d="M21.9998024,5.94850271 C21.2639378,6.27899473 20.4732072,6.50243431 19.6431192,6.60281913 C20.4903254,6.08859695 21.1409646,5.27418342 21.4472639,4.3038956 C20.6544849,4.7801123 19.7764073,5.12586577 18.8417079,5.31226298 C18.0932607,4.50466524 17.0268825,4 15.8467486,4 C13.5805579,4 11.7434203,5.86056413 11.7434203,8.15526483 C11.7434203,8.48101542 11.7797051,8.7980981 11.8496412,9.10221596 C8.43952817,8.92893175 5.41611168,7.27461954 3.39235612,4.76062801 C3.03916454,5.37434599 2.83681824,6.08815245 2.83681824,6.84966948 C2.83681824,8.29128441 3.5611975,9.5631712 4.66217788,10.3083896 C3.98959225,10.2868309 3.35687602,10.099841 2.8036791,9.78861106 C2.80338648,9.80594689 2.80331333,9.8233568 2.80331333,9.8408408 C2.80331333,11.8541677 4.21768905,13.5336687 6.09476916,13.9154273 C5.75042931,14.0103299 5.38794707,14.0610779 5.01376005,14.0610779 C4.74930529,14.0610779 4.49231233,14.0350742 4.241757,13.9865487 C4.76393626,15.637453 6.27926567,16.8388111 8.07477813,16.8724456 C6.67042461,17.9869023 4.9012479,18.6511461 2.97881179,18.6511461 C2.64763982,18.6511461 2.32100345,18.6315136 2,18.5931378 C3.81592266,19.7721223 5.97267373,20.4599991 8.28985336,20.4599991 C15.8371653,20.4599991 19.9642689,14.1282728 19.9642689,8.63711197 C19.9642689,8.45693788 19.9602454,8.2777269 19.9524178,8.0995531 C20.7540486,7.51369099 21.449678,6.78180786 21.9998024,5.94850271"></path>
        </symbol>

        <symbol id="google-logo" viewBox="0 0 396 130">
            <path d="M51.0745265,101.038701 C23.3283097,101.038701 9.65724009e-07,78.4212338 9.65724009e-07,50.645974 C-0.00548030982,22.8707143 23.3228284,0.253246753 51.0745265,0.253246753 C66.4220981,0.253246753 77.3517615,6.27798701 85.5736748,14.1408766 L75.8718171,23.8528896 C69.9794459,18.3219805 61.9987087,14.0201623 51.0690452,14.0201623 C30.8102508,14.0201623 14.9693645,30.365974 14.9693645,50.645974 C14.9693645,70.925974 30.8102508,87.2717857 51.0690452,87.2717857 C64.2076627,87.2717857 71.6950851,81.9877922 76.48572,77.1921429 C80.4157945,73.2579545 82.991994,67.6063312 83.9731424,59.8641558 L51.0745265,59.8641558 L51.0745265,46.1027273 L97.3638985,46.1027273 C97.8572133,48.5609091 98.0983894,51.5129221 98.0983894,54.7063636 C98.0983894,65.0329221 95.2755325,77.8121753 86.1875777,86.9096429 C77.3462802,96.1223377 66.0548526,101.038701 51.0745265,101.038701 L51.0745265,101.038701 Z"></path>
            <path d="M167.573556,68.369026 C167.573556,87.0523052 152.965957,100.813734 135.036704,100.813734 C117.112933,100.813734 102.499853,87.0468182 102.499853,68.369026 C102.499853,49.5650325 117.112933,35.9188312 135.036704,35.9188312 C152.965957,35.9188312 167.573556,49.5650325 167.573556,68.369026 L167.573556,68.369026 Z M153.333202,68.369026 C153.333202,56.6926623 144.85915,48.7035714 135.036704,48.7035714 C125.214259,48.7035714 116.740207,56.6926623 116.740207,68.369026 C116.740207,79.9191883 125.214259,88.0344805 135.036704,88.0344805 C144.85915,88.0344805 153.333202,79.9191883 153.333202,68.369026 L153.333202,68.369026 Z"></path>
            <path d="M238.282011,68.369026 C238.282011,87.0523052 223.674411,100.813734 205.745159,100.813734 C187.821388,100.813734 173.208307,87.0468182 173.208307,68.369026 C173.208307,49.5650325 187.821388,35.9188312 205.745159,35.9188312 C223.674411,35.9188312 238.282011,49.5650325 238.282011,68.369026 L238.282011,68.369026 Z M224.041657,68.369026 C224.041657,56.6926623 215.567605,48.7035714 205.745159,48.7035714 C195.922713,48.7035714 187.448661,56.6926623 187.448661,68.369026 C187.448661,79.9191883 195.922713,88.0344805 205.745159,88.0344805 C215.567605,88.0344805 224.041657,79.9191883 224.041657,68.369026 L224.041657,68.369026 Z"></path>
            <path d="M306.04702,37.943539 L306.04702,96.1442857 C306.04702,120.111558 291.927254,129.944286 275.231289,129.944286 C259.516472,129.944286 250.061272,119.376299 246.498443,110.772662 L258.897088,105.609383 C261.106042,110.893377 266.51058,117.159545 275.225808,117.159545 C285.908814,117.159545 292.535676,110.52026 292.535676,98.1086364 L292.535676,93.4391883 L292.047842,93.4391883 C288.85774,97.3733766 282.71323,100.813734 274.97915,100.813734 C258.771019,100.813734 243.916762,86.6791883 243.916762,68.4897403 C243.916762,50.1740909 258.771019,35.9188312 274.97915,35.9188312 C282.71323,35.9188312 288.852259,39.3591883 292.047842,43.1726623 L292.535676,43.1726623 L292.535676,37.943539 L306.04702,37.943539 L306.04702,37.943539 Z M293.522306,68.4897403 C293.522306,57.0602922 285.908814,48.7035714 276.212437,48.7035714 C266.389992,48.7035714 258.162597,57.0602922 258.162597,68.4897403 C258.162597,79.798474 266.389992,88.0344805 276.212437,88.0344805 C285.908814,88.0344805 293.522306,79.798474 293.522306,68.4897403 L293.522306,68.4897403 Z"></path>
            <path d="M329.961825,3.54545455 L329.961825,98.9207143 L315.721472,98.9207143 L315.721472,3.54545455 L329.961825,3.54545455 L329.961825,3.54545455 Z"></path>
            <path d="M383.755064,79.0577273 L394.805315,86.4322727 C391.242486,91.7162662 382.647846,100.813734 367.793589,100.813734 C349.376503,100.813734 336.002191,86.558474 336.002191,68.369026 C336.002191,49.0712013 349.497091,35.9188312 366.198538,35.9188312 C383.020573,35.9188312 391.247967,49.3181169 393.944755,56.566461 L395.419218,60.2537338 L352.078772,78.1962662 C355.394944,84.7093506 360.552824,88.0289935 367.793589,88.0289935 C375.039836,88.0289935 380.071647,84.4624351 383.755064,79.0577273 L383.755064,79.0577273 Z M349.743749,67.3813636 L378.717771,55.3373701 C377.12272,51.2824675 372.332085,48.4566558 366.686372,48.4566558 C359.445607,48.4511688 349.376503,54.843539 349.743749,67.3813636 L349.743749,67.3813636 Z"></path>
        </symbol>

        <symbol id="social-share-triangle" viewBox="0 0 24 24">
            <path d="M18,16.08 C17.24,16.08 16.56,16.38 16.04,16.85 L8.91,12.7 C8.96,12.47 9,12.24 9,12 C9,11.76 8.96,11.53 8.91,11.3 L15.96,7.19 C16.5,7.69 17.21,8 18,8 C19.66,8 21,6.66 21,5 C21,3.34 19.66,2 18,2 C16.34,2 15,3.34 15,5 C15,5.24 15.04,5.47 15.09,5.7 L8.04,9.81 C7.5,9.31 6.79,9 6,9 C4.34,9 3,10.34 3,12 C3,13.66 4.34,15 6,15 C6.79,15 7.5,14.69 8.04,14.19 L15.16,18.35 C15.11,18.56 15.08,18.78 15.08,19 C15.08,20.61 16.39,21.92 18,21.92 C19.61,21.92 20.92,20.61 20.92,19 C20.92,17.39 19.61,16.08 18,16.08 L18,16.08 Z"></path>
        </symbol>

        <!-- hercules icons -->
        <symbol id="h-color-google-logo" width="74" height="24" viewBox="0 0 74 24">
            <path fill="#4285F4" d="M9.24 8.19v2.46h5.88c-.18 1.38-.64 2.39-1.34 3.1-.86.86-2.2 1.8-4.54 1.8-3.62 0-6.45-2.92-6.45-6.54s2.83-6.54 6.45-6.54c1.95 0 3.38.77 4.43 1.76L15.4 2.5C13.94 1.08 11.98 0 9.24 0 4.28 0 .11 4.04.11 9s4.17 9 9.13 9c2.68 0 4.7-.88 6.28-2.52 1.62-1.62 2.13-3.91 2.13-5.75 0-.57-.04-1.1-.13-1.54H9.24z"></path>
            <path fill="#EA4335" d="M25 6.19c-3.21 0-5.83 2.44-5.83 5.81 0 3.34 2.62 5.81 5.83 5.81s5.83-2.46 5.83-5.81c0-3.37-2.62-5.81-5.83-5.81zm0 9.33c-1.76 0-3.28-1.45-3.28-3.52 0-2.09 1.52-3.52 3.28-3.52s3.28 1.43 3.28 3.52c0 2.07-1.52 3.52-3.28 3.52z"></path>
            <path fill="#4285F4" d="M53.58 7.49h-.09c-.57-.68-1.67-1.3-3.06-1.3C47.53 6.19 45 8.72 45 12c0 3.26 2.53 5.81 5.43 5.81 1.39 0 2.49-.62 3.06-1.32h.09v.81c0 2.22-1.19 3.41-3.1 3.41-1.56 0-2.53-1.12-2.93-2.07l-2.22.92c.64 1.54 2.33 3.43 5.15 3.43 2.99 0 5.52-1.76 5.52-6.05V6.49h-2.42v1zm-2.93 8.03c-1.76 0-3.1-1.5-3.1-3.52 0-2.05 1.34-3.52 3.1-3.52 1.74 0 3.1 1.5 3.1 3.54.01 2.03-1.36 3.5-3.1 3.5z"></path>
            <path fill="#FBBC05" d="M38 6.19c-3.21 0-5.83 2.44-5.83 5.81 0 3.34 2.62 5.81 5.83 5.81s5.83-2.46 5.83-5.81c0-3.37-2.62-5.81-5.83-5.81zm0 9.33c-1.76 0-3.28-1.45-3.28-3.52 0-2.09 1.52-3.52 3.28-3.52s3.28 1.43 3.28 3.52c0 2.07-1.52 3.52-3.28 3.52z"></path>
            <path fill="#34A853" d="M58 .24h2.51v17.57H58z"></path>
            <path fill="#EA4335" d="M68.26 15.52c-1.3 0-2.22-.59-2.82-1.76l7.77-3.21-.26-.66c-.48-1.3-1.96-3.7-4.97-3.7-2.99 0-5.48 2.35-5.48 5.81 0 3.26 2.46 5.81 5.76 5.81 2.66 0 4.2-1.63 4.84-2.57l-1.98-1.32c-.66.96-1.56 1.6-2.86 1.6zm-.18-7.15c1.03 0 1.91.53 2.2 1.28l-5.25 2.17c0-2.44 1.73-3.45 3.05-3.45z"></path>
        </symbol>

        <symbol id="h-white-google-logo" width="74" height="24" viewBox="0 0 74 24">
            <path d="M9.24 8.19v2.46h5.88c-.18 1.38-.64 2.39-1.34 3.1-.86.86-2.2 1.8-4.54 1.8-3.62 0-6.45-2.92-6.45-6.54s2.83-6.54 6.45-6.54c1.95 0 3.38.77 4.43 1.76L15.4 2.5C13.94 1.08 11.98 0 9.24 0 4.28 0 .11 4.04.11 9s4.17 9 9.13 9c2.68 0 4.7-.88 6.28-2.52 1.62-1.62 2.13-3.91 2.13-5.75 0-.57-.04-1.1-.13-1.54H9.24zm15.76-2c-3.21 0-5.83 2.44-5.83 5.81 0 3.34 2.62 5.81 5.83 5.81s5.83-2.46 5.83-5.81c0-3.37-2.62-5.81-5.83-5.81zm0 9.33c-1.76 0-3.28-1.45-3.28-3.52 0-2.09 1.52-3.52 3.28-3.52s3.28 1.43 3.28 3.52c0 2.07-1.52 3.52-3.28 3.52zm28.58-8.03h-.09c-.57-.68-1.67-1.3-3.06-1.3C47.53 6.19 45 8.72 45 12c0 3.26 2.53 5.81 5.43 5.81 1.39 0 2.49-.62 3.06-1.32h.09v.81c0 2.22-1.19 3.41-3.1 3.41-1.56 0-2.53-1.12-2.93-2.07l-2.22.92c.64 1.54 2.33 3.43 5.15 3.43 2.99 0 5.52-1.76 5.52-6.05V6.49h-2.42v1zm-2.93 8.03c-1.76 0-3.1-1.5-3.1-3.52 0-2.05 1.34-3.52 3.1-3.52 1.74 0 3.1 1.5 3.1 3.54.01 2.03-1.36 3.5-3.1 3.5zM38 6.19c-3.21 0-5.83 2.44-5.83 5.81 0 3.34 2.62 5.81 5.83 5.81s5.83-2.46 5.83-5.81c0-3.37-2.62-5.81-5.83-5.81zm0 9.33c-1.76 0-3.28-1.45-3.28-3.52 0-2.09 1.52-3.52 3.28-3.52s3.28 1.43 3.28 3.52c0 2.07-1.52 3.52-3.28 3.52zM58 .24h2.51v17.57H58zm10.26 15.28c-1.3 0-2.22-.59-2.82-1.76l7.77-3.21-.26-.66c-.48-1.3-1.96-3.7-4.97-3.7-2.99 0-5.48 2.35-5.48 5.81 0 3.26 2.46 5.81 5.76 5.81 2.66 0 4.2-1.63 4.84-2.57l-1.98-1.32c-.66.96-1.56 1.6-2.86 1.6zm-.18-7.15c1.03 0 1.91.53 2.2 1.28l-5.25 2.17c0-2.44 1.73-3.45 3.05-3.45z"></path>
        </symbol>

        <symbol id="h-burger" width="24" height="24" viewBox="0 0 24 24">
            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
        </symbol>
    </svg>

    <script type="text/javascript">
        ga('set', 'dimension1', 'en');
    </script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://www.google.com/js/maia.js"></script>
        @yield('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>