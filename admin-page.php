<?php
session_start(); // Запуск сессии

// Определяем логин и пароль администратора (лучше хранить в .env или в базе данных)
$admin_login = "admin";
$admin_password_hash = password_hash("SuperStrongPassword123!", PASSWORD_BCRYPT); // Захешированный пароль

// Проверяем, авторизован ли пользователь
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $login = trim($_POST['login'] ?? '');
      $password = $_POST['password'] ?? '';

      // Проверка логина и пароля (безопасное сравнение с hash)
      if ($login === $admin_login && password_verify($password, $admin_password_hash)) {
         $_SESSION['logged_in'] = true;
         $_SESSION['ip'] = $_SERVER['REMOTE_ADDR']; // Защита по IP
         $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT']; // Защита по user agent
         session_regenerate_id(true); // Защита от фиксации сессий
         header("Location: admin-page.php");
         exit();
      } else {
         $error = "Неверный логин или пароль";
         sleep(2); // Замедление для защиты от брутфорса
      }
   }
   // Форма входа
   echo '<!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Вход в админку</title>
        <style>
         body {
            font-family: Arial;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
         } 
            form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
         } 
            input {
               width: 300px;
               font-size: 20px;
         }
        </style>
    </head>
    <body>
        <h2>Авторизация</h2>
        <form method="POST">
            <label>Логин:<br> <input type="text" name="login" required></label><br>
            <label>Пароль:<br> <input type="password" name="password" required></label><br>
            <button type="submit">Войти</button>
        </form>';
   if (isset($error)) {
      echo '<p style="color: red;">' . htmlspecialchars($error) . '</p>';
   }
   echo '</body></html>';
   exit();
}

// Подключение к базе данных
$servername = "localhost";
$username = "mysql";
$password = "mysql";
$dbname = "chess_post";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Ошибка подключения: " . $conn->connect_error);
}

$sql = "SELECT id, name_post, description, text, img1, link_post, author, date_public FROM chess_post";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <title>Админка</title>
   <link rel="stylesheet" href="/css/normalize.css">
   <link rel="stylesheet" href="/css/admin-page.css">
</head>

<body>

   <!-- Главный контейнер -->
   <div class="container">

      <!-- Заголовок -->
      <header class="dashboard-header">
         <h1 class="dashboard-header__logo">Админка</h1>
      </header>

      <!-- Левое меню -->
      <nav class="sidebar-menu">

         <ul class="sidebar-menu__items">
            <li class="sidebar-menu__item">
               <a href="#" class="sidebar-menu__item-title">
                  <span>Общие</span>
                  <i class="fas fa-caret-down"></i>
               </a>
               <ul class="sidebar-menu__subitems">
                  <li class="sidebar-menu__subitem">
                     <a href="/news__admin-page.php">
                        <i class="fas fa-list-ul"></i>
                        <span>Статьи новостей</span>
                     </a>
                  </li>
                  <li class="sidebar-menu__subitem">
                     <a href="/subsection.html">
                        <i class="fas fa-stream"></i>
                        <span>Исторические статьи</span>
                     </a>
                  </li>
                  <li class="sidebar-menu__subitem">
                     <a href="#">
                        <i class="fas fa-edit"></i>
                        <span>Расписание турниров</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="sidebar-menu__item">
               <a href="#" class="sidebar-menu__item-title">
                  <span>Настройки</span>
                  <i class="fas fa-caret-down"></i>
               </a>
               <ul class="sidebar-menu__subitems">
                  <li class="sidebar-menu__subitem">
                     <a href="#">
                        <i class="fas fa-database"></i>
                        <span> Общие</span>
                     </a>
                     </a>
                  </li>
                  <li class="sidebar-menu__subitem">
                     <a href="#">
                        <i class="fas fa-user-friends"></i>
                        <span>Пользователи</span>
                     </a>
                  </li>
                  <li class="sidebar-menu__subitem">
                     <a href="#">
                        <i class="fas fa-comment-alt"></i>
                        <span>Комментарии</span>
                     </a>
                  </li>
                  <li class="sidebar-menu__subitem">
                     <a href="#">
                        <i class="fas fa-info-circle"></i>
                        <span>Статистика</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li class="sidebar-menu__item">
               <a class="sidebar-menu__item-title" href="logout-admin.php">
                  <i class="fas fa-info-circle"></i>
                  <span>Выйти</span>
               </a>
            </li>
         </ul>
      </nav>

      <!-- Главный контент -->
      <main class="main-content">
         <section class="add__post">
            <div>
               <form action="./add_post.php" class="form__add-post" method="POST" enctype="multipart/form-data">
                  <div class="add__post-block1">
                     <p class="input__post">Название статьи</p><input name="name_post" type="text" class="add__post-text">
                     <p class="input__post">Описание</p><textarea name="description" class="add__post-text"></textarea>
                     <p class="input__post">Текст</p><textarea name="text" class="add__post-text"></textarea>
                  </div>
                  <div class="add__post-block2">
                     <p class="input__postimg">Картинка 1<input name="img1" type="file" class="">
                        <img src="<?php echo htmlspecialchars($row['img1']); ?>" alt="" style="max-width: 130px; max-height: 130px;" />
                     </p>
                  </div>
                  <div class="add__post-block3">
                     <p class="input__post">Автор статьи<input name="author" type="text" class=""></p>
                     <p class="input__post">Ссылка на статью<input name="link_post" type="text" class=""></p>
                     <p class="input__post">Дата публикации<input name="date_public" type="date" class="" value="<?php echo date('Y-m-d'); ?>"></p>
                  </div>
                  <button name="btn">Добавить статью</button>
               </form>
            </div>
         </section>

      </main>

   </div>
   <section>
      <h2 style="text-align: center;">Статьи</h2>
      <table style="width: 100%;">
         <thead>
            <tr>
               <th>ID</th>
               <th>Название</th>
               <th>Описание статьи</th>
               <th>Текст статьи</th>
               <th>Картинка 1</th>
               <th>Ссылка на статью</th>
               <th>Автор</th>
               <th>Дата публикации</th>
            </tr>
         </thead>
         <tbody>
            <?php




            // Функция для ограничения длины текста
            function limitText($text, $limit)
            {
               return (strlen($text) > $limit) ? substr($text, 0, $limit) . '...' : $text;
            }

            // Проверка наличия результатов
            if ($result->num_rows > 0) {
               // Вывод данных каждой записи
               while ($row = $result->fetch_assoc()) {
                  echo "<tr  style='width: 100%;'><td>" . $row["id"] . "</td>";
                  echo "<td>" . limitText($row["name_post"], 15) . "</td>";
                  echo "<td>" . limitText($row["description"], 15) . "</td>";
                  echo "<td>" . limitText($row["text"], 15) . "</td>";

                  // Вывод изображений, если они есть
                  // for ($i = 1; $i <= 9; $i++) {
                  //    $img_field = "img" . $i;
                  if (!empty($row['img1'])) {
                     // Определение MIME-типа изображения
                     $finfo = new finfo(FILEINFO_MIME_TYPE);
                     $mimeType = $finfo->buffer($row['img1']);  // MIME-тип может быть image/jpeg, image/png и т.д.

                     // // Проверка: выводим MIME-тип изображения
                     // echo '<p>MIME-тип изображения: ' . $mimeType . '</p>';

                     // Конвертация бинарных данных изображения в Base64
                     $imgData = base64_encode($row['img1']);

                     // Вывод изображения
                     echo '<td><img class="table__img" src="data:' . $mimeType . ';base64,' . $imgData . '" alt="Image"/></td>';
                  } else {
                     echo '<p>Изображение отсутствует</p>';
                  }

                  // }
                  echo "<td>" . $row["link_post"] . "</td>";
                  echo "<td>" . $row["author"] . "</td>";
                  echo "<td>" . $row["date_public"] . "</td></tr>";
               }
            } else {
               echo "Нет записей.";
            }

            // Закрытие соединения с базой данных
            $conn->close();
            ?>
         </tbody>
      </table>
   </section>
</body>

</html>
