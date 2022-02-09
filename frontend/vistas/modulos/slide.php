<!---=======================
SLIDESHOW
=============================-->

<!--=====================================
SLIDESHOW  
======================================-->

<div class="container-fluid" id="slide">
	
	<div class="row">
		
		<!--=====================================
		DIAPOSITIVAS
		======================================-->
<ul>

<?php


 $slide = ControladorSlide::ctrMostrarSlide();

foreach ($slide as $key => $value) {
$estiloImgProduct=json_decode($value["estiloImgProducto"],true);


echo '
<li>
	<img src="http://localhost/ecommerce_apr/backend/'.$value["imgFondo"].'" alt="">

<div class="slideOpciones '.$value["tipoSlide"].'">

<img class="imgProducto" 
src="http://localhost/ecommerce_apr/backend/'.$value["imgProducto"].'" 
style="'.$estiloImgProduct["top"].'; right:'.$estiloImgProduct["right"].'; width:'.$estiloImgProduct["width"].' 
left:'.$estiloImgProduct["left"].'">

<div class="textosSlide" style="top:20%; left:10%; width:40%;">
	<h1 style="color:#333">Lorem ipsum </h1 >
	<h2 style="color:#777" >Lorem ipsum dolor site </h2>
	
	<h3 style="color:#888">Lorem ipsum dolor site </h3>

<a href="#">
	<button class="btn btn-default backColor text-uppercase">
		VER PRODUCTO  <span class="fa fa-chevron-right"></span>
	
	</button>
</a>


</div>

</div>

</li>
';
}
?>


		<!--=====================================
		SLIDE1
		======================================-->

		<!--=====================================
		SLIDE2
		======================================-->

		<li>
	<img src="http://localhost/ecommerce_apr/backend/vistas/img/slide/default/back_default.jpg" alt="">

<div class="slideOpciones slideOpcion2">

<img class="imgProducto" src="http://localhost/ecommerce_apr/backend/vistas/img/slide/slide2/curso.png" 
style="top:5%; left:15%; width:25%;">

<div class="textosSlide"style="top:20%; right:10%; width:40%;">
	<h1 style="color:#333">Lorem ipsum </h1 >
	<h2 style="color:#777">Lorem ipsum dolor site </h2>
	
	<h3 style="color:#888">Lorem ipsum dolor site </h3>

<a href="#">
	<button class="btn btn-default backColor text-uppercase">
		VER PRODUCTO <span class="fa fa-chevron-right"></span>
	
	</button>
</a>


</div>

</div>

</li>

	<!--=====================================
		SLIDE3
		======================================-->

		<li>
	<img src="http://localhost/ecommerce_apr/backend/vistas/img/slide/slide3/fondo2.jpg" alt="">

<div class="slideOpciones slideOpcion2">

<img class="imgProducto" src="http://localhost/ecommerce_apr/backend/vistas/img/slide/slide3/iphone.png" 
style="top:5%; left:15%; width:25%;">

<div class="textosSlide" style="top:20%; right:10%; width:40%;">
	<h1 style="color:#eee">Lorem ipsum </h1 >
	<h2 style="color:#ccc">Lorem ipsum dolor site </h2>
	
	<h3 style="color:#aaa">Lorem ipsum dolor site </h3>

<a href="#">
	<button class="btn btn-default backColor text-uppercase">
		VER PRODUCTO <span class="fa fa-chevron-right"></span>
	
	</button>
</a>


</div>

</div>

</li>



	<!--=====================================
		SLIDE4
		======================================-->

		<li>
	<img src="http://localhost/ecommerce_apr/backend/vistas/img/slide/slide4/fondo3.jpg" alt="">

<div class="slideOpciones slideOpcion1">

<img class="imgProducto" src="" style="top:5%; right:15%; width:25%;">

<div class="textosSlide" style="top:20%; left:10%; width:40%;">
	<h1 style="color:#333">Lorem ipsum </h1>
	<h2 style="color:#777">Lorem ipsum dolor site </h2>
	
	<h3 style="color:#888">Lorem ipsum dolor site </h3>

<a href="#">
	<button class="btn btn-default backColor text-uppercase">
		VER PRODUCTO <span class="fa fa-chevron-right"></span>
	
	</button>
</a>


</div>

</div>

</li>




</ul>


	<!--========================
	Paginación
	========================--->
<ol id="paginacion">
	<li item="1"><span class="fa fa-circle"></span></li>
	<li item="2"><span class="fa fa-circle"></span></li>
	<li item="3"><span class="fa fa-circle"></span></li>
	<li item="4"><span class="fa fa-circle"></span></li>
	
</ol>


	<!--========================
	FLECHAS
	========================--->

<div class="flechas" id="retroceder"><span class="fa fa-chevron-left"></span></div>
<div class="flechas" id="avanzar"><span class="fa fa-chevron-right"></span></div>


	</div>

</div>

<center>
	<button id="btnSlide" class="backColor">
		<i class="fa fa-angle-up"></i>
	</button>
</center>