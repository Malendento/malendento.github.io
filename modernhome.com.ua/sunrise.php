<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/png">
    <title>Item-1 | Modern Home</title>

    <link rel="stylesheet" href="./css/zoom.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="./css/house.css">

</head>

<body>

    <div class="sidenav__wrapper col-md-5" id="sidebar">
        <div class="sidenav-header">
            <h3 class="sidenav__title">modernhome</h3>

            <div class="nav-burger sidenav-burger open" id="dismiss">
                <div class="nav-burger__item nav-burger__item_first"></div>
                <div class="nav-burger__item nav-burger__item_second"></div>
                <div class="nav-burger__item nav-burger__item_third"></div>
            </div>
        </div>

        <div class="sidenav-main">
            <ul class="sidenav-main__list col-6">
                <li class="sidenav-main__item"><a class="sidenav-main__link" href="index.html">Головна</a></li>
                <li class="sidenav-main__item"><a class="sidenav-main__link" href="#about">Про нас</a></li>
                <li class="sidenav-main__item"><a class="sidenav-main__link" href="#cottages">Котеджі</a></li>
                <li class="sidenav-main__item"><a class="sidenav-main__link" href="#whywe">Чому ми</a></li>
                <li class="sidenav-main__item"><a class="sidenav-main__link" href="#partners">Партнери</a></li>
                <li class="sidenav-main__item"><a class="sidenav-main__link" href="#contacts">Контакти</a></li>
            </ul>

            <ul class="sidenav-main__list col-6">
                <li class="sidenav-main__item sidenav-main__title">Котеджі</li>
                <li class="sidenav-main__item"><a class="sidenav-main__link" href="sunrise.php">Схід Сонця</a></li>
                <li class="sidenav-main__item"><a class="sidenav-main__link" href="vishykaniy.php">Вишуканий</a></li>
                <li class="sidenav-main__item"><a class="sidenav-main__link" href="elit.php">Верховина</a></li>
            </ul>
        </div>

        <div class="sidenav-footer">

            <div class="sidenav-footer__wrapper">
                <div class="sidenav-footer__item col-md-6">
                    <a class="sidenav-footer__link" href="tel:380968565555">+38 (096) 856 55 55</a>
                    <a class="sidenav-footer__link" href="tel:380638565555">+38 (063) 856 55 55</a>
                </div>

                <div class="sidenav-m-show sidenav-footer__item sidenav-footer__item_row col-md-6">
                    <a class="sidenav-footer__link" href="#">Facebook</a>
                    <a class="sidenav-footer__link sidenav-footer__link_margin" href="#">Instagram</a>
                </div>

                <div class="sidenav-m-hide sidenav-footer__item col-md-6">
                    <a class="sidenav-footer__link" href="https://goo.gl/maps/dU4RcxzcoJvcVKYu6" target="_blank">
                        м. Городок<br>
                        вул. Нижні Пасіки буд. 63а
                    </a>
                </div>
            </div>

            <div class="sidenav-footer__wrapper sidenav-footer__wrapper_margin sidenav-footer-m_flex">
                <div class="sidenav-footer__item col-md-6">
                    <a class="sidenav-footer__link" href="mailto: modernhome@gmail.com">modernhome@gmail.com</a>
                </div>

                <div class="sidenav-m-show sidenav-footer__item sidenav-footer-m__item col-md-6">
                    <a class="sidenav-footer__link" href="https://goo.gl/maps/dU4RcxzcoJvcVKYu6" target="_blank">
                        м. Городок<br>
                        вул. Нижні Пасіки буд. 63а
                    </a>
                </div>

                <div class="sidenav-m-hide sidenav-footer__item sidenav-footer__item_row col-md-6">
                    <a class="sidenav-footer__link" href="https://www.facebook.com/%D0%91%D0%9A-%D0%A1%D1%83%D1%87%D0%B0%D1%81%D0%BD%D0%B8%D0%B9-%D0%94%D0%86%D0%9C-637894940011401/" target="_blank">Facebook</a>
                </div>
            </div>

        </div>

        <a class="g-button sidenav__button" href="#contacts">Зателефонувати мені</a>

    </div>

    <div class="overlay"></div>

    <header class="header container-fluid">
        <nav class="navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.svg" alt="" srcset="">
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Головна</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Про котедж</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#planning">Планування</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#document">Документація</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#building">Хід будівництва</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">Контакти</a>
                    </li>

                </ul>
            </div>

            <div class="nav-burger" id="sidebarCollapse">
                <div class="nav-burger__item nav-burger__item_first"></div>
                <div class="nav-burger__item nav-burger__item_second"></div>
                <div class="nav-burger__item nav-burger__item_third"></div>
            </div>
        </nav>

    </header>

    <main class="main">
        <section class="preview container-fluid" id="preview">

            <div class="preview__block col-md-6">

                <div class="preview__redBlock"></div>
                <p class="preview__address">м. Городок, вул.Андрусіва, 10</p>

                <div class="preview-slider preview-slider-for">
                    <div>
                        <img class="preview-slider__image" src="./img/house/sunrise/house1-img1.jpg" alt="" srcset="">
                    </div>
                    <div>
                        <img class="preview-slider__image" src="./img/house/sunrise/house1-img2.jpg" alt="" srcset="">
                    </div>
                    <div>
                        <img class="preview-slider__image" src="./img/house/sunrise/house1-img3.jpg" alt="" srcset="">
                    </div>
                    <div>
                        <img class="preview-slider__image" src="./img/house/sunrise/house1-img4.jpg" alt="" srcset="">
                    </div>
                </div>

            </div>

            <div class="preview__block preview__block_flex col-md-6">
                <h1 class="preview__title">Схід Сонця</h1>

                <div class="preview-slider preview-slider-nav">
                    <div class="preview-slider__thumb">
                        <img src="./img/house/sunrise/house1-img1-thumb.jpg" alt="" srcset="">
                    </div>
                    <div class="preview-slider__thumb">
                        <img src="./img/house/sunrise/house1-img2-thumb.jpg" alt="" srcset="">
                    </div>
                    <div class="preview-slider__thumb">
                        <img src="./img/house/sunrise/house1-img3-thumb.jpg" alt="" srcset="">
                    </div>
                    <div class="preview-slider__thumb">
                        <img src="./img/house/sunrise/house1-img4-thumb.jpg" alt="" srcset="">
                    </div>
                </div>

                <p class="preview__text">
                    Комплекс складається з 4 котеджів, що виконані в єдиному архітектурному стилі, з власним подвір'ям.
                </p>

                <div class="preview_margin">
                    <a class="g-button" href="#contacts">Отримати пропозицію</a>

                    <a class="g-next" href="elit.php">Наступний проект
                        <img class="g-next__image" src="./img/house/arrow-icon.svg"></a>
                </div>
            </div>
        </section>

        <section class="about container-fluid" id="about">
            <div class="about-desc col-md-5 offset-md-1">
                <h2 class="g-title g-title_left">Про котедж</h2>

                <p class="about-desc__text">
                    <span class="about-desc__span">Сучасний котеджний комплекс європейського класу, розташований у ближньому центрі Городка поблизу затишного лісового масиву. Комплекс складається з 4 котеджів, що виконані в єдиному архітектурному стилі, з власним подвір'ям. Комплекс створений невтомною командою компанії БК Сучасний ДІМ - інноваційного девелопера, відомого своїми сучасними енергозберігаючими та екологічними технологіями.</span></p>

                <a class="g-button" href="#">Отримати пропозицію</a>
            </div>

            <div class="about-info col-md-4 offset-md-1">

                <div class="about-info__wrapper">

                    <div class="about-info__item">
                        <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                            <path class="about-info__svg" d="M31.5 0H4.5C2.01825 0 0 2.01825 0 4.5V31.5C0 33.9818 2.01825 36 4.5 36H31.5C33.9818 36 36 33.9818 36 31.5V4.5C36 2.01825 33.9818 0 31.5 0ZM22.5 11.25V16.5H13.5V11.25H22.5ZM33 11.25V16.5H25.5V11.25H33ZM10.5 16.5H3V11.25H10.5V16.5ZM3 19.5H16.5V24.75H3V19.5ZM22.5 27.75V33H13.5V27.75H22.5ZM19.5 24.75V19.5H33V24.75H19.5ZM33 4.5V8.25H19.5V3H31.5C32.3273 3 33 3.67275 33 4.5ZM4.5 3H16.5V8.25H3V4.5C3 3.67275 3.67275 3 4.5 3ZM3 31.5V27.75H10.5V33H4.5C3.67275 33 3 32.3273 3 31.5ZM31.5 33H25.5V27.75H33V31.5C33 32.3273 32.3273 33 31.5 33Z" fill="white" />
                        </svg>
                        <h5 class="about-info__title">Станція для підзарядки електромобілів</h5>
                        <p class="about-info__text">Забезпечує тепло вашої оселі</p>
                    </div>

                    <div class="about-info__item">
                        <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                            <path class="about-info__svg" d="M18.0004 11.1404C14.218 11.1404 11.1411 14.2174 11.1411 17.9994C11.1411 21.7817 14.218 24.8587 18.0004 24.8587C21.7824 24.8587 24.8594 21.7817 24.8594 17.9994C24.8594 14.2174 21.7824 11.1404 18.0004 11.1404ZM22.0727 16.7077L17.1588 21.6216C16.9525 21.8279 16.682 21.9312 16.4117 21.9312C16.1415 21.9312 15.8712 21.8282 15.6649 21.6216L13.7871 19.7438C13.3746 19.3315 13.3746 18.6627 13.7871 18.2502C14.1994 17.8376 14.8682 17.8376 15.2807 18.2502L16.4117 19.3812L20.5791 15.2141C20.9914 14.8016 21.6602 14.8016 22.0727 15.2141C22.4853 15.6264 22.4853 16.2952 22.0727 16.7077Z" fill="black" />
                            <path class="about-info__svg" d="M33.2928 9.76674L33.2917 9.73872C33.2761 9.39293 33.2656 9.02708 33.2593 8.62004C33.2299 6.63509 31.652 4.99319 29.6668 4.88223C25.5277 4.65124 22.3258 3.30157 19.5899 0.634924L19.5666 0.612677C18.6742 -0.205528 17.3281 -0.205528 16.4355 0.612677L16.4121 0.634924C13.6763 3.30157 10.4743 4.65124 6.33521 4.8825C4.35026 4.99319 2.77208 6.63509 2.74269 8.62031C2.73665 9.02461 2.72594 9.39045 2.71028 9.73872L2.70864 9.80381C2.62816 14.0245 2.52819 19.2773 4.28544 24.0451C5.25169 26.667 6.71506 28.9461 8.63464 30.8195C10.8209 32.953 13.6845 34.6469 17.1457 35.8537C17.2583 35.893 17.3753 35.9248 17.4945 35.9487C17.6626 35.9822 17.8318 35.999 18.001 35.999C18.1702 35.999 18.3397 35.9822 18.5075 35.9487C18.6267 35.9248 18.7445 35.8927 18.8577 35.8531C22.3148 34.6441 25.1753 32.9495 27.3597 30.8162C29.2784 28.9422 30.7418 26.6626 31.7089 24.0401C33.4727 19.2581 33.373 13.9954 33.2928 9.76674ZM18.0005 26.9713C13.0533 26.9713 9.02878 22.9467 9.02878 17.9996C9.02878 13.0525 13.0533 9.02791 18.0005 9.02791C22.9473 9.02791 26.9721 13.0525 26.9721 17.9996C26.9721 22.9467 22.9473 26.9713 18.0005 26.9713Z" fill="black" />
                        </svg>
                        <h5 class="about-info__title">Утеплення</h5>
                        <p class="about-info__text">Енергоощадне утеплення фасадів 100-150 мм</p>
                    </div>

                </div>

                <div class="about-info__wrapper">

                    <div class="about-info__item">
                        <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                            <path class="about-info__svg" d="M37.3987 15.3687L20.1265 0.515155C19.4784 -0.0415101 18.5217 -0.0415101 17.8736 0.515155L0.601216 15.3687C-0.121982 15.9906 -0.204382 17.0815 0.41735 17.8047C1.03988 18.5275 2.13095 18.61 2.85334 17.9882L19 4.10235L35.1466 17.9883C35.4723 18.2687 35.8739 18.4059 36.2714 18.4059C36.7571 18.4059 37.2411 18.2023 37.5826 17.8047C38.2045 17.0817 38.1219 15.9906 37.3987 15.3687Z" fill="#000000" />
                            <path class="about-info__svg" d="M25.2282 19.6003H12.7728L10.8192 25.0715H27.1818L25.2282 19.6003Z" fill="#000000" />
                            <path class="about-info__svg" d="M27.9961 28.5288H23.6766C23.4779 28.5288 23.3171 28.688 23.3171 28.8884V30.1769C23.3171 30.3756 23.4779 30.5377 23.6766 30.5377H27.9961C28.1939 30.5377 28.3557 30.3757 28.3557 30.1769V28.8884C28.3557 28.688 28.1939 28.5288 27.9961 28.5288Z" fill="#000000" />
                            <path class="about-info__svg" d="M16.4816 28.9932C16.282 28.9932 16.1212 29.1528 16.1212 29.3516V29.7116C16.1212 29.9104 16.282 30.0724 16.4816 30.0724H21.5185C21.7181 30.0724 21.8789 29.9104 21.8789 29.7116V29.3516C21.8789 29.1528 21.7181 28.9932 21.5185 28.9932H16.4816Z" fill="#000000" />
                            <path class="about-info__svg" d="M14.6839 30.1769V28.8884C14.6839 28.688 14.5231 28.5288 14.3243 28.5288H10.0049C9.807 28.5288 9.64526 28.688 9.64526 28.8884V30.1769C9.64526 30.3756 9.80686 30.5377 10.0049 30.5377H14.3243C14.5231 30.5376 14.6839 30.3756 14.6839 30.1769Z" fill="#000000" />
                            <path class="about-info__svg" d="M19.5653 6.52532C19.2404 6.24612 18.7621 6.24612 18.4372 6.52532L5.42097 17.7521C5.23044 17.9162 5.12244 18.1549 5.12244 18.4065V34.643C5.12244 35.1204 5.50844 35.5068 5.9851 35.5068H7.91803V32.7335C7.56016 32.2363 7.34243 31.6318 7.34243 30.9729V28.0941C7.34243 26.9894 7.94443 26.0311 8.83176 25.5042L11.3519 18.4469C11.474 18.103 11.7996 17.8738 12.1651 17.8738H25.8377C26.2031 17.8738 26.5288 18.103 26.6508 18.4469L29.1709 25.5042C30.0582 26.0311 30.6602 26.9894 30.6602 28.0941V30.9729C30.6602 31.6318 30.4425 32.2362 30.0846 32.7335V35.5068H32.0176C32.4942 35.5068 32.8802 35.1206 32.8802 34.643V18.4064C32.8802 18.1549 32.7721 17.9161 32.5817 17.752L19.5653 6.52532Z" fill="#000000" />
                            <path class="about-info__svg" d="M25.9082 33.9944H12.0903V35.506H25.9082V33.9944Z" fill="#000000" />
                        </svg>
                        <h5 class="about-info__title">Залізобетонне перекриття</h5>
                        <p class="about-info__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>

                    <div class="about-info__item">
                        <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                            <path class="about-info__svg" d="M32.8102 10.6576C32.8102 7.9261 30.7373 5.67943 28.0788 5.40348C27.3326 3.39133 25.4016 1.95438 23.1292 1.95438C22.1345 1.95438 21.2075 2.23441 20.4134 2.71223C19.5104 1.09506 17.7841 0 15.8 0C13.1694 0 10.9939 1.92521 10.5902 4.44203C10.3755 4.4158 10.1585 4.39768 9.93679 4.39768C7.0192 4.39768 4.65351 6.76283 4.65351 9.68097C4.65351 9.82392 4.664 9.96393 4.6751 10.104C3.19563 11.0403 2.21082 12.6867 2.21082 14.567C2.21082 16.2291 2.97978 17.7098 4.17977 18.6782C4.17452 18.7733 4.16519 18.8678 4.16519 18.9641C4.16519 21.8817 6.53034 24.2474 9.44847 24.2474C10.323 24.2474 11.1456 24.0315 11.8719 23.6558C12.8783 24.3787 14.3193 25.283 15.017 25.1027C15.017 25.1027 15.2766 29.1235 15.2206 30.1445C15.1139 32.0872 14.531 34.2499 14.1209 36.0001H20.473C20.473 36.0001 19.5367 32.0983 19.4958 30.7956C19.455 29.4928 19.903 27.0938 19.903 27.0938L22.1066 24.8145C22.9548 25.3944 23.9792 25.7241 25.0842 25.7241C27.8157 25.7241 30.0624 23.646 30.3384 20.9874C32.3504 20.2412 33.7874 18.3049 33.7874 16.0325C33.7874 14.6907 33.2833 13.4702 32.4595 12.538C32.6824 11.9533 32.8102 11.321 32.8102 10.6576ZM13.0924 22.7836C13.5159 22.3793 13.8712 21.9068 14.1425 21.3823L15.1797 23.5554C15.1792 23.5555 14.615 23.8046 13.0924 22.7836ZM16.9709 24.1254C16.4341 24.2229 15.5199 22.5701 14.8712 21.2265C15.5905 21.5934 16.4026 21.8046 17.266 21.8046C17.4877 21.8046 17.7053 21.7866 17.92 21.7597C17.7532 22.835 17.4592 24.0362 16.9709 24.1254ZM19.2514 25.1832C18.0098 25.5279 18.7531 22.9563 19.109 21.4674C19.3663 21.3718 19.6154 21.2592 19.8523 21.1255C19.9952 22.2107 20.4666 23.1896 21.1649 23.9638C20.5599 24.5012 19.8633 25.0134 19.2514 25.1832Z" fill="black" />
                        </svg>
                        <h5 class="about-info__title">Відеонагляд</h5>
                        <p class="about-info__text">Цілодобове спостереження території котеджу</p>
                    </div>

                </div>

            </div>
        </section>

        <section class="planning container-fluid" id="planning">
            <h2 class="g-title">Планування</h2>

            <div class="row no-gutters align-items-center mt-5">
                <div class="col-md-4 text-center">
                    <img class="img-fluid" src="./img/house/sunrise/house1-plan1.jpg" data-action="zoom" alt="" srcset="">
                </div>
                <div class="col-md-4 pr-md-4 py-md-0 py-5">
                    <img class="img-fluid" src="./img/house/sunrise/house1-plan2.jpg" data-action="zoom" alt="" srcset="">
                </div>
                <div class="col-md-4 pl-md-4">
                    <img class="img-fluid" src="./img/house/sunrise/house1-plan3.jpg" data-action="zoom" alt="" srcset="">
                </div>
            </div>
        </section>

        <section class="document container-fluid" id="document">
            <h2 class="g-title">Документація</h2>

            <div class="document-list">

                <div class="document-list__wrapper">
                    <div class="document-list__item">
                        <a class="document-list__link" href="#">Сертифікат про готовність будинку</a>
                    </div>

                    <div class="document-list__item">
                        <a class="document-list__link" href="#">Сертифікат про готовність будинку</a>
                    </div>

                    <div class="document-list__item">
                        <a class="document-list__link" href="#">Сертифікат про готовність будинку</a>
                    </div>
                </div>

                <div class="document-list__wrapper">
                    <div class="document-list__item">
                        <a class="document-list__link" href="#">Сертифікат про готовність будинку</a>
                    </div>

                    <div class="document-list__item">
                        <a class="document-list__link" href="#">Сертифікат про готовність будинку</a>
                    </div>

                    <div class="document-list__item">
                        <a class="document-list__link" href="#">Сертифікат про готовність будинку</a>
                    </div>
                </div>

                <div class="document-list__wrapper">
                    <div class="document-list__item">
                        <a class="document-list__link" href="#">Сертифікат про готовність будинку</a>
                    </div>

                    <div class="document-list__item">
                        <a class="document-list__link" href="#">Сертифікат про готовність будинку</a>
                    </div>
                </div>

            </div>
        </section>

        <section class="building container-fluid" id="building">
            <h2 class="g-title">Хід будівництва</h2>

            <div class="building_row row">

                <div class="left-arrow"><img src="./img/arrow-left.svg"></div>

                <div class="building-slider col-md-11">
                    <?php
                    $stmtE = $db->query('SELECT * FROM etaps WHERE  cottege_id="2" ORDER BY id desc');
                    while($rowe = $stmtE->fetch_assoc()){
                        $path = './img/uploads/'.$rowe["imgpath"];
                        echo '<div class="building-slider__item">';
                            echo '<div class="building-slider__box" style="background-image: url('.$path.');"></div>';
                            echo '<h4 class="building-slider__title">'.$rowe["date"].'</h4>';
                            echo '<p class="building-slider__text">'.$rowe["prog"].'</p>';
                        echo '</div>';
                    }
                    ?>
                </div>

                <div class="right-arrow"><img src="./img/arrow-right.svg">
                </div>
            </div>
        </section>
    </main>

    <footer class="footer container-fluid" id="contacts">
        <iframe class="footer__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7901.521660369412!2d23.64095050629502!3d49.785726003081145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473b1c66f912e881%3A0x3cb99fbbbf696ffe!2z0LzQsNC50LTQsNC9INCT0LDQudC00LDQvNCw0LrRltCyLCAxMiwg0JPQvtGA0L7QtNC-0LosINCb0YzQstGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgODE1MDI!5e0!3m2!1suk!2sua!4v1565688212959!5m2!1suk!2sua" width="100%" height="574" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="footer__group">
            <div class="footer__group_padding m-footer__group_padding container bg-white-footer pt-5 pb-5 mt-15">
                <div class="row no-gutters justify-content-center pt-4">

                    <div class="m-footer-inputs col-md-4 mr-5">
                        <p class="m-footer-inputs__title text-transparent">Ваші контакти</p>
                        <form>
                            <div class="group">
                                <input type="text" required>
                                <span class="bar"></span>
                                <label>Ім'я</label>
                            </div>
                            <div class="group">
                                <input type="text" id="input-phone" required>
                                <span class="bar"></span>
                                <label>Номер телефону</label>
                            </div>
                            <button type="submit" class="custom-button-footer">Зателефонувати мені</button>
                        </form>
                    </div>

                    <div class="m-footer-numbers col-md-5 ml-5">
                        <h2 class="title-text-footer col-mb-5">Залиште ваші контакти і<br class="m-footer--display"> ми вам зателефонуємо.</h2>
                        <p class="text-regular-container">Або зателефонуйте нам за номерами</p>
                        <a class="footer-number mr-md-4" href="tel:+380968565555">+38 (096) 856 55 55</a>
                        <a class="footer-number" href="tel:+380638565555">+38 (063) 856 55 55</a>
                    </div>
                </div>
            </div>

            <div class="row no-gutters justify-content-between padding-footer m-footer--padding m-footer_margin">
                <div class="col-md-4 m-footer__title m-hide">
                    <h3 class="title-text-regular">modernhome</h3>
                </div>

                <div class="m-footer__block">
                    <div class="">
                        <p class="footer-text mb-4">Меню</p>
                        <div class="text-regular-footer">
                            <a href="#" class="text-footer-anim text-regular-footer pt-3 mb-3">Головна</a>
                            <a href="#about" class="text-footer-anim text-regular-footer mb-3">Про нас</a>
                            <a href="#cottages" class="text-footer-anim text-regular-footer mb-3">Котеджі</a>
                            <a href="#whywe" class="text-footer-anim text-regular-footer mb-3">Чому ми</a>
                            <a href="#contacts" class="text-footer-anim text-regular-footer">Контакти</a>
                        </div>
                    </div>
                    <div class="m-footer_mrg">
                        <p class="footer-text">Контакти</p>
                        <p class="text-regular-phone mb-3 pt-4">Телефон</p>
                        <a class="text-footer-anim footer-number-phone mb-1" href="tel:+380968565555">+38 (096) 856 55 55</a>
                        <a class="text-footer-anim footer-number-phone mb-3" href="tel:+380638565555">+38 (063) 856 55 55</a>
                        <p class="text-regular-phone mb-2">Email</p>
                        <a class="text-footer-anim footer-number-phone" href="mailto:modernhome@gmail.com">modernhome@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-2 m-footer-adrs">
                    <p class="footer-text pb-4 m-footer-title">Адреса центру продажів</p>
                    <a href="https://goo.gl/maps/FqZQVbQ1QmXPFHTL7" target="_blank" class="map-text">м. Городок<br class="m-footer--display">
                        майдан Гайдамаків<br class="m-footer--display"> буд. 12
                    </a>
                </div>

            </div>
            <div class="footer__copy row no-gutters justify-content-between padding-footer">
                <p class="text-studio">Copyright &#169;2019 ModernHome</p>
                <p class="text-studio">developed by <a class="text-studio" href="https://crayfish.studio/" target="_blank">Crayfish Studio</a></p>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="./js/zoom.js"></script>
    <script src="./js/transition.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $('.preview-slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            autoplay: true,
            autoplaySpeed: 3500,
            asNavFor: '.preview-slider-nav'
        });

        $('.preview-slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            asNavFor: '.preview-slider-for',
            dots: false,
            focusOnSelect: true,
            arrows: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 3,
                    infinite: false
                }
            }]
        });

        $('.building-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            touchMove: true,
            swipeToSlide: true,
            draggable: true,
            arrows: true,
            infinite: false,
            prevArrow: $('.left-arrow'),
            nextArrow: $('.right-arrow'),
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }]
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#dismiss, .overlay, .sidenav__button, .sidenav-main__item').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
                $('.sidenav__button').removeClass('active');
                $('.sidenav-main__item').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.sidenav__button').addClass('active');
                $('.sidenav-main__item').addClass('active');
            });
        });
    </script>

    <script src="https://unpkg.com/imask"></script>

    <script src="./js/zenscroll-min.js"></script>

    <script>
        var phoneMask = IMask(
            document.getElementById('input-phone'), {
                mask: '+{38}(000)000-00-00'
            });
    </script>
</body>

</html>