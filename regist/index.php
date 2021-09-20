<?php
//app.php 読み込み
require_once '../app.php';
//RegistControllre.php の読み込み
require_once 'app/controllers/RegistController.php';

$controller = new RegistController();
$controller->index();
