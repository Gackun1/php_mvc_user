<?php
require_once 'app.php';
require_once 'app/controllers/TopPageController.php';

$controller = new TopPageController();
$controller->index();