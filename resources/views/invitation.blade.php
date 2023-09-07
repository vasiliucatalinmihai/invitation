<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!--- basic page needs
    ================================================== -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Vasilii Online / Wedding Invitations"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="mata"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="weading invitatin"/>
    <meta property="og:title" content="vasilii"/>
    <meta property="og:url" content="https://vasilii-wday.home.ro"/>
    <meta property="og:site_name" content="vasilii"/>

    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <title>Vasilii wday</title>

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{url('assets/undangan/css/vendor.css')}}">
    <link rel="stylesheet" href="{{url('assets/undangan/css/styles.css')}}">
    <link rel="stylesheet"
          href="{{url('assets/undangan/css/gallery-grid.css')}}">

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="/favicon.ico"/>
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
                 style="background-image: url('/assets/img//2.jpeg');"></div>
            <div class="bg-opacity-50 s-intro__slide swiper-slide"
                 style="background-image: url('/assets/img//1.jpeg');"></div>
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
            <div id="flash-message" class="flash-message"
                 style="z-index: 100000">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has($msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get($msg) }}</p>
                    @endif
                @endforeach
            </div>
            <div class="text-pretitle">
                The Wedding
            </div>

            <h1 class="text-huge-title">
                Cristina & Catalin
            </h1>

            <div class="text-pretitle">
                Dear: <span
                    style="text-color:white; font-weight: bold;">{{ $invitation->fullname }}</span>
                <br>We are inviting you to the wedding
                <br>
                <br>
                <button href="#hidden"
                        class="btn--stroke2 btn--small smoothscroll"
                        style="text-color:white !important;">
                    Open Invitation
                </button>
            </div>

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
    <!-- s-intro__content -->

    <div class="s-intro__scroll">
        <a href="#hidden" class="smoothscroll">
            Scroll For More
        </a>
    </div>
    <!-- s-intro__scroll -->

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

            <p class="text-center desc-bride">We are inviting you to the
                wedding</p>
            <h1 class="text-center text-huge-title">
                {{ $invitation->fullname }}
            </h1>

            <nav class="tab-nav">
                <ul class="tab-nav__list">
                    <li>
                        <a href="#0">
                            <span>Event</span>
                        </a>
                    </li>
                    <li>
                        <a href="#tab-location">
                            <span>Locatie</span>
                        </a>
                    </li>
                    <li>
                        <a href="#tab-afterpaty">
                            <span>Afterparty</span>
                        </a>
                    </li>
                </ul>
            </nav> <!-- end tab-nav -->

            <div class="tab-content">

                <!-- 02 - tab event -->
                <div id="tab-event" class='tab-content__item'>

                    <div class="row tab-content__item-header">
                        <div class="column">
                            <h2>Save the date</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <p class="desc">
                                <strong>{{$invitation->fullname}}</strong> te
                                asteptam cu drag, sa chefuiesti alaturi de noi
                                la oficiera noastra civila
                            </p>
                        </div>
                    </div>


                        <form method="POST" action="/inv/{{$invitation->hash}}">

                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <p class="desc">
                                        Completarea formularului este obligatorie pana in data de 29.08.2023.
                                    </p>
                                </div>
                            </div>

                            @csrf
                            <input type="hidden" name="hash"
                                   value="{{$invitation->hash}}">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <label style="margin-bottom: 0px" for="accepted">Vin:</label>
                                    <select id="accepted" name="accepted" class="@error('accepted') is-invalid @enderror">
                                        <option {{(int) $invitation->accepted == 0 ? 'selected' : ''}} value="0">Nu</option>
                                        <option {{(int) $invitation->accepted == 1 ? 'selected' : ''}} value="1">Da</option>
                                    </select>
                                    @error('accepted')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <label style="margin-bottom: 0px" for="guests">Persoane:</label>
                                    <select id="guests" name="guests" class="@error('guests') is-invalid @enderror">
                                        <option {{(int) $invitation->guests == 1 ? 'selected' : ''}} value="1">1</option>
                                        <option {{(int) $invitation->guests == 2 ? 'selected' : ''}} value="2">2</option>
                                        <option {{(int) $invitation->guests == 3 ? 'selected' : ''}} value="3">3</option>
                                    </select>
                                    @error('guests')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <label style="margin-bottom: 0px" for="infants">Copii:</label>
                                    <select id="infants" name="infants" class="@error('infants') is-invalid @enderror">
                                        <option {{(int) $invitation->infants == 0 ? 'selected' : ''}} value="0">0</option>
                                        <option {{(int) $invitation->infants == 1 ? 'selected' : ''}} value="1">1</option>
                                        <option {{(int) $invitation->infants == 2 ? 'selected' : ''}} value="2">2</option>
                                        <option {{(int) $invitation->infants == 3 ? 'selected' : ''}} value="3">3</option>
                                    </select>
                                    @error('infants')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <label style="margin-bottom: 0px" for="infants_age">Varsta copii:</label>
                                    <select id="infants_age" name="infants_age"class="@error('infants_age') is-invalid @enderror">
                                        <option {{(int) $invitation->infants_age == 0 ? 'selected' : ''}} value="0">n/a</option>
                                        <option {{(int) $invitation->infants_age == 3 ? 'selected' : ''}} value="3">mai mic de 3 ani</option>
                                        <option {{(int) $invitation->infants_age == 7 ? 'selected' : ''}} value="7">3-7 ani</option>
                                        <option {{(int) $invitation->infants_age == 18 ? 'selected' : ''}} value="18">mai mare de 7</option>
                                    </select>
                                    @error('infants_age')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <label style="margin-bottom: 0px" for="food_restriction">Restrictii, alergii mancare:</label>
                                    <textarea id="food_restriction" name="food_restriction"
                                              rows="1" class="@error('food_restriction') is-invalid @enderror">
                                        {{$invitation->food_restriction}}
                                    </textarea>
                                    @error('food_restriction')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <label style="margin-bottom: 0px" for="vegan">Mancare vegana:</label>
                                    <select id="vegan" name="vegan" class="@error('vegan') is-invalid @enderror">
                                        <option {{(int) $invitation->vegan == 0 ? 'selected' : ''}} value="0">Nu</option>
                                        <option {{(int) $invitation->vegan == 1 ? 'selected' : ''}} value="1">Da</option>
                                    </select>
                                    @error('vegan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <label style="margin-bottom: 0px" for="after_party">Vin la afterparty:</label>
                                    <select id="after_party" name="after_party" class="@error('after_party') is-invalid @enderror">
                                        <option {{(int) $invitation->after_party == 0 ? 'selected' : ''}} value="0">Nu</option>
                                        <option {{(int) $invitation->after_party == 1 ? 'selected' : ''}} value="1">Da</option>
                                    </select>
                                    @error('after_party')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <label style="margin-bottom: 0px" for="after_party">Mesaj:</label>
                                    <textarea id="message" rows="3"
                                              name="message" class="@error('message') is-invalid @enderror">
                                        {{$invitation->message}}
                                    </textarea>
                                    @error('message')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <input type="submit" value="Gata" class="btn btn--stroke u-fullwidth">
                                </div>
                            </div>
                        </form>

                    <div
                        class="row block-lg-one-half block-md-one-half block-tab-whole">
                        <div class="column services-list__item">
                            <div class="services-list__item-content">
                                <h4 class="item-title">Cand? Unde?</h4>
                                <p class="column">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="16" height="16"
                                         fill="currentColor"
                                         class="bi bi-calendar3"
                                         viewBox="0 0 16 16">
                                        <path
                                            d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                        <path
                                            d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                    Sambata, 9 Septembrie
                                    <br>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="16" height="16"
                                         fill="currentColor" class="bi bi-clock"
                                         viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                    </svg>
                                    15:00
                                    <br>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="16" height="16"
                                         fill="currentColor"
                                         class="bi bi-geo-alt"
                                         viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                        <path
                                            d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                    La Mosu - Strada Aviator Firuța Someșfălean,
                                    Dezmir
                                    <br>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.3025077187754!2d23.7203036767251!3d46.77864324478379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490bf8060c61ff%3A0x49dbbe4e32977ecb!2sLa%20Mosu!5e0!3m2!1sen!2sro!4v1692949664464!5m2!1sen!2sro"
                                        width="auto" height="auto"
                                        style="border:0;" allowfullscreen=""
                                        loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <br>
                                    <br>
                                    <a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Cristina & Catalin&details=Starte civila Cristina si Catalin&location=La Mosu, Strada Aviator Firuța Someșfălean, Dezmir 407039, Romania&dates=20230909T120000Z/20230909T180000Z&ctz=Europe/Bucharest"
                                       class="btn btn--stroke u-fullwidth"
                                       target="_blank">Add to calendar</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- end services-list -->

                </div>
                <!-- end 02 - tab event -->

                <!-- 03 - tab gallery -->
                <div id="tab-location" class="tab-content__item">
                    <a href="https://www.petrecerelacurte.ro/"
                       class="btn btn--stroke u-fullwidth"
                       target="_blank">La Mosu</a>

                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <p class="desc">
                                Mosu ne asteapta pe totii cu atmosfera cozy, relaxanta si lipsita de formalitati asa ca tinutele alese tin doar de imaginatia fiecaruia.
                            </p>
                        </div>
                    </div>
                    <div class="tz-gallery">

                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox"
                                   href="https://scontent.fclj2-1.fna.fbcdn.net/v/t39.30808-6/366282538_742204614376701_6254522024653727752_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHDw5d4l9RTEqqmlWKKL1qIlQnlehwKW6KVCeV6HApbojZo3NaUJRHoe_e8Ph-1DGI&_nc_ohc=wIrtOo-BI40AX9_hVKA&_nc_ht=scontent.fclj2-1.fna&oh=00_AfAqpmrHe_Yibgfnx64LU8SExDa_J1OpJAUJhTzktigtog&oe=64EDF365">
                                    <img
                                        src="https://scontent.fclj2-1.fna.fbcdn.net/v/t39.30808-6/366282538_742204614376701_6254522024653727752_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHDw5d4l9RTEqqmlWKKL1qIlQnlehwKW6KVCeV6HApbojZo3NaUJRHoe_e8Ph-1DGI&_nc_ohc=wIrtOo-BI40AX9_hVKA&_nc_ht=scontent.fclj2-1.fna&oh=00_AfAqpmrHe_Yibgfnx64LU8SExDa_J1OpJAUJhTzktigtog&oe=64EDF365">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox"
                                   href="https://scontent.fclj2-1.fna.fbcdn.net/v/t39.30808-6/366329128_742204577710038_1782044825633336156_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHX8zvBf5hMex7nvcZGdDVMMN7bhupdMfcw3tuG6l0x9zmT7qrMfxjSad7QjaKIiYs&_nc_ohc=4hNP_C3Ml4QAX8WqqXn&_nc_ht=scontent.fclj2-1.fna&oh=00_AfAbVtnG_Pdspf92J2VGQz6kGjuunR6WGctKA21HU3WlCA&oe=64ED1ED3">
                                    <img
                                        src="https://scontent.fclj2-1.fna.fbcdn.net/v/t39.30808-6/366329128_742204577710038_1782044825633336156_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHX8zvBf5hMex7nvcZGdDVMMN7bhupdMfcw3tuG6l0x9zmT7qrMfxjSad7QjaKIiYs&_nc_ohc=4hNP_C3Ml4QAX8WqqXn&_nc_ht=scontent.fclj2-1.fna&oh=00_AfAbVtnG_Pdspf92J2VGQz6kGjuunR6WGctKA21HU3WlCA&oe=64ED1ED3">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a class="lightbox"
                                   href="https://scontent.fclj2-1.fna.fbcdn.net/v/t39.30808-6/366363311_742204474376715_1135498600026357064_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeG23CzFahrszAvgf5Ti0hWZbMGM3aqsdldswYzdqqx2Vx7TXAUU5ylomQ-dlnVNxMc&_nc_ohc=7I_MFMNpUVUAX_BMyNz&_nc_ht=scontent.fclj2-1.fna&oh=00_AfDFVGYaF47DALt63DzMvzx6mV3MpKvGW0fby1h_yhhZXQ&oe=64ED1E4E">
                                    <img
                                        src="https://scontent.fclj2-1.fna.fbcdn.net/v/t39.30808-6/366363311_742204474376715_1135498600026357064_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeG23CzFahrszAvgf5Ti0hWZbMGM3aqsdldswYzdqqx2Vx7TXAUU5ylomQ-dlnVNxMc&_nc_ohc=7I_MFMNpUVUAX_BMyNz&_nc_ht=scontent.fclj2-1.fna&oh=00_AfDFVGYaF47DALt63DzMvzx6mV3MpKvGW0fby1h_yhhZXQ&oe=64ED1E4E"
                                        alt="Tunnel">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox"
                                   href="https://scontent.fclj2-1.fna.fbcdn.net/v/t39.30808-6/366250600_742204427710053_7622125034172988557_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHAwTS3qUkbEr_CNpfEXKcWS_YHwjj_oZ9L9gfCOP-hnwWAmA2uEPyzsOUPwLgpO2g&_nc_ohc=9DNYgq35A_YAX-nkXD8&_nc_ht=scontent.fclj2-1.fna&oh=00_AfDv0qNqKeaVgObgrSBl7nllc5XE7OWBPbPiA7qEFc-VnQ&oe=64ED9B4D">
                                    <img
                                        src="https://scontent.fclj2-1.fna.fbcdn.net/v/t39.30808-6/366250600_742204427710053_7622125034172988557_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHAwTS3qUkbEr_CNpfEXKcWS_YHwjj_oZ9L9gfCOP-hnwWAmA2uEPyzsOUPwLgpO2g&_nc_ohc=9DNYgq35A_YAX-nkXD8&_nc_ht=scontent.fclj2-1.fna&oh=00_AfDv0qNqKeaVgObgrSBl7nllc5XE7OWBPbPiA7qEFc-VnQ&oe=64ED9B4D"
                                        alt="Coast">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox"
                                   href="https://scontent.fclj2-1.fna.fbcdn.net/v/t39.30808-6/366300740_742202664376896_7230002102842910849_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGLn8m9XEMyn_SlAhtM1MOeKdnk4i7uJoQp2eTiLu4mhG3ebMekb5IdVkngjlOMRhw&_nc_ohc=jfp_LTekgJoAX8j0xUq&_nc_oc=AQmBWluE_UyoyNp3H8BYWtjDOaEBKdJfzECqwLPN8lJhbTzg3aTMWUZXt2Yk8gJnPBg&_nc_ht=scontent.fclj2-1.fna&oh=00_AfDdy1zHL3OCzlJ1fQ_1KPy_jgoc2MI7W3KnG08ho_ny3A&oe=64EDF9C1">
                                    <img
                                        src="https://scontent.fclj2-1.fna.fbcdn.net/v/t39.30808-6/366300740_742202664376896_7230002102842910849_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGLn8m9XEMyn_SlAhtM1MOeKdnk4i7uJoQp2eTiLu4mhG3ebMekb5IdVkngjlOMRhw&_nc_ohc=jfp_LTekgJoAX8j0xUq&_nc_oc=AQmBWluE_UyoyNp3H8BYWtjDOaEBKdJfzECqwLPN8lJhbTzg3aTMWUZXt2Yk8gJnPBg&_nc_ht=scontent.fclj2-1.fna&oh=00_AfDdy1zHL3OCzlJ1fQ_1KPy_jgoc2MI7W3KnG08ho_ny3A&oe=64EDF9C1"
                                        alt="Rails">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox"
                                   href="https://scontent.fclj2-1.fna.fbcdn.net/v/t39.30808-6/357774359_737219744875188_990955078902535823_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHgJeHJ5Wtglj1FiS3Yam0PGCjUJaQV4WoYKNQlpBXhapkIWnDYa59gOz3dukMbV3c&_nc_ohc=XTUHsYcNa8kAX90qagM&_nc_ht=scontent.fclj2-1.fna&oh=00_AfBRRuu-AUOU7QFAXDlQ3ePv5imH2f6u9ZTsf2M5mUftgg&oe=64EC9069">
                                    <img
                                        src="https://scontent.fclj2-1.fna.fbcdn.net/v/t39.30808-6/357774359_737219744875188_990955078902535823_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHgJeHJ5Wtglj1FiS3Yam0PGCjUJaQV4WoYKNQlpBXhapkIWnDYa59gOz3dukMbV3c&_nc_ohc=XTUHsYcNa8kAX90qagM&_nc_ht=scontent.fclj2-1.fna&oh=00_AfBRRuu-AUOU7QFAXDlQ3ePv5imH2f6u9ZTsf2M5mUftgg&oe=64EC9069"
                                        alt="Traffic">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end 03 - tab gallery -->
                <!-- 04 - tab afterparty -->
                <div id="tab-afterparty" class="tab-content__item">
                    <div
                        class="row block-lg-one-half block-md-one-half block-tab-whole">
                        <div class="column services-list__item">
                            <div class="services-list__item-content">
                                <p>Klausen Burger </p>
                                <br>
                                <div class="row">
                                    <p class="desc-bride">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-calendar3"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                            <path
                                                d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>
                                        Sambata, 9 Septembrie
                                        <br>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16"
                                             fill="currentColor" class="bi bi-clock"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                        </svg>
                                        22:00
                                        <br>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-geo-alt"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                            <path
                                                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                            Strada Regele Ferdinand 22, Cluj-Napoca
                                        <br>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.594389039319!2d23.586577976346142!3d46.772890971125506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47490e9c34d9b79f%3A0xc0f86796c9e6c54d!2sKlausen%20Burger!5e0!3m2!1sro!2sro!4v1694083631163!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        <br>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end 04 - tab afterparty -->
            </div> <!-- end tab content -->

            <!-- footer  -->
            <footer>
                <div class="ss-copyright">
                    <span>© Copyright Ion Fitil {{date("Y")}}</span>
                </div>
            </footer>
        </div>
    </div>

    <div class="ss-go-top">
        <a class="smoothscroll" title="Back to Top" href="#top">
            <span>Back to Top</span>
            <svg viewBox="0 0 15 15" fill="none"
                 xmlns="http://www.w3.org/2000/svg" width="26" height="26">
                <path
                    d="M7.5 1.5l.354-.354L7.5.793l-.354.353.354.354zm-.354.354l4 4 .708-.708-4-4-.708.708zm0-.708l-4 4 .708.708 4-4-.708-.708zM7 1.5V14h1V1.5H7z"
                    fill="currentColor"></path>
            </svg>
        </a>
    </div> <!-- end ss-go-top -->

</section>
<!-- end s-details -->


<!-- Java Script
================================================== -->
<script src="{{url('assets/undangan/js/plugins.js')}}"></script>
<script src="{{url('assets/undangan/js/main.js')}}"></script>
<Script>
    (function (html) {

        'use strict';

        html.className = html.className.replace(/\bno-js\b/g, '') + 'js';

        const cfg = {

            // Countdown Timer Final Date
            finalDate: 'September 09, 2023 09:00:00',
            // MailChimp URL
            mailChimpURL: 'https://facebook.us1.list-manage.com/subscribe/post?u=1abf75f6981256963a47d197a&amp;id=37c6d8f4d6'

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

                let days = Math.floor(diff / (1000 * 60 * 60 * 24));
                let hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
                let minutes = Math.floor((diff / 1000 / 60) % 60);
                let seconds = Math.floor((diff / 1000) % 60);

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

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

<script>
    setTimeout(function () {
        document.getElementById('flash-message').style.display = 'none';
    }, 10000); // 10000ms = 10s
</script>
</body>

</html>
