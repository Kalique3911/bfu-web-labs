<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'] ?? '';
    $wordCount = str_word_count($text);
    $charCount = strlen($text);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Word and Character Counter</title>
</head>
<body>
    <form method="post">
        <textarea name="text"></textarea>
        <button type="submit">Count</button>
    </form>
    <?php if (isset($wordCount)): ?>
    <p>Words: <?= $wordCount ?></p>
    <p>Characters: <?= $charCount ?></p>
    <?php endif; ?>
</body>
</html>