<?php

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include "../view/allCdn.php"; ?>
    <title><?=$title?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<nav class="bg-blue-500 p-4 flex items-center justify-between">
    <div>
        <h1 class="text-white text-xl font-semibold">Hi There</h1>
    </div>
    <div class="flex items-center space-x-4">
        <a href="?login"><span class="text-white">Login</span></a>
        <i class="fas fa-user-circle text-white text-2xl"></i>
    </div>
</nav>
<div class="flex">
    <aside class="bg-gray-800 text-white w-64 min-h-screen p-4">
        <nav>
            <ul class="space-y-2">
                <li class="option-with-dropdown">
                    <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                        <div class="flex items-center">
                            <i class="fas fa-file-alt mr-2"></i>
                            <span>Documentation</span>
                        </div>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </div>
                    <ul class="dropdown ml-4 hidden">
                        <li>
                            <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Pending Signatures
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Documents
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Add more links for the side navigation -->
            </ul>
        </nav>
    </aside>
    <main class="flex-1 p-6">
<?php if(isset($_GET["login"])) include "inc/loginForm.php"; ?>
    </main>
</div>
<?php
if (isset($systemMessage)) {
    ?>
    <h2 class="text-4xl text-red-700"><?=$systemMessage?></h2>
    <?php
}
?>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get all main options with dropdowns
        const optionsWithDropdown = document.querySelectorAll(".option-with-dropdown");

        // Add click event to each main option
        optionsWithDropdown.forEach(function (option) {
            option.addEventListener("click", function () {
                // Get the dropdown associated with the option
                const dropdown = option.querySelector(".dropdown");

                // Toggle the "hidden" class to show or hide the dropdown
                dropdown.classList.toggle("hidden");
            });
        });
    });

</script>
</body>
</html>
