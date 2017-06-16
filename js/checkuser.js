$(document).ready(function(){
	
	$(".campoEmail").change(function(){
		
		
		var url="includes/comprobarUsuario.php?user=" + $(".campoEmail").val();
		
	
		$.get(url,usuarioExiste,"json");
			

	});
});

function usuarioExiste(respuesta){
		
		var exp = /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/;
		var correo = $(".campoEmail").val();
			
		 if ( respuesta.data=="Existe" && exp.test(correo)) {
			
			$(".noimg1").css("display", "inline-block");
		
			$(".okimg1").css("display", "none");
		} else if ( respuesta.data=="Existe" && !exp.test(correo) ){
		
			$(".noimg1").css("display", "inline-block");
		
			$(".okimg1").css("display", "none");
		
		}else if ( respuesta.data=="Disponible" && exp.test(correo) ){
		
			$(".okimg1").css("display", "inline-block");
		
			$(".noimg1").css("display", "none");
		
		}else if ( respuesta.data=="Disponible" && !exp.test(correo) ){
		
			$(".noimg1").css("display", "inline-block");
		
			$(".okimg1").css("display", "none");
		}
			
	}
