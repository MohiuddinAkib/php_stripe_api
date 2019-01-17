<?php

// Config files
// Path config
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config/util.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config/config.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config/db.php';

require_once APP_PATH . DIRECTORY_SEPARATOR . 'bootstrap.php';

require_once APP_PATH . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'helpers.php';

// Routes
require_once __DIR__ . DIRECTORY_SEPARATOR . 'routes.php';
