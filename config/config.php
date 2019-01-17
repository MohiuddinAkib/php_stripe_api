<?php

// Connects asset files
function asset($path = '')
{
    echo 'public' . DIRECTORY_SEPARATOR . $path;
}

// Gets partials
function get_partials($partial)
{
    require_once APP_PATH . DIRECTORY_SEPARATOR . "views/inc/{$partial}.view.php";
}
