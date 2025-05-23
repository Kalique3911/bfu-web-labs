<?php
session_start();
$movie = $_SESSION['movie'] ?? null;
if (!$movie) {
    header('Location: form.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<h1>Данные о фильме:</h1>
<p>Название: <?= $movie['title'] ?></p>
<p>Жанр: <?= $movie['genre'] ?></p>
<p>Рейтинг: <?= $movie['rating'] ?></p>
</html>