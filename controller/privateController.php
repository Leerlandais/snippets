<?php
if (isset($_GET["logout"])) require_once '../model/logoutModel.php';



$title = "Private Page";
include "../view/privateView/private.home.view.php";

die();