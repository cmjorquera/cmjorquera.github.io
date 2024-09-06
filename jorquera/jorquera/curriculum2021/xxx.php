<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mi Curriculum C.J</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel ="stylesheet" href="css/xxx.css">  <!--este tiene el HEADER-->
    <link rel ="stylesheet" href="css/fontello.css">  <!--este tiene el HEADER-->
</head>

 
 <header>
 
     <div class='contenedor'>
                 <h1 class='icon-download'>Curriculum</h1><br><br> 
                 <p id="fecha_mostrar":></p>         
 
             <script>
                 var today = new Date();
                 var hora = 'Fecha: '+ today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();          
                 document.getElementById("fecha_mostrar").innerHTML = hora;                
                 
                 // $date = new DateTime();
                 // echo $date->format('Y-m-d H:i:s');
             </script>
             
             
 
                
                 
                 <input  type ='checkbox' id='menu-bar'>  <!--Cuando se haga un check-->
                 <label  class ='icon-menu' for='menu-bar'></label>             
                 <nav class='menu'>                
                     <a href ='inicio.php'>Inicio</a><!--Me faltaba el / al principip-->
                     <a href ='Antecedentes_Personales.php'>Antecedentes Personales</a><!--Me faltaba el / al principip-->
                     <a href ='Formacion.php'>Formacion</a>
                     <a href ='Experiencia.php'>Experiencia Laboral</a>
                     <a href ='Observaciones.php'>Observaciones</a>
                     <a href ='login.php'>Login</a>
                  
                 </nav>
     </div> 
 </header>