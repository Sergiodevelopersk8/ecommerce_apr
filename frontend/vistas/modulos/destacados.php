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
<div class="clearfix"></div>
<hr>
</div>

<!--======================

VITRINA DE PRODUCTOS GRATIS EN CUADRICULAS

===================--->
<ul class="grid0" style="display:none">
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

Collar de diamantes <br> <br>

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

Bolso Deportivo Gris <br> <br>

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

Bolso Militar <br> <br>

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
<span class="label label-warning fontSize">Nuevo</span>

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

<!---=============================================================
VITRINA DE PRODUCTOS GRATIS EN LISTA 
==============================================------------->
<ul class="list0">
<!-- Producto 1 -->
<li class="col-xs-12">
    <!-- =================================================-->
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

<figure>
    <a href="#" class="pixelProducto"><img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/accesorios/accesorio04.jpg"
         class="img-responsive"></a>
</figure>
</div>



<!-- ========================= =======================-->
<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
<h1>
    <small>
        <a href="collar-de-diamantes" class="pixeProducto">Collar de diamantes</a>
    </small>
</h1>
<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Libero dolorem debitis at? Libero, explicabo.
      Praesentium voluptate sint facilis tempora, nihil laudantium dolore nostrum. Est illo,
     quaerat officiis officia expedita veniam.</p>
    <h2><small>GRATIS</small></h2>
    <button type="button" class="btn btn-default btn-xs deseos" data-toggle="tooltip" title="Agregar a mi lista de deseos">
<i class="fa fa-heart corazon" aria-hidden="true"></i>

    </button>
        <a href="#" class="pixelProducto ojito">
<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver Producto">
<i class="fa fa-eye" aria-hidden="true"></i>

        </a>
    </button>
    
    </div>
<!-- ============================================ -->
<div class="col-xs-12">
    <hr>

</div>

</li>

<!-- Producto 2 -->
<li class="col-xs-12">
    <!-- =================================================-->
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

<figure>
    <a href="#" class="pixelProducto"><img 
    src="http://localhost/ecommerce_apr/backend/vistas/img/productos/accesorios/accesorio03.jpg"
         class="img-responsive"></a>
</figure>
</div>



<!-- ========================= =======================-->
<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
<h1>
    <small>
        <a href="collar-de-diamantes" class="pixeProducto">Bolso Deportivo</a>
    </small>
</h1>
<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Libero dolorem debitis at? Libero, explicabo.
      Praesentium voluptate sint facilis tempora, nihil laudantium dolore nostrum. Est illo,
     quaerat officiis officia expedita veniam.</p>
    <h2><small>GRATIS</small></h2>
    <button type="button" class="btn btn-default btn-xs deseos" data-toggle="tooltip" title="Agregar a mi lista de deseos">
<i class="fa fa-heart corazon" aria-hidden="true"></i>

    </button>
        <a href="#" class="pixelProducto ojito">
<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver Producto">
<i class="fa fa-eye" aria-hidden="true"></i>

        </a>
    </button>
    
    </div>
<!-- ============================================ -->
<div class="col-xs-12">
    <hr>
    
</div>

</li>

<!-- Producto 3 -->
<li class="col-xs-12">
    <!-- =================================================-->
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

<figure>
    <a href="#" class="pixelProducto"><img 
    src="http://localhost/ecommerce_apr/backend/vistas/img/productos/accesorios/accesorio02.jpg"
         class="img-responsive"></a>
</figure>
</div>



<!-- ========================= =======================-->
<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
<h1>
    <small>
        <a href="collar-de-diamantes" class="pixeProducto">Bolso Militar</a>
    </small>
</h1>
<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Libero dolorem debitis at? Libero, explicabo.
      Praesentium voluptate sint facilis tempora, nihil laudantium dolore nostrum. Est illo,
     quaerat officiis officia expedita veniam.</p>
    <h2><small>GRATIS</small></h2>
    <button type="button" class="btn btn-default btn-xs deseos" data-toggle="tooltip" title="Agregar a mi lista de deseos">
<i class="fa fa-heart corazon" aria-hidden="true"></i>

    </button>
        <a href="#" class="pixelProducto ojito">
<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver Producto">
<i class="fa fa-eye" aria-hidden="true"></i>

        </a>
    </button>
    
    </div>
<!-- ============================================ -->
<div class="col-xs-12">
    <hr>
    
</div>

</li>



<!-- Producto 4 -->
<li class="col-xs-12">
    <!-- =================================================-->
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

<figure>
    <a href="#" class="pixelProducto"><img 
    src="http://localhost/ecommerce_apr/backend/vistas/img/productos/accesorios/accesorio01.jpg"
         class="img-responsive"></a>
</figure>
</div>



<!-- ========================= =======================-->
<div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
<h1>
    <small>
        <a href="collar-de-diamantes" class="pixeProducto">Pulsera de Diamantes</a>
    </small>
</h1>
<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Libero dolorem debitis at? Libero, explicabo.
      Praesentium voluptate sint facilis tempora, nihil laudantium dolore nostrum. Est illo,
     quaerat officiis officia expedita veniam.</p>
    <h2><small>GRATIS</small></h2>
    <button type="button" class="btn btn-default btn-xs deseos" data-toggle="tooltip" title="Agregar a mi lista de deseos">
<i class="fa fa-heart corazon" aria-hidden="true"></i>

    </button>
        <a href="#" class="pixelProducto ojito">
<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver Producto">
<i class="fa fa-eye" aria-hidden="true"></i>

        </a>
    </button>
    
    </div>
<!-- ============================================ -->
<div class="col-xs-12">
    <hr>
    
</div>

</li>




</ul>


</div>

</div>




<!---==========================
Barra de porductos Mas vendidos
===========================------->

<div class="container-fluid  well well-sm barraProductos">
    <div class="container">

<div class="row">
    <div class="col-xs-12 organizarProductos">

    <div class="btn-group pull-right">
        <button type="button" class="btn btn-default btnGrid" id="btnGrid1">
            <i class="fa fa-th" aria-hidden="true"></i>
            <span class="col-xs-0 pull-right">GRID</span>
        </button>

        <button type="button" class="btn btn-default btnList" id="btnList1">
            <i class="fa fa-list" aria-hidden="true"></i>
            <span class="col-xs-0  pull-right">List</span>
        </button>

    </div>

    </div>
</div>

    </div>
</div>


<!---==========================
 porductos mas vendidos
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
<h1><small>LO MÁS VENDIDOS</small></h1>    
</div>
<!-------===========================================---->
<div class="col-sm-6 col-xs-12 ">
<a href="lo-mas-vendido">
    <button class="btn btn-default backColor pull-right">
        VER MÁS <span class="fa fa-chevron-right"></span>
    </button>
</a>

</div>
<!-------===========================================---->
</div>
<div class="clearfix"></div>
<hr>
</div>

<!--======================

VITRINA DE PRODUCTOS EN CUADRICULAS

===================--->
<ul class="grid1" style="display:none">

<!---PRODUCTO 1 -->
<li class="col-md-3 col-sm-6 col-xs-12">
<!-------===========================================---->

<figure>
    <a href="#" class="pixelProducto">
        <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/ropa/ropa03.jpg"
         class="img-responsive">

    </a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="#" class="pixelProducto">

Falda de Flores <br>
<span class="label label-warning fontSize">Nuevo</span>

<span class="label label-warning fontSize">40% off</span>
</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">

<h2>
<small>
<strong class="oferta"> USD $29</strong>

</small>
<small>$11</small>
</h2>

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
        <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/ropa/ropa02.jpg"
         class="img-responsive">

    </a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="#" class="pixelProducto">

Sombrero <br>


<span class="label label-warning fontSize">40% off</span>
</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">

<h2>
<small>
<strong class="oferta"> USD $29</strong>

</small>
<small>$11</small>
</h2>

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
        <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/ropa/ropa01.jpg"
         class="img-responsive">

    </a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="#" class="pixelProducto">

Playera <br>

<span class="label label-warning fontSize">40% off</span>
</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">

<h2>
<small>
<strong class="oferta"> USD $29</strong>

</small>
<small>$11</small>
</h2>

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
        <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/ropa/ropa04.jpg"
         class="img-responsive">

    </a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="#" class="pixelProducto">

Vestido Jeans <br>
<br>


</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">

<h2>

<small>USD $11</small>
</h2>

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

<!-- 
=========================================================
Vitrina de Lo mas vendido en lista 
========================================================= -->

<ul class="list1">
   <!-- Producto 1  -->

<li class="col-xs-12">

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
    <figure>
        <a href="#" class="pixelProducto">
            <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/ropa/ropa03.jpg" 
             class="img-responsive">
        </a>
    </figure>
</div>


    <!-- ============================================= -->
    <div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
        <h1>
            <small>
                <a href="falda-de-flores" class="pixelProducto">
                    Falda de flores
                    <span class="label label-warning">Nuevo</span>
                    
                    <span class="label label-warning">40% off</span>
                </a>
            </small>
        </h1>

<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Est ipsam quia expedita a animi,
     ratione modi blanditiis eius iste quasi tempora consectetur minima qui id vitae,
      dignissimos reprehenderit dolorem aperiam.</p>

      <h2>
        <small>
            <strong class="oferta">UDS $29</strong>
        </small>
        <small>$11</small>
    </h2>
<div class="btn-group pull-left enlace">
<button type="button" class="btn btn-default btn-xs deseos" idProducto="1" data-toggle="tooltip"
title="Agregar a mi lista de deseos">
<i class="fa fa-heart" aria-hidden="true"></i>
</button>

<a href="#" class="pixelProducto">
<button type="button" class="btn btn-default btn-xs "  data-toggle="tooltip"
title="Ver Producto">
<i class="fa fa-eye" aria-hidden="true"></i>
</button>
</a>


</div>

    </div>

   


<!-- =========================================== -->

</li>

</ul>


</div>

</div>






<!---==========================
Barra de porductos mas vistos
===========================------->

<div class="container-fluid  well well-sm barraProductos">
    <div class="container">

<div class="row">
    <div class="col-xs-12 organizarProductos">

    <div class="btn-group pull-right">
        <button type="button" class="btn btn-default btnGrid" id="btnGrid2">
            <i class="fa fa-th" aria-hidden="true"></i>
            <span class="col-xs-0 pull-right">GRID</span>
        </button>

        <button type="button" class="btn btn-default btnList" id="btnList2">
            <i class="fa fa-list" aria-hidden="true"></i>
            <span class="col-xs-0  pull-right">List</span>
        </button>

    </div>

    </div>
</div>

    </div>
</div>


<!---==========================
 porductos mas vistos
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
<h1><small>LO MÁS VISTOS</small></h1>    
</div>
<!-------===========================================---->
<div class="col-sm-6 col-xs-12 ">
<a href="lo-mas-visto">
    <button class="btn btn-default backColor pull-right">
        VER MÁS <span class="fa fa-chevron-right"></span>
    </button>
</a>

</div>
<!-------===========================================---->
</div>
<div class="clearfix"></div>
<hr>
</div>

<!--======================

VITRINA DE PRODUCTOS EN CUADRICULAS

===================--->
<ul class="grid1" style="display: none;">

<!---PRODUCTO 1 -->
<li class="col-md-3 col-sm-6 col-xs-12">
<!-------===========================================---->

<figure>
    <a href="#" class="pixelProducto">
        <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/cursos/curso05.jpg"
         class="img-responsive">

    </a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="#" class="pixelProducto">

Curso de Bootstrap <br>

<span class="label label-warning fontSize">90% off</span>
</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">

<h2>
<small>
<strong class="oferta"> USD $100</strong>

</small>
<small>$10</small>
</h2>

</div>

<!-------===========================================---->

<div class="col-xs-6 enlaces">
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-default btn-xs deseos" idProducto="404" 
imagen = "http://localhost/ecommerce_apr/backend/vistas/img/productos/cursos/curso05.jpg" titulo="curso de Bootstrap"
precio="10" tipo="virtual" pesos="0" data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
    <i class="fa fa-heart" aria-hidden="true"></i>
    </button>

<button type="button" class="btn btn-default btn-xs agregarCarrito">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
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
        <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/cursos/curso04.jpg"
         class="img-responsive">

    </a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="#" class="pixelProducto">

Curso de Canvas y Javascript<br>

<span class="label label-warning fontSize">90% off</span>
</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">

<h2>
<small>
<strong class="oferta"> USD $100</strong>

</small>
<small>$10</small>
</h2>

</div>

<!-------===========================================---->

<div class="col-xs-6 enlaces">
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-default btn-xs deseos" idProducto="404" 
imagen = "http://localhost/ecommerce_apr/backend/vistas/img/productos/cursos/curso04.jpg" titulo="curso de Canvas y Javascript"
precio="10" tipo="virtual" pesos="0" data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
    <i class="fa fa-heart" aria-hidden="true"></i>
    </button>

<button type="button" class="btn btn-default btn-xs agregarCarrito">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
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
        <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/cursos/curso02.jpg"
         class="img-responsive">

    </a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="#" class="pixelProducto">

Aprende Javascript desde 0 <br>

<span class="label label-warning fontSize">90% off</span>
</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">

<h2>
<small>
<strong class="oferta"> USD $100</strong>

</small>
<small>$10</small>
</h2>

</div>

<!-------===========================================---->

<div class="col-xs-6 enlaces">
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-default btn-xs deseos" idProducto="404" 
imagen = "http://localhost/ecommerce_apr/backend/vistas/img/productos/cursos/curso02.jpg" titulo="
Aprende Javascript desde 0"
precio="10" tipo="virtual" pesos="0" data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
    <i class="fa fa-heart" aria-hidden="true"></i>
    </button>

<button type="button" class="btn btn-default btn-xs agregarCarrito">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
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
        <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/cursos/curso03.jpg"
         class="img-responsive">

    </a>
</figure>
<!-------===========================================---->

<h4>

<small>
<a href="#" class="pixelProducto">

Curso de JQuery <br>

<span class="label label-warning fontSize">90% off</span>
</a>
</small>

</h4>

<!-------===========================================---->

<div class="col-xs-6 precio">

<h2>
<small>
<strong class="oferta"> USD $100</strong>

</small>
<small>$10</small>
</h2>

</div>

<!-------===========================================---->

<div class="col-xs-6 enlaces">
    <div class="btn-group pull-right">
        <button type="button" class="btn btn-default btn-xs deseos" idProducto="404" 
imagen = "http://localhost/ecommerce_apr/backend/vistas/img/productos/cursos/curso03.jpg" titulo="Curso de JQuery"
precio="10" tipo="virtual" pesos="0" data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
    <i class="fa fa-heart" aria-hidden="true"></i>
    </button>

<button type="button" class="btn btn-default btn-xs agregarCarrito">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
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


<!-- 
=========================================================
Vitrina de Lo mas vistos en lista 
========================================================= -->

<ul class="list2">
   <!-- Producto 1  -->

<li class="col-xs-12">

<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
    <figure>
        <a href="#" class="pixelProducto">
            <img src="http://localhost/ecommerce_apr/backend/vistas/img/productos/cursos/curso05.jpg" 
             class="img-responsive">
        </a>
    </figure>
</div>


    <!-- ============================================= -->
    <div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
        <h1>
            <small>
                <a href="falda-de-flores" class="pixelProducto">
                  Curso de Bootstrap
                    </a>
            </small>
        </h1>

<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Est ipsam quia expedita a animi,
     ratione modi blanditiis eius iste quasi tempora consectetur minima qui id vitae,
      dignissimos reprehenderit dolorem aperiam.</p>

      <h2>
        <small>
            <strong class="oferta">UDS $100</strong>
        </small>
        <small>$10</small>
    </h2>
<div class="btn-group pull-left enlace">
<button type="button" class="btn btn-default btn-xs deseos" idProducto="1" data-toggle="tooltip"
title="Agregar a mi lista de deseos">
<i class="fa fa-heart" aria-hidden="true"></i>
</button>

<button type="button" class="btn btn-default btn-xs deseos" idProducto="404" 
imagen = "http://localhost/ecommerce_apr/backend/vistas/img/productos/cursos/curso05.jpg" titulo="curso de Bootstrap"
precio="10" tipo="virtual" pesos="0" data-toggle="tooltip" title="Agregar a mi lista de deseos"> 
<i class="fa fa-shopping-cart" aria-hidden="true"></i>
</button>

<a href="#" class="pixelProducto">
<button type="button" class="btn btn-default btn-xs "  data-toggle="tooltip"
title="Ver Producto">
<i class="fa fa-eye" aria-hidden="true"></i>
</button>
</a>


</div>

    </div>

   


<!-- =========================================== -->

</li>

</ul>





</div>

</div>



















