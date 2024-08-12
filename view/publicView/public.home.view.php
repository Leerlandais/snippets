<?php
// $systemMessage = "This is a test to make sure that system messages display correctly";
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <?php include "inc/publicHeader.php"; ?>
<div class="flex">
    <?php include "inc/publicSideBar.php"; ?>


        <main class="flex-1 p-6">
            <?php if (isset($systemMessage)) echo '<h2 class="text-4xl text-red-700 text-center">'.$systemMessage.'</h2>'; ?>
            <?php if(isset($_GET["login"])) include "inc/loginForm.php"; ?>
            <?php if(isset($getForms) && is_array($getForms)) include "inc/publicShowForms.php" ?>
        </main>
</div>



<script src="scripts/sideBarScript.js">

</script>

</body>
</html>
