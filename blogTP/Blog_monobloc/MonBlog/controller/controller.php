<?php
require_once __DIR__ . '/../model/model.php';
require_once __DIR__ . '/../view/view.php';

class Controller {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function displayBlog() {
        $billets = $this->model->getAllBillets();
        $this->view->displayBlog($billets);
    }

    public function displayBillet($billetId) {
        $billet = $this->model->getBilletById($billetId);
        $comments = $this->model->getCommentsByBilletId($billetId);
        $this->view->displayBillet($billet, $comments);
    }
}
?>
