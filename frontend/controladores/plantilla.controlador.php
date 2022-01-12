<?php

class ControladorPlantilla{

public function plantilla(){

    include "vistas/plantilla.php";

}


    /**=================================
     TRAEMOS LOS ESTILOS DINAMICOS DE LA PLANTILLA
     ===================================*/
    
     static public function ctrEstiloPlantilla(){
    
        $tabla = "plantilla";
        $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
        return $respuesta;
        }
        


}

?>

