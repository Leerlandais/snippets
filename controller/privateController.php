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
        case 'addForm' :
            $addForm = getDetailsForRadioButtons($db);
            break;
    }
}
// ADD NEW FORM
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

// ADD NEW PHP FUNCTION
if(isset($_POST["addCodePhpFunc"], $_POST["addCodePhpCall"])) {
    $code = simpleTrim($_POST["addCodePhpFunc"]);
    $call = simpleTrim($_POST["addCodePhpCall"]);
    $target = intClean($_POST["addCodePhpTarget"]);

    $addCodePhp = addPhpFunctionCode($db, $code, $call, $target);
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
         $_POST["addFormPhpX"],
         $_POST["addFormImgRw"],
         $_POST["addFormImgBs"],
         $_POST["addFormImgTw"]
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
    $imgRw = standardClean($_POST["addFormImgRw"]);
    $imgBs = standardClean($_POST["addFormImgBs"]);
    $imgTw = standardClean($_POST["addFormImgTw"]);

    $add = addNewForm($db, $class, $title, $desc, $rw, $rwCss, $bs, $tw, $js, $jsX, $php, $phpX, $imgRw, $imgBs, $imgTw);
}


$title = "Private Page";
include "../view/privateView/private.home.view.php";

die();