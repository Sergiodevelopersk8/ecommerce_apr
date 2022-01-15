<?php

class ControladorProductos{

/**=================================
 Mostrar Categorias
 ===================================*/

static public function ctrMostrarCategorias(){
    $tabla = "categorias";
    $respueta = ModeloProductos::mdlMostrarCategorias($tabla);
    return $respueta;
}


/**=================================
 Mostrar SubCategorias
 ===================================*/

 static public function ctrMostrarSubCategorias($id){
    $tabla = "subcategorias";
    $respueta = ModeloProductos::mdlMostrarSubCategorias($tabla, $id);
    return $respueta;
}



}
