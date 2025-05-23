<?php
if ($_POST) {
    preg_match_all('/\b\w+-\w+\b/', $_POST['text'], $matches);
    $count = count($matches[0]);
}
?>
<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <textarea name="text"></textarea>
        <button>Count</button>
    </form>
    <?php if ($_POST): ?>
        <p>Found: <?= $count ?></p>
    <?php endif ?>
</body>
</html>