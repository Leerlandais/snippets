<?php
if (isset($_GET["logout"])) require_once '../model/logoutModel.php';

if(isset($_GET["update"])) {
    switch ($_GET["update"]) {
        case 'addNew':
            echo "New Shit";
            break;
        case "addForm" :
            $buttonsForAddForm = getDetailsForRadioButtons($db);
            break;
    }
}

$title = "Private Page";
include "../view/privateView/private.home.view.php";

die();