<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шахматный сайт</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/normalize.css">
</head>

<body>
    <div class="chess-container">
        <div class="menu-toggle">Меню:</div> <!-- Кнопка для открытия меню -->
        <aside class="chess-menu">
            <ul class="chess-menu-list">
                <li class="chess-menu-item">
                    <div class="chess-menu__link"><img class="chess-menu-img" src="./img/desk-fotor-bg-remover-20240920202013.png" /><a href="#">Шахматные клубы:</a></div>
                    <ul class="chess-submenu-list">
                        <li class="chess-submenu-item"><a href="./budjetnie-klubi.php">Бюджетные</a></li>
                        <li class="chess-submenu-item"><a href="./chastnie-klubi.php">Частные</a></li>
                    </ul>
                </li>
                <li class="chess-menu-item">
                    <div class="chess-menu__link"><img class="chess-menu-img" src="./img/timer.png" /><a href="./turniri.html">Турниры Санкт-Петербурга и области</a></div>

                </li>
                <li class="chess-menu-item">
                    <div class="chess-menu__link"><img class="chess-menu-img" src="./img/kubok-no-bg-preview (carve.photos).png" /><a href="#">Онлайн-сервисы</a></div>
                    <ul class="chess-submenu-list">
                        <li class="chess-submenu-item"><a href="./services-training.html">Тренировочные</a></li>
                        <li class="chess-submenu-item"><a href="./services-igrovie.html">Игровые</a></li>
                    </ul>
                </li>
                <li class="chess-menu-item">
                    <div class="chess-menu__link"><img class="chess-menu-img" src="./img/desk-fotor-bg-remover-20240920202013.png" /><a href="#">Наша школа</a></div>
                    <ul class="chess-submenu-list">
                        <li class="chess-submenu-item"><a href="#">Ученики (личные карточки)</a></li>
                        <li class="chess-submenu-item"><a href="#">Фото</a></li>
                        <li class="chess-submenu-item"><a href="#">Общие мероприятия</a></li>
                    </ul>
                <li class="chess-menu-item">
                    <div class="chess-menu__link"><img class="chess-menu-img" src="./img/hands-fotor-bg-remover-20240920202028.png" /><a href="#">Тренеры</a></div>
                </li>
                <li class="chess-menu-item">
                    <div class="chess-menu__link"><img class="chess-menu-img" src="./img/king-fotor-bg-remover-20240920202051.png" /><a href="#">Официальные организации</a></div>
                    <ul class="chess-submenu-list">
                        <li class="chess-submenu-item"><a href="./rating.php">Как узнать свой рейтинг ФШР и FIDE?</a></li>
                        <li class="chess-submenu-item"><a href="./fhr.php">ФШР</a></li>
                        <li class="chess-submenu-item"><a href="./chess-federation-SPb.php">Федерация шахмат СПб</a></li>
                        <li class="chess-submenu-item"><a href="./chess-federation-Len.obl.php">Федерация шахмат Ленобласти</a></li>
                        <li class="chess-submenu-item"><a href="./fide.php">FIDE</a></li>
                    </ul>
                </li>
                <li class="chess-menu-item">
                    <div class="chess-menu__link"><img class="chess-menu-img" src="./img/game-people-no-bg-preview (carve.photos).png" /><a href="#">Наши каналы (или Соцсети)</a></div>
                    <ul class="chess-submenu-list">
                        <li class="chess-submenu-item"><a href="#">You-tube</a></li>
                        <li class="chess-submenu-item"><a href="#">Телеграмм</a></li>
                        <li class="chess-submenu-item"><a href="#">Группа ВК</a></li>
                    </ul>
                </li>
                <li class="chess-menu-item">
                    <div class="chess-menu__link"><img class="chess-menu-img" src="./img/king-fotor-bg-remover-20240920202051.png" /><a href="#">Шахматные магазины в Санкт-Петербурге</a></div>
                    <ul class="chess-submenu-list">
                        <li class="chess-submenu-item"><a href="./chess-shops.php">Шахматные магазины</a></li>
                        <li class="chess-submenu-item"><a href="./online-chess-shops.php">Интернет-магазины</a></li>
                    </ul>
                </li>
                <li class="chess-menu-item">
                    <div class="chess-menu__link"><img class="chess-menu-img" src="./img/ladya-fotor-bg-remover-2024092020211.png" /><a href="#">Шахматная история</a></div>
                    <ul class="chess-submenu-list">
                        <li class="chess-submenu-item"><a href="#">Сайты</a></li>
                        <li class="chess-submenu-item"><a href="./chess-story-posts.html">Статьи</a></li>
                        <li class="chess-submenu-item"><a href="#">Музеи</a></li>
                    </ul>
                </li>
                <li class="chess-menu-item">
                    <div class="chess-menu__link"><img class="chess-menu-img" src="./img/game-people-no-bg-preview (carve.photos).png"><a href="./chess-orthodox.html">Шахматы в Церкви Санкт-Петербурга</a></div>
                    <ul class="chess-submenu-list">
                        <li class="chess-submenu-item"><a href="#">Клубы</a></li>
                        <li class="chess-submenu-item"><a href="#">Турниры</a></li>
                        <li class="chess-submenu-item"><a href="#">Лица</a></li>
                    </ul>
                </li>
                <li class="chess-menu-item">
                    <div class="chess-menu__link"><img class="chess-menu-img" src="./img/hurse-fotor-bg-remover-20240920202043.png" /><a href="#">Чат для консультации</a></div>
                </li>
                <li class="chess-menu-item">
                    <div class="chess-menu__link"><img class="chess-menu-img" src="./img/hands-fotor-bg-remover-20240920202028.png" /><a href="./contacs.html">Контакты</a></div>
                </li>
            </ul>
        </aside>
        <main class="chess-content">
            <table class="chess-table">
                <tr>
                    <th>Шахматная школа</th>
                    <th>Ссылка на сайт</th>
                    <th>Эмблема</th>
                </tr>
                <tr>
                    <td>Санкт-Петербургский дворец творчества юных (СПбГДТЮ)</td>
                    <td><a href="https://anichkov.ru/page/chess/" target="_blank">anichkov.ru</a></td>
                    <td><img src="./img/clubs-emblems/gorodskoy__dom_tvorchestva.jpg" alt="СПбГДТЮ" class="club-image"></td>
                </tr>
                <tr>
                    <td>Василеостровская СШОР</td>
                    <td><a href="http://sdushor-vo.ru/?page_id=12" target="_blank">sdushor-vo.ru</a></td>
                    <td><img src="./img/clubs-emblems/Vasya-club.png" alt="Василеостровская СШОР" class="club-image"></td>
                </tr>
                <tr>
                    <td>СШОР Калининского района</td>
                    <td><a href="https://shor2kalin.ru/?page_id=448" target="_blank">shor2kalin.ru</a></td>
                    <td><img src="./img/clubs-emblems/kalinensky-club.png" alt="СШОР Калининского района" class="club-image"></td>
                </tr>
                <tr>
                    <td>ГБУ ДО ДД(Ю)Т Московского района Санкт-Петербурга</td>
                    <td><a href="https://spaschess.ru/" target="_blank">spaschess.ru</a></td>
                    <td><img src="./img/clubs-emblems/Spasskiy.jpg" alt="Московский район" class="club-image"></td>
                </tr>
                <tr>
                    <td>Шахматный центр Кировского района (ШКиДЦ)</td>
                    <td><a href="https://kchessdc.ru/" target="_blank">kchessdc.ru</a></td>
                    <td><img src="./img/clubs-emblems/owl.png" alt="ШКиДЦ" class="club-image"></td>
                </tr>
                <tr>
                    <td>ДДТ Красносельского района</td>
                    <td><a href="https://ddtks.ru/" target="_blank">ddtks.ru</a></td>
                    <td><img src="./img/clubs-emblems/alexina.png" alt="Красносельский район" class="club-image"></td>
                </tr>
                <tr>
                    <td>ГБУ ДО ДДЮТ Выборгского района Санкт-Петербурга</td>
                    <td><a href="https://ddutvyborg.spb.ru/shaxmaty-dlya-vsex/" target="_blank">ddutvyborg.spb.ru</a></td>
                    <td><img src="./img/clubs-emblems/viborgskiy.jpg" alt="Выборгский район" class="club-image"></td>
                </tr>
                <tr>
                    <td>Спортивно-культурный центр имени А.А. Алехина (СКЦ г. Пушкина)</td>
                    <td><a href="https://chesspushkin.ru/" target="_blank">chesspushkin.ru</a></td>
                    <td><img src="./img/clubs-emblems/alexina SKC.jpg" alt="СКЦ г. Пушкина" class="club-image"></td>
                </tr>
            </table>
        </main>
    </div>
</body>

</html>