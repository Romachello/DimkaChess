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
        <main class="chess-content">
            <h1 class="chess-title"><span class="title"></span><span class="white">Доб</span><span class="black">ро
                </span><span class="white">пож</span><span class="black">ало</span><span class="white">ват</span><span
                    class="black">ь в </span><span class="white">Шах</span><span class="black">мат</span><span
                    class="white">ное </span><span class="black">Кор</span><span class="white">оле</span><span
                    class="black">вст</span><span class="white">во!</span></span></h1>
            <h2 class=""></h2>
            <div class="chess__blocks">
                <div class="chess__block">
                    <h3 class="chess-content-text backgroud__none">Новости</h3>
                    <img class="img__chess" src="./img/background-video/news.jpg">
                    <a class="chess__link" href="#"><span>Перейти</span></a>
                </div>
                <div class="chess__block">
                    <h3 class="chess-content-text backgroud__none">Онлайн сервисы</h3>
                    <img class="img__chess" src="./img/background-video/chess-services-online.png">
                    <a class="chess__link" href="./online-services.php"><span>Перейти</span></a>
                </div>
                <div class="chess__block">
                    <h3 class="chess-content-text backgroud__none">История</h3>
                    <img class="img__chess" src="./img/background-video/chess-history.webp">
                    <a class="chess__link" href="#"><span>Перейти</span></a>
                </div>
            </div>
        </main>
        <video autoplay loop muted class="bgvideo" id="bgvideo">
            <source src="./img/background-video/background-video.mp4" type="video/mp4">
            </source>
        </video>
    </div>
    <div class="chess-container-two">
        <h2 class="chess-content-title">Наш клуб</h2>
        <div class="club__blocks">
            <div class="club__block">
                <h3>Турниры</h3>
                <img class="img__chess" src="./img/background-video/chess.jpg">
                <a class="chess__link" href="#"><span>Перейти</span></a>
            </div>
            <div class="club__block">
                <h3>Сообщество</h3>
                <img class="img__chess" src="./img/background-video/chess-soobshestvo.jpg">
                <a class="chess__link" href="#"><span>Перейти</span></a>
            </div>
            <div class="club__block">
                <h3>Школа</h3>
                <img class="img__chess" src="./img/background-video/chess2.jpg">
                <a class="chess__link" href="#"><span>Перейти</span></a>
            </div>
        </div>
        <a class="social-icons">Ссылки на соцсети</a>

    </div>
    <div class="chess-container-three">
        <h2 class="chess-content-title">Обучающие курсы (от клуба)</h2>
        <p class="">Раздел находится в разработке...</p>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>