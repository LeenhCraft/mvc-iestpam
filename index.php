<?php
require_once 'config/Config.php';
require_once 'core/App.php';
require_once 'core/Controller.php';

function dep($msg, $exit = 0)
{
    echo "<pre>";
    print_r($msg);
    echo "</pre>";
    if ($exit) {
        exit;
    }
}

$app = new App(); // instancia de la clase App
