/*=============================================
PLANTILLA
=============================================*/

// var rutaOculta = $("#rutaOculta").value;
var rutaOculta = $("#rutaOculta").val();
// Herramienta tooltip
$('[data-toggle="tooltip"]').tooltip();


$.ajax({

	url:rutaOculta+"ajax/plantilla.ajax.php",
	success:function(respuesta){

		var colorFondo = JSON.parse(respuesta).colorFondo;
		
		var colorTexto = JSON.parse(respuesta).colorTexto;
		var barraSuperior = JSON.parse(respuesta).barraSuperior;
		var textoSuperior = JSON.parse(respuesta).textoSuperior;
	
	$(".backColor, .backColor a").css({"background": colorFondo, "color":colorTexto})
	
	$(".barraSuperior, .barraSuperior a").css({"background": barraSuperior, "color":textoSuperior})
	
	}


})

/*=============================================
CUADRICULA O LISTA
=============================================*/


var btnList = $(".btnList");


for(var i =0; i<btnList.length; i++){

	$("#btnGrid"+i).click(function(){

var numero = $(this).attr("id").substr(-1);
		$(".list"+numero).hide();
		
		$(".grid"+numero).show();
	
		$("#btnGrid"+numero).addClass("backColor");
		
		$("#btnList"+numero).removeClass("backColor");
		
	})
		
		
		$("#btnList"+i).click(function(){
			var numero = $(this).attr("id").substr(-1);
		
			$(".list"+numero).show();
			
			$(".grid"+numero).hide();
			$("#btnGrid"+numero).removeClass("backColor");
			$("#btnList"+numero).addClass("backColor");

			
			
			})
		



}



// =======================================
// Efectos con el scroll
// =======================================


$(window).scroll(function(){

	var scrollY = window.pageYOffset;

	if(window.matchMedia("(min-width:768px)").matches){

		if($(".banner").html()!=null){
	if(scrollY < ($(".banner").offset().top)-200)
	{
		$(".banner img").css({"margin-top":-scrollY/2 + "px"})
	}
	else{
		scrollY = 0;
	}
}
	}

})


$.scrollUp({
	scrollText:"",
	scrollSpedd:3000,
	easingType:"easeOutQuint"
});

// ================
// MIGAS DE PAN
// ===============


var pagActiva = $(".pagActiva").html();

if(pagActiva !=null){
	//la g es para varios
	var regPagActiva = pagActiva.replace(/-/g, " ");
	$(".pagActiva").html(regPagActiva);
	
	
}


// ================
// ENLACES PAGINACI??N
// ===============

var url = window.location.href;
var indice = url.split("/");

var pagActual = indice[6];

if(isNaN(pagActual)){

	$("#item1").addClass("active");
}
else{
	if(indice.pop != "#"){

		$("#item"+pagActual).addClass("active");
	}
	
}


