<?php
$_SESSION["systemMessage"] = "public page";


// LOGIN CONTROL
if (isset($_POST["userLoginName"],
          $_POST["userLoginPwd"])) {
    $name = standardClean($_POST["userLoginName"]);
    $pwd = $_POST["userLoginPwd"];
    $attemptLogin = attemptUserLogin($db,$name, $pwd);

    if (!$attemptLogin) {
        $_SESSION["systemMessage"] = "login failed";
    }
    header("Location: ./");
}


$title = "Public Page";
include "../view/publicView/public.home.view.php";

die();