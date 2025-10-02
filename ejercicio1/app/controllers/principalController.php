<?php
namespace app\controllers;

class PrincipalController{
    public function inicio() {
        
        return $this->view("calculo", ["titulo"=>"inicio de la app"]);
    }

    public function mostrar() {
        if($_POST){
            $nombre = $_POST['nombre'];
            $correo = $_POST["correo"];
            $dui = $_POST["dui"];

            $p = (float)$_POST["capital"];
            $i = (float)$_POST["interes"];
            $n = (float)$_POST["numero_cuotas"];
            

            $Cuota = $p*($i*(1+$i)^$n)/((1+$i)^$n-1);


            $rgxCorro = "#^[a-zA-Z0-9_.%+-]+@[a-zA-Z-.]+.[a-zA-Z]{2}$#";
            $rgxDUI = "#^[0-9]{8}-[0-9]{1}$#";

            if(!preg_match($rgxCorro, $correo)){
                 return $this->view("calculo", ["titulo"=>"inicio de la app", "error"=>"correo no cumple el formato correcto"]);
            }

            if(!preg_match($rgxDUI, $dui)){
                 return $this->view("calculo", ["titulo"=>"inicio de la app", "error"=>"dui no comple el formato de ########-#"]);
            }

            
            
            return $this->view("viewPersona", ["nombre"=>$nombre,
            "correo"=>$correo,
            "dui"=>$dui,
            "capital"=>$p,
            "interes"=>$i,
            "numero_cuotas"=>$n,
            "cuota"=>$Cuota]);
        }
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