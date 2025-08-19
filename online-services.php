<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Шахматный сайт - онлайн сервисы</title>
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/normalize.css">
   <style>
      body {
         background-color:blueviolet;
      }
      .services__discription {
         color: white;
         text-align: center;
      }
      .chess__fourblocks {
         width: 64%;
         margin: 0 auto;
         display: flex;
         justify-content: center;
         flex-wrap: wrap;
      }

      .white__block {
         width: 50%;
         background-color: white;
         color: black;
      }

      .div__links{
         display: flex;
         flex-direction: column;
         width: 100%;
      }
      .black__block {
         width: 50%;
         background-color: black;
         color: white;
      }

      .img__services {
         padding-top: 20%;
         width: 150px;
         height: 150px;
         object-fit: cover;
      }

      .black {
         color: black;
      }

      .white {
         color: white;
         margin: 0;
      }

   </style>

</head>

<body>
   <main class="services-container">
      <h1 align="center" class="white">Онлайн сервисы</h1><br>
      <h2 class="services__discription">Здесь Вы найдете ссылки на удобные и эффективные онлайн-сервисы для тренировки тактики, эндшпиля и дебюта</h2>
      <div class="chess__fourblocks">
         <div class="white__block">
            <div class="div__links">
               <img class="img__services" src="./img/servises/chesstempo.png" />
               <a class="link black" href="https://chesstempo.com/">CHESSTEMPO.COM</a>
            </div>
         </div>
         <div class="black__block">
            <div class="div__links">
               <img class="img__services" src="./img/servises/stepchess.jpg" />
               <a class="link white" href="https://stepchess.ru/">STEPCHESS.RU</a>
            </div>
         </div>
         <div class="black__block">
            <div class="div__links">
               <img class="img__services" src="./img/servises/chess.png" />
               <a class="link white" href="https://chess.com/">WWW.CHESS.COM</a>
            </div>
         </div>
         <div class="white__block">
            <div class="div__links">
               <img class="img__services" src="./img/servises/lichess.png" />
               <a class="link black" href="https://lichess.org/">WWW.LICHESS.ORG</a>
            </div>
         </div>
      </div>
   </main>
   <script src="./js/script.js"></script>
</body>

</html>