<!---============================================
TOP
=============================================--->

<div class="container-fluid barraSuperior" id="top">

<div class="container">

<div class="row">

<!---============================================
SOCIAL
=============================================--->

<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
	<ul>

<?php

$social = ControladorPlantilla::ctrEstiloPlantilla();
$jsonRedesSociales=json_decode($social["redesSociales"],true);


foreach($jsonRedesSociales as $key => $value){

	echo '<li>
	<a href="'.$value["url"].'" target="_blank">
		<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true">

		</i>
	</a>
</li>
';
	
}

?>
	</ul>
</div>	 
<!---============================================
REGISTRO
=============================================--->

<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro ">

<ul>
	<li>
		<a href="#modalIngreso" data-toggle="modal">Ingresar</a>
	</li>

	<li><a href="#modalRegistro" data-toggle="modal" >Crear cuenta</a></li>

</ul>


</div>

</div>

</div>

</div>



<!---============================================
HEADER
=============================================--->

<header class="container-fluid">
<div class="container">

<div class="row" id ="cabezote">

<!---============================================
logotipo
=============================================--->

<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
	<a href="#">
		<img src="http://localhost/ecommerce_apr/backend/<?php echo $social["logo"];?>" class="img-responsive">
	</a>
</div>


<!---============================================
Bloque categorias y Buscar	
=============================================--->
<div class="col-gl-6 col-md-6 col-sm-8 col-xs-12">

<!---============================================
BOTON CATEGORIAS	
=============================================--->	
<div class="col-gl-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
<p>CATEGORIAS
<span class="pull-right"><i class="fa fa-bars" aria-hidden="true"></i></span>
</p>


</div>

<!---============================================
BUSCADOR	
=============================================--->
<div class="input-group col-gl-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
<input type="search" name="buscar" class="form-control" placeholder="Buscar....">
<span class="input-group-btn">

<a href="#">
	<button class="btn btn-default backColor" type="submit">
		<i class="fa fa-search"> </i>
	</button>
</a>


</span>
</div>

</div>
<!---============================================
Carrito	de compras
=============================================--->
<div class="col-gl-3 col-md-3 col-sm-2 col-xs-12" id="carrito">

<a href="#">

<button class="btn btn-default pull-left backColor">
	<i class="fa fa-shopping-cart" aria-hidden="true">  </i>
</button>

</a>
<p>Tu Cesta<span class="cantidadCesta"></span> <br> USD $ <span class="sumaCesta"></span></p>
</div>

</div>

<!---============================================
Categorias
=============================================--->
<div class="col-xs-12 backColor" id="categorias">

<?php

$item = null;
$valor = null;
$categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

foreach($categorias as $key => $value){
	echo '
	<div class="col-gl-2 col-md-2 col-sm-4 col-xs-12">
	
	<h4>
		<a href="'.$value["ruta"].'" class="pixelCategorias">'.$value["categoria"].'</a>
	</h4>
	<hr>
	<ul>';
	$item = "id_categoria";
$valor = $value["id"];
	$subcategorias= ControladorProductos::ctrMostrarSubCategorias($item, $valor);

	foreach($subcategorias as $key => $value){

echo '<li><a href="'.$value["ruta"].'" class="pixelCategorias">'.$value["subcategoria"].'</a></li>
';

	}


echo '</ul>
	</div>
	';
}
?>

</div>

</div>	

</header>


