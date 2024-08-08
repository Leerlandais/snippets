<?php
// One of Mika's excellent snippets. Completely removes the session (and therefore the user) and can be applied to any project as it uses the default values used by PHP
$_SESSION = []; // equivalent of session_unset()

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();
  
header("Location: ./");
exit();
?>