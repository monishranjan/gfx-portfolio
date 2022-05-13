<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = "Mail from Monish Ranjan";

    $mailheader = "From:".$name."<".$email.">\r\n";

    $recipient = "monishranjan@outlook.com";

    mail($recipient, $subject, $message, $mailheader)
    or die("Error!");

    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--========== UNICONS ==========-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.    0/css/line.css">

        <!--========== BOXICONS ==========-->
        <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"  rel="stylesheet">

        <!--========== SWIPER CSS ==========-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--========== MAIN CSS ==========-->
        <link rel="stylesheet" href="assets/css/style.css">

        <title>Contact Page</title>
    </head>
    <body>
        <!--========== CURSOR ==========-->
        <div class="cursor"></div>

        <!--========== SIDEBAR ==========-->
        <div class="nav__toggle" id="nav-toggle">
        <i class="uil uil-bars"></i>
        </div>

        <aside class="sidebar" id="sidebar">
        <nav class="nav">
            <div class="nav__logo">
                <!-- <a href="./index.html" class="nav__logo-text">M</a> -->
                <img href="./index.html" src="./assets/img/Monish-logo-40px.png" alt="" class="nav__logo-design">
            </div>
            <div class="nav__menu">
                <div class="menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">Skills</a>
                        </li>
                        <li class="nav__item">
                            <a href="#work" class="nav__link">Work</a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">Services</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="btn__share">
                <i class="uil uil-share-alt social__share"></i>
            </div>

            <div class="nav__close" id="nav-close">
                <i class="uil uil-times"></i>
            </div>
        </nav>
        </aside>

        <!--========== Main ==========-->
        <main class="main">
            <!--========== Home ==========-->
            <section class="home" id="home">
            <div class="home__container container grid">
                <div class="home__social">
                    <span class="home__social-follow">Follow Me</span>
                    <div class="home__social-links">
                        <a href="https://www.facebook.com/monish.monishranjan/" target="_blank" class="home__social-link">
                            <i class="uil uil-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/_.monish_ranjan_12._/" target="_blank" class="home__social-link">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/monish-ranjan-47a964173/" target="_blank" class="home__social-link">
                            <i class="uil uil-linkedin"></i>
                        </a>
                    </div>
                </div>

                <!-- <img src="./assets/img/home-img-1.png" alt="" class="home__img"> -->

                <div class="home__data">
                    <h1 class="home__title">Thank You!!</h1>
                    <div class="home__subtitle">Submission Recieved</div>

                    <p class="home__description">High level experience in logo design and graphics knowledge, producing quality work.</p>
                    <a href="index.html" class="button">Go Back To Main Site</a>
                </div>

                <div class="my__info">
                    <div class="info__item">
                        <i class="uil uil-instagram info__icon"></i>

                        <div>
                            <h3 class="info__title"><a href="https://www.instagram.com/_.monish_ranjan_12._/" style="color: hsl(var(--hue-color), 8%, 95%);" target="_blank">Instagram</a></h3>
                            <span class="info__subtitle"><a href="https://www.instagram.com/_.monish_ranjan_12._/" style="color: hsl(var(--hue-color), 8%, 95%);" target="_blank">_.monish_ranjan_12._</a></span>
                        </div>
                    </div>

                    <div class="info__item">
                        <a href="http://wa.me/917004208176"></a><i class="uil uil-whatsapp info__icon"></i></a>

                        <div>
                            <h3 class="info__title"><a href="http://wa.me/917004208176" style="color: hsl(var(--hue-color), 8%, 95%);" target="_blank">Whatsapp</a></h3>
                            <span class="info__subtitle"> <a href="http://wa.me/917004208176" style="color: hsl(var(--hue-color), 8%, 95%);" target="_blank">+91-7004208176</a></span>
                        </div>
                    </div>

                    <div class="info__item">
                        <i class="uil uil-envelope-edit info__icon"></i>

                        <div>
                            <h3 class="info__title">Email</h3>
                            <span class="info__subtitle">monishranjan9@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
            </section>

            <!--===== FOOTER =====-->
            <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div>
                        <h1 class="footer__title">Monish</h1>
                        <span class="footer__subtitle">Graphics Designer</span>
                    </div>

                    <ul class="footer__links">
                        <li>
                            <a href="#services" class="footer__link">Services</a>
                        </li>
                        <li>
                            <a href="#work" class="footer__link">Work</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer__link">Contact</a>
                        </li>
                    </ul>

                    <div class="footer__socials">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                            <i class="uil uil-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="https://www.twitter.com/" target="_blank" class="footer__social">
                            <i class="uil uil-twitter"></i>
                        </a>
                    </div>
                </div>

                <p class="footer__copy">&#169; Monish. All right reserved</p>
            </div>
            </footer>
        </main>

        <!--========== MIXITUP FILTER ==========-->
        <script src="./assets/js/mixitup.min.js"></script>

        <!--========== SWIPER JS ==========-->
        <script src="./assets/js/swiper-bundle.min.js"></script>

        <!--========== MAIN JS ==========-->
        <script src="./assets/js/main.js"></script>
    </body>
    </html> 
    ';
?>