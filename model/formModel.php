<?php

function getAllFormsByMode(PDO $db, string $form, string $mode) : array|bool {
    switch ($mode) {
        case 'rw':
            $mode = 'snip_forms_rw';
            break;
        case 'bs':
            $mode = 'snip_forms_bs';
            break;
        case 'tw':
            $mode = 'snip_forms_tw';
            break;
    }
    $sql = "SELECT snip_forms_title AS title,
                   snip_forms_desc AS descp, 
                   :mode AS code 
            FROM snippets_forms 
            WHERE snip_forms_class = :form";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':form', $form);
    $stmt->bindParam(':mode', $mode);
        $stmt->execute();
        if ($stmt->rowCount() === 0) return false;
    return $stmt->fetchAll();
}

function getDetailsForRadioButtons(PDO $db) : array|bool {
    $sql = "SELECT DISTINCT snip_forms_class AS class
            FROM snippets_forms";
    $query = $db->query($sql);
    if ($query->rowCount() === 0) return false;
    $results = $query->fetchAll();
    $query->closeCursor();
    return $results;
}

function addNewForm (PDO $db,
                     string $class,
                     string $title,
                     string $desc,
                     string $rw,
                     string $rwCss,
                     string $bs,
                     string $tw,
                     string $js,
                     string $jsX,
                     string $php,
                     string $phpX) : bool
{
    $sql = "INSERT INTO `snippets_forms`
                        (`snip_forms_class`, 
                         `snip_forms_title`, 
                         `snip_forms_desc`, 
                         `snip_forms_rw`, 
                         `snip_forms_rw_css`, 
                         `snip_forms_bs`, 
                         `snip_forms_tw`, 
                         `snip_forms_js_main`, 
                         `snip_forms_js_extra`, 
                         `snip_forms_php_function`, 
                         `snip_forms_php_call`) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $class);
    $stmt->bindValue(2, $title);
    $stmt->bindValue(3, $desc);
    $stmt->bindValue(4, $rw);
    $stmt->bindValue(5, $rwCss);
    $stmt->bindValue(6, $bs);
    $stmt->bindValue(7, $tw);
    $stmt->bindValue(8, $js);
    $stmt->bindValue(9, $jsX);
    $stmt->bindValue(10, $php);
    $stmt->bindValue(11, $phpX);
    $stmt->execute();
    if ($stmt->rowCount() === 0) return false;
    return true;
}