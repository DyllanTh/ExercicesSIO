<?php
class View {
    public function displayBlog($billets) {
        include 'header.php';

        foreach ($billets as $billet) {
            include 'billet_template.php';
        }
    }

    public function displayBillet($billet, $comments) {
        include 'header.php';
        include 'billet_detail.php';
    }
}
?>
