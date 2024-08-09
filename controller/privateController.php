<?php
if (isset($_GET["logout"])) require_once '../model/logoutModel.php';


echo '<a href="?logout">Logout</a>';