<?php
namespace app\controllers;

class PrincipalController{
    public function inicio() {
        
        return $this->view("calculo", ["titulo"=>"inicio de la app"]);
    }

    public function view($vista, $datos = [])  {
        extract($datos);
        if(file_exists("../app/views/$vista.php")){
            ob_start();
            include("../app/views/$vista.php");
            return ob_get_clean();
        }
        echo "La vista no existe";
    }
}

?>