<?php
class TopPageController {
    public function index () {
        $template = 'app/views/toppage/index.view.php';
        include 'app/views/layouts/app.view.php';
    }
}