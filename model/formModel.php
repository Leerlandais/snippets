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

function addNewForm(PDO $db, string $class, string $title, string $desc, string $imgLoc, string $code, string $mode) : bool {
    // set mode and image type
    switch ($mode) {
        case 'rw':
            $codeType = "snip_code_rw";
            $imgType = "snip_image_rw";
            break;
        case 'bs':
            $codeType = "snip_code_bs";
            $imgType = "snip_image_bs";
            break;
        case 'tw':
            $codeType = "snip_code_tw";
            $imgType = "snip_image_tw";
            break;
    }

    try {
        // as I'm using multiple sql requests, I've wrapped it in a transaction to allow rollbacks if needed
        $db->beginTransaction();

    // first insert the new forms basic information
    $sql = "INSERT INTO snippets_forms_general
                        (`snip_forms_class`, `snip_forms_title`, `snip_forms_desc`)
            VALUES (:class, :title, :desc)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':class', $class);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':desc', $desc);
    $stmt->execute();

    // then recover the id of the new form
    $sqlId = "SELECT snip_forms_id 
              FROM snippets_forms_general
              ORDER BY snip_forms_id DESC 
              LIMIT 1";
    $stmtId = $db->query($sqlId);
    $result = $stmtId->fetch();
    $stmtId->closeCursor();

    $newId = $result["snip_forms_id"];

    // add the image
    $sqlImg = "INSERT INTO snippets_forms_images ($imgType) VALUES (?)";
    $stmtImg = $db->prepare($sqlImg);
    $stmtImg->bindParam(1, $imgLoc);
    $stmtImg->execute();

    // and recover the id of the new image
    $sqlImgId = "SELECT snip_image_id
                 FROM snippets_forms_images
                 ORDER BY snip_image_id DESC
                 LIMIT 1";
    $stmtImgId = $db->query($sqlImgId);
    $result = $stmtImgId->fetch();
    $stmtImgId->closeCursor();
    $newImgId = $result["snip_image_id"];

    // add ids of new form and image to the relation table
    $sql = "INSERT INTO snippets_form_has_image
            (snip_form_id, snip_image_id) 
            VALUES (?,?)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $newId);
    $stmt->bindParam(2, $newImgId);
    $stmt->execute();

    // insert the code
    $sql = "INSERT INTO snippets_forms_code
                        ($codeType)
            VALUES (:code)";
    $stmtCode = $db->prepare($sql);
    $stmtCode->bindParam(':code', $code);
    $stmtCode->execute();

    // and get the new Code Id
    $sqlCodeId = "SELECT snip_code_id
                 FROM snippets_forms_code
                 ORDER BY snip_code_id DESC
                 LIMIT 1";
    $stmtCodeId = $db->query($sqlCodeId);
    $result = $stmtCodeId->fetch();
    $stmtCodeId->closeCursor();
    $newCodeId = $result["snip_code_id"];

    // add the form Id and Code Id to the relation table
    $sql = "INSERT INTO snippets_form_has_code
            (snip_form_id, snip_code_id)
            VALUES (?,?)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $newId);
    $stmt->bindParam(2, $newCodeId);
    $stmt->execute();

    return true;

    $db->commit();

    }catch(Exception $e) {
        $db->rollBack();
        return false;
    }


}
