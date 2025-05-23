<?php
session_start();
if ($_POST) {
    $_SESSION['movie'] = $_POST;
    header('Location: result.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<form method="post">
    Название: <input name="title"><br>
    Жанр: <input name="genre"><br>
    Рейтинг: <input name="rating" type="number"><br>
    <button>Сохранить</button>
</form>
</html>