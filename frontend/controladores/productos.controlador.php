<?php

class ControladorProductos{

/**=================================
 Mostrar Categorias
 ===================================*/

static public function ctrMostrarCategorias($item, $valor){
    $tabla = "categorias";
    $respueta = ModeloProductos::mdlMostrarCategorias($tabla, $item, $valor);
    return $respueta;
}


/**=================================
 Mostrar SubCategorias
 ===================================*/

 static public function ctrMostrarSubCategorias($item, $valor){
    $tabla = "subcategorias";
    $respueta = ModeloProductos::mdlMostrarSubCategorias($tabla, $item, $valor);
    return $respueta;
}

/**=================================
 Mostrar Productos
 ===================================*/

static public function ctrMostrarProductos($ordenar,$item,$valor){
    $tabla = " productos";
    $respuesta = ModeloProductos::mdlMostrarProductos($tabla,$ordenar,$item,$valor);
    return $respuesta;
}




}
