<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Формируем тело письма
    $to = "dmitshar@mail.ru";
    $subject = "Новое сообщение с шахматного сайта";
    $body = "Имя: $name\nEmail: $email\nТелефон: $phone\nСообщение:\n$message";

    // Заголовки письма
    $headers = "From: $email";

    // Отправка письма
    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение отправлено.";
    } else {
        echo "Ошибка отправки сообщения.";
    }
}
?>
