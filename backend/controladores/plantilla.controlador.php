<?php

class ControladorPlantilla{

/**=================================
 *METODO QUE LLAMA A LA PLANTILLA
 ===================================*/


    public function plantilla(){
        include "vistas/plantilla.php";
    }

/**=================================
 TRAEMOS LOS ESTILOS DINAMICOS DE LA PLANTILLA
 ===================================*/

public function ctrEstiloPlantilla(){

$tabla = "plantilla";
$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
return $respuesta;
}


}

?>