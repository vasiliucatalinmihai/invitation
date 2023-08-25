<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!--- basic page needs
    ================================================== -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Vasilii Online / Wedding Invitations" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="mata" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="weading invitatin" />
    <meta property="og:title" content="vasilii" />
    <meta property="og:url" content="https://vasilii-wday.home.ro.io" />
    <meta property="og:site_name" content="vasilii" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <title>Vasilii wday</title>

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/undangan/css/vendor.css">
    <link rel="stylesheet" href="assets/undangan/css/styles.css">
    <link rel="stylesheet" href="assets/undangan/css/gallery-grid.css">

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="/favicon.ico" />
</head>

<body id="top" class="ss-preload theme-slides">


<!-- preloader
 ================================================== -->
<div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


<!-- intro
================================================== -->
<section id="intro" class="s-intro">

    <div class="s-intro__slider swiper-container">
        <div class="swiper-wrapper">
            <div class="bg-opacity-50 s-intro__slide swiper-slide"
                 style="background-image: url('/assets/img//1.jpeg');"></div>
            <div class="bg-opacity-50 s-intro__slide swiper-slide"
                 style="background-image: url('/assets/img//2.jpeg');"></div>
            <div class="bg-opacity-50 s-intro__slide swiper-slide"
                 style="background-image: url('/assets/img//4.jpeg');"></div>
            <div class="bg-opacity-50 s-intro__slide swiper-slide"
                 style="background-image: url('/assets/img//5.jpeg');"></div>
            <div class="bg-opacity-50 s-intro__slide swiper-slide bg-opacity-10"
                 style="background-image: url('/assets/img//6.jpeg');"></div>
        </div>
    </div>

    <div class="row s-intro__content">
        <div class="column">

            <div class="text-pretitle">
                The Wedding
            </div>

            <h1 class="text-huge-title">
                Cristina & Catalin
            </h1>

            <div class="s-intro__content-bottom">
                <div class="s-intro__content-bottom-block">
                    <h5>Save the date</h5>
                    <div class="counter">
                        <div class="counter__time">
                            <span class="ss-days">000</span>
                            <span>D</span>
                        </div>
                        <div class="counter__time">
                            <span class="ss-hours">00</span>
                            <span>H</span>
                        </div>
                        <div class="counter__time minutes">
                            <span class="ss-minutes">00</span>
                            <span>M</span>
                        </div>
                        <div class="counter__time">
                            <span class="ss-seconds">00</span>
                            <span>S</span>
                        </div>
                    </div>
                    <!-- end counter -->
                </div>
                <!-- end s-intro-content__bottom-block -->

                <div class="s-intro__content-bottom-block">

                </div>
                <!-- end s-intro-content__bottom-block -->
            </div>
        </div>
    </div>
</section>
<!-- end s-intro -->


<!-- hidden element
================================================== -->
<div id="hidden" aria-hidden="true" style="opacity: 0;"></div>


<!-- details
================================================== -->
<section id="details" class="s-details">
    <div class="row">
        <div class="column">
            <h1 class="text-huge-title">
                You are not invited
            </h1>
        </div>
    </div>
</section>
<!-- end s-details -->


<!-- Java Script
================================================== -->
<script src="assets/undangan/js/plugins.js"></script>
<script src="assets/undangan/js/main.js"></script>
<Script>
    (function(html) {

        'use strict';

        html.className = html.className.replace(/\bno-js\b/g, '') + 'js';

        const cfg = {

            // Countdown Timer Final Date
            finalDate : 'September 09, 2023 09:00:00',
            // MailChimp URL
            mailChimpURL : 'https://facebook.us1.list-manage.com/subscribe/post?u=1abf75f6981256963a47d197a&amp;id=37c6d8f4d6'

        };

        /* Countdown Timer
        * ------------------------------------------------------ */
        const ssCountdown = function () {

            const finalDate = new Date(cfg.finalDate).getTime();
            const daysSpan = document.querySelector('.counter .ss-days');
            const hoursSpan = document.querySelector('.counter .ss-hours');
            const minutesSpan = document.querySelector('.counter .ss-minutes');
            const secondsSpan = document.querySelector('.counter .ss-seconds');
            let timeInterval;

            if (!(daysSpan && hoursSpan && minutesSpan && secondsSpan)) return;

            function timer() {

                const now = new Date().getTime();
                let diff = finalDate - now;

                if (diff <= 0) {
                    if (timeInterval) {
                        clearInterval(timeInterval);
                    }
                    return;
                }

                let days = Math.floor( diff/(1000*60*60*24) );
                let hours = Math.floor( (diff/(1000*60*60)) % 24 );
                let minutes = Math.floor( (diff/1000/60) % 60 );
                let seconds = Math.floor( (diff/1000) % 60 );

                if (days <= 99) {
                    if (days <= 9) {
                        days = '00' + days;
                    } else {
                        days = '0' + days;
                    }
                }

                hours <= 9 ? hours = '0' + hours : hours;
                minutes <= 9 ? minutes = '0' + minutes : minutes;
                seconds <= 9 ? seconds = '0' + seconds : seconds;

                daysSpan.textContent = days;
                hoursSpan.textContent = hours;
                minutesSpan.textContent = minutes;
                secondsSpan.textContent = seconds;

            }

            timer();
            timeInterval = setInterval(timer, 1000);
        };

        /* Initialize
        * ------------------------------------------------------ */
        (function ssInit() {
            ssCountdown();

        })();

    })(document.documentElement);
</Script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

</body>

</html>
