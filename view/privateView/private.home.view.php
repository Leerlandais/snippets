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
<div class="container-fluid bg-green-300 h-screen text-center">
<h1>Private Good</h1>
<a href="?logout">Logout</a>

</div>
</body>
</html>