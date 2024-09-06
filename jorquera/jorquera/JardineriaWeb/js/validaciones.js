        function validaTexto(id,error,largo){
        	var er ="";
        	document.getElementById(id).style.background = "#FFFFFF";
        	if(document.getElementById(id).value ==""){
        		document.getElementById(id).style.background = "#F8C2BA";
        		er=error;
        	}
        	return er;
        }

		 function valideKey(evt){

			 // code is the decimal ASCII representation of the pressed key.
			 var code = (evt.which) ? evt.which : evt.keyCode;

			 if(code==8) { // backspace.
				 return true;
			 } else if(code>=48 && code<=57) { // is a number.
				 return true;
			 } else{ // other keys.
				 return false;
			 }
		 }
   
//BOTON AGREGAR USUARIO
//     function validacionUsuario(){
//   Swal.fire({
//       title: 'Agregar Usuario',
// 			width: 1300,
//       html:

// 											'<img id="img" src="" height="100px" style="border-radius: 50%;border: 2px solid black;">' +
// 											'<div style="text-align:right;color:red; font-size:100%;">'+
// 												// '<label for="nombre" class="form-label">Enviar Correo</label>'+
// 												'<i class="bi bi-envelope-at" style="font-size:50px;"></i>'+'<br>'+
// 												'<input type="checkbox" name="" id="mail" value="1">'+
// 											'</div>'+

// 											'<br>' +
// 											'<div class="adjuntarImagen">' +
// 											'<input type="file"           id="fotoUsuario" >' +
// 											'</div>' +

//                          '<div class="container">'+
//                           '<div class="container text-center">'+
//                               '<form action="#" id="formularioAgregarusuario"  method="POST" autocomplete="nope">'+
//                               '<div class="row align-items-center">'+

//                                   '<div class="col">'+
//                                       '<label for="nombre" class="form-label">Nombre</label>'+
//                                       '<input type="text" id="nombre" name="nombreUsuario" class="swal2-input" autocomplete="nope">'+
//                                   '</div>'+

//                                   '<div class="col">'+
//                                       '<label for="txt_apePaterno" class="form-label">Apellido. Paterno</label>'+
//                                       '<input type="text" class="swal2-input" name="apellidoPater" id= "apellidoPaterno"autocomplete="nope" >'+
//                                   '</div>'+

//                                   '<div class="col">'+
//                                       '<label for="apellidoMaterno" class="form-label">Apellido. Materno</label>'+
//                                       '<input type="text" id="apellidoMaterno" name="apellidoMater" class="swal2-input">'+
//                                   '</div>'+

//                               '</div><br>'+
//                                 '<div class="row align-items-center">'+

//                                   '<div class="col">'+
//                                       '<label for="run" class="form-label">   RUN   </label>'+'<br>'+
//                                       '<input type="text" id="run" name="run" class="swal2-input">'+
//                                   '</div>'+

//                                   '<div class="col">'+
//                                       '<label for="txt_fono_1" class="form-label">Fono 1</label>'+'<br>'+
//                                       '<input type="text" id="txt_fono_1" name="fono1" class="swal2-input" >'+
//                                   '</div>'+
//                                   '<div class="col">'+
//                                       '<label for="txt_fono_2" class="form-label">Fono 2</label>'+'<br>'+
//                                       '<input type="text" id="txt_fono_2" name="fono2"class="swal2-input">'+
//                                   '</div>'+
//                               '</div>'+
//                               '<div class="row align-items-center">'+
//                                   '<div class="col">'+
//                                       '<label for="txt_correo" class="form-label">Correo</label>'+'<br>'+
//                                       '<input type="text" id="txt_correo" name="correo" class="swal2-input" >'+
//                                   '</div>'+

//                                   '<div class="col">'+
//                                   '<label for="pass" class="form-label">Clave</label>'+'<br>'+
//                                   '<input type="password" id="pass" name="pass" class="swal2-input" autocomplete="nope">'+
//                               '</div>'+

//                                   '<div class="col">'+
//                                       '<label for="txt_passConfirmacion" class="form-label">Pass Confiramcion</label>'+'<br>'+
//                                       '<input type="password" id="passConfir" name="passCon"class="swal2-input" autocomplete="nope">'+
//                                   '</div>'+
//                               '</div>'+
//                           '</div>',
// 													background: '#E2E7D8', // color de fondo
// 								         	showCancelButton: true,
// 								         	confirmButtonText: 'Enviar',
// 								         	cancelButtonText: 'Cancelar',
// 								         	showLoaderOnConfirm: true,
// 													preConfirm: () => {
// 														const mail         		= Swal.getPopup().querySelector('#mail').value
// 														const nombre         		= Swal.getPopup().querySelector('#nombre').value
// 														const imagen         		= Swal.getPopup().querySelector('#fotoUsuario').value
// 														const apellidoPaterno   = Swal.getPopup().querySelector('#apellidoPaterno').value
// 														const apellidoMaterno   = Swal.getPopup().querySelector('#apellidoMaterno').value
// 														const run         			= Swal.getPopup().querySelector('#run').value
// 														const txt_fono_1        = Swal.getPopup().querySelector('#txt_fono_1').value
// 														const txt_fono_2        = Swal.getPopup().querySelector('#txt_fono_2').value
// 														const txt_correo        = Swal.getPopup().querySelector('#txt_correo').value
// 														const pass         			= Swal.getPopup().querySelector('#pass').value
// 														const passConfir      	= Swal.getPopup().querySelector('#passConfir').value
// 														error="";
// 														// error+= validaTexto('nombre','-Falta nombre   <br>');
// 														// error+= validaTexto('apellidoPaterno','* Falta Apellido Paterno  <br>')
// 														// error+= validaTexto('apellidoMaterno','* Falta Apellido Materno  <br>')
// 														// error+= validaTexto('run','* Falta Run  <br>')
// 														// error+= validaTexto('txt_fono_1','* Falta Fono  <br>')
// 														// error+= validaTexto('txt_fono_2','* Falta Fono  <br>')
// 														// error+= validaTexto('txt_correo','* Falta Correo  <br>')
// 														// error+= validaTexto('mail','* Falta Ingresar Clave de Confirmacion  <br>')
// 														// error+= validaTexto('pass','* Falta Ingresar una clave <br>')
// 														// error+= validaTexto('passConfir','* Falta Ingresar Clave de Confirmacion  <br>')


// 														error+= validaTexto('nombre','nombeere <br>');
// 														error+= validaTexto('apellidoPaterno','Apellido Paterno <br> ')
// 														error+= validaTexto('apellidoMaterno','Apellido Materno <br>  ')
// 														error+= validaTexto('run',' Run <br>')
// 														error+= validaTexto('txt_fono_1','Falta Fono <br>')
// 														error+= validaTexto('txt_fono_2','Falta Fono <br>' )
// 														error+= validaTexto('txt_correo','Falta Correo <br> ')
// 														error+= validaTexto('mail','Falta Ingresar Clave de Confirmacion <br>')
// 														error+= validaTexto('pass','Falta Ingresar una clave <br>')
// 														error+= validaTexto('passConfir','Falta Ingresar Clave de Confirmacion <br>')

// 														if(error != ""){
// 																Swal.showValidationMessage('<p><strong>'+ error +'</strong></p>')
// 														}

// 														$.ajax({
// 																type: 'POST',  // Envío con método POST
// 																url: '../guardar/guardarUsuario.php',  // Fichero destino (el PHP que trata los datos)
// 																data: { nombre             			 :nombre,
// 																				apellidoPaterno          :apellidoPaterno,
// 																				imagen   					       :imagen,
// 																				apellidoMaterno          :apellidoMaterno,
// 																				run                			 : run,
// 																				txt_fono_1               : txt_fono_1,
// 																				txt_fono_2               : txt_fono_2,
// 																				mail			               : mail,
// 																				txt_correo               : txt_correo,
// 																				pass                		 : pass,

// 																 } // Datos que se envían
// 														})

// 											}, //FIN DE preConfirm
// 											allowOutsideClick: () => !Swal.isLoading()
// 								}).then((result) => {
// 									if (result.isConfirmed) {
// 									Swal.fire(
// 											'Usuario Creado!',
// 											'----------',
// 											'success'
// 									)
// 									}
// 							 })

// 							 let img = document.getElementById("img");
// 								let input = document.getElementById("fotoUsuario");

// 								input.onchange = (e) => {
// 										if (input.files[0])
// 												img.src = URL.createObjectURL(input.files[0]);
// 								}






















// 					 }
// 	function validacionProdwwwucto(){
// 		Swal.fire({
// 			title: 'AGREGAR PRODUCTO',
// 					width: 500,
// 					html:
// 													'<img id="img" src="" height="150px" style="border-radius: 50%;border: 2px solid black;">' +
// 													'<br><br><br>' +
// 													'<div class="adjuntarImagen">' +
// 													'<input type="file"           id="fotoUsuario" >' +
// 													'</div>' +
// 													'<br><br>'+
// 														'<div class="container">'+
// 															'<div class="container text-center">'+
// 																	'<form action="#" id="formularioAgregarusuario"  method="POST">'+
// 																	'<div class="row align-items-center">'+

// 																			'<div class="col">'+
// 																					'<label for="nombre" class="form-label">Nombre Producto</label>'+
// 																					'<input type="text" id="nombrePorducto" name="nombrePorducto" class="swal2-input">'+
// 																			'</div>'+

// 																			'<div class="col">'+
// 																					'<label for="txt_Codigo" class="form-label">Codigo Producto</label>'+
// 																					'<input type="text" class="swal2-input" name="txt_Codigo" id= "txt_Codigo" >'+
// 																			'</div>'+

// 																			'<div class="col">'+
// 																					'<label for="categoria"  class="form-label">Categoria de Producto</label>'+'<br>'+
// 																					'<select id="categoria" style="width:70%;" class="swal2-input">'+
// 																						'<option selected value="">-------------------</option>'+
// 																						'<option value="opcion1">Categoria 1</option>'+
// 																						'<option value="opcion1">Categoria 2</option>'+
// 																						'<option value="opcion1">Categoria 3</option>'+
// 																						'<option value="opcion1">Categoria 4</option>'+
// 																					'</select>'+
// 																			'</div>'+

// 																	'</div><br>'+
// 																		'<div class="row align-items-center">'+

// 																			'<div class="col">'+
// 																					'<label for="valorProducto" class="form-label"> Valor Producto   </label>'+'<br>'+
// 																					'<input type="text" id="valorProducto" name="valorProducto" class="swal2-input">'+
// 																			'</div>'+

// 																			'<div class="col">'+
// 																					'<label for="stockPorducto" class="form-label">Strock Producto</label>'+'<br>'+
// 																					'<input type="text" id="stockPorducto" name="stockPorducto" class="swal2-input" >'+
// 																			'</div>'+
// 																			'<div class="col">'+
// 																					'<label for="xxx" class="form-label">xxx </label>'+'<br>'+
// 																					'<input type="text" id="xxx" name="xxx"class="swal2-input">'+
// 																			'</div>'+
// 																	'</div>'+
// 																	'<div class="row align-items-center">'+
// 																	'<div class="col"><br>'+
// 																			'<label for="observacionProducto" class="form-label">OBSERVACION DE PRODUCTO </label>'+
// 																			'<textarea class="form-control" style="border-radius: 20px;border-color: black;" id="observacionProducto" rows="4"></textarea>'+
// 																	'</div>'+




// 																	'</div>'+
// 															'</div>',
// 																	background: '#E2E7D8', // color de fondo
// 														showCancelButton: true,
// 														confirmButtonText: 'Enviar',
// 														cancelButtonText: 'Cancelar',
// 														showLoaderOnConfirm: true,

// 																	preConfirm: () => {
// 																		const nombrePorducto         		= Swal.getPopup().querySelector('#nombrePorducto').value
// 																		const txt_Codigo   							= Swal.getPopup().querySelector('#txt_Codigo').value
// 																		const categoria         				= Swal.getPopup().querySelector('#categoria').value
// 																		const valorProducto        			= Swal.getPopup().querySelector('#valorProducto').value
// 																		const stockPorducto        			= Swal.getPopup().querySelector('#stockPorducto').value
// 																		const xxx        								= Swal.getPopup().querySelector('#xxx').value
// 																		const observacionProducto       = Swal.getPopup().querySelector('#observacionProducto').value


// 																		error="";
// 																		error+= validaTexto('nombrePorducto','Falta nombre   <br>');
// 																		error+= validaTexto('txt_Codigo','Falta Apellido Paterno  <br>')
// 																		error+= validaTexto('categoria','Falta Apellido Materno  <br>')
// 																		error+= validaTexto('valorProducto','Falta Run  <br>')
// 																		error+= validaTexto('stockPorducto','Falta Fono  <br>')
// 																		error+= validaTexto('xxx','Falta Correo  <br>')
// 																		error+= validaTexto('observacionProducto','Falta Ingresar una clave <br>')

// 																		if (!nombrePorducto) {
// 																			Swal.showValidationMessage('<h3><strong>Por favor ingresa tu nombre del Producto.</strong></h3>')
// 																	}
// 																		if (!txt_Codigo) {
// 																			Swal.showValidationMessage('<h3><strong>Por favor ingresa El Codigo Del Producto.</strong></h3>')
// 																		}
// 																		if (!categoria) {
// 																			Swal.showValidationMessage('<h3><strong>Por favor ingrese una Categoria.</strong></h3>')
// 																		}
// 																		if (!valorProducto) {
// 																			Swal.showValidationMessage('<h3><strong>Por favor ingrese un Valor del Producto.</strong></h3>')
// 																		}
// 																		if (!stockPorducto) {
// 																			Swal.showValidationMessage('<h3><strong>Por favor ingrese un Stock valido.</strong></h3>')
// 																		}
// 																		if (!xxx) {
// 																			Swal.showValidationMessage('<h3><strong>Por favor ingresa tu zxxxx.</strong></h3>')
// 																		}
// 																		if (!observacionProducto) {
// 																			Swal.showValidationMessage('<h3><strong>Por favor ingresa uan observacion del Producto.</strong></h3>')
// 																		}

// 																		const datos = new FormData();
// 																			datos.append("nombrePorducto", nombrePorducto);
// 																			datos.append("txt_Codigo", txt_Codigo);
// 																			datos.append("categoria", categoria);
// 																			datos.append("valorProducto", valorProducto);
// 																			datos.append("stockPorducto", stockPorducto);
// 																			datos.append("xxx", xxx );
// 																			datos.append("observacionProducto", observacionProducto);

// 																var respuesta = fetch("../guardar/guardarProducto.php", {
// 																	method: "POST",
// 																	body: datos
// 																})
// 															}, //FIN DE preConfirm
// 															allowOutsideClick: () => !Swal.isLoading()
// 												}).then((result) => {
// 													if (result.isConfirmed) {
// 													Swal.fire(
// 															'Producto Agregado!',
// 															'----------',
// 															'success'
// 													)
// 													}
// 											})
// 												let img = document.getElementById("img");
// 												let input = document.getElementById("fotoUsuario");

// 												input.onchange = (e) => {
// 														if (input.files[0])
// 																img.src = URL.createObjectURL(input.files[0]);
// 												}
// 	}
// 	function litarUsuariApi(){
// 		$.ajax({
// 			method: "GET",
// 			url: "https://fer-sepulveda.cl/API_PLANTAS/api-service.php?nombreFuncion=ProductoListar",
// 			success: function (response) {
// 			  console.log(response.result);
// 			  // const $contenedor = $('#div_productos');
// 			  let tabla = $("#miTabla tbody");
	   
// 			  response.result.forEach((producto) => {
// 				var fila = $("<tr>");
// 				fila.append($("<td>").text(producto.CODIGO));
// 				fila.append($("<td>").text(producto.NOMBRE));
// 				fila.append($("<td>").text(producto.DESCRIPCION));
// 				fila.append($("<td>").text(producto.PRECIO));
// 				fila.append($("<td>").text(producto.STOCK));
// 			   //  fila.append($("<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#miModal'>IMAGEN</button>"));
// 				fila.append($("<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#miModal'>"+producto.CODIGO+"</button>"));
	   
	   
	   
// 				tabla.append(fila);
	   
// 			 });
	   
// 		   },
// 			error: function (error) {
// 			console.log(error);
// 		   }
// 		  });
// 	}
// 	function validarProductoApi(){
// 		Swal.fire({
// 			title: 'AGREGAR PRODUCTO',
// 					width: 1300,
// 					html:
// 					'<img id="img" src="" height="150px" style="border-radius: 50%;border: 2px solid black;">' +
// 						'<br><br><br>' +
// 						'<div class="adjuntarImagen">' +
// 							'<input type="file"           id="fotoUsuario" >' +
// 						'</div>' +
// 								'<br><br>'+
// 									'<div class="conteainer">'+
// 										'<div class="conteainer text-center">'+
// 											'<form action="#" id="formularioAgregarusuario"  method="POST">'+
// 												'<div class="row align-items-center">'+
// 													'<div class="col">'+
// 														'<label for="nombre" class="form-label">Nombre Producto</label>'+
// 														'<input type="text" id="nombrePorducto" name="nombrePorducto" class="swal2-input"    >'+
// 													'</div>'+
// 													'<div class="col">'+
// 														'<label for="txt_Codigo" class="form-label">Codigo Producto</label>'+
// 														'<input type="text" class="swal2-input" name="txt_Codigo" id= "txt_Codigo" >'+
// 													'</div>'+
// 													'<div class="col">'+
// 													'<label for="categoria"  class="form-label">Categoria de Producto</label>'+'<br>'+
// 														'<select id="categoria" style="width:70%;" class="swal2-input">'+
// 															'<option selected value="">-------------------</option>'+
// 															'<option value="opcion1">Categoria 1</option>'+
// 															'<option value="opcion1">Categoria 2</option>'+
// 															'<option value="opcion1">Categoria 3</option>'+
// 															'<option value="opcion1">Categoria 4</option>'+
// 														'</select>'+
// 													'</div>'+
// 												'</div><br>'+
// 												'<div class="row align-items-center">'+
// 													'<div class="col">'+
// 														'<label for="valorProducto" class="form-label"> Valor Producto   </label>'+'<br>'+
// 														'<input type="text" id="valorProducto" name="valorProducto" class="swal2-input"  onkeypress="return valideKey(event);">'+
// 													'</div>'+
// 													'<div class="col">'+
// 														'<label for="stockPorducto" class="form-label">Strock Producto</label>'+'<br>'+
// 														'<input type="text" id="stockPorducto" name="stockPorducto" class="swal2-input"  onkeypress="return valideKey(event);" >'+
// 													'</div>'+
// 													'<div class="col">'+
// 														'<label for="xxx" class="form-label">xxx </label>'+'<br>'+
// 														'<input type="text" id="xxx" name="xxx"class="swal2-input">'+
// 													'</div>'+
// 												'</div>'+	
// 												'<div class="row align-items-center">'+
// 													'<div class="col"><br>'+
// 														'<label for="observacionProducto" class="form-label">OBSERVACION DE PRODUCTO </label>'+
// 														'<textarea class="form-control" style="border-radius: 20px;border-color: black;" id="observacionProducto" rows="4"></textarea>'+
// 													'</div>'+
// 												'</div>'+
// 											'</div>',
// 					background: '#E2E7D8', // color de fondo
// 					showCancelButton: true,
// 					confirmButtonText: 'Enviar',
// 					cancelButtonText: 'Cancelar',
// 					showLoaderOnConfirm: true,
// 					    preConfirm: () => {
// 							const nombre         = Swal.getPopup().querySelector('#nombrePorducto').value
// 							const codigo   		 = Swal.getPopup().querySelector('#txt_Codigo').value
// 							// const categoria   = Swal.getPopup().querySelector('#categoria').value
// 							const precio         = Swal.getPopup().querySelector('#valorProducto').value
// 							const stock        	 = Swal.getPopup().querySelector('#stockPorducto').value
// 							// const xxx         = Swal.getPopup().querySelector('#xxx').value
// 							const descripcion    = Swal.getPopup().querySelector('#observacionProducto').value

// 							error="";
// 							error+= validaTexto('nombrePorducto','Falta nombre del Producto   <br>');
// 							error+= validaTexto('txt_Codigo','Falta Codigo Del Producto  <br>')
//     						error+= validaTexto('categoria','Falta Categoria del Porducto <br>')
// 							error+= validaTexto('valorProducto','Falta el Valor Del Producto <br>')
// 							error+= validaTexto('stockPorducto','Falta Stock Del Producto  <br>')
// 							error+= validaTexto('xxx','Falta xxxx  <br>')
// 							error+= validaTexto('observacionProducto','Falta Ingresar La observacion del Producto <br>')
//                         	if(error != ""){
// 										Swal.showValidationMessage('<p><strong>'+ error +'</strong></p>')
// 									}

					
// 							console.log(codigo);  // perfecto
				
//     						var data = {
//     										nombreFuncion: "ProductoAlmacenar",
//     										parametros: [codigo, nombre, descripcion, precio, stock]
//     									};
// 								$.ajax({
// 								method: "POST",
// 								url: "https://fer-sepulveda.cl/API_PLANTAS/api-service.php",
// 								data: JSON.stringify(data),
					
// 									error: function (error) {
// 									console.log(error);
// 									}
// 								});

					
// 							}, //FIN DE preConfirm

// 								allowOutsideClick: () => !Swal.isLoading()
// 									}).then((result) => {
// 										if (result.isConfirmed) {
// 											Swal.fire(
// 												'Producto Agregado!',
// 												'----------',
// 												'success'
// 											)
// 										}
// 									})
// 									let img = document.getElementById("img");
// 									let input = document.getElementById("fotoUsuario");

// 									input.onchange = (e) => {
// 										if (input.files[0])
// 											img.src = URL.createObjectURL(input.files[0]);
// 										}
// 	}							
// 	function listarProductos() {
// 		$.ajax({
// 			method: "GET",
// 			url: "https://fer-sepulveda.cl/API_PLANTAS/api-service.php?nombreFuncion=ProductoListar",
// 			success: function (response) {
// 			console.log(response.result);
			
// 			const $cardsContainer = $('#div_productos');
// 			response.result.forEach((card) => {
// 				// Crear una nueva card con jQuery
// 				const $card = $('<div>', { class: 'col-sm-4 mb-4' }).append(
// 						$('<div>', { class: 'card' }).append(
// 						//$('<img>', { class: 'card-img-top', src: card.image, alt: card.title }),
// 						$('<div>', { class: 'card-body' }).append(
// 							$('<h5>', { class: 'card-title', text: card.NOMBRE }),
// 							$('<p>', { class: 'card-text', text: card.DESCRIPCION })
// 						)
// 					)
// 				);
// 				// Agregar la card al contenedor
// 				$cardsContainer.append($card);
// 			})
// 		},		
// 		error: function (error) {
// 			console.log(error);
// 			}
// 		});
// 	}


		function validarUsuarioApi(){
		Swal.fire({
			title: 'Agregar Usuario',
			width: 1300,
			html:'<img id="img" src="" height="100px" style="border-radius: 50%;border: 2px solid black;">' +
					'<div style="text-align:right;color:red; font-size:100%;">'+
						// '<label for="nombre" class="form-label">Enviar Correo</label>'+
						'<i class="bi bi-envelope-at" style="font-size:50px;"></i>'+'<br>'+
						'<input type="checkbox" name="" id="mail" value="1">'+
					'</div>'+'<br>' +
					'<div class="adjuntarImagen">' +
						'<input type="file" id="fotoUsuario" >' +
					'</div>' +
					'<div class="container">'+
						'<div class="container text-center">'+
							'<form action="#" id="formularioAgregarusuario"  method="POST" autocomplete="nope">'+
								// **************FILA 1
								'<div class="row align-items-center">'+
									'<div class="col">'+
										'<label for="nombre" class="form-label">Nombre</label>'+
										'<input type="text" id="nombre" name="nombreUsuario" class="swal2-input" autocomplete="nope">'+
									'</div>'+
	
									'<div class="col">'+
										'<label for="txt_apePaterno" class="form-label">Apellido. Paterno</label>'+
										'<input type="text" class="swal2-input" name="apellidoPater" id= "apellidoPaterno"autocomplete="nope" >'+
									'</div>'+
	
									'<div class="col">'+
										'<label for="apellidoMaterno" class="form-label">Apellido. Materno</label>'+
										'<input type="text" id="apellidoMaterno" name="apellidoMater" class="swal2-input">'+
										'</div>'+
									'</div><br>'+
								// **************FILA 2
								'<div class="row align-items-center">'+
									'<div class="col">'+
										'<label for="run" class="form-label">   RUN   </label>'+'<br>'+
										'<input type="text" id="run" name="run" class="swal2-input">'+
									'</div>'+
	
									'<div class="col">'+
										'<label for="txt_fono_1" class="form-label">Fono 1</label>'+'<br>'+
										'<input type="text" id="txt_fono_1" name="fono1" class="swal2-input" >'+
									'</div>'+
									'<div class="col">'+
										'<label for="txt_fono_2" class="form-label">Fono 2</label>'+'<br>'+
										'<input type="text" id="txt_fono_2" name="fono2"class="swal2-input">'+
									'</div>'+
								'</div>'+
								// **************FILA 3
								'<div class="row align-items-center">'+
									'<div class="col">'+
										'<label for="txt_correo" class="form-label">Correo</label>'+'<br>'+
										'<input type="text" id="txt_correo" name="correo" class="swal2-input" >'+
									'</div>'+
	
									'<div class="col">'+
										'<label for="pass" class="form-label">Clave</label>'+'<br>'+
										'<input type="password" id="pass" name="pass" class="swal2-input" autocomplete="nope">'+
									'</div>'+
	
									'<div class="col">'+
										'<label for="txt_passConfirmacion" class="form-label">Pass Confiramcion</label>'+'<br>'+
										'<input type="password" id="passConfir" name="passCon"class="swal2-input" autocomplete="nope">'+
									'</div>'+
								'</div>'+
							'</form>'+
						'</div>'+
					'</div>', // FIN CONTENEDOR
							background: '#E2E7D8', // color de fondo
							showCancelButton: true,
							confirmButtonText: 'Enviar',
							cancelButtonText: 'Cancelar',
							showLoaderOnConfirm: true,
								preConfirm: () => {
								const mail         		= Swal.getPopup().querySelector('#mail').value
								const nombre         	= Swal.getPopup().querySelector('#nombre').value
								const imagen         	= Swal.getPopup().querySelector('#fotoUsuario').value
								const apellido			= Swal.getPopup().querySelector('#apellidoPaterno').value
								const apellidoMaterno   = Swal.getPopup().querySelector('#apellidoMaterno').value
								const run         		= Swal.getPopup().querySelector('#run').value
								const txt_fono_1        = Swal.getPopup().querySelector('#txt_fono_1').value
								const txt_fono_2        = Swal.getPopup().querySelector('#txt_fono_2').value
								const correo        	= Swal.getPopup().querySelector('#txt_correo').value
								const contrasena        = Swal.getPopup().querySelector('#pass').value
								const passConfir      	= Swal.getPopup().querySelector('#passConfir').value

								error="";
								error+= validaTexto('nombre','nombre, ');
								error+= validaTexto('apellidoPaterno','Apellido Paterno, ')
								error+= validaTexto('apellidoMaterno','Apellido Materno,  ')
								error+= validaTexto('run',' Run,')
								error+= validaTexto('txt_fono_1','Falta Fono,')
								error+= validaTexto('txt_fono_2','Falta Fono', )
								error+= validaTexto('txt_correo','Falta Correo, ')
								error+= validaTexto('mail','Falta Ingresar Clave de Confirmacion,')
								error+= validaTexto('pass','Falta Ingresar una clave')
								error+= validaTexto('passConfir','Falta Ingresar Clave de Confirmacion')
									if(error != ""){
										Swal.showValidationMessage('<p><strong>'+ error +'</strong></p>')
									}

									console.log(apellido);
									var data = {
										nombreFuncion: "ClienteAlmacenar",
										parametros: [correo, contrasena, nombre, apellido]
									};

									// *************************CON-API ***********************
									$.ajax({
										method: "POST",
										url: "https://fer-sepulveda.cl/API_PLANTAS/api-service.php",
										data: JSON.stringify(data),			
											error: function (error) {
											console.log(error);
											}
										});
									// *************************CON-API ***********************
								},

							// *************************CON AJAX *******************************************************************************************
								// 	$.ajax({
								// 		type: 'POST',  // Envío con método POST
								// 		url: '../guardar/guardarUsuario.php',  // Fichero destino (el PHP que trata los datos)
								// 		data: { nombre           :nombre,
								// 				apellidoPaterno  :apellidoPaterno,
								// 				imagen   		 :imagen,
								// 				apellidoMaterno  :apellidoMaterno,
								// 				run              : run,
								// 				txt_fono_1       : txt_fono_1,
								// 				txt_fono_2       : txt_fono_2,
								// 				mail			 : mail,
								// 				txt_correo       : txt_correo,
								// 				pass             : pass,
								// 			} // Datos que se envían
								// 	})//FIN AJAX
								// }, //FIN DE PRE-CONFIRM
							// *************************CON AJAX *******************************************************************************************
								
				allowOutsideClick: () => !Swal.isLoading()
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire(
						'Usuario Agregado!',
						'----------',
						'success'
					)
				}
			})
			let img 		= document.getElementById("img");
			let input 		= document.getElementById("fotoUsuario");
			input.onchange = (e) => {
				if (input.files[0])
					img.src = URL.createObjectURL(input.files[0]);
				}				   
				
	}
	function validarProductoApi(){
	Swal.fire({
			title: 'AGREGAR PRODUCTO',
					width: 1300,
					html:
					'<img id="img" src="" height="150px" style="border-radius: 50%;border: 2px solid black;">' +
						'<br><br><br>' +
						'<div class="adjuntarImagen">' +
							'<input type="file"           id="fotoUsuario" >' +
						'</div>' +
								'<br><br>'+
									'<div class="conteainer">'+
										'<div class="conteainer text-center">'+
											'<form action="#" id="formularioAgregarusuario"  method="POST">'+
												'<div class="row align-items-center">'+
													'<div class="col">'+
														'<label for="nombre" class="form-label">Nombre Producto</label>'+
														'<input type="text" id="nombrePorducto" name="nombrePorducto" class="swal2-input"   >'+
													'</div>'+
													'<div class="col">'+
														'<label for="txt_Codigo" class="form-label">Codigo Producto</label>'+
														'<input type="text" class="swal2-input" name="txt_Codigo" id= "txt_Codigo" >'+
													'</div>'+
													'<div class="col">'+
													'<label for="categoria"  class="form-label">Categoria de Producto</label>'+'<br>'+
														'<select id="categoria" style="width:70%;" class="swal2-input">'+
															'<option selected value="">-------------------</option>'+
															'<option value="opcion1">Categoria 1</option>'+
															'<option value="opcion1">Categoria 2</option>'+
															'<option value="opcion1">Categoria 3</option>'+
															'<option value="opcion1">Categoria 4</option>'+
														'</select>'+
													'</div>'+
												'</div><br>'+
												'<div class="row align-items-center">'+
													'<div class="col">'+
														'<label for="valorProducto" class="form-label"> Valor Producto   </label>'+'<br>'+
														'<input type="text" id="valorProducto" name="valorProducto" class="swal2-input"  onkeypress="return valideKey(event);">'+
													'</div>'+
													'<div class="col">'+
														'<label for="stockPorducto" class="form-label">Strock Producto</label>'+'<br>'+
														'<input type="text" id="stockPorducto" name="stockPorducto" class="swal2-input"  onkeypress="return valideKey(event);" >'+
													'</div>'+
													'<div class="col">'+
														'<label for="xxx" class="form-label">xxx </label>'+'<br>'+
														'<input type="text" id="xxx" name="xxx"class="swal2-input">'+
													'</div>'+
												'</div>'+	
												'<div class="row align-items-center">'+
													'<div class="col"><br>'+
														'<label for="observacionProducto" class="form-label">OBSERVACION DE PRODUCTO </label>'+
														'<textarea class="form-control" style="border-radius: 20px;border-color: black;" id="observacionProducto" rows="4"></textarea>'+
													'</div>'+
												'</div>'+
											'</div>',
					background: '#E2E7D8', // color de fondo
					showCancelButton: true,
					confirmButtonText: 'Enviar',
					cancelButtonText: 'Cancelar',
					showLoaderOnConfirm: true,
					    preConfirm: () => {
							const nombre         = Swal.getPopup().querySelector('#nombrePorducto').value
							const codigo   		 = Swal.getPopup().querySelector('#txt_Codigo').value
							// const categoria   = Swal.getPopup().querySelector('#categoria').value
							const precio         = Swal.getPopup().querySelector('#valorProducto').value
							const stock        	 = Swal.getPopup().querySelector('#stockPorducto').value
							// const xxx         = Swal.getPopup().querySelector('#xxx').value
							const descripcion    = Swal.getPopup().querySelector('#observacionProducto').value

							error="";
							error+= validaTexto('nombrePorducto','Falta nombre del Producto   <br>');
							error+= validaTexto('txt_Codigo','Falta Codigo Del Producto  <br>')
    						error+= validaTexto('categoria','Falta Categoria del Porducto <br>')
							error+= validaTexto('valorProducto','Falta el Valor Del Producto <br>')
							error+= validaTexto('stockPorducto','Falta Stock Del Producto  <br>')
							error+= validaTexto('xxx','Falta xxxx  <br>')
							error+= validaTexto('observacionProducto','Falta Ingresar La observacion del Producto <br>')
                        	if(error != ""){
										Swal.showValidationMessage('<p><strong>'+ error +'</strong></p>')
									}

					

    						var data = {
    										nombreFuncion: "ProductoAlmacenar",
    										parametros: [codigo, nombre, descripcion, precio, stock]
    									};
								$.ajax({
								method: "POST",
								url: "https://fer-sepulveda.cl/API_PLANTAS/api-service.php",
								data: JSON.stringify(data),
					
									error: function (error) {
									console.log(error);
									}
								});

					
							}, //FIN DE preConfirm

								allowOutsideClick: () => !Swal.isLoading()
									}).then((result) => {
										if (result.isConfirmed) {
											Swal.fire(
												'Producto Agregado!',
												'----------',
												'success'
											)
										}
									})
									let img = document.getElementById("img");
									let input = document.getElementById("fotoUsuario");

									input.onchange = (e) => {
										if (input.files[0])
											img.src = URL.createObjectURL(input.files[0]);
										}
	}
	function validarCompraProductoApi(){
	Swal.fire({
			title: 'Realizando Compra<br>Por favor, ingresa la información necesaria para completar la compra:',
					width: 1300,
				 html:
                    '<div style="display:flex; align-items:center;">' +
                       '<div style="width: 50%; padding-right: 10px;">' +
                            '<input type="text" id="nombre" placeholder="Codigo" class="swal2-input" value="A001">' +
                            '<input type="text" id="direccion" placeholder="Nombre-Porudcto" class="swal2-input" value="Cortadora de Pasto">' +
                            '<input type="text" id="ciudad" placeholder="Nombre-Comprador" class="swal2-input" >' +
                            '<input type="text" id="telefono" placeholder="Teléfono" class="swal2-input" >' +
                            '</div>' +
                            '<div style="width: 50%; text-align: center;">' +
                            '<img src="img/cortadora_pasto.jpg" style="max-width: 100%;" />' +
                            '<br>'+
                            '<p>$ 5.990</p>'+
                            // '<input type="text" id="telefono" placeholder="Teléfono" style="width:30%;"class="wal2-input" value="$50.990" >' +

                        '</div>' +
                    '</div>',
					background: '#E2E7D8', // color de fondo
					showCancelButton: true,
					confirmButtonText: 'Comprar',
					cancelButtonText: 'Cancelar',
					showLoaderOnConfirm: true,
					    preConfirm: () => {
							const id_compra         = Swal.getPopup().querySelector('#nombre').value
							const codigo_producto   	 = Swal.getPopup().querySelector('#direccion').value
							const cantidad   = Swal.getPopup().querySelector('#ciudad').value
							const stock      = Swal.getPopup().querySelector('#telefono').value

							error="";
							error+= validaTexto('nombre','Falta nombre del Producto   <br>');
							error+= validaTexto('direccion','Falta Codigo Del Producto  <br>')
    						error+= validaTexto('ciudad','Falta Cantidad del Porducto <br>')
                        error+= validaTexto('telefono','Falta Ingresar Telefono del Comprador <br>')


                        	if(error != ""){
										Swal.showValidationMessage('<p><strong>'+ error +'</strong></p>')
									}

					
							console.log(codigo_producto);  // perfecto
				
    						var data = {
    										nombreFuncion: "CompraDetalleAlmacenar",
    										parametros: [id_compra, codigo_producto, cantidad]

    									};
								$.ajax({
								method: "POST",
								url: "https://fer-sepulveda.cl/API_PLANTAS/api-service.php",
								data: JSON.stringify(data),
					
									error: function (error) {
									console.log(error);
									}
								});

					
							}, //FIN DE preConfirm

								allowOutsideClick: () => !Swal.isLoading()
									}).then((result) => {
										if (result.isConfirmed) {
											Swal.fire(
												'Agregado a la canasta !',
												'----------',
												'success'
											)
										}
									})
						
	}
	function litarUsuariApi(){
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






