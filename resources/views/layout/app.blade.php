<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="article__attach-window hiden" id="js__new-attach">
        <form class="article__attach-list">
            <button type="button" class="article__attach-button">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100.000000px" height="100.000000px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                        <path d="M1390 5105 c-58 -18 -123 -73 -149 -128 -12 -26 -54 -225 -110 -526 -50 -266 -91 -488 -91 -492 0 -5 -186 -9 -412 -11 -385 -3 -416 -4 -452 -22 -52 -26 -104 -79 -127 -130 -18 -39 -19 -106 -19 -1816 l0 -1775 24 -50 c28 -60 66 -97 126 -124 45 -20 56 -21 1821 -21 l1775 0 52 26 c28 14 65 43 82 64 54 68 60 101 60 332 l0 210 23 -5 c12 -3 69 -13 127 -23 122 -20 158 -14 236 39 92 61 68 -45 424 1857 243 1300 319 1725 314 1755 -16 100 -90 182 -188 210 -70 20 -3415 645 -3446 644 -14 0 -45 -7 -70 -14z m1790 -435 c1260 -236 1711 -324 1730 -338 14 -10 33 -35 43 -55 l18 -36 -241 -1288 c-132 -708 -244 -1299 -248 -1312 -7 -21 -31 3 -260 255 l-252 279 0 581 0 581 49 32 c170 109 258 345 206 546 -46 175 -198 323 -374 365 -33 8 -91 11 -152 8 -92 -5 -106 -8 -183 -46 -106 -53 -183 -128 -228 -222 l-33 -69 -1043 0 -1044 -1 6 28 c3 15 40 209 81 432 41 223 80 428 86 457 13 67 65 120 119 122 8 1 782 -143 1720 -319z m722 -548 c78 -38 138 -101 177 -182 22 -47 26 -69 26 -150 0 -83 -3 -102 -28 -156 -16 -34 -46 -78 -67 -99 l-38 -37 -4 144 c-3 141 -4 146 -33 194 -19 30 -49 60 -79 79 l-49 30 -204 3 c-112 2 -203 7 -203 12 0 15 64 92 101 122 20 16 62 40 95 54 51 21 72 24 149 22 79 -3 99 -7 157 -36z m-125 -322 c68 -41 63 67 61 -1472 l-3 -1393 -658 625 c-363 344 -663 626 -667 628 -4 2 -101 -53 -214 -122 -114 -70 -210 -126 -214 -126 -4 0 -153 146 -332 324 l-325 324 -630 -455 -630 -455 -3 1028 c-2 1135 -7 1053 61 1094 31 20 65 20 1777 20 1713 0 1746 0 1777 -20z m-1499 -1899 l213 131 82 -79 c385 -367 1224 -1162 1243 -1176 l24 -19 0 -259 c0 -282 -2 -296 -56 -338 l-27 -21 -1754 0 c-1548 0 -1757 2 -1783 15 -62 32 -60 11 -60 717 l0 643 628 452 627 452 325 -324 325 -324 213 130z m2034 -297 l137 -151 -60 -319 c-40 -213 -66 -327 -78 -344 -10 -14 -33 -34 -52 -44 -35 -19 -36 -19 -162 4 l-127 23 0 603 0 604 103 -113 c56 -61 164 -180 239 -263z"/>
                        <path d="M2751 3424 c-221 -59 -374 -259 -374 -489 1 -287 219 -505 503 -505 144 1 257 47 357 146 201 201 199 520 -3 719 -125 122 -317 174 -483 129z m293 -153 c81 -40 156 -119 187 -199 46 -118 25 -265 -52 -366 -80 -104 -184 -151 -319 -144 -110 6 -180 38 -255 120 -134 144 -135 353 -3 503 77 87 174 127 300 122 62 -3 89 -10 142 -36z"/>
                    </g>
                </svg>
                <p class="article__attach-name">Изображение</p>
            </button>
            <button type="button" class="article__attach-button">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100.000000px" height="100.000000px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                        <path d="M3155 4431 c-11 -5 -30 -19 -41 -32 -14 -15 -272 -714 -669 -1804 -534 -1471 -646 -1786 -641 -1815 3 -19 19 -47 36 -65 26 -25 38 -30 80 -30 42 0 54 5 79 30 43 44 1326 3573 1317 3625 -11 68 -99 118 -161 91z"/>
                        <path d="M1229 3467 c-30 -17 -974 -803 -1004 -836 -14 -16 -20 -37 -20 -71 0 -34 6 -55 20 -71 34 -38 977 -822 1008 -837 41 -20 94 -9 132 28 25 26 30 38 30 80 0 42 -5 54 -32 82 -18 18 -217 186 -442 373 -225 187 -410 342 -410 345 0 3 185 158 410 345 225 187 424 355 442 373 27 28 32 40 32 82 0 42 -5 54 -31 81 -37 36 -95 48 -135 26z"/>
                        <path d="M3795 3470 c-44 -18 -70 -59 -70 -110 0 -42 5 -54 32 -82 18 -18 217 -186 442 -373 225 -187 410 -342 410 -345 0 -3 -185 -158 -410 -345 -225 -187 -424 -355 -442 -373 -27 -28 -32 -40 -32 -82 0 -42 5 -54 30 -80 38 -37 91 -48 132 -28 31 15 974 799 1008 837 14 16 20 37 20 71 0 34 -6 55 -20 71 -31 34 -974 820 -1004 835 -29 15 -66 17 -96 4z"/>
                    </g>
                </svg>
                <p class="article__attach-name">Код</p>
            </button>
        </form>
    </div>
    <header>
        <h1 class="header__logo">LOGO</h1>
        <div class="header__user-data">
            <img src="img/default_avatar.png" width="32" height="32">
            <div class="header__user-data-right">
                <p class="header__user-data-name">Айрат Нигматзянов</p>
                <p class="header__user-data-id">@kofeine</p>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <section class="content__left">
                <ul class="menu">
                    <li class="menu__list">
                        <svg class="menu__svg" version="1.0" xmlns="http://www.w3.org/2000/svg" width="25.000000px" height="25.000000px" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                            <g class="menu__icon" transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                                <path d="M2515 5034 c-89 -22 -102 -33 -1282 -1114 -941 -862 -1183 -1089 -1203 -1127 -19 -37 -25 -62 -25 -113 1 -84 23 -126 112 -212 57 -54 80 -70 128 -83 64 -19 126 -15 176 11 17 8 71 51 119 95 49 43 91 79 94 79 3 0 6 -508 6 -1128 0 -1256 -3 -1195 67 -1273 20 -22 55 -50 77 -62 40 -22 50 -22 529 -25 423 -2 496 -1 543 13 67 19 129 73 158 135 21 44 21 57 24 863 l3 817 567 -2 567 -3 5 -830 c6 -926 0 -855 77 -930 67 -65 78 -66 655 -63 577 3 551 0 629 80 73 75 69 4 69 1255 0 618 4 1123 8 1123 5 0 19 -11 32 -25 75 -80 139 -95 227 -53 56 26 171 138 210 206 39 65 40 166 3 231 -19 34 -305 290 -1193 1067 -678 594 -1187 1032 -1212 1044 -44 21 -131 33 -170 24z"/>
                            </g>
                        </svg>
                        <a class="menu__button" href="#">Главная страница</a>
                    </li>
                    <li class="menu__list">
                        <svg class="menu__svg" version="1.0" xmlns="http://www.w3.org/2000/svg" width="25.000000px" height="25.000000px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                            <g class="menu__icon" transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                                <path d="M255 606 c-101 -44 -125 -178 -46 -257 112 -113 296 -12 267 146 -18 94 -131 151 -221 111z"/>
                                <path d="M195 269 c-71 -40 -126 -125 -129 -198 l-1 -46 255 0 255 0 -1 46 c-2 54 -24 101 -68 147 -49 53 -79 65 -129 51 -38 -10 -88 -8 -142 6 -11 3 -29 0 -40 -6z"/>
                            </g>
                        </svg>
                        <a class="menu__button" href="#">Мой профиль</a>
                    </li>
                    <li class="menu__list">
                        <svg class="menu__svg" version="1.0" xmlns="http://www.w3.org/2000/svg" width="25.000000px" height="25.000000px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                            <g class="menu__icon" transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                                <path d="M215 587 c-56 -19 -81 -33 -127 -75 -50 -45 -78 -100 -85 -168 -5 -45 -1 -62 22 -109 15 -31 40 -65 56 -77 37 -28 36 -39 -3 -84 l-33 -37 55 5 c30 2 67 12 82 22 21 14 51 18 140 19 92 2 122 6 160 24 91 42 158 140 158 231 0 94 -68 191 -162 232 -65 29 -201 37 -263 17z"/>
                            </g>
                        </svg>
                        <a class="menu__button" href="#">Сообщения</a>
                    </li>
                    <li class="menu__list">
                        <svg class="menu__svg" version="1.0" xmlns="http://www.w3.org/2000/svg" width="25.000000px" height="25.000000px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                            <g class="menu__icon" transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                                <path d="M172 530 c-43 -26 -65 -76 -52 -120 37 -130 220 -109 220 24 0 48 -19 80 -60 101 -39 20 -69 19 -108 -5z"/>
                                <path d="M415 455 c-52 -51 -16 -145 55 -145 44 0 80 39 80 85 0 46 -36 85 -80 85 -19 0 -40 -9 -55 -25z"/>
                                <path d="M161 277 c-52 -16 -117 -84 -131 -135 -21 -80 -30 -77 198 -80 226 -3 221 -4 203 65 -17 64 -51 106 -110 136 -58 29 -102 33 -160 14z"/>
                                <path d="M430 281 c-30 -9 -29 -17 5 -68 15 -21 29 -50 32 -65 5 -28 7 -28 81 -28 l75 0 -6 37 c-15 87 -107 149 -187 124z"/>
                            </g>
                        </svg>
                        <a class="menu__button" href="#">Друзья</a>
                    </li>
                    <li class="menu__list">
                        <svg class="menu__svg" version="1.0" xmlns="http://www.w3.org/2000/svg" width="25.000000px" height="25.000000px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                            <g class="menu__icon" transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                                <path d="M17 619 c-15 -9 -17 -33 -17 -270 0 -282 4 -304 55 -327 40 -19 497 -17 534 2 44 23 51 53 51 221 0 126 -3 156 -16 169 -8 9 -20 16 -25 16 -5 0 -9 -58 -9 -134 0 -79 -4 -137 -10 -141 -7 -4 -10 71 -10 218 0 204 -2 225 -18 240 -16 15 -50 17 -268 17 -150 0 -256 -5 -267 -11z m477 -75 c10 -27 6 -110 -6 -122 -17 -17 -389 -17 -406 0 -13 13 -17 120 -5 131 3 4 97 7 209 7 175 0 203 -2 208 -16z m1 -214 c-8 -14 -425 -14 -425 0 0 6 79 10 216 10 141 0 213 -3 209 -10z m0 -80 c-4 -6 -85 -10 -210 -10 -125 0 -206 4 -210 10 -4 7 68 10 210 10 142 0 214 -3 210 -10z m0 -75 c0 -10 -387 -20 -413 -10 -7 3 -10 9 -7 15 9 14 420 9 420 -5z"/>
                            </g>
                        </svg>
                        <a class="menu__button" href="#">Статьи</a>
                    </li>
                </ul>
            </section>
            <section class="content__center">
                @yield('content')
            </section>
            <section class="content__right">
                <div class="ad">
                    Реклама
                </div>
                <div class="ad">
                    Реклама
                </div>
            </section>
        </div>
    </main>
    <script src="{{ asset('js/modal.js') }}"></script>
</body>
</html>