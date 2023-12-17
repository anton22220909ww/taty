<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    // Здесь вы можете добавить код для сохранения данных в базу данных или отправки по электронной почте

    // Пример сохранения данных в текстовый файл
    $data = "Имя: $name\nТелефон: $phone\nЭлектронная почта: $email\n\n";
    file_put_contents("logs/appointments.txt", $data, FILE_APPEND);

    // Отправляем ответ клиенту
    echo json_encode(array('success' => true, 'message' => 'Запись на прием прошла успешно'));
} else {
    // Если запрос не является POST-запросом, перенаправляем пользователя на главную страницу
    header("Location: index.html");
    exit();
}
?>
