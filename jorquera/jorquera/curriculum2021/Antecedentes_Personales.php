<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mi Curriculum C.J</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 


    <link href = "https://fonts.googleapis.com/css?family= Roboto + Mono & display = swap" rel = "stylesheet">

</head>
    <body>   
    <?php
    include('head.php'); //incluye la cabezera
    ?>          

        <main>
            <section id='banner'>
                <img src="img/fondo_pantalla_tecnologia.jpg" >
                <div class='contenedor'>
                    <h2> Cristian Jorquera G</h2> 
                    <p>Antecedentes Personales</p>
                    <p> Me quieres Contratar</p>                    
                    <a  href='#'> Leer mas</a>
                    <a  href='/curriculum/Inicio.php'> Volver al Inicio</a>
                </div> 
            </section>


            <section id='Bienvenidos'>
                <h2> Bienvenido a el Curriculum </h2>
                <p> Cristian Michel Jorquera Gonzalez </p>
                <p> 16.423.446-0 </p>
                <p> Analista Programador </p>
                <p>Vicuña Rozas #5500 - Quinta Normal</p>
            </section>

            <section id='blog'>
                <h3>Conocimientos</h3>
                <div class='contenedor'>
                    <article>
                        <img src="img/logo_laravel.png" alt="">
                        <h4>Conociminetos de Framework Laravel</h4>
                    </article>
                    <article>
                        <img src="img/logo_python.png" alt="">
                        <h4>Diplomado en lenguaje Python</h4>
                    </article>
                    <article>
                        <img src="img/logo_mysql.png" alt="">
                        <h4>Conociminetos en BD MySql</h4>
                    </article>
                    <article>
                        <img src="img/logo_java.png" alt="">
                        <h4>Conociminetos en Java</h4>
                    </article>
                </div>
            </section>  
            
            <section id= 'info'>
                <h3>Algun dia la Diciplina vencera a la inteligencia</h3>
                <div class ='contenedor'>
                  <div class="info-pet">
                      <img src="img/nex_new_logo.png" alt="">
                      <h4>Practica Laboral</h4>
                  </div>
                  <div class="info-pet">
                      <img src="img/undermarket_logo.png" alt="">
                      <h4>Actualmente</h4>
                  </div>
                  <div class="info-pet">
                      <img src="img/duoc_logo.png" alt="">
                      <h4>Estudios</h4>
                  </div>
                  <div class="info-pet">
                      <img src="img/molina_morales_logo.jfif" alt="">
                      <h4>Trasporte</h4>
                  </div>
            </section>
        </main>
    
    <?php
    include('pie.php'); //incluye el footer
    ?>

    </body>
</html>