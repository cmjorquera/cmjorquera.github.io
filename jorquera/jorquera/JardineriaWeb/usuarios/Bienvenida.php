<!doctype html>
<html lang="en">

<head>
    <title>SUPER USUARIO</title>
    <?php
     include("../include/header.php");
     include("../class/conexion.php");
     ?>
    <!-- incluye toda el head y sus dependencias /css/ boostrap/validaciones-->
</head>
<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    background-image: url("../imagenes/imagen_fondo.jpg");
    margin: 1vw;
    background-size: cover;
    /* Ajusta el tamaño de la imagen para cubrir completamente el contenedor */
    background-repeat: no-repeat;
    /* Evita la repetición de la imagen */
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 1vw;

}

.box {
    width: calc(33.33% - 1vw);
    height: 20vh;
    margin-bottom: 1vw;
    padding: 0.5vw;
    background-color: #ccc;
    position: relative;
}

.box img {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 100%;
}

.box:hover {
    box-shadow: 0 0 1vw #000;
}

.box:nth-child(2n) {
    background-color: #eee;
}

.box:nth-child(3n) {
    background-color: #ddd;
}

.box:nth-child(4n) {
    background-color: #bbb;
}

/* modal bienvenido */
.swal2-html-container {
    border-radius: 20px;
    border-color: black;

}

.swal2-popup {
    border: 5px solid black;
    border-radius: 20px;
    border: 5px solid black

}

 .swal2-title {
                background-color: #333;
                color: #fff;
                padding: 30px;
                } 

.swal2-input {
    border: 1px solid #ccc;
    /* margin-bottom: 20px; */
    border-radius: 20px;
    border-color: black;
    /* border-bottom-color: green; */
    background-color: white;
}

.swal2-input:focus {
    background-color: #CDE6E9;
}

.cuerpoMail {
    background-color: #C1E3E4;
}

#imagen_logo {
    width: 100%;
    text-align: center;
    border-radius: 50%;
}

.footer {
    style="font-size:11px;
line-height: 1.2;
    color: #3d4348;
    text-align: center;
    padding-bottom: 20px;
}

.footer_1 {
    font-size: 11px;
    line-height: 1.2;
    color: #3d4348;
    text-align: center;
    padding-bottom: 2px;
}

.footerr {
    width: 95%;
}

#candado {
    width: 50px;
    height: 80px;
}

.img_bienvenida {
    border: 2px solid red;
    border-radius: 50%;
    /* width:  14%;
                    height: 30%; */

}

.my-swal-image-borde:hover {
    box-shadow: 0px 0px 15px 15px #ec731e;
}
</style>


<body>
    <?php
        include("../include/cabezera2.php");
    ?>
    <div class="container-fluid" style="background-color:fffffff;">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <!--MENU LATETRAL-->
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
            <!--MENU LATETRAL-->

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
                            <div class="conteainer">


                                <div class="contaeiner text-center">
                                    <div class="row gy-5">
                                        <div class="col-6" style="padding: 20px 100px">
                                            <div class="card text-bg-light mb-3"
                                                style="border-left-color: #0170A1; border-left-width: 1em">
                                                <div class="card-header">Venta Junio</div>
                                                <div class="card-body">
                                                    <h3 class="card-title">$ 3.000.500</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6" style="padding: 20px 100px">
                                            <div class="card text-bg-light  mb-3"
                                                style="border-left-color: #D3DA9C; border-left-width: 1em">
                                                <div class="card-header">Venta Ultimos 7 Dias</div>
                                                <div class="card-body">
                                                    <h3 class="card-title">$5.000.000</h3>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-6" style="padding: 20px 100px">
                                            <div class="card text-bg-light  mb-3"
                                                style="border-left-color: #8C220D; border-left-width: 1em">
                                                <div class="card-header">Venta Hoy</div>
                                                <div class="card-body">
                                                    <h3 class="card-title"> Nada</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6" style="padding: 20px 100px">
                                            <div class="card text-bg-light mb-3"
                                                style="border-left-color: #065826; border-left-width: 1em">
                                                <div class="card-header">Venta Hoy</div>
                                                <div class="card-body">
                                                    <h3 class="card-title"> Nada</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="container">
                                             <!-- **************************** BOTON PRODUCTO ********************** -->
                                    <div class="box" style="background-color: #ccc;">
                                        <a title="Los Tejos" href="productos.php"   >
                                            <i class="bi bi-airplane" style="font-size: 100px; padding-left:150px;"></i>
                                        </a>
                                        <div class="dropdown" data-bs-theme="light">                                            
                                            <button class="btn btn-secondary" type="button" id="dropdownMenuButtonLight"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-list" style="color:black; font-size:100%;" onclick="validarProductoApi()">PRODUCTOS</i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight"
                                                id="miDropdown" >
                                                <li><a class="dropdown-item" href="productos.php">AGREGAR-PRODUCTO</a></li>
                                                <li><a class="dropdown-item" href="productos.php">LISTAR-PRODUCTO</a></li>                                         
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"> 
                                                        <img style="width:10%; height:10%;" src="productos.php" alt="" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <!-- **************************** BOTON USUARIO ********************** -->
                                    <div class="box" style="background-color: #ccc;">
                                        <a title="Los Tejos" href="usuario.php" >
                                            <i class="bi bi-person-circle" style="font-size: 100px; padding-left:150px;"></i>
                                        </a>
                                        <div class="dropdown" data-bs-theme="light">
                                            <button class="btn btn-secondary" type="button" id="dropdownMenuButtonLight"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-list" style="color:black; font-size:100%;" onclick="validarUsuarioApi()">USUARIOS</i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight"
                                                id="miDropdown" >
                                                <li><a class="dropdown-item" href="usuario.php">AGREGAR-PRODUCTO</a></li>
                                                <li><a class="dropdown-item" href="usuario.php">LISTAR-PRODUCTO</a></li>                                         
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#"> 
                                                        <img style="width:10%; height:10%;" src="usuario.php" alt="" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- **************************** BOTON ENVIOS********************* -->
                                    <div class="box" style="background-color: #ccc;">
                                        <a title="Los Tejos" href="" target="_blank">
                                            <i class="bi bi-box-seam"style="font-size: 100px; padding-left:150px;"></i>

                                        </a>
                                        <div class="dropdown" data-bs-theme="light">
                                            <button class="btn btn-secondary" type="button" id="dropdownMenuButtonLight"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-list" style="color:black; font-size:100%" ;>ENVIOS PROGRAMADOS</i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
                                                <li><a class="dropdown-item" href="https://www.latercera.com/"
                                                        target="_blank">LA
                                                        TERCERA</a></li>
                                                <li><a class="dropdown-item" href="https://web.whatsapp.com/"
                                                        target="_blank">WHASAP</a>
                                                </li>
                                                <li><a class="dropdown-item" href="https://www.youtube.com/"
                                                        target="_blank">YOUTUBE</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="https://seriesyonkis.cx/episode/la-teoria-del-big-bang-2x2/"
                                                        target="_blank">SERIES</a></li>

                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-image-fill"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>










                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function(event) {
        Swal.fire({
            title: 'Bienvenido,' + '\n' + 'Cristian' + ' ' + 'jorquera',
            // imageUrl: '../img/logo_3.png',
            imageWidth: 6000,
            imageHeight: 300,
            imageAlt: 'Imagen personalizada',
            confirmButtonText: 'Aceptar',
            // customClass: {
            //     image: 'img_bienvenida'
            // }
        })

    })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>