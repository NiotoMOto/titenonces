<?php

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__DIR__)) . DS);
define("TEMPLATEDIR", ROOT . "templates" . DS);
define("ROUTEDIR", ROOT . "src" . DS . "routes" . DS);


require_once ROOT . 'vendor' . DS . 'autoload.php';

require_once ROOT . 'config' . DS . 'database.php';
require_once ROOT . 'src' . DS . 'bootstrap.php';

require_once ROOT . 'src' . DS . 'models' . DS . 'models.php';
require_once ROOT . 'src' . DS . 'services' . DS . 'services.php';
require_once ROOT . 'src' . DS . 'controllers' . DS . 'controllers.php';

foreach(glob(ROUTEDIR . '*.php') as $router) {
    require_once $router;
}

$app->run();
