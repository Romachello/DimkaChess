<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Шахматный сайт</title>
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/normalize.css">
   <style>
      table {
         width: 100%;
         table-layout: fixed;
      }

      .tbl-header {
         background-color: rgba(255, 255, 255, 0.3);
      }

      .tbl-content {
         height: 300px;
         overflow-x: auto;
         margin-top: 0px;
         border: 1px solid rgba(255, 255, 255, 0.3);
      }

      th {
         padding: 20px 15px;
         text-align: left;
         font-weight: 500;
         font-size: 12px;
         color: #fff;
         text-transform: uppercase;
      }

      td {
         padding: 15px;
         text-align: left;
         vertical-align: middle;
         font-weight: 300;
         font-size: 16px;
         color: #fff;
         border-bottom: solid 1px rgba(255, 255, 255, 0.1);
      }


      /* demo styles */

      @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

      body {
         background: -webkit-linear-gradient(left, #25c481, #25b7c4);
         background: linear-gradient(to right, #25c481, #25b7c4);
         font-family: 'Roboto', sans-serif;
      }

      section {
         margin: 50px;
      }


      /* follow me template */
      .made-with-love {
         margin-top: 40px;
         padding: 10px;
         clear: left;
         text-align: center;
         font-size: 10px;
         font-family: arial;
         color: #fff;
      }

      .made-with-love i {
         font-style: normal;
         color: #F50057;
         font-size: 14px;
         position: relative;
         top: 2px;
      }

      .made-with-love a {
         color: #fff;
         text-decoration: none;
      }

      .made-with-love a:hover {
         text-decoration: underline;
      }


      /* for custom scrollbar for webkit browser*/

      ::-webkit-scrollbar {
         width: 6px;
      }

      ::-webkit-scrollbar-track {
         -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      }

      ::-webkit-scrollbar-thumb {
         -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      }
   </style>
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
                  <li class="chess-submenu-item"><a href="#">ФШР</a></li>
                  <li class="chess-submenu-item"><a href="#">Федерация СПб</a></li>
                  <li class="chess-submenu-item"><a href="#">Федерация Ленобласти</a></li>
                  <li class="chess-submenu-item"><a href="#">FIDE</a></li>
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
                  <li class="chess-submenu-item"><a href="#">Магазины</a></li>
                  <li class="chess-submenu-item"><a href="#">Интернет-магазины</a></li>
                  <li class="chess-submenu-item"><a href="#">Маркетплейсы</a></li>
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
         <div>
            <!--for demo wrap-->
            <h1>Таблица магазинов:</h1>
            <div class="tbl-header">
               <table cellpadding="0" cellspacing="0" border="0">
                  <thead>
                     <tr>
                        <th>Магазин</th>
                        <th>Товар</th>
                        <th>Ссылка</th>
                     </tr>
                  </thead>
               </table>
            </div>
            <div class="tbl-content">
               <table cellpadding="0" cellspacing="0" border="0">
                  <tbody>
                     <tr>
                        <td>Валимо</td>
                        <td>Шахматные доски</td>
                        <td><a class="chess-submenu-item" href="valimo.ru/magazin/folder/shahmaty">Ссылка</a></td>
                     </tr>
                     <tr>
                        <td>интернет-магазин «64ab.ru»</td>
                        <td>Купить шахматы</td>
                        <td><a class="chess-submenu-item" href="https://64ab.ru/">Ссылка</a></td>
                     </tr>
                     <tr>
                        <td>шахматы оптом</td>
                        <td>Оптовые закупки инвентаря</td>
                        <td><a class="chess-submenu-item" href="https://xn--80aa9abjagwcy5a5b.xn--p1ai/">Ссылка</a></td>
                     </tr>
                     <tr>
                        <td>Магазин настольных игр</td>
                        <td>Настольные игры</td>
                        <td><a class="chess-submenu-item" href="https://lavochkashop.ru/">Ссылка</a></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </main>
      <!-- <video autoplay loop muted class="bgvideo" id="bgvideo">
         <source src="./img/background-video/background-video.mp4" type="video/mp4">
         </source>
      </video> -->
   </div>
   <script src="./js/script.js"></script>
</body>

</html>