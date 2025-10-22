<?php
require_once('fortune.php');
$var = htmlspecialchars($_GET['var'], ENT_QUOTES);
$kuji = Fortune($var);
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'おみくじ'</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1><a href="index2.php">今日のおみくじ</a></h1>
    <p>結果は・・・</p>
    <p><?php echo $kuji ?></p>
</body>
</html>