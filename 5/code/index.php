<?php
if (!file_exists('ads')) {
    mkdir('ads');
    mkdir('ads/Бытовая техника');
    mkdir('ads/Посуда');
    mkdir('ads/Интерьер');
}

if (isset($_POST['add'])) {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $filename = "ads/$category/" . str_replace(' ', '_', $title) . '.txt';
    file_put_contents($filename, "Email: $email\nТекст: $text");
}

$ads = [];
$categories = ['Бытовая техника', 'Посуда', 'Интерьер'];
foreach ($categories as $cat) {
    $files = glob("ads/$cat/*.txt");
    foreach ($files as $file) {
        $content = file_get_contents($file);
        $lines = explode("\n", $content);
        $ads[] = [
            'category' => $cat,
            'title' => basename($file, '.txt'),
            'email' => str_replace('Email: ', '', $lines[0]),
            'text' => str_replace('Текст: ', '', $lines[1])
        ];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Доска объявлений</title>
</head>
<body>
    <h1>Доска объявлений</h1>
    
    <form method="post">
        Email: <input type="text" name="email"><br>
        Категория: 
        <select name="category">
            <option value="Бытовая техника">Бытовая техника</option>
            <option value="Посуда">Посуда</option>
            <option value="Интерьер">Интерьер</option>
        </select><br>
        Заголовок: <input type="text" name="title"><br>
        Текст: <textarea name="text"></textarea><br>
        <input type="submit" name="add" value="Добавить">
    </form>
    
    <h2>Объявления</h2>
    <table>
        <tr>
            <th>Категория</th>
            <th>Заголовок</th>
            <th>Email</th>
            <th>Текст</th>
        </tr>
        <?php foreach ($ads as $ad): ?>
        <tr>
            <td><?= $ad['category'] ?></td>
            <td><?= $ad['title'] ?></td>
            <td><?= $ad['email'] ?></td>
            <td><?= $ad['text'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>