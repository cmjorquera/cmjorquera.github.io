function validacionProd333ucto(){
    Swal.fire({
        title: 'AGREGAR PROwwwwDUCTO',
				width: 1300,
				html:
												'<img id="img" src="" height="150px" style="border-radius: 50%;border: 2px solid black;">' +
												'<br><br><br>' +
												'<div class="adjuntarImagen">' +
												'<input type="file"           id="fotoUsuario" >' +
												'</div>' +
												'<br><br>'+
													 '<div class="container">'+
														'<div class="container text-center">'+
																'<form action="#" id="formularioAgregarusuario"  method="POST">'+
																'<div class="row align-items-center">'+

																		'<div class="col">'+
																				'<label for="nombre" class="form-label">Nombre Producto</label>'+
																				'<input type="text" id="nombrePorducto" name="nombrePorducto" class="swal2-input">'+
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
																				'<input type="text" id="valorProducto" name="valorProducto" class="swal2-input">'+
																		'</div>'+

																		'<div class="col">'+
																				'<label for="stockPorducto" class="form-label">Strock Producto</label>'+'<br>'+
																				'<input type="text" id="stockPorducto" name="stockPorducto" class="swal2-input" >'+
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
																	const codigo   			= Swal.getPopup().querySelector('#txt_Codigo').value
																	const categoria         				= Swal.getPopup().querySelector('#categoria').value
																	const precio        			= Swal.getPopup().querySelector('#valorProducto').value
																	const stock        			= Swal.getPopup().querySelector('#stockPorducto').value
																	const xxx        								= Swal.getPopup().querySelector('#xxx').value
																	const descripcion       = Swal.getPopup().querySelector('#observacionProducto').value


																	error="";
																	error+= validaTexto('nombrePorducto','Falta nombre   <br>');
																	error+= validaTexto('txt_Codigo','Falta Apellido Paterno  <br>')
																	error+= validaTexto('categoria','Falta Apellido Materno  <br>')
																	error+= validaTexto('valorProducto','Falta Run  <br>')
																	error+= validaTexto('stockPorducto','Falta Fono  <br>')
																	error+= validaTexto('xxx','Falta Correo  <br>')
																	error+= validaTexto('observacionProducto','Falta Ingresar una clave <br>')

																	if (!nombre) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingresa tu nombre del Producto.</strong></h3>')
															    }
																	if (!codigo) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingresa El Codigo Del Producto.</strong></h3>')
																	}
																	if (!categoria) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingrese una Categoria.</strong></h3>')
																	}
																	if (!precio) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingrese un Valor del Producto.</strong></h3>')
																	}
																	if (!stock) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingrese un Stock valido.</strong></h3>')
																	}
																	if (!xxx) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingresa tu zxxxx.</strong></h3>')
																	}
																	if (!descripcion) {
																		Swal.showValidationMessage('<h3><strong>Por favor ingresa uan observacion del Producto.</strong></h3>')
																	}
                                                    
                                                                    
                                                                    var data = {
                                                                        nombreFuncion: "ProductoAlmacenar",
                                                                        parametros: [codigo, nombre, descripcion, precio, stock]
                                                                    };


																	const datos = new FormData();
																		datos.append("nombrePorducto", nombrePorducto);
																		datos.append("txt_Codigo", txt_Codigo);
																		datos.append("categoria", categoria);
																		datos.append("valorProducto", valorProducto);
																		datos.append("stockPorducto", stockPorducto);
																		datos.append("xxx", xxx );
																		datos.append("observacionProducto", observacionProducto);

															var respuesta = fetch("../guardar/guardarProducto.php", {
																method: "POST",
																body: datos
															})
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
