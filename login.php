<?php
header('Content-Type: application/json');

// Пример: Ваши учетные данные (в реальном приложении используйте базу данных)
$valid_username = 'user123';
$valid_password = 'password123';

// Получение данных из POST-запроса
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Простая проверка логина и пароля
if ($username === $valid_username && $password === $valid_password) {
    // Ваши данные об успешной аутентификации
    $response = array('success' => true, 'message' => 'Авторизация прошла успешно');
} else {
    // Ваши данные об ошибке аутентификации
    $response = array('success' => false, 'message' => 'Неверные учетные данные');
}

// Отправка ответа в формате JSON
echo json_encode($response);
?>
