<?php


function attemptUserLogin(PDO $db, string $name, string $pwd) : bool {

   $sql = 'SELECT * FROM `snippets_users` WHERE `snip_user_login` = :name';
   $stmt = $db->prepare($sql);
   $stmt->bindParam(':name', $name);
   $stmt->execute();
   if ($stmt->rowCount() === 0) return false;
   $user = $stmt->fetch();
   if (!password_verify($pwd, $user['snip_user_pass'])) return false;
   $_SESSION = $user;
   unset($_SESSION["snip_user_pass"]);
   $_SESSION["id"] = session_id();
   return true;
}