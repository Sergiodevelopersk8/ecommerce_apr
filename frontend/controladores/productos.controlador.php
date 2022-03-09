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

static public function ctrMostrarProductos($ordenar,$item,$valor,$base, $tope,$modo){
    $tabla = " productos";
    $respuesta = ModeloProductos::mdlMostrarProductos($tabla,$ordenar,$item,$valor,$base, $tope,$modo);
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



// =======================
// LISTA ctrMostrarProductos
// =========================

static public function ctrMostrarBanner($ruta){
    $tabla = "banner";
    $respuesta = ModeloProductos::mdlMostrarBanner($tabla,$ruta);
    return $respuesta; 
}

// =======================
// Busqueda Productos
// =========================

static public function ctrBuscarProductos($busqueda,$ordenar,$modo,$base,$tope){
    $tabla = "productos";
    $respuesta = ModeloProductos::mdlBuscarProductos($tabla,$busqueda,$base,$tope,$ordenar,$modo);
    return $respuesta; 
}



// =======================
// LISTA Productos busqueda
// =========================
static public function ctrListarProductosBusqueda($busqueda){
    $tabla = "productos";
    $respuesta = ModeloProductos::mdlBuscarListaProductos($tabla,$busqueda);
    return $respuesta; 
}

/*=============================================
	ACTUALIZAR VISTA PRODUCTO
	=============================================*/

	static public function ctrActualizarVistaProducto($datos, $item){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlActualizarVistaProducto($tabla, $datos, $item);

		return $respuesta;
	}


}
