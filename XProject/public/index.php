<?php
 require_once('../app/config/config.php');

// require_once APP_ROOT.'/app/services/PatientService.php';



require_once APP_ROOT.'/app/controller/HomeController.php';
$homeController = new HomeController();
$homeController->index();

