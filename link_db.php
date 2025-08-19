<?php
// Настройки подключения к базе данных
$host = 'localhost';
$dbname = 'chess_post';
$username = 'mysql';
$password = 'mysql';

// Попытка подключения к базе данных
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Ошибка подключения: ' . $e->getMessage();
    exit();
}
?>
