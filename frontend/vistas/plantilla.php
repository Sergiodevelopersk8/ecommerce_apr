<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <meta name="title" content="tienda virtual">
   <meta name="description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolorem odio sed quam tenetur dolore quos, corporis id aliquid suscipit maiores praesentium quaerat. Voluptate sint iure harum nostrum, excepturi doloribus?">
   <meta name="keyword" content="Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Animi dolorem odio, sed quam tenetur dolore quos, corporis id aliquid suscipit maiores praesentium quaerat. Voluptate sint iure harum nostrum, excepturi doloribus?">
   <title>Box gift</title>
   <?php

$servidor = Ruta::ctrRutaServidor();

   $icono = ControladorPlantilla::ctrEstiloPlantilla();

   
echo '<link rel="icon" href=" '.$servidor.$icono["icono"].'">';
/**=========
 * Mantener la ruta fija del proyecto
 ==============*/
$url = Ruta::ctrRuta();



   ?>
   
   <!----=========
PLUGINS CSS Y JS
 ==============---->
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/font-awesome.min.css">
   <script src="<?php echo $url;?>vistas/js/plugins/jquery.min.js"></script>
   <script src="<?php echo $url;?>vistas/js/plugins/bootstrap.min.js"></script>
   <script src="<?php echo $url;?>vistas/js/plugins/jquery.easing.js"></script>
      <script src="<?php echo $url;?>vistas/js/plugins/jquery.scrollUp.js"></script>

   <!----=========
 HOJAS DE ESTILOS PERSONALIZADAS
 ==============---->


   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/productos.css">
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plantilla.css">
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/cabezote.css">   
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/slide.css">
   
   
</head>
<body>

<?php
    /*=======================================
        CABEZOTE
    ========================================*/
    include "modulos/cabezote.php";



    /*=======================================
        CONTENIDO DINAMICO
    ========================================*/


$rutas = array();
$ruta = "";
$infoProducto = "";

if(isset($_GET["ruta"])){
  
   

$rutas = explode("/", $_GET["ruta"]);
$item = "ruta"; 
$valor = $rutas[0];

    /*=======================================
        URLS AMIGABLES DE CATEGORIAS
    ========================================*/
$rutaCategorias;
$rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);


if(is_array($rutaCategorias)){

    if($valor == $rutaCategorias["ruta"]){

        $ruta = $valor;

    }
    
}

    /*=======================================
        URLS AMIGABLES DE SUBCATEGORIAS
    ========================================*/
    $rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
    foreach($rutaSubCategorias as $key => $value){
    
    if($rutas[0]== $value["ruta"]){

$ruta = $rutas[0];

    }
}


/*=======================================
    URLS AMIGABLES PRODUCTOS
    ========================================*/

$rutaProductos = ControladorProductos::ctrMostrarInfoProducto($item, $valor);
if($rutas[0]== $rutaProductos["ruta"]){
$infoProducto = $rutas[0];
}

    /*=======================================
        LISTA BLANCA DE URLS AMIGABLES
    ========================================*/


if($ruta!= null || $rutas[0]=="articulos-gratis" || $rutas[0]=="lo-mas-vendido" || $rutas[0]=="lo-mas-visto")
{
include "modulos/productos.php";

}
else if($infoProducto !=null){
    include "modulos/infoproducto.php";
}
else{
    include "modulos/error404.php";
}


}
else{
    include "modulos/slide.php";
    include "modulos/destacados.php";
}


?>

 <!----=========
 JS PERSONALIZADOS
 ==============---->
<script src="<?php echo $url;?>vistas/js/cabezote.js"></script>
<script src="<?php echo $url;?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url;?>vistas/js/slide.js"></script>

</body>
</html>