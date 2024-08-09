<?php

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include "../view/allCdn.php"; ?>
    <title><?=$title?></title>
</head>
<body>
<?php
if (isset($systemMessage)) {
?>
<h2 class="text-4xl text-red-700"><?=$systemMessage?></h2>
<?php
}
?>
<h1>Pub Good</h1>
<a href="?login">Login</a>
<?php
if (isset($_GET["login"])) include 'inc/loginForm.php';
?>
</body>
</html>
