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
   $icono = ControladorPlantilla::ctrEstiloPlantilla();

   
echo '<link rel="icon" href="http://localhost/ecommerce_apr/backend/'.$icono["icono"].'">';
/**=========
 * Mantener la ruta fija del proyecto
 ==============*/
$url = Ruta::ctrRuta();


   ?>
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plantilla.css">
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/cabezote.css">
   <script src="<?php echo $url;?>vistas/js/plugins/jquery.min.js"></script>
   <script src="<?php echo $url;?>vistas/js/plugins/bootstrap.min.js"></script>
   
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
$ruta = null;

if(isset($_GET["ruta"])){
  
   

$rutas = explode("/", $_GET["ruta"]);
$item = "ruta"; 
$valor = $rutas[0];

    /*=======================================
        URLS AMIGABLES DE CATEGORIAS
    ========================================*/
$rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

if($rutas[0] == $rutaCategorias["ruta"]){
    $ruta = $rutas[0];
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
        LISTA BLANCA DE URLS AMIGABLES
    ========================================*/


if($rutas!= null)
{
include "modulos/productos.php";

}
else{
    include "modulos/error404.php";
}


}


?>


<script src="<?php echo $url;?>vistas/js/cabezote.js"></script>
<script src="<?php echo $url;?>vistas/js/plantilla.js"></script>
</body>
</html>