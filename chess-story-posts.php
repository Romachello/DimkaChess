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
         <h1 class="white">История шахмат</h1><br>
         <h2 class="chess-content__discription">Статьи</h2>
         <div class="posts__block">
            <?php
            // Подключение к базе данных
            $host = 'localhost';
            $username = 'mysql';
            $password = 'mysql';
            $dbname = 'chess_post';

            // Создание подключения
            $mysqli = new mysqli($host, $username, $password, $dbname);

            // Проверка подключения
            if ($mysqli->connect_error) {
               die("Ошибка подключения: " . $mysqli->connect_error);
            }

            // Запрос для получения данных из таблицы chess_post
            $sql = "SELECT id, name_post, description, text, img1 FROM chess_post";
            $result = $mysqli->query($sql);

            // Проверка наличия записей
            if ($result->num_rows > 0) {
               echo '<div class="posts__items">';
               while ($row = $result->fetch_assoc()) {
                  echo '<div class="post__item">';

                  // Проверка, есть ли изображение
                  if (!empty($row['img1'])) {
                     // Определение MIME-типа изображения
                     $finfo = new finfo(FILEINFO_MIME_TYPE);
                     $mimeType = $finfo->buffer($row['img1']);  // MIME-тип может быть image/jpeg, image/png и т.д.

                     // // Проверка: выводим MIME-тип изображения
                     // echo '<p>MIME-тип изображения: ' . $mimeType . '</p>';

                     // Конвертация бинарных данных изображения в Base64
                     $imgData = base64_encode($row['img1']);

                     // Вывод изображения
                     echo '<img class="img__item" src="data:' . $mimeType . ';base64,' . $imgData . '" alt="Image"/>';
                  } else {
                     echo '<p>Изображение отсутствует</p>';
                  }



                  echo '<h3 class="item__title">' . htmlspecialchars($row['name_post']) . '</h3>';
                  echo '<p class="item__text-post">' . nl2br(htmlspecialchars_decode(htmlspecialchars($row['text'], ENT_QUOTES), ENT_QUOTES)) . '</p>';
                  echo '</div>';
               }
               echo '</div>';
            } else {
               echo "Записи не найдены";
            }

            // Закрытие соединения
            $mysqli->close();
            ?>
         </div>



         <div id="modal" class="modal">
            <div class="modal-content">
               <span class="close">&times;</span>
               <img id="modal-img" src="" class="modal__img" alt="Image" />
               <h3 id="modal-title" class="modal__title"></h3>
               <p id="modal-text" class="modal__text"></p>
            </div>
         </div>
      </main>

      <video autoplay loop muted class="bgvideo" id="bgvideo">
         <source src="./img/background-video/background-video.mp4" type="video/mp4">
         </source>
      </video>
   </div>

   <script src="./js/script.js"></script>
   <script src="./js/modal__posts.js"></script>
</body>

</html>