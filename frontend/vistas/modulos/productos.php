<?php
$servidor = Ruta::ctrRutaServidor();
$url = Ruta::ctrRuta();

?>


<!---==========================
Banner
===========================------->

<figure class="banner">

<img src="http://localhost/ecommerce_apr/backend/vistas/img/banner/default.jpg" class="img-responsive" width="100%" > 

<div class="textoBanner textoDer">

<h1 style="color:#fff">OFERTAS ESPECIALES</h1>
<h2 style="color:#fff"><strong>50% off</strong></h2>
<h3 style="color:#fff">Terminara el 31 de octubre</h3>
</div>
</figure>


<!-- BARA DE PRODUCTOS -->

<div class="container-fluid  well well-sm barraProductos">
        <div class="container">
    
    <div class="row">
        <div class="col-sm-6 col-xs-12">

<div class="btngroup">

<button  type="button" class="btn btn-default dropdown-toogle" data-toggle="dropdown">
Ordenar Productos <span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu">
    <li>
        <a href="#">Lo mas reciente</a>
    </li>
    <li>
        <a href="#">Lo mas antiguo</a>
    </li>
</ul>
</div>

        </div>    
        <div class="col-sm-6 col-xs-12 organizarProductos">
    
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-default btnGrid" id="btnGrid0">
                <i class="fa fa-th" aria-hidden="true"></i>
                <span class="col-xs-0 pull-right">GRID</span>
            </button>
    
            <button type="button" class="btn btn-default btnList" id="btnList0">
                <i class="fa fa-list" aria-hidden="true"></i>
                <span class="col-xs-0  pull-right">List</span>
            </button>
    
        </div>
    
        </div>
    </div>
    
        </div>
    </div>
    
<!--     
============================================
LISTAR PRODUCTOS
========================================== -->
<div class="container-fluid productos">

<div class="container">
    <div class="row">
   <!--     
============================================
Bread CURMB  MIGAS DE PAN
========================================== -->
<ul class="breadcrumb lead  fondoBreadcrumb">

        <li><a href="<?php echo $url?>">INICIO</a></li>
        <li><a class="active pagActiva"><?php echo $rutas[0];?></a></li>

</ul>

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
$listaProductos = ControladorProductos::ctrListarProductos($ordenar, $item2,$valor2);

if(!$productos){
    echo '
    <div class="col-xs-12 error404 text-center">
    <h1><small>!OPPS¡</small></h1>
    <h2>todavia no hay productos aqui</h2>
    </div>
    ';
} 
else{

//   ===========================================
//   inicio
//   =========================================

echo '
<ul class="grid0" >';

foreach($productos as $key =>$value){
echo '<li class="col-md-3 col-sm-6 col-xs-12">
<figure>
<a href="'.$value["ruta"].'" class="pixelProducto">
<img src="'.$servidor.$value["portada"].'"
 class="img-responsive">

</a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="'.$value["ruta"].'" class="pixelProducto">

'.$value["titulo"].' <br> <span style="color:rgba(0,0,0,0);">-</span>';

if($value["nuevo"]!=0){
echo '<span class="label label-warning fontSize">Nuevo</span> ';
}
if($value["oferta"]!=0){
echo '<span class="label label-warning fontSize">'.$value["descuentoOferta"].'% off</span>';
}

echo '</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">';
if($value["precio"]== 0){
echo ' <h2><small>Gratis</small></h2>';

}
else{
if($value["oferta"]!=0)
{
echo ' <h2><small>
<strong class="oferta">
USD $'.$value["precio"].'
</strong>
</small>
<small>$'.$value["precioOferta"].'</small></h2>
';
}
else {
    echo '<h2><small> USD $'.$value["precio"].'</small></h2>';

}

}
echo '</div>

<!-------===========================================---->

<div class="col-xs-6 enlaces">
<div class="btn-group pull-right">
<button type="button" class="btn btn-default btn-xs deseos" idProducto="'.$value["id"].'"
data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
<i class="fa fa-heart" aria-hidden="true"></i>
</button>';

if($value["tipo"]=="virtual" && $value["precio"] != 0){
if($value["oferta"]!=0){

    echo '<button type="button" class="btn btn-default btn-xs deseos" idProducto="'.$value["id"].'" 
imagen = "'.$servidor.$value["portada"].'" 
titulo="'.$value["titulo"].'"
precio="'.$value["precioOferta"].'" tipo="'.$value["tipo"].'" pesos="'.$value["peso"].'" data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
<i class="fa fa-shopping-cart" aria-hidden="true"></i>
</button>';

}
else{
    echo '<button type="button" class="btn btn-default btn-xs deseos" idProducto="'.$value["id"].'" 
    imagen = "'.$servidor.$value["portada"].'" 
    titulo="'.$value["titulo"].'"
    precio="'.$value["precio"].'" tipo="'.$value["tipo"].'" pesos="'.$value["peso"].'" data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    </button>';
    
}

}


echo '<a href="'.$value["ruta"].'" class="pixelProducto">
<button type="button" class="btn btn-default btn-xs" 
data-toggle="tooltip" title="Ver productos"> 
<i class="fa fa-eye" aria-hidden="true"></i>

</button> 
</a>
</div>
</div>



</li>';
}
echo '</ul>


<ul class="list0" style="display:none">';

foreach($productos as $key => $value){

echo'
<li class="col-xs-12">

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
<figure>
 <a href="'.$value["ruta"].'" class="pixelProducto">
     <img src="'.$servidor.$value["portada"].'" 
      class="img-responsive">
 </a>
</figure>
</div>


<!-- ============================================= -->
<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
 <h1>
     <small>
         <a href="'.$value["ruta"].'" class="pixelProducto">
         <a href="'.$value["ruta"].'" class="pixelProducto">

         '.$value["titulo"].' ';
         
if($value["nuevo"]!=0){
echo '<span class="label label-warning fontSize">Nuevo</span> ';
}
if($value["oferta"]!=0){
    echo '<span class="label label-warning fontSize">'.$value["descuentoOferta"].'% off</span>';
}


      echo '</a>
     </small>
 </h1>

<p class="text-muted">'.$value["titular"].'</p>';

if($value["precio"]== 0){
echo ' <h2><small>Gratis</small></h2>';

}
else{
  if($value["oferta"]!=0)
  {
echo ' <h2><small>
<strong class="oferta">
USD $'.$value["precio"].'
</strong>
</small>
<small>$'.$value["precioOferta"].'</small></h2>
';
  }
  else {
      echo '<h2><small> USD $'.$value["precio"].'</small></h2>';

  }

}



echo '<div class="btn-group pull-left enlace">
<button type="button" class="btn btn-default btn-xs deseos" idProducto="'.$value["id"].'" data-toggle="tooltip"
title="Agregar a mi lista de deseos">
<i class="fa fa-heart" aria-hidden="true"></i>
</button>';


if($value["tipo"]=="virtual" && $value["precio"] != 0){
if($value["oferta"]!=0){

    echo '<button type="button" class="btn btn-default btn-xs deseos" idProducto="'.$value["id"].'" 
imagen = "'.$servidor.$value["portada"].'" 
titulo="'.$value["titulo"].'"
precio="'.$value["precioOferta"].'" tipo="'.$value["tipo"].'" pesos="'.$value["peso"].'" data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
<i class="fa fa-shopping-cart" aria-hidden="true"></i>
</button>';

}
else{
    echo '<button type="button" class="btn btn-default btn-xs deseos" idProducto="'.$value["id"].'" 
    imagen = "'.$servidor.$value["portada"].'" 
    titulo="'.$value["titulo"].'"
    precio="'.$value["precio"].'" tipo="'.$value["tipo"].'" pesos="'.$value["peso"].'" data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    </button>';
    
}

}

echo '
<a href="'.$value["ruta"].'" class="pixelProducto">
<button type="button" class="btn btn-default btn-xs" 
data-toggle="tooltip" title="Ver productos"> 
<i class="fa fa-eye" aria-hidden="true"></i>

</button> 
</a>
</div>



</div>

<div class="col-xs-12"><hr></div>


<!-- =========================================== -->

</li>';
}
echo'
</ul>';
// ======================
// final
// ==============


   
// var_dump(count($listaProductos));
    }


?>

<center>

    <?php
    
    if(count($listaProductos)!=0){


        $pagProductos = ceil(count($listaProductos)/12);
        var_dump($pagProductos);
        if($pagProductos > 4){

        }
        else{
            echo '<ul class="pagination"> ';
            
            for($i =1; $i <= $pagProductos; $i++){
                echo '<li><a href="#">'.$i.'</a></li>';
            }
            
            echo '</ul>';
        }
    }
    
    ?>
<!-- <ul class="pagination"> -->

<!-- <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> -->

<!-- <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li class="disabled"><a href="#">...</a></li>
    <li><a href="#">20</a></li>

    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
</ul> -->
</center>
     
</div>
</div>

</div>