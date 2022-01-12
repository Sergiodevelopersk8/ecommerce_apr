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

   ?>
   <link rel="stylesheet" href="vistas/css/plugins/bootstrap.min.css">
   <link rel="stylesheet" href="vistas/css/plugins/font-awesome.min.css">
   <link rel="stylesheet" href="vistas/css/plantilla.css">
   <link rel="stylesheet" href="vistas/css/cabezote.css">
   <script src="vistas/js/plugins/jquery.min.js"></script>
   <script src="vistas/js/plugins/bootstrap.min.js"></script>
   
</head>
<body>

<?php
    /*=======================================
        CABEZOTE
    ========================================*/
    include "modulos/cabezote.php";

?>


<script src="vistas/js/cabezote.js"></script>
<script src="vistas/js/plantilla.js"></script>
</body>
</html>