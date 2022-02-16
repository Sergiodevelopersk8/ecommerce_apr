<!---==========================
Banner
===========================------->
<?php
$servidor = Ruta::ctrRutaServidor();

?>
<figure class="banner">

<img src="http://localhost/ecommerce_apr/backend/vistas/img/banner/default.jpg" class="img-responsive" width="100%" > 

<div class="textoBanner textoDer">

<h1 style="color:#fff">OFERTAS ESPECIALES</h1>
<h2 style="color:#fff"><strong>50% off</strong></h2>
<h3 style="color:#fff">Terminara el 31 de octubre</h3>
</div>
</figure>

<!---==========================
Barra de porductos gratis
===========================------->

<div class="container-fluid  well well-sm barraProductos">
    <div class="container">

<div class="row">
    <div class="col-xs-12 organizarProductos">

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


<!---==========================
 porductos gratis
===========================------->
<div class="container-fluid productos">

<div class="container">
    <div class="row">
    
    <!---==========================
 Barra titulo
===========================------->
<div class="col-xs-12 tituloDestacado">
<!-------===========================================---->
<div class=" col-sm-6 col-xs-12">
<h1><small>ARTICULOS GRATUITOS</small></h1>    
</div>
<!-------===========================================---->
<div class="col-sm-6 col-xs-12 ">
<a href="articulos-gratis">
    <button class="btn btn-default backColor pull-right">
        VER MÁS <span class="fa fa-chevron-right"></span>
    </button>
</a>

</div>
<!-------===========================================---->
</div>
<hr>
</div>

<!--======================

VITRINA DE PRODUCTOS EN CUADRICULAS

===================--->
<ul class="grid0">
<!---PRODUCTO 1 -->
<li class="col-md-3 col-sm-6 col-xs-12">
<!-------===========================================---->

<figure>
    <a href="#" class="pixelProducto">
        <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/accesorios/accesorio04.jpg"
         class="img-responsive">

    </a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="#" class="pixelProducto">

Collar de diamantes <br>

</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">

<h2><small>GRATIS</small></h2>

</div>

<!-------===========================================---->

<div class="col-xs-6 enlaces">
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
        data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
    <i class="fa fa-heart" aria-hidden="true"></i>
    </button>
    <a href="#" class="pixelProducto">
    <button type="button" class="btn btn-default btn-xs" 
        data-toggle="tooltip" title="Ver productos"> 
        <i class="fa fa-eye" aria-hidden="true"></i>
    
    </button> 
    </a>
    </div>
</div>



</li>
<!---PRODUCTO 2 -->
<li class="col-md-3 col-sm-6 col-xs-12">
<!-------===========================================---->

<figure>
    <a href="#" class="pixelProducto">
        <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/accesorios/accesorio03.jpg"
         class="img-responsive">

    </a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="#" class="pixelProducto">

Bolso Deportivo Gris <br>

</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">

<h2><small>GRATIS</small></h2>

</div>

<!-------===========================================---->

<div class="col-xs-6 enlaces">
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
        data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
    <i class="fa fa-heart" aria-hidden="true"></i>
    </button>
    <a href="#" class="pixelProducto">
    <button type="button" class="btn btn-default btn-xs" 
        data-toggle="tooltip" title="Ver productos"> 
        <i class="fa fa-eye" aria-hidden="true"></i>
    
    </button> 
    </a>
    </div>
</div>



</li>

<!---PRODUCTO 3 -->
<li class="col-md-3 col-sm-6 col-xs-12">
<!-------===========================================---->

<figure>
    <a href="#" class="pixelProducto">
        <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/accesorios/accesorio02.jpg"
         class="img-responsive">

    </a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="#" class="pixelProducto">

Bolso Militar <br>

</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">

<h2><small>GRATIS</small></h2>

</div>

<!-------===========================================---->

<div class="col-xs-6 enlaces">
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
        data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
    <i class="fa fa-heart" aria-hidden="true"></i>
    </button>
    <a href="#" class="pixelProducto">
    <button type="button" class="btn btn-default btn-xs" 
        data-toggle="tooltip" title="Ver productos"> 
        <i class="fa fa-eye" aria-hidden="true"></i>
    
    </button> 
    </a>
    </div>
</div>



</li>

<!---PRODUCTO 4 -->
<li class="col-md-3 col-sm-6 col-xs-12">
<!-------===========================================---->

<figure>
    <a href="#" class="pixelProducto">
        <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/accesorios/accesorio01.jpg"
         class="img-responsive">

    </a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="#" class="pixelProducto">

Pulsera de diamantes <br>

</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">

<h2><small>GRATIS</small></h2>

</div>

<!-------===========================================---->

<div class="col-xs-6 enlaces">
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-default btn-xs deseos" idProducto="470"
        data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
    <i class="fa fa-heart" aria-hidden="true"></i>
    </button>
    <a href="#" class="pixelProducto">
    <button type="button" class="btn btn-default btn-xs" 
        data-toggle="tooltip" title="Ver productos"> 
        <i class="fa fa-eye" aria-hidden="true"></i>
    
    </button> 
    </a>
    </div>
</div>



</li>

</ul>

</div>

</div>