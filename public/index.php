<?php

use app\core\Method;
use app\core\Controller;
use app\core\Parameters;

require '../bootstrap.php';


try {

    $controller = new Controller;
    $controller = $controller->load();

    $method = new Method;
    $method = $method->load($controller);

    $parameters = new Parameters;
    $parameters = $parameters->load();

    $controller->$method($parameters);
} catch (Exception $e) {

    dd($e->getMessage());
}
