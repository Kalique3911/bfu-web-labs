<?php
$db = new mysqli('db', 'root', 'helloworld', 'web');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$db->query("
    CREATE TABLE IF NOT EXISTS ad (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL,
        title VARCHAR(255) NOT NULL,
        description TEXT NOT NULL,
        category VARCHAR(255) NOT NULL,
        created DATETIME NOT NULL DEFAULT NOW()
    )
");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $db->prepare("INSERT INTO ad (email, title, description, category) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $_POST['email'], $_POST['title'], $_POST['description'], $_POST['category']);
    $stmt->execute();
}

$ads = $db->query("SELECT * FROM ad ORDER BY created DESC")->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Объявления</title>
</head>
<body>
    <h1>Добавить объявление</h1>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="title" placeholder="Заголовок" required><br>
        <textarea name="description" placeholder="Описание" required></textarea><br>
        <input type="text" name="category" placeholder="Категория" required><br>
        <button type="submit">Добавить</button>
    </form>

    <h2>Список объявлений</h2>
    <?php foreach ($ads as $ad): ?>
        <div>
            <h3><?= htmlspecialchars($ad['title']) ?></h3>
            <p><?= htmlspecialchars($ad['description']) ?></p>
            <small>Категория: <?= htmlspecialchars($ad['category']) ?>, Email: <?= htmlspecialchars($ad['email']) ?></small>
            <hr>
        </div>
    <?php endforeach; ?>
</body>
</html>