<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статьи</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
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
                            <g class="menu__icon" transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                            fill="#FFFFFF" stroke="none">
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
                <div class="post__list">
                    <div class="flex">
                        <h1 class="post__tittle">Новые статьи</h1>
                        <button class="post__create">Создать тему</button>
                    </div>
                    <input class="post__search" placeholder="Поиск...">
                    <div class="post">
                        <div class="post__left-content">
                            <h2 class="post__title">Название темы которую мне лень придумавать</h2>
                            <ul class="post__tag-list">
                                <li class="post__tag">HTML</li>
                                <li class="post__tag">Веб-разработка</li>
                                <li class="post__tag">Программирование</li>
                            </ul>
                        </div>
                        <div class="post__right-content">
                            <div class="flex">
                                <p class="post__like-count">539</p>
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                                        <path d="M127 589 c-55 -13 -83 -35 -107 -83 -38 -79 -20 -155 63 -258 39 -50 216 -198 236 -198 42 0 261 215 300 294 85 173 -133 333 -276 203 l-23 -20 -22 20 c-46 42 -107 57 -171 42z"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex post__feedback">
                                <p class="post__like-count">12</p>
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 64.000000 64.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)" fill="#FFFFFF" stroke="none">
                                        <path d="M215 587 c-56 -19 -81 -33 -127 -75 -50 -45 -78 -100 -85 -168 -5 -45 -1 -62 22 -109 15 -31 40 -65 56 -77 37 -28 36 -39 -3 -84 l-33 -37 55 5 c30 2 67 12 82 22 21 14 51 18 140 19 92 2 122 6 160 24 91 42 158 140 158 231 0 94 -68 191 -162 232 -65 29 -201 37 -263 17z"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
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
</body>
</html>