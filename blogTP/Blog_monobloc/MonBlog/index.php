<?php
require_once 'model/model.php';
require_once 'view/view.php';
require_once 'controller/controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);

if (isset($_GET['billet'])) {
    $controller->displayBillet($_GET['billet']);
} else {
    $controller->displayBlog();
}
?>
