<?php
if (isset($_GET["logout"])) require_once '../model/logoutModel.php';

if(isset($_GET["update"])) {
    switch ($_GET["update"]) {
        case 'addNew':
            echo "New Shit";
            break;
        case 'addForm' :
            $addForm = getDetailsForRadioButtons($db);
            break;
    }
}

// ADD NEW FORM

if(isset($_POST["addFormClass"],
         $_POST["addFormTitle"],
         $_POST["addFormDesc"],
         $_POST["addFormRw"],
         $_POST["addFormRwCss"],
         $_POST["addFormBs"],
         $_POST["addFormTw"],
         $_POST["addFormJs"],
         $_POST["addFormJsX"],
         $_POST["addFormPhp"],
         $_POST["addFormPhpX"]
        )) {
    $class = standardClean($_POST["addFormClass"]);
    $title = standardClean($_POST["addFormTitle"]);
    $desc = standardClean($_POST["addFormDesc"]);
    $rw = simpleTrim($_POST["addFormRw"]);
    $rwCss = simpleTrim($_POST["addFormRwCss"]);
    $bs = simpleTrim($_POST["addFormBs"]);
    $tw = simpleTrim($_POST["addFormTw"]);
    $js = simpleTrim($_POST["addFormJs"]);
    $jsX = simpleTrim($_POST["addFormJsX"]);
    $php = simpleTrim($_POST["addFormPhp"]);
    $phpX = simpleTrim($_POST["addFormPhpX"]);

    $add = addNewForm($db, $class, $title, $desc, $rw, $rwCss, $bs, $tw, $js, $jsX, $php, $phpX);
}


$title = "Private Page";
include "../view/privateView/private.home.view.php";

die();