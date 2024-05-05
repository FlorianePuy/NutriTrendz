<?php

//Géré par l'hebergeur une fois déployé
session_set_cookie_params([
    'lifetime' => 3600,
    'path' =>'/',
    'domain' => DOMAIN,
    'httponly' => true
]);
session_start();