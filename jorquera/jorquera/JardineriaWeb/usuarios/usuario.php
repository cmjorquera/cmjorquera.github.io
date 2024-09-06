<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--CSS DE BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--ICONOS BOOSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!---IMAGEN EN PESTAÑA-->
    <link rel="shortcut icon" href="../img/logo_3.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="js/validaciones.js"></script>
</head>
<!-- <script>
function listarPoductoComoyose(){
   echo ='<table  class="tabla">';
   echo = "cristian";
  echo = '</table>';
}
</script> -->

<body>
    <div class="container-fluid" style="background-color:fffffff;">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <div id="sidebar" class="collapse collapse-horizontal show border-end">
                    <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                        <a href="superUsuario.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                            data-bs-parent="#sidebar"><i class="bi bi-bootstrap"></i> <span>Incio</span> </a>

                        <a href="usuario.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                            data-bs-parent="#sidebar"><i class="bi bi-film"></i> <span>Usuarios</span></a>

                        <a href="clientes.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                            data-bs-parent="#sidebar"><i class="bi bi-heart"></i> <span>Clientes</span></a>

                        <a href="colaboradores.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                            data-bs-parent="#sidebar"><i class="bi bi-bricks"></i> <span>Colaboradores</span></a>

                        <a href="productos.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                            data-bs-parent="#sidebar"><i class="bi bi-clock"></i> <span>Porductos</span></a>

                        <a href="graficos.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                            data-bs-parent="#sidebar"><i class="bi bi-archive"></i> <span>Graficos</span></a>

                        <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                            data-bs-parent="#sidebar"><i class="bi bi-gear"></i> <span>Item</span></a>

                        <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                            data-bs-parent="#sidebar"><i class="bi bi-calendar"></i> <span>Item</span></a>
                        <a href="https://qa.seduc.cl/JardineriaWeb/index.php"
                            class="list-group-item border-end-0 d-inline-block text-truncate"
                            data-bs-parent="#sidebar"><i class="bi bi-bootstrap"></i> <span>Volver a la pag</span>
                        </a>
                    </div>
                </div>
            </div>

            <main class="col ps-md-2 pt-2">
                <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse"
                    class="border rounded-3 p-1 text-decoration-none">
                    <i class="bi bi-list"></i>
                </a>
                <hr>
                <!-- Contenedor con datos  -->
                <div class="row" style="background-color:#EDEDED;">
                    <div class="col-12">
                        <!--CONTENEDOR CENTAL-->
                        <div class="col py-3">
                            <div class="container">
                                <!--CONTENEDOR BOTONES-->
                                <div class="row" style="padding: 50px;">
                                    <div class="col order-last">
                                        <div class="d-grid gap-5 col-12 mx-auto">
                                            <a href="productos.php" class="btn btn-dark btn-lg button"
                                                style="height: 100px;"> Listar los productos
                                            </a>

                                            <button class="btn btn-dark btn-lg button" style="height: 100px;"
                                                type="button" onclick="xxx()">
                                                Agregar Porducto
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-grid gap-5 col-12 mx-auto">
                                            <button class="btn btn-dark btn-lg button" style="height: 100px;"
                                                type="button" onclick="validacionUsuario()">
                                                Agregar Usuario
                                            </button>
                                            <button class="btn btn-dark btn-lg button" style="height: 100px;"
                                                type="button">
                                                Productos Vendidos
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="" id="div_productos">
                                    <button type="button" onclick="listarProductosMasPulento()"
                                        class="btn btn-primary boton">Listar Usuarios
                                    </button>
                                    <table class="table table-success table-striped" id="miTabla"
                                        style="border:5px solid black;">
                                        <thead style="background-color:#3BBBF2;">
                                            <tr style="padding:90px 90px 90px 90px; text-align:center;">
                                                <th style="text-align:center;">Código</th>
                                                <th>Nombre</th>
                                                <th>apellido</th>
                                                <th>Precio</th>
                                                <th>Stock</th>
                                                <th>Imagen</th>

                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Imagen Del Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <p>Nombre </p><script>+card.CODIGO+</script> -->
                    <img src="../img/cortadora_pasto.jpg" width="100%" height="100%"  alt="MDN">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>