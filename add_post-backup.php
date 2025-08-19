<?php
// Настройки подключения к базе данных
$host = 'localhost';
$username = 'mysql';
$password = 'mysql';
$dbname = 'chess_post';

// Подключение к базе данных
$mysqli = new mysqli($host, $username, $password, $dbname);

// Проверка подключения
if ($mysqli->connect_error) {
   die('Ошибка подключения (' . $mysqli->connect_errno . '): ' . $mysqli->connect_error);
}

$name_post = $mysqli->real_escape_string($_POST['name_post']);
$description = $mysqli->real_escape_string($_POST['description']);
$text = $mysqli->real_escape_string($_POST['text']);
$img1 = $mysqli->real_escape_string($_POST['img1']);
$img2 = $mysqli->real_escape_string($_POST['img2']);
$img3 = $mysqli->real_escape_string($_POST['img3']);
$img4 = $mysqli->real_escape_string($_POST['img4']);
$img5 = $mysqli->real_escape_string($_POST['img5']);
$img6 = $mysqli->real_escape_string($_POST['img6']);
$img7 = $mysqli->real_escape_string($_POST['img7']);
$img8 = $mysqli->real_escape_string($_POST['img8']);
$img9 = $mysqli->real_escape_string($_POST['img9']);
$link_post = $mysqli->real_escape_string($_POST['link_post']);
$author = $mysqli->real_escape_string($_POST['author']);
$date_public = $mysqli->real_escape_string($_POST['date_public']);

$date_public = !empty($_POST['date_public']) ? $mysqli->real_escape_string($_POST['date_public']) : date('Y-m-d');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Проверка загрузки файла
   if (isset($_FILES['img1']) && $_FILES['img1']['error'] === UPLOAD_ERR_OK) {
       $fileTmpPath = $_FILES['img1']['tmp_name'];
       $fileName = $_FILES['img1']['name'];
       $filePath = 'images/' . $fileName;

       // Перемещение файла в целевую папку
       move_uploaded_file($fileTmpPath, $filePath);
   }
   return $filePath;
}



// Ваш SQL-запрос
$sql = "INSERT INTO `chess_post` (`name_post`, `description`, `text`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `link_post`, `author`, `date_public`, `img_path`) 
            VALUES ('$name_post', '$description', '$text', '$img1', '$img2', '$img3', '$img4', '$img5', '$img6', '$img7', '$img8', '$img9', '$link_post', '$author', '$date_public', '$filePath')";

// Выполнение запроса
if (mysqli_query($mysqli, $sql)) {
   echo "Запись успешно добавлена!";
} else {
   echo "Произошла ошибка: " . mysqli_error($mysqli);
}

// Закрытие соединения
$mysqli->close();
