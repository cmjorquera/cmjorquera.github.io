<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mi Curriculum C.J</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- clases CSS -->
    <link rel ='stylesheet' href='css/estilos.css'>
      
    <!-- icones de pie --->
    <link href = "https://fonts.googleapis.com/css?family= Roboto + Mono & display = swap" rel = "stylesheet">

</head>
<body>   
    <?php
    include('head.php'); //incluye la cabezera
    ?>      

        
    <main> <!--Todo esto es el contenido principal de la web-->
        <section id='banner'>
           
            <img src="img/Fondo_pantalla_pc.jpg" >                 
                <div class='contenedor'>  <!--Contiene a todo el texto-->
                    <h2> Cristian  Jorquera G</h2> 
                    <p>Inicio</p>
                    <p>Analista Programador</p>                   
                    <p> Me quieres Contratar</p>                    
                    <a  href='#'> Leer mas</a>
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
                      <h4 href="https://www.google.cl/">Practica Laboral</h4>
                  </div>
                  <div class="info-pet">
                      <img src="img/undermarket_logo.png" alt="">
                      <h4>Desarrollador Web </h4>
                  </div>
                  <div class="info-pet">
                      <img src="img/duoc_logo.png" alt="">
                      <h4>Estudios</h4>
                  </div>
                  <div class="info-pet">
                      <img src="img/Logo-Quilombo.png" alt="">
                      <h4 href ='https://www.quilombo.cl/web/'>Desarrollador y Soporte Web</h4>
                      
                  </div>
            </section>
    </main>
    
    <?php
    include('pie.php'); //incluye el footer
    ?>

</body>    
</html>