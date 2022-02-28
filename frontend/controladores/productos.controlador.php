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

static public function ctrMostrarProductos($ordenar,$item,$valor,$base, $tope){
    $tabla = " productos";
    $respuesta = ModeloProductos::mdlMostrarProductos($tabla,$ordenar,$item,$valor,$base, $tope);
    return $respuesta;
}


/**=================================
 Mostrar Productos info
 ===================================*/
static public function ctrMostrarInfoProducto($item, $valor){

$tabla = "productos";

$respuesta = ModeloProductos::mdlMostrarInfoProducto($tabla, $item, $valor);
return $respuesta;

}

// =======================
// LISTA ctrMostrarProductos
// =========================

static public function ctrListarProductos($ordenar, $item,$valor){


    $tabla = "productos";
    $respuesta = ModeloProductos::mdlListarProductos($tabla, $ordenar,$item, $valor);
    return $respuesta; 

}

}
