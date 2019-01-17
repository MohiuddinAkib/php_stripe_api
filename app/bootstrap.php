<?php

// Load our autoloader
require_once ROOT_PATH . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

// Specify our Twig templates location
$loader = new Twig_Loader_Filesystem(APP_PATH . DIRECTORY_SEPARATOR . 'views');

 // Instantiate our Twig
$twig = new Twig_Environment($loader);
$twig->addFunction(new Twig_Function('asset', function ($path) {
    echo 'public' . DIRECTORY_SEPARATOR . $path;
}));
$twig->addFilter(new Twig_Filter('to_float', function ($string) {
    echo sprintf('%.2f', $string / 100);
}));
$twig->addGlobal('URLROOT', URLROOT);
