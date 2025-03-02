<?php

/**
 * @throws Exception
 */
function controller($matchedUri, $params) {

    list ($controller, $action) = explode('@', array_values($matchedUri)[0]);
    $controllerWithNamespace = PATH_CONTROLLER . $controller;
    if(!class_exists($controllerWithNamespace)) {
        throw new Exception("$controller class does not exist");
    }

    $controllerInstance = new $controllerWithNamespace;
    if(!method_exists($controllerInstance, $action)) {
        throw new Exception("Action $action does not exist in $controller class");
    }

    $controller = $controllerInstance->$action($params);
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        die();
    }
    return $controller;
}