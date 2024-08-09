<?php

session_start();

// CHECK SESSION ACTIVITY OR LOGOUT AUTOMATICALLY
if (isset($_SESSION["activity"]) && time() - $_SESSION["activity"] > 180) { // currently set for 3 mins
    session_unset(); // for good practice, clear the session variables as destroy doesn't remove browser cookies etc
    session_destroy();
    header("location: ./");
    exit();
}
$_SESSION["activity"] = time(); // change time of last activity

// CHECK FOR SYSTEM MESSAGES
if(isset($_SESSION["systemMessage"])) {
    $systemMessage = $_SESSION["systemMessage"];
    unset($_SESSION["systemMessage"]);
}


// LOAD REQUIRED DEPENDENCIES
require_once("../config.php");
require_once("../controller/dbConnection.php");
require_once("../model/laundryModel.php");
require_once("../model/connectionModel.php");

// DEV MODE CONNECTION TEST
// if (isset($db)) echo "DB connection was established<br>";

if (isset($_SESSION["id"]) && $_SESSION["id"] === session_id() && $_SESSION["snip_user_permissions"] > 0) {
    require_once("../controller/privateController.php");
}else {
    require_once("../controller/publicController.php");
}

$db = null;