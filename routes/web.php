<?php 
use lib\Routes;
use app\controllers\PrincipalController;

Routes::get("/", [PrincipalController::class,"inicio"]);

Routes::dispatch();
?>