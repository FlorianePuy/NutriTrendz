<?php

//fonction provenant de Symfony pour assainir un nom de fichier

function slugify($text, string $divider = '-')
{
    // remplace ce qui n'est pas un nombre ou une lettre par $divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    //conversion de caractères d'un système d'écriture vers un autre système d'écriture
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // supprime ce qui n'est pas un chiffre, une lettre ou -
    $text = preg_replace('~[^-\w]+~', '', $text);

    // supprime les caractère invisibles
    $text = trim($text, $divider);

    // retire les $divider dupliqué
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}