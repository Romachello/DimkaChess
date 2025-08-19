<?php
// Настройки подключения к базе данных
$host = 'localhost';
$username = 'mysql';
$password = 'mysql';
$dbname = 'chess_post';

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . '): ' . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name_post = $mysqli->real_escape_string($_POST['name_post']);
    $description = $mysqli->real_escape_string($_POST['description']);
    $text = $mysqli->real_escape_string($_POST['text']);
    $author = $mysqli->real_escape_string($_POST['author']);
    $link_post = $mysqli->real_escape_string($_POST['link_post']);
    $date_public = !empty($_POST['date_public']) ? $mysqli->real_escape_string($_POST['date_public']) : date('Y-m-d');

    $img1 = null;
    if (isset($_FILES['img1']) && $_FILES['img1']['error'] === UPLOAD_ERR_OK) {
        $img1 = 'uploads/' . basename($_FILES['img1']['name']);
        move_uploaded_file($_FILES['img1']['tmp_name'], $img1);
    }

    $filename = 'articles/' . preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($name_post)) . '.php';
    $page_content = "<?php\n";
    $page_content .= "<html><head><title>$name_post</title>";
    $page_content .= "<style>body{font-family:Arial, sans-serif;max-width:800px;margin:auto;padding:20px;}h1{color:#333;}img{max-width:100%;height:auto;}p{line-height:1.6;}</style>";
    $page_content .= "</head><body>";
    $page_content .= "<h1>$name_post</h1>";
    if ($img1) {
        $page_content .= "<img src='../$img1' alt='$name_post'>";
    }
    $page_content .= "<p>$description</p>";
    $page_content .= "<p><a href='$link_post'>Читать далее</a></p>";
    $page_content .= "</body></html>";
    if (empty($name_post)) {
      die("Ошибка: заголовок статьи не может быть пустым.");
  }
    file_put_contents($filename, $page_content);
    
    $sql = "INSERT INTO chess_post (name_post, description, text, img1, link_post, author, date_public, post_path) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ssssssss', $name_post, $description, $text, $img1, $link_post, $author, $date_public, $filename);
    
    if ($stmt->execute()) {
        echo "Статья успешно добавлена! <a href='$filename'>Просмотреть статью</a>";
    } else {
        echo "Ошибка при добавлении записи: " . $stmt->error;
    }

    $stmt->close();
}
