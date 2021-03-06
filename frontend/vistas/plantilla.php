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

 session_start();
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
   <script src="<?php echo $url;?>vistas/js/plugins/sweetalert.min.js"></script>
      <script src="<?php echo $url;?>vistas/js/plugins/jquery.scrollUp.js"></script>
      <script src="<?php echo $url;?>vistas/js/plugins/jquery.flexslider.js"></script>
      
     
     

   <!----=========
 HOJAS DE ESTILOS PERSONALIZADAS
 ==============---->


   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/productos.css">
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plantilla.css">
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/cabezote.css">   
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/slide.css">
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/flexslider.css">
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plugins/sweetalert.css">
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/perfil.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/carrito-de-compras.css">

<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/ofertas.css">

<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/footer.css">
   <link rel="stylesheet" href="<?php echo $url;?>vistas/css/infoproducto.css">
   
   
   
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
$infoProducto = null;

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

// $rutaProductos = ControladorProductos::ctrMostrarInfoProducto($item, $valor);
// if($rutas[0] == $rutaProductos['ruta']){
// $infoProducto = $rutas[0];

// }

$rutaProductos = ControladorProductos::ctrMostrarInfoProducto($item, $valor);
foreach($rutaProductos as $key => $value){
if($rutas[0] == $value["ruta"]){
$infoProducto = $rutas[0];
}
}



/*=======================================
        LISTA BLANCA DE URLS AMIGABLES
    ========================================*/


    if($ruta != null || $rutas[0] == "articulos-gratis" || $rutas[0] == "lo-mas-vendido" || $rutas[0] == "lo-mas-visto"){

		include "modulos/productos.php";

	}else if($infoProducto != null){

		include "modulos/infoproducto.php";

	}else if($rutas[0] == "buscador" || $rutas[0] == "verificar" || $rutas[0] == "salir" || $rutas[0] == "perfil" || $rutas[0] == "carrito-de-compras" || $rutas[0] == "error" || $rutas[0] == "finalizar-compra" || $rutas[0] == "curso" || $rutas[0] == "ofertas"){

		include "modulos/".$rutas[0].".php";

	}else if($rutas[0] == "inicio"){

		include "modulos/slide.php";

		include "modulos/destacados.php";

	}else{

		include "modulos/error404.php";

	}

}else{

	include ("modulos/slide.php");

	include ("modulos/destacados.php");

	include ("modulos/visitas.php");

}


include "modulos/footer.php";


?>
<input type="hidden"  value =""<?php echo $url;?> id="rutaOculta" name="">
 <!----=========
 JS PERSONALIZADOS
 ==============---->
<script src="<?php echo $url;?>vistas/js/cabezote.js"></script>
<script src="<?php echo $url;?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url;?>vistas/js/slide.js"></script>
<script src="<?php echo $url;?>vistas/js/buscador.js"></script>
<script src="<?php echo $url;?>vistas/js/infoproducto.js"></script>
<script src="<?php echo $url;?>vistas/js/usuarios.js"></script>
<script src="<?php echo $url; ?>vistas/js/registroFacebook.js"></script>
<script src="<?php echo $url; ?>vistas/js/carrito-de-compras.js"></script>
<script src="<?php echo $url; ?>vistas/js/visitas.js"></script>

<!--=====================================
https://developers.facebook.com/
'v13.0'
======================================-->


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '643688483362068',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.10'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>