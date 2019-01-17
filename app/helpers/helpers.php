<?php

// Renders view
function view($view = '', $data = [])
{
    global $twig;
    if (file_exists(APP_PATH. DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . "$view.view.php")) {
        echo $twig->render("$view.view.php", array_merge([], $data));
    } else {
        die("View $view does not exist");
    }
}

// Gets current url
function getUrl()
{
    if (isset($_GET['url'])) {
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        return $url;
    }
}

// Gets requested method
function request_method()
{
    return $_SERVER['REQUEST_METHOD'];
}

// Redirect func
function redirect($page)
{
    return header('location: ' . URLROOT . DIRECTORY_SEPARATOR . $page);
}
