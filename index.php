<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Шахматный сайт</title>
   <link rel="stylesheet" href="/css/normalize.css">
   <link rel="stylesheet" href="/css/style.css">
   <style>
      .section__calendar {
         font-family: Arial, sans-serif;
         background-color: #eaeaea;
         padding: 20px;
         margin: 0;
         box-sizing: border-box;
      }

      .calendar {
         margin: 0 auto;
         padding: 20px;
         background-color: #FF8900;
         border: 1px solid black;
      }

      .calendar__title {
         text-align: center;
         font-size: 2rem;
         margin-bottom: 20px;
         color: #fff;
      }

      .calendar__controls {
         display: flex;
         flex-wrap: wrap;
         gap: 10px;
         margin-bottom: 20px;
         justify-content: space-between;
      }

      .calendar__filter {
         flex: 1 1 200px;
         padding: 10px;
         font-size: 16px;
         border: 1px solid #ccc;
         border-radius: 6px;
      }

      .calendar__filter--button {
         background-color: #00BF32;
         color: white;
         border: none;
         cursor: pointer;
         transition: background-color 0.3s ease;
      }

      .calendar__filter--button:hover {
         background-color: #007C21;
      }

      .event-list {
         list-style: none;
         padding: 0;
         margin: 0;
      }

      .event-list__item {
         display: flex;
         flex-wrap: wrap;
         gap: 16px;
         padding: 16px;
         background-color: #fff;
         border-radius: 10px;
         margin-bottom: 12px;
         align-items: center;
         box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
         transition: background-color 0.3s ease;
      }

      .event-list__item--upcoming {
         border-left: 6px solid #4caf50;
      }

      .event__logo {
         width: 60px;
         height: 60px;
         object-fit: contain;
         flex-shrink: 0;
      }

      .event__content {
         flex: 1;
         font-size: 14px;
      }

      .event__link {
         margin-left: auto;
      }

      .event__link a {
         display: inline-block;
         padding: 8px 12px;
         background-color: #00BF32;
         border-radius: 6px;
         color: white;
         text-decoration: none;
         font-size: 14px;
      }

      .event__link a:hover {
         background-color: #007C21;
      }

      .event-list__empty {
         text-align: center;
         font-size: 18px;
         color: #666;
         margin-top: 20px;
      }

      @media (max-width: 600px) {
         .event-list__item {
            flex-direction: column;
            align-items: flex-start;
         }

         .event__link {
            margin: 0 auto;
            margin-top: 10px;
         }
      }

      .chess__menu-block {
         margin: 0 auto;
         opacity: .9;
         position: absolute;
         display: flex;
         justify-content: center;
         top: 0;
         left: 0;
         right: 0;
         max-height: 70px;
         background: #007C27;
         border-bottom: 2px black solid;
      }

      .chess__menu-list {

         list-style-type: none;
         display: flex;
         color: white;
         justify-content: space-around;
         align-items: center;
      }

      .chess-content__blocks {
         display: flex;
         align-items: stretch;
      }


      .chess__menu-item {
         box-sizing: border-box;
         padding: 0 20px;
         text-align: center;
         display: flex;
         justify-content: center;
         align-items: center;
      }

      .chess__menu-item:hover {
         color: #fff;
         background-color: rgb(26, 154, 39);
         height: 100%;
         align-items: center;
         border: 1px solid black;
      }

      .chess__menu-link {
         padding: 10px;
         color: #fff;
         font-size: 18px;
         font-weight: bold;
         text-shadow: black 4px 3px 4px;
      }

      .logo {
         width: 150px;
         border: black 3px double;
      }

      .chess__button {
         width: 150px;
         font-size: 14px;
         background-color: #4caf50;
         color: #fff;
         border-radius: 15px;
         box-shadow: #007bff 3px 2px 3px;
      }

      .chess__social-icon {
         padding: 10px;
         width: 50px;
         height: auto;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
      }

      @media (max-width: 1120px) {
         .chess__menu-link {
            font-size: 14px;
         }

         .logo {
            width: 100px;
         }

         .chess__button {
            width: 100px;
            font-size: 10px;
         }

         .chess__menu-item {
            padding: 0;
         }
      }

      .chess__title {
         font-family: "Kereru";
         margin: 0 auto;
         text-align: center;
         
         color: #fff;
         
         /* text-decoration: underline orange; */
         font-size: 65px;
         font-weight: bold;
         border-radius: 30px;
         /* text-shadow: #4caf50 4px 3px 4px; */
      }
      .chess__subtitle {
         font-family: "Kereru";
         margin: 0 auto;
         font-size: 45px;
         text-align: center;
         margin-bottom: 20px;
         color: #fff;
         
         /* text-decoration: underline orange; */
         
         font-weight: bold;
         border-radius: 30px;
      }
      .block_right {
         background: #FF8900;
         display: flex;
         flex-direction: column;
         width: 45%;
      }

      .chess__img-author {
         width: 100%;
         height: auto;
         margin: 0 auto;
         padding-bottom: 15px;
      }

      .about-author__block {

         padding: 25px;
      }

      .about-author__block:hover {
         border: 1px solid white;
      }

      .chess__button_big {
         width: 100%;
         font-size: 25px;
      }

      .chess__button_big:hover {
         background-color: #007bff;
      }

      .big {
         font-size: 45px;
      }


      /* 
        @media (max-width: 1280px) AND (min-width: 768px) {
            .chess__animation {
                width: 75px;
                height: 75px;
                left: 0;
                top: 0;
            }
        } */
      @media (max-width: 768px) {
         .chess__animation {
            width: 75px;
            height: 75px;
            left: 0;
            top: 0;
         }
      }

      .event-list__item {
         display: flex;
         justify-content: space-around;
      }

      .event__content {
         display: flex;
         justify-content: space-between;
         flex-direction: column;
      }

      .event__name {
         font-size: 20px;
      }

      .event__list {
         display: flex;
         width: 80%;
         justify-content: space-between;
         font-size: 16px;
      }

      .ev-link {
         width: 200px;
         text-align: center;

      }

      @media (max-width:768px) {
         .chess__text_m {
            font-size: 16px;
         }

         .event__list {
            flex-direction: column;
         }

         .ev-link {
            margin: 0 auto;
         }

         .chess__text {
            font-size: 20px;
         }
      }



      /* Кнопка-бургер */
      .burger {
         position: fixed;
         top: 20px;
         right: 20px;
         width: 30px;
         height: 20px;
         display: flex;
         flex-direction: column;
         justify-content: space-between;
         cursor: pointer;
         z-index: 1001;
      }

      .burger span {
         display: block;
         height: 3px;
         background-color: #333;
         border-radius: 3px;
         transition: 0.3s;
      }

      /* Меню */
      .menu-overlay {
         position: fixed;
         top: 0;
         left: 0;
         height: 100vh;
         width: 100vw;
         background: linear-gradient(to right, #00BF32, #007C21);
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         transform: translateY(-100%);
         transition: transform 0.4s ease;
         z-index: 1000;
      }

      .menu-overlay.active {
         transform: translateY(0);
      }

      .menu-item {
         font-size: 24px;
         color: #222;
         text-decoration: none;
         margin: 20px 0;
         transition: color 0.2s;
      }

      .menu-item:hover {
         color: #fcf7f7;
      }

      /* Анимация кнопки при открытии */
      .burger.active span:nth-child(1) {
         transform: rotate(45deg) translate(5px, 5px);
      }

      .burger.active span:nth-child(2) {
         opacity: 0;
      }

      .burger.active span:nth-child(3) {
         transform: rotate(-45deg) translate(5px, -5px);
      }

      .burger {
         display: none;
      }

      @media (max-width: 768px) {
         .chess__menu-block {
            display: none;
         }

         .burger {
            display: flex;
         }
      }

      @media (max-width: 630px) {
         .chess-content__blocks {
            flex-direction: column-reverse;
         }

         .text__block {
            width: 100%;
         }

         .block_right {
            width: 100%;
            margin-bottom: 15px;
         }
      }

      .chess__animation {
         animation-name: spin;
         animation-duration: 5s;
         animation-iteration-count: infinite;
         animation-timing-function: inherit;
         position: absolute;
         width: 50px;
         height: 50px;
         z-index: 4;
      }

      @keyframes spin {
         0% {
            left: 20%;
            bottom: 0;
         }

         10% {
            left: 25%;
            bottom: 15%;
         }

         20% {
            left: 30%;
            bottom: 0px;
         }

         30% {
            left: 35%;
            bottom: 15%;
         }

         40% {
            left: 40%;
            bottom: 0;
         }

         50% {
            left: 45%;
            bottom: 15%;
         }

         60% {
            left: 50%;
            bottom: 0px;
         }

         70% {
            left: 80%;
            bottom: 15%;
         }

         80% {
            left: 90%;
            bottom: 0;
         }

         90% {
            left: 100%;
            bottom: 15%;
         }

         100% {
            background-image: url('./img/animation/ch-ferz.png');
         }
      }

      /* ДОСКА CSS*/
      .chess__desk {
         position: relative;
         display: flex;
         width: 100%;
      }

      .white {
         background-color: #fcf7f7;
         width: 70px;
         height: 10px;
      }

      .dark {
         background-color: black;
         width: 70px;
         height: 10px;
      }

      .one {
         display: none;
         position: absolute;
         overflow: hidden;
         top: 0;
         animation: scale 10s linear infinite;
      }

      @keyframes scale {
         0% {
            transform: scale(0);
            border-radius: 50%;
         }

         10% {
            transform: scale(1);
            border-radius: 50%;
         }

         15% {
            border-radius: 0;
         }

         49.99999% {
            z-index: 1;
         }

         50% {
            z-index: -1;
         }

         100% {
            transform: scale(1);
            z-index: -1;
            border-radius: 0;
         }
      }

      .comments-section {
         max-width: 100%;
         margin: auto;
         background: #fff;
         border-radius: 15px;
         padding: 30px;
         box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }

      h2 {
         font-size: 2em;
         text-align: center;
         margin-bottom: 25px;
      }

      .comment {
         display: flex;
         gap: 20px;
         padding: 20px 0;
         border-bottom: 1px solid #eee;
         align-items: center;
      }

      .comment.reverse {
         flex-direction: row-reverse;
      }

      .comment:last-child {
         border-bottom: none;
      }

      .avatar {
         width: 180px;
         height: 180px;
         border-radius: 50%;
         background-size: cover;
         background-position: center;
         flex-shrink: 0;
      }

      @media (max-width: 500px) {
         .avatar {
            width: 100px;
            height: 100px;
         }
      }

      .comment-content {
         flex: 1;
         display: flex;
         flex-direction: column;
         justify-content: center;
      }

      .comment-header {
         display: flex;
         justify-content: space-between;
         align-items: center;
         margin-bottom: 8px;
         font-size: 1.2em;
      }

      .author {
         font-weight: bold;
      }

      .date {
         font-size: 0.9em;
         color: #888;
      }

      .text {
         line-height: 1.6;
         font-size: 1.1em;
      }

      @media (max-width: 500px) {
         .text {
            font-size: 0.7em;
         }

         .date {
            font-size: 0.5em;
         }

         .comment-header {
            flex-direction: column;
         }
      }

      :root {
         --chess-bg: #f7f7fb;
         --chess-card: #fff;
         --chess-text: #1f2937;
         --chess-muted: #6b7280;
         --chess-accent: #e63946;
         --chess-accent2: #457b9d;
         --chess-line: #e5e7eb;
      }

      /* базовый контейнер */
      .chess-body {
         margin: 0;
         background: var(--chess-bg);
         color: var(--chess-text);
         font: 16px/1.45 system-ui, -apple-system, Segoe UI, Roboto, Arial;
      }

      /* обёртка */
      .chess-wrap {
         max-width: 1200px;
         margin: auto;
         padding: 28px 16px;
         position: relative;
         z-index: 1;
      }

      /* заголовки */
      .chess-title {
         margin: 0 0 6px;
         font-size: 28px;
      }

      .chess-sub {
         margin: 0 0 18px;
         color: var(--chess-muted);
         text-align: center;
      }

      /* сетка карточек */
      .chess-grid {
         display: grid;
         grid-template-columns: repeat(3, minmax(0, 1fr));
         gap: 18px;
      }

      @media (max-width: 900px) {
         .chess-grid {
            grid-template-columns: repeat(2, 1fr);
         }
      }

      @media (max-width: 640px) {
         .chess-grid {
            grid-template-columns: 1fr;
         }
      }

      /* карточка */
      .chess-card {
         background: var(--chess-card);
         border: 1px dashed var(--chess-line);
         border-radius: 14px;
         padding: 14px 14px 16px;
         box-shadow: 0 6px 18px rgba(0, 0, 0, .06);
         margin-bottom: 12px;
         /* гарантирует разрыв между картами */
      }

      .chess-card-title {
         margin: 6px 0 10px;
         font-size: 19px;
         font-weight: bold;
      }

      .chess-card-row {
         display: flex;
         align-items: center;
         gap: 8px;
         margin: 6px 0;
         color: #374151;
      }

      /* кнопка */
      .chess-btn {
         display: inline-block;
         margin-top: 10px;
         padding: 9px 14px;
         border-radius: 8px;
         background: var(--chess-accent);
         color: #fff;
         text-decoration: none;
      }

      .chess-btn:hover {
         filter: brightness(.95);
      }

      /* пагинация */
      .chess-pagination {
         display: flex;
         justify-content: center;
         align-items: center;
         gap: 6px;
         margin: 22px 0 4px;
         user-select: none;
      }

      .chess-pagination-dash {
         color: var(--chess-muted);
      }

      .chess-page,
      .chess-arrow {
         min-width: 36px;
         padding: 8px 10px;
         border-radius: 8px;
         background: #eceff3;
         text-align: center;
         cursor: pointer;
      }

      .chess-page[aria-current="page"] {
         background: var(--chess-accent2);
         color: #fff;
         cursor: default;
      }

      .chess-disabled {
         opacity: .45;
         pointer-events: none;
      }


      /*МОдальное форма записи на проб занятие */
      :root {
         --primary-color: #5038ff;
         --accent-color: #22c55e;
         --bg-overlay: rgba(20, 20, 30, 0.85);
         --radius-lg: 18px;
         --radius-sm: 8px;
         --shadow: 0 8px 24px rgba(0, 0, 0, 0.25);
         --font-main: 'Segoe UI', sans-serif;
      }


      .trigger-btn {
         display: inline-block;
         margin-top: 80px;
         padding: 14px 32px;
         font-size: 20px;
         font-weight: 600;
         background: var(--primary-color);
         color: #fff;
         border: none;
         border-radius: var(--radius-lg);
         cursor: pointer;
         transition: transform 0.2s, box-shadow 0.2s;
         box-shadow: var(--shadow);
      }

      .trigger-btn:hover {
         transform: scale(1.05);
         box-shadow: 0 10px 28px rgba(0, 0, 0, 0.3);
      }

      .overlay {
         display: none;
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: var(--bg-overlay);
         backdrop-filter: blur(6px);
         justify-content: center;
         align-items: center;
         z-index: 1000;
         padding: 20px;
      }

      .popup {
         background: #fff;
         width: 100%;
         max-width: 640px;
         border-radius: var(--radius-lg);
         padding: 28px 32px;
         box-shadow: var(--shadow);
         animation: scaleIn 0.25s ease;
         position: relative;
         max-height: 100%;
         overflow-y: auto;
      }

      @keyframes scaleIn {
         from {
            transform: scale(0.9);
            opacity: 0;
         }

         to {
            transform: scale(1);
            opacity: 1;
         }
      }

      .popup h2 {
         text-align: center;
         margin-bottom: 20px;
         font-size: 26px;
      }

      .close-action {
         position: absolute;
         top: 20px;
         right: 24px;
         font-size: 24px;
         color: #888;
         cursor: pointer;
         background: none;
         border: none;
      }

      .form-block {
         margin-bottom: 16px;
      }

      .form-label {
         display: block;
         margin-bottom: 6px;
         font-weight: 600;
         font-size: 15px;
      }

      .form-input,
      .form-select,
      .form-textarea {
         width: 100%;
         padding: 12px;
         border: 1px solid #ccc;
         border-radius: var(--radius-sm);
         font-size: 15px;
         transition: border-color 0.2s;
      }

      .form-input:focus,
      .form-select:focus,
      .form-textarea:focus {
         border-color: var(--primary-color);
         outline: none;
      }

      .options {
         display: flex;
         flex-direction: column;
         gap: 8px;
      }

      .submit-action {
         margin-top: 24px;
         width: 100%;
         padding: 14px;
         font-size: 18px;
         font-weight: 600;
         color: #fff;
         background: var(--accent-color);
         border: none;
         border-radius: var(--radius-lg);
         cursor: pointer;
         transition: background 0.2s;
      }

      .submit-action:hover {
         background: #16a34a;
      }

      /************************** */

      .chess__contain {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
         gap: 25px;
         margin-top: 30px;
         padding: 10px;
      }

      .chess__card {
         background: white;
         border-radius: 20px;
         box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
         padding: 20px;
         text-align: center;
         transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .chess__card:hover {
         transform: translateY(-8px);
         box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      }

      .chess__img {
         width: 300px;
         height: 300px;
         object-fit: cover;
         border-radius: 15px;
         border: 4px solid #6c5ce7;
      }

      .chess__name {
         margin: 20px 0 10px;
         font-size: 22px;
         font-weight: bold;
         color: #2d3436;
      }

      .chess__desc {
         color: #636e72;
         font-size: 16px;
         line-height: 1.5;
         text-align: left;
      }
   </style>
</head>

<body>
   <header class="chess-container">
      <menu class="chess__menu-block">
         <img class="logo" src="./img/Logo (3).png">
         <ul class="chess__menu-list">
            <li class="chess__menu-item"><a class="chess__menu-link" href="#calendar">Календарь</li></a>
            <li class="chess__menu-item"><a class="chess__menu-link" href="#O-Nas">О нас</a></li>
            <li class="chess__menu-item"><a class="chess__menu-link" href="#">Шахматные турниры клуба</a></li>
            <li class="chess__menu-item"><a class="chess__menu-link" href="#otzivi">Отзывы</a></li>
            <li class="chess__menu-item"><a class="chess__menu-link" href="#social">Мы в социальных сетях</a></li>
         </ul>
         <div class="chess__social-icon">
            <a class="vk" href="#">VK</a>
            <a class="tg" href="#">TG</a>
            <a class="Youtube" href="#">YouTube</a>
         </div>
         <button class="trigger-btn">Записаться на "Пробный урок"</button>
      </menu>
      <div class="burger" id="burger">
         <span></span>
         <span></span>
         <span></span>
      </div>

      <!-- Модальное меню -->
      <div class="menu-overlay" id="menu">
         <a href="#" class="menu-item">Календарь</a>
         <a href="#" class="menu-item">О нас</a>
         <a href="#" class="menu-item">Шахматные турниры клуба</a>
         <a href="#" class="menu-item">Отзывы</a>
         <a href="#" class="menu-item">Мы в социальных сетях</a>
         <button class="trigger-btn chess__button chess__button_big" id="openModal" href="">Записаться на "Пробный урок"</button>
      </div>



      <div class="overlay" id="modal">
         <div class="popup">
            <button class="close-action" id="closeModal">✕</button>
            <h2>Запись на занятие шахматного клуба</h2>

            <form id="signupForm">
               <div class="form-block">
                  <label class="form-label" for="parentName">ФИО Родителя</label>
                  <input class="form-input" type="text" id="parentName" required>
               </div>

               <div class="form-block">
                  <label class="form-label" for="childName">ФИО Ребенка</label>
                  <input class="form-input" type="text" id="childName" required>
               </div>

               <div class="form-block">
                  <label class="form-label" for="phone">Контактный телефон</label>
                  <input class="form-input" type="tel" id="phone" required placeholder="+7 (___) ___-__-__">
               </div>

               <div class="form-block">
                  <label class="form-label" for="goal">Цель занятий</label>
                  <textarea class="form-textarea" id="goal" rows="3"></textarea>
               </div>

               <div class="form-block">
                  <label class="form-label" for="level">Уровень подготовки</label>
                  <select class="form-select" id="level">
                     <option value="beginner">Начальный</option>
                     <option value="intermediate">Средний</option>
                     <option value="advanced">Продвинутый</option>
                  </select>
               </div>

               <div class="form-block">
                  <label class="form-label" for="city">Город и район проживания</label>
                  <input class="form-input" type="text" id="city">
               </div>

               <div class="form-block">
                  <label class="form-label">Предпочтительная форма занятий</label>
                  <div class="options">
                     <label><input type="radio" name="mode" value="offline"> Очно</label>
                     <label><input type="radio" name="mode" value="online"> Заочно</label>
                  </div>
               </div>

               <div class="form-block">
                  <label class="form-label">Формат занятий</label>
                  <div class="options">
                     <label><input type="radio" name="groupType" value="group"> Групповые</label>
                     <label><input type="radio" name="groupType" value="individual"> Индивидуальные</label>
                  </div>
               </div>

               <button type="submit" class="submit-action">Отправить заявку</button>
            </form>
         </div>
      </div>
      <div class="chess-content">

         <!-- <img class="chess__animation two" src="./img/animation/ch-korol.png"> -->
         <h1 class="chess__title">"Талант" клуб</h1> 
         <h2 class="chess__subtitle">Обучение шахматам детей и взрослых</h2>
         <div class="chess-content__blocks">
            <div class="text__block">
               <div class="chess__desk">
                  <img src="./img/animation/bel-peshka.png" class="chess__animation">
                  <img src="./img/animation/ch-ferz.png" class="chess__animation one">
                  <div class="white"></div>
                  <div class="dark"></div>
                  <div class="white"></div>
                  <div class="dark"></div>
                  <div class="white"></div>
                  <div class="dark"></div>
                  <div class="white"></div>
                  <div class="dark"></div>
               </div>
               <p class="chess__text">Наш
                  девиз —
                  <b>*Gens una sumus* («Мы – одна семья»)</b>
               </p>
               <h2 class="chess__text big">Почему выбирают шахматный клуб «Талант»</h2>
               <div class="">
                  <ul>
                     <li class="chess__text_m"><strong>Индивидуальный подход:</strong> обучение под уровень и
                        цели каждого
                        ученика – от
                        новичков до продвинутых.
                     </li>
                     <li class="chess__text_m"><strong>Удобный формат:</strong> занятия проходят в уютной
                        офлайн-студии или
                        онлайн через Zoom.
                     </li>
                     <li class="chess__text_m"><strong>Малые группы и индивидуальные занятия:</strong> максимум
                        внимания и
                        комфортная атмосфера
                        (1 на 1 или 4–6 учеников в группе).
                     </li>
                     <li class="chess__text_m"><strong>Гибкие тарифы:</strong> разовая оплата или абонемент —
                        выбирайте,
                        как удобно.
                     </li>
                     <li class="chess__text_m"><strong>Турниры внутри клуба:</strong> регулярные онлайн и офлайн
                        соревнования для практики и
                        общения.
                     </li>
                     <li class="chess__text_m"><strong>Поддержка, помощь и подготовка к соревнованиям:</strong>
                        направляем
                        учеников на клубные
                        и городские турниры,
                        сопровождаем на всех этапах.
                     </li>
                  </ul>
               </div>

            </div>

            <div class="block_right">
               <div class="about-author__block">
                  <img class="chess__img-author" src="./img/author2.jpg" alt="Автор шахматного клуба 'Талант'">
                  <button class="trigger-btn chess__button chess__button_big" id="openModal" href="">Записаться на "Пробный урок"</button>
               </div>
            </div>
         </div>

      </div>
      <!-- <video autoplay loop muted class="bgvideo" id="bgvideo">
            <source src="./img/background-video/background-video.mp4" type="video/mp4">
            </source>
        </video> -->
   </header>

   <section class="calendar" id="calendar">
      <h1 class="calendar__title">Шахматный календарь 2025</h1>
      <div class="calendar__controls">
         <input type="text" id="searchInput" class="calendar__filter" placeholder="Поиск по названию">
         <select id="monthFilter" class="calendar__filter"></select>
         <select id="ratingFilter" class="calendar__filter">
            <option value="all">Все рейтинги</option>
            <option value="2300+">2300+</option>
            <option value="1800+">1800+</option>
            <option value="без ограничений">Без ограничений</option>
         </select>
         <select id="controlFilter" class="calendar__filter">
            <option value="all">Все контроли</option>
            <option value="блиц">Блиц</option>
            <option value="рапид">Рапид</option>
            <option value="классика">Классика</option>
         </select>
         <select id="cityFilter" class="calendar__filter"></select>
         <button id="upcomingBtn" class="calendar__filter calendar__filter--button">Предстоящие</button>
         <button id="pastBtn" class="calendar__filter calendar__filter--button">Прошедшие</button>
         <button id="resetFilters" class="calendar__filter calendar__filter--button">Сбросить фильтры</button>
      </div>
      <p id="emptyMessage" class="event-list__empty" style="display: none;">
         Нет турниров по выбранным параметрам.
      </p>
      <ul id="tournamentList" class="event-list">

      </ul>
   </section>
   <section>
      <h2 style="text-align: center;">♟ Достижения наших учеников ♟</h2>
      <div class="chess__contain">
         <div class="chess__card">
            <img class="chess__img" src="./img/students/levin kirill.jpg" alt="Ученик 1">
            <h2 class="chess__name">Лёвин Кирилл</h2>
            <p class="chess__desc">
               2014 год рождения</br>
               - 1 юношеский разряд</br>
               - чемпион «Чессть Мега Парнас до 1200 рейтинга ФШР»</br>
               - серебряный призер первенства Выборгского района до 1400 рейтинга ФШР</br>
               - актуальный рейтинг ФШР рапид 1360, онлайн-рейтинг 1536
            </p>
         </div>

         <div class="chess__card">
            <img class="chess__img" src="./img/students/клементьев сергей.jpg" alt="Ученик 2">
            <h2 class="chess__name">Клементьев Сергей</h2>
            <p class="chess__desc">
               2011 год рождения</br>
               - 1 юношеский разряд</br>
               - чемпион турнира «IQ Cup», ноябрь 2024</br>
               - многократный призер первенств Выборгского района</br>
               - дележ 3-6 места Регионального фестиваля «Белые ночи» 2025, турнир «В» классика</br>
               -актуальный рейтинг ФШР рапид 1337, классика 1307
            </p>
         </div>

         <div class="chess__card">
            <img class="chess__img" src="./img/students/молчанов дима.jpg" alt="Ученик 3">
            <h2 class="chess__name">Молчанов Дмитрий</h2>
            <p class="chess__desc">
               2016 год рождения</br>
               - 2 юношеский разряд</br>
               - 1 место среди участников 2016 года рождения (9 из 81 в общем зачете) Регионального фестиваля «Белые ночи» 2024, Турнир «А»</br>
               - призер «первенства Школы Шахмат Анатолия Боталова до 1200 рейтинга ФШР» (дележ 1-3 места)</br>
               - чемпион Выборгского района в возрастной категории 2015 года рождения и младше</br>
               -актуальный рейтинг ФШР рапид 1229
            </p>
         </div>
      </div>
   </section>


   <section class="chess-container-two" id="O-Nas">
      <div class="comments-section">
         <h2>Комментарии</h2>

         <div class="comment">
            <div class="avatar" style="background-image: url('https://i.pravatar.cc/80?img=5');"></div>
            <div class="comment-content">
               <div class="comment-header">
                  <span class="author">Андрей Петров</span>
                  <span class="date">14 августа 2025</span>
               </div>
               <div class="text">Отличный турнир! Особенно понравилась партия между Ивановым и Смирновым — настоящий шедевр позиционной игры.</div>
            </div>
         </div>

         <div class="comment reverse">
            <div class="avatar" style="background-image: url('https://i.pravatar.cc/80?img=8');"></div>
            <div class="comment-content">
               <div class="comment-header">
                  <span class="author">Мария Коваль</span>
                  <span class="date">13 августа 2025</span>
               </div>
               <div class="text">Спасибо организаторам! Атмосфера была дружелюбной, а шахматный блиц на открытом воздухе — просто супер.</div>
            </div>
         </div>

         <div class="comment">
            <div class="avatar" style="background-image: url('https://i.pravatar.cc/80?img=12');"></div>
            <div class="comment-content">
               <div class="comment-header">
                  <span class="author">Сергей Иванов</span>
                  <span class="date">12 августа 2025</span>
               </div>
               <div class="text">Хотелось бы побольше мастер-классов для новичков. В остальном всё замечательно!</div>
            </div>
         </div>
      </div>
   </section>


   <section class="chess__turnament">
      <a id="chess-calendar"></a>
      <div class="chess-wrap">
         <h1 class="chess-title">Шахматные турниры клуба</h1>
         <p class="chess-sub">для детей и взрослых</p>

         <div id="chess-cards" class="chess-grid"></div>

         <nav id="chess-pager" class="chess-pagination" aria-label="Навигация по страницам"></nav>
      </div>
   </section>

   <section class="chess__social" id="social">
      <h2 class="">Мы в социальных сетях — живём шахматами каждый день</h2>
   </section>
   <script src="./js/script.js"></script>
   <script src="./js/calendar.js"></script>
   <script src="./js/turnamets.js"></script>
   <script>
      // Модальное окно заявки клуба
      const openModal = document.getElementById('openModal');
      const modal = document.getElementById('modal');
      const closeModal = document.getElementById('closeModal');
      const radios = document.querySelectorAll('input[name="format"]');
      const groupSizeContainer = document.getElementById('groupSizeContainer');

      openModal.addEventListener('click', () => modal.style.display = 'flex');
      closeModal.addEventListener('click', () => modal.style.display = 'none');

      radios.forEach(radio => {
         radio.addEventListener('change', () => {
            groupSizeContainer.style.display = 'block';
         });
      });

      document.getElementById('signupForm').addEventListener('submit', (e) => {
         e.preventDefault();
         alert('Заявка отправлена!');
         modal.style.display = 'none';
      });












      const burger = document.getElementById('burger');
      const menu = document.getElementById('menu');

      burger.addEventListener('click', () => {
         burger.classList.toggle('active');
         menu.classList.toggle('active');
      });

      // Закрытие меню по клику на пункт
      document.querySelectorAll('.menu-item').forEach(item => {
         item.addEventListener('click', () => {
            burger.classList.remove('active');
            menu.classList.remove('active');
         });
      });



      // ----- НАСТРОЙКИ -----
      const chessPerPage = 3;
      const chessCardsEl = document.getElementById('chess-cards');
      const chessPagerEl = document.getElementById('chess-pager');
      const chessTotalPages = Math.max(1, Math.ceil(chessTournaments.length / chessPerPage));
      let chessPage = 1;

      // ----- РЕНДЕР КАРТОЧЕК -----
      function chessRenderCards(p) {
         const start = (p - 1) * chessPerPage;
         const slice = chessTournaments.slice(start, start + chessPerPage);
         chessCardsEl.innerHTML = slice.map(t => `
      <div class="chess-card">
        <div class="chess-card-title">${t.title}</div>
        <div class="chess-card-row">📅 ${t.date}</div>
        <div class="chess-card-row">📍 ${t.place}</div>
        <div class="chess-card-row">🏆 ${t.level}</div>
        <a class="chess-btn" href="#">Подробнее</a>
      </div>
    `).join('');
      }

      // ----- РЕНДЕР ПАГИНАЦИИ -----
      function chessRenderPager(p) {
         const prevDisabled = p <= 1 ? 'chess-disabled' : '';
         const nextDisabled = p >= chessTotalPages ? 'chess-disabled' : '';
         let html = `<span class="chess-pagination-dash">—</span>
      <span class="chess-arrow ${prevDisabled}" data-go="${p-1}">«</span>`;
         for (let i = 1; i <= chessTotalPages; i++) {
            html += `<span class="chess-page" data-go="${i}" ${i===p?'aria-current="page"':''}>${i}</span>`;
         }
         html += `<span class="chess-arrow ${nextDisabled}" data-go="${p+1}">»</span>
      <span class="chess-pagination-dash">—</span>`;
         chessPagerEl.innerHTML = html;
      }

      // ----- ПЕРЕКЛЮЧЕНИЕ -----
      function chessGo(to) {
         chessPage = Math.min(Math.max(1, to), chessTotalPages);
         chessRenderCards(chessPage);
         chessRenderPager(chessPage);
         document.getElementById('chess-calendar').scrollIntoView({
            behavior: 'smooth'
         });
      }
      chessPagerEl.addEventListener('click', e => {
         const el = e.target.closest('[data-go]');
         if (!el) return;
         chessGo(parseInt(el.dataset.go, 10));
      });
      chessGo(1);
   </script>
</body>

</html>