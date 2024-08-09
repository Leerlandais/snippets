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