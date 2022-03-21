<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/slide.controlador.php";
require_once "controladores/usuarios.controlador.php";
//require_once "controladores/notificaciones.controlador.php";

require_once "modelos/productos.modelo.php";
require_once "modelos/plantilla.modelo.php";
require_once  "modelos/rutas.php";
require_once  "modelos/slide.modelo.php";
require_once  "modelos/usuarios.modelo.php";
//require_once  "modelos/notificaciones.modelo.php";
require_once "extensiones/PHPMailer/PHPMailerAutoload.php";
require_once "extensiones/vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*require 'path/to/PHPMailer/src/Exception.php';*/
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();




/*
or create a new repository on the command line
echo "# ecommerce_apr" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/Sergiodevelopersk8/ecommerce_apr.git
git push -u origin main
…or push an existing repository from the command line
git remote add origin https://github.com/Sergiodevelopersk8/ecommerce_apr.git
git branch -M main
git push -u origin main




or create a new repository on the command line
echo "# ecommerce_apr" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:Sergiodevelopersk8/ecommerce_apr.git
git push -u origin main
…or push an existing repository from the command line
git remote add origin git@github.com:Sergiodevelopersk8/ecommerce_apr.git
git branch -M main
git push -u origin main

 



*/



?>

 