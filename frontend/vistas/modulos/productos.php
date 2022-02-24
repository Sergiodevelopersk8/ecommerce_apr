<?php 
if($rutas[0] == "articulos-gratis"){

    $ordenar = "id";
    $item2 = "precio";
    $valor2 = 0;
    $ordenar = "id";
}
else if($rutas[0] == "lo-mas-vendido"){
    $item2 = null;
    $valor2 = null;
    $ordenar = "ventas";
}
else if($rutas[0] == "lo-mas-visto"){
    $item2 = null;
    $valor2 = null;
    $ordenar = "vistas";
} 
else{
    $ordenar = "id";
$item1 = "ruta";
$valor1 = $rutas[0];

$categorias = ControladorProductos::ctrMostrarCategorias($item1,$valor1);


if(!$categorias){
    $subCategorias = ControladorProductos::ctrMostrarSubCategorias($item1, $valor1);
    $item2 = "id_subcategoria";
    $valor2 = $subCategorias[0]["id"];
}
else{
    $item2 = "id_categoria";
$valor2 = $categorias["id"];
}
}

$base = 0;
 $tope = 12;
$productos = ControladorProductos::ctrMostrarProductos($ordenar,$item2,$valor2,$base,$tope);
var_dump(count($productos));

if(!$productos){
    echo ' todavia no hay productos aqui';
} 

?>