<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
        <link href='/css/sm-core-css.css' rel='stylesheet' type='text/css' />
        <link href='/css/sm-blue.css' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
              integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet"
              type="text/css">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
        <script src="js/jquery.smartmenus.min.js" type="text/javascript"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/style.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
    <script>
        $(function() {
            $('#main-menu').smartmenus();
        });
    </script>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header-info">
                    <a href="#" class="logo">
                        <!--                <img class="logo-img" src="../img/logo.png" alt="logo">-->
                        <svg width="140" height="56" viewBox="0 0 140 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.1623 56C12.6065 56 0 43.1495 0 27.2926V0C15.5558 0 28.1623 12.8505 28.1623 28.7074V56Z"
                                  fill="#0880AE"/>
                            <path d="M30.62 32.7747V18.2737C30.62 8.19368 38.6581 0 48.5756 0V14.5011C48.5756 24.581 40.5375 32.7747 30.62 32.7747Z"
                                  fill="#F26532"/>
                            <path d="M71.1864 56H50.5996C39.5544 56 30.62 46.8926 30.62 35.6337H51.2068C62.252 35.6337 71.1864 44.741 71.1864 56Z"
                                  fill="#0880AE"/>
                            <path d="M66.0074 24.6808L60.6533 17.5675V24.6808H56.7738V8.57251H60.6533V15.64L65.9621 8.57251H70.5222L64.3513 16.4661L70.749 24.6808H66.0074Z"
                                  fill="#252525"/>
                            <path d="M86.3864 8.57251V24.6808H82.507V18.0494H76.4722V24.6808H72.5927V8.57251H76.4722V14.8828H82.507V8.57251H86.3864Z"
                                  fill="#252525"/>
                            <path d="M99.1013 21.8355H93.1573L92.2044 24.6808H88.1435L93.906 8.57251H98.398L104.161 24.6808H100.054L99.1013 21.8355ZM98.1031 18.8066L96.1293 12.9094L94.1782 18.8066H98.1031Z"
                                  fill="#252525"/>
                            <path d="M120.162 24.6808H116.282L109.794 14.7451V24.6808H105.914V8.57251H109.794L116.282 18.5542V8.57251H120.162V24.6808Z"
                                  fill="#252525"/>
                            <path d="M85.4442 32.6413V33.9722H81.043V48.6808H79.4549V33.9722H75.0309V32.6413H85.4442Z"
                                  fill="#252525"/>
                            <path d="M92.7038 33.9493V39.9383H98.7159V41.2692H92.7038V47.3499H99.3965V48.6808H91.1157V32.6184H99.3965V33.9493H92.7038Z"
                                  fill="#252525"/>
                            <path d="M104.964 40.6496C104.964 39.074 105.304 37.6666 105.984 36.4275C106.665 35.1731 107.595 34.2017 108.775 33.5133C109.955 32.8096 111.271 32.4578 112.723 32.4578C114.492 32.4578 116.005 32.8861 117.26 33.7428C118.53 34.5841 119.453 35.7773 120.028 37.3224H118.167C117.714 36.2363 117.018 35.3872 116.08 34.7753C115.158 34.1634 114.038 33.8575 112.723 33.8575C111.558 33.8575 110.507 34.1328 109.569 34.6836C108.646 35.2343 107.92 36.0297 107.391 37.07C106.862 38.0949 106.597 39.2881 106.597 40.6496C106.597 42.0111 106.862 43.2043 107.391 44.2292C107.92 45.2542 108.646 46.042 109.569 46.5927C110.507 47.1434 111.558 47.4188 112.723 47.4188C114.038 47.4188 115.158 47.1205 116.08 46.5239C117.018 45.912 117.714 45.0706 118.167 43.9998H120.028C119.453 45.5295 118.53 46.7151 117.26 47.5565C115.989 48.3978 114.477 48.8185 112.723 48.8185C111.271 48.8185 109.955 48.4743 108.775 47.7859C107.595 47.0822 106.665 46.1108 105.984 44.8717C105.304 43.6326 104.964 42.2253 104.964 40.6496Z"
                                  fill="#252525"/>
                            <path d="M138.131 32.6413V48.6808H136.543V41.1774H127.944V48.6808H126.356V32.6413H127.944V39.8465H136.543V32.6413H138.131Z"
                                  fill="#252525"/>
                        </svg>

                    </a>
                    <div class="phone">
                        <div class="header-information">Need Help?</div>
                        <a href="tel:+5145439936" class="header-phone">(514) 543-9936</a>
                    </div>
                </div>
                <nav id="main-menu" class="sm sm-blue menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a>
                        <ul>
                            <li><a href="#">Sub-Menu 1</a></li>
                            <li>
                                <a href="#">Sub-Menu 1</a>
                                <ul>
                                    <li><a href="#">Turpis consectetur 3</a></li>
                                    <li><a href="#">Senectus cursus pretium malesuada.</a></li>
                                    <li><a href="#">Luctus neque frin 4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Turpis consectetur 3</a></li>
                            <li><a href="#">Luctus neque frin 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Book now</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </nav>
            </div>
        </div>

    </header>
        @inertia

        @env ('local')
            <script src="http://test.loc/js/app.js"></script>
        @endenv
    <footer>
        <div class="footer <!--fixed-bottom-->">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-title">Departments</div>
                            <ul class="footer-list">
                                <li><a href="#">Medical</a></li>
                                <li><a href="#">Pharmaceuticals</a></li>
                                <li><a href="#">Medical Equipment</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-title">Quick Links</div>
                            <ul class="footer-list">
                                <li><a href="#">What do we do?</a></li>
                                <li><a href="#">Our expertise</a></li>
                                <li><a href="#">Request an Appointment</a></li>
                                <li><a href="#">Book with a Specialist</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-title">Head Office</div>
                            <ul class="footer-list">
                                <li>
                                    <a href="/#">
                            <span>
                                <i class="fa-solid fa-location-dot"></i>
                            </span>&nbsp;4517 Washington Ave. Manchester,<br>&nbsp;&emsp;Kentucky 39495
                                    </a>
                                </li>
                                <li>
                                    <a href="/#">
                            <span>
                               <i class="fa-solid fa-envelope"></i>
                            </span>&nbsp;darrell@mail.com
                                    </a>
                                </li>
                                <li>
                                    <a href="/#">
                            <span>
                                <i class="fa-solid fa-phone"></i>
                            </span>&nbsp;darrell@mail.com
                                    </a>
                                </li>


                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <svg width="278" height="112" viewBox="0 0 278 112" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M55.9223 112C25.033 112 0 86.2989 0 54.5853V0C30.8893 0 55.9223 25.7011 55.9223 57.4147V112Z"
                                    fill="#D8D8D8"/>
                                <path
                                    d="M60.8025 65.5495V36.5474C60.8025 16.3874 76.7639 0 96.4573 0V29.0021C96.4573 49.1621 80.4959 65.5495 60.8025 65.5495Z"
                                    fill="#D8D8D8"/>
                                <path
                                    d="M141.356 112H100.476C78.5437 112 60.8025 93.7852 60.8025 71.2673H101.682C123.615 71.2673 141.356 89.4821 141.356 112Z"
                                    fill="#D8D8D8"/>
                                <path
                                    d="M131.072 49.3617L120.44 35.135V49.3617H112.737V17.1451H120.44V31.28L130.982 17.1451H140.037L127.783 32.9321L140.487 49.3617H131.072Z"
                                    fill="#D8D8D8"/>
                                <path
                                    d="M171.539 17.1451V49.3617H163.835V36.0987H151.852V49.3617H144.148V17.1451H151.852V29.7655H163.835V17.1451H171.539Z"
                                    fill="#D8D8D8"/>
                                <path
                                    d="M196.787 43.671H184.984L183.092 49.3617H175.028L186.47 17.1451H195.39L206.833 49.3617H198.679L196.787 43.671ZM194.805 37.6132L190.885 25.8188L187.011 37.6132H194.805Z"
                                    fill="#D8D8D8"/>
                                <path
                                    d="M238.607 49.3617H230.903L218.019 29.4902V49.3617H210.316V17.1451H218.019L230.903 37.1084V17.1451H238.607V49.3617Z"
                                    fill="#D8D8D8"/>
                                <path d="M169.668 65.2827V67.9445H160.928V97.3617H157.775V67.9445H148.99V65.2827H169.668Z"
                                      fill="#D8D8D8"/>
                                <path
                                    d="M184.083 67.8986V79.8766H196.021V82.5384H184.083V94.6999H197.373V97.3617H180.93V65.2368H197.373V67.8986H184.083Z"
                                    fill="#D8D8D8"/>
                                <path
                                    d="M208.428 81.2993C208.428 78.148 209.103 75.3332 210.455 72.855C211.806 70.3462 213.653 68.4034 215.996 67.0267C218.339 65.6193 220.952 64.9156 223.835 64.9156C227.349 64.9156 230.352 65.7723 232.845 67.4856C235.368 69.1683 237.2 71.5547 238.341 74.6448H234.647C233.746 72.4726 232.364 70.7746 230.502 69.5507C228.67 68.3269 226.448 67.715 223.835 67.715C221.522 67.715 219.435 68.2658 217.573 69.3672C215.741 70.4686 214.299 72.0595 213.248 74.14C212.197 76.1899 211.671 78.5763 211.671 81.2993C211.671 84.0222 212.197 86.4087 213.248 88.4585C214.299 90.5084 215.741 92.0841 217.573 93.1855C219.435 94.2869 221.522 94.8376 223.835 94.8376C226.448 94.8376 228.67 94.241 230.502 93.0478C232.364 91.824 233.746 90.1413 234.647 87.9996H238.341C237.2 91.0591 235.368 93.4302 232.845 95.113C230.322 96.7957 227.319 97.6371 223.835 97.6371C220.952 97.6371 218.339 96.9487 215.996 95.5719C213.653 94.1645 211.806 92.2217 210.455 89.7435C209.103 87.2653 208.428 84.4506 208.428 81.2993Z"
                                    fill="#D8D8D8"/>
                                <path
                                    d="M274.288 65.2827V97.3617H271.135V82.3548H254.061V97.3617H250.907V65.2827H254.061V79.693H271.135V65.2827H274.288Z"
                                    fill="#D8D8D8"/>
                            </svg>
                            <div class="footer-description-logo mt-4">
                                Lorem ipsum dolor sit amet, consectetur <br>
                                adipiscing elit. Cras blandit tincidunt ut sed.<br>
                                Velit euismod integer convallis ornare eu.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div id="footer-links" class="footer-inline col-sm-12 pull-right">
                            <div class="copy">©2021 All Rights Reserved</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>
