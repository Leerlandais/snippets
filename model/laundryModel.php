<?php

// Sanitisation standard que nous utilisons souvent
function standardClean ($cleanThis) : string | bool {
    $cleaned = htmlspecialchars(strip_tags(trim($cleanThis)));
    return $cleaned;
}

// Supprimer les espaces blancs avant et après l'entrée
function simpleTrim ($trimThis) : string | bool {
    $trimmed = trim($trimThis);
    return $trimmed;
}

// Assainisser des URL.
function urlClean ($cleanThisUrl) : string | bool {
    $cleanedUrl = filter_var($cleanThisUrl, FILTER_SANITIZE_URL);
    return $cleanedUrl;
}
// Sanitisation des integer
function intClean ($cleanThisInt) : int | bool {
    $cleanedInt = filter_var($cleanThisInt, FILTER_SANITIZE_NUMBER_INT,         // applique de sanitisation
        FILTER_FLAG_ALLOW_FRACTION         // permettre l'usage des . comme dans 1.25
    );
    $cleanedInt = intval($cleanedInt);                                          // Convertit le résultat en entier - Supprimez cette ligne si ce n'est pas nécessaire
    return $cleanedInt;
}

function floatClean ($cleanThisFloat) : float | bool {                          // Presque la même chose que la fonction précédente.
    $cleanedFloat = filter_var($cleanThisFloat, FILTER_SANITIZE_NUMBER_FLOAT,
        FILTER_FLAG_ALLOW_FRACTION,
    );
    $cleanedFloat = floatval($cleanedFloat);
    return $cleanedFloat;
}

// Sanitisation des emails
function emailClean ($cleanThisEmail) : string | bool {
    $cleanedEmail = filter_var($cleanThisEmail, FILTER_SANITIZE_EMAIL);
    return $cleanedEmail;
}

// Verifie existance de balises dangereux
function findTheNeedles ($hay) : bool | int {
    $needles = ["<script>",
        "<iframe>",
        "<object>",
        "<embed>",
        "<form>",
        "<input>",
        "<textarea>",
        "<select>",
        "<button>",
        "<link>",
        "<meta>",
        "<style>",
        "<svg>",
        "<base>",
        "script",
        "click",
        "click",
        "onclick",
        "onload",
        'onerror',
        'src'];

    foreach ($needles as $needle) {
        if(str_contains($hay, $needle)) {
            return true;
        }
    }
    return false;

}

