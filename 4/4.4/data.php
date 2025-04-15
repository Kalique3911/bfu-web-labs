<?php
session_start();
if (!isset($_SESSION['firstname'])) {
    header('Location: form.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Данные пользователя</title>
</head>
<body>
    <p>Фамилия: <?= $_SESSION['lastname'] ?></p>
    <p>Имя: <?= $_SESSION['firstname'] ?></p>
    <p>Возраст: <?= $_SESSION['age'] ?></p>
</body>
</html>