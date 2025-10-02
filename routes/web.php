<?php 
use lib\Routes;
use app\controllers\PrincipalController;

Routes::get("/", [PrincipalController::class,"inicio"]);

Routes::post("/persona", [PrincipalController::class,"mostrar"]);

Routes::dispatch();
?>