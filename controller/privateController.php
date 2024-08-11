<?php
if (isset($_GET["logout"])) require_once '../model/logoutModel.php';

if(isset($_GET["update"])) {
    switch ($_GET["update"]) {
        case 'addNewCode':
            $existingForms = getAllFormsForCode($db);
            break;
        case "addForm" :
            $buttonsForAddForm = getDetailsForRadioButtons($db);
            break;
    }
}

if (isset(
        $_POST["addFormClass"],
        $_POST["addFormTitle"],
        $_POST["addFormDesc"],
        $_POST["addFormImage"],
        $_POST["addFormCode"],
        $_POST["addFormMode"]
        )
    ) {
    $class = standardClean($_POST["addFormClass"]);
    $title = standardClean($_POST["addFormTitle"]);
    $desc = standardClean($_POST["addFormDesc"]);
    $image = standardClean($_POST["addFormImage"]);
    $code = simpleTrim($_POST["addFormCode"]);
    $mode = standardClean($_POST["addFormMode"]);

    $addNewForm = addNewForm($db, $class, $title, $desc, $image, $code, $mode);
}

$title = "Private Page";
include "../view/privateView/private.home.view.php";

die();