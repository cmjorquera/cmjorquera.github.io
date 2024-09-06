
function validaTexto(id,error,largo){
	var er ="";
	document.getElementById(id).style.background = "#FFFFFF";
	if(document.getElementById(id).value ==""){
		document.getElementById(id).style.background = "#F8C2BA";
		er=error;
	}
	return er;
}

function listarProductosMasPulento() {
   $.ajax({
     method: "GET",
     url: "https://fer-sepulveda.cl/API_PLANTAS/api-service.php?nombreFuncion=ProductoListar",
     success: function (response) {
       console.log(response.result);
       // const $contenedor = $('#div_productos');
       let tabla = $("#miTabla tbody");

       response.result.forEach((producto) => {
         var fila = $("<tr>");
         fila.append($("<td>").text(producto.CODIGO));
         fila.append($("<td>").text(producto.NOMBRE));
         fila.append($("<td>").text(producto.DESCRIPCION));
         fila.append($("<td>").text(producto.PRECIO));
         fila.append($("<td>").text(producto.STOCK));
        //  fila.append($("<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#miModal'>IMAGEN</button>"));
         fila.append($("<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#miModal'>"+producto.CODIGO+"</button>"));



         tabla.append(fila);

      });

    },
     error: function (error) {
     console.log(error);
    }
   });
}


























