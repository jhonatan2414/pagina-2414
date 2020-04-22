function VistaInicio(){
	var parametros = {};

	$.ajax({

		data: parametros,
		url: "Vinicio.php",
		type: "POST",
		beforeSend: function(){
			$("#contenido").html();
		},
		success: function(vista){
			$("#contenido").empty();
			$("#contenido").html(vista);
		}

	});
}