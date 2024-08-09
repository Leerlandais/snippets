<?php

// LOGIN CONTROL
if (isset($_POST["userLoginName"],
          $_POST["userLoginPwd"])) {
    $name = standardClean($_POST["userLoginName"]);
    $pwd = $_POST["userLoginPwd"];
    $attemptLogin = attemptUserLogin($db,$name, $pwd);

    if (!$attemptLogin) {
        $_SESSION["systemMessage"] = "login failed";
    }else {
        $_SESSION["systemMessage"] = "login success";
    }
    header("Location: ./");
}


// SELECTION CONTROLLER
if(isset($_GET["select"])) {
    switch ($_GET["select"]) {
        case "login":
            $form = standardClean($_GET["select"]);
            $mode = standardClean($_GET["mode"]);
            $getForms = getAllFormsByMode($db, $form, $mode);
            // echo "login ".$form.$mode;
            break;
        case "create":
            $form = standardClean($_GET["select"]);
            $mode = standardClean($_GET["mode"]);
            $getForms = getAllFormsByMode($db, $form, $mode);
            // echo "create ".$form.$mode;
            break;
        case "reset":
            $form = standardClean($_GET["select"]);
            $mode = standardClean($_GET["mode"]);
            $getForms = getAllFormsByMode($db, $form, $mode);
            // echo "reset ".$form.$mode;
            break;

    }
    if (isset($getForms)) {
        if (is_array($getForms)) {
            var_dump($getForms);
        } else {
            $systemMessage = "form not found";
        }
    }
}

$title = "Public Page";
include "../view/publicView/public.home.view.php";

die();