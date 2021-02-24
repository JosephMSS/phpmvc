<?php
require_once 'autoload.php';
require_once 'config/parameters.php';
function showError()
{
    $error = new ErrorController();
    $error->index();
}

if (isset($_GET['controller'])) {
    $nameController = $_GET['controller'] . 'Controller';
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $nameController = CONTROLLER_DEFAULT;
} else {
    showError();
    exit();
}

if (class_exists($nameController)) {
    $controller = new $nameController();
    // var_dump($_GET['action']);
    if (!isset($_GET['controller']) && !isset($_GET['action'])) {
        $default = ACTION_DEFAULT;
        $controller->$default();
    } elseif ($_GET['action'] && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];
        $controller->$action();
    } else {
        showError();
    }
} else {
    showError();
}
