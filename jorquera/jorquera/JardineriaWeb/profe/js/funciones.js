function almacenarProducto() {
    var codigo = $("#txt_codigo").val();
    var nombre = $("#txt_nombre").val();
    var descripcion = $("#txt_descripcion").val();
    var precio = $("#txt_precio").val();
    var stock = $("#txt_stock").val();

    var data = {
        nombreFuncion: "ProductoAlmacenar",
        parametros: [codigo, nombre, descripcion, precio, stock]
    };

    $.ajax({
        method: "POST",
        url: "https://fer-sepulveda.cl/API_PLANTAS/api-service.php",
        data: JSON.stringify(data),
        success: function (response) {
            console.log(response);
            console.log(response.result[0].RESPUESTA);

            if (response.result[0].RESPUESTA == 'OK') {
                console.log('PRODUCTO ALMACENADO CORRECTAMENTE');

            } else  {
               console.log('SE HA PRODUCIDO UN ERROR');

            }

        },
        error: function (error) {
            console.log(error);
        }
    });
}


function listarProductos() {
    $.ajax({
        method: "GET",
        url: "https://fer-sepulveda.cl/API_PLANTAS/api-service.php?nombreFuncion=ProductoListar",
        success: function (response) {
            console.log(response.result);
            
            const $cardsContainer = $('#div_productos');

            response.result.forEach((card) => {
                // Crear una nueva card con jQuery
                const $card = $('<div>', { class: 'col-sm-4 mb-4' }).append(
                  $('<div>', { class: 'card' }).append(
                    //$('<img>', { class: 'card-img-top', src: card.image, alt: card.title }),
                    $('<div>', { class: 'card-body' }).append(
                      $('<h5>', { class: 'card-title', text: card.NOMBRE }),
                      $('<p>', { class: 'card-text', text: card.DESCRIPCION })
                    )
                  )
                );
                // Agregar la card al contenedor
                $cardsContainer.append($card);
            })
        },
        error: function (error) {
            console.log(error);
        }
    });
}