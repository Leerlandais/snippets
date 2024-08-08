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