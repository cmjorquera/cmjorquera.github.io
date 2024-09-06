
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mi Curriculum C.J</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
          
    <link rel ='stylesheet' href='css/estilos.css'>
    <link rel ='stylesheet' href='css/info.css'>
    <link rel ='stylesheet' href='css/banner.css'>
    <link rel ='stylesheet' href='css/menu.css'>
    <link rel ='stylesheet' href='css/blog.css'>
    <link rel ='stylesheet' href='css/fontello.css'>

    <link href = "https://fonts.googleapis.com/css?family= Roboto + Mono & display = swap" rel = "stylesheet">


    <body>   
    <?php
    include('head.php'); //incluye la cabezera
    ?> 
    
</head>
        
    <main> <!--Todo esto es el contenido principal de la web-->
        <section id='banner'>
        <img src="img/fondo_pantalla_tecnologia.jpg" >   <!--Imagen De Fondo--> 
            <div class='login'>                           
                <form method ='post' action='validar.php' enctype="application/x-www-form-urlencoded">
                    <table border='10'>                       
                    <td>Usuario</td>
                    <td><input type='text' name= 'usuario_for'></td><tr>        

                 <div class="form-group" id="contrasena-group">
                        <td>Contraseña</td>
                        <td><input type='password' name='pass_for'></td><tr>
                        <td>                  
                <div class="form-group" id="contrasena-group">
                        <input type= 'submit' name ='boton_enviar' value='Enviar' > 
                        </td>                            
                    </div> 
                </form>
            </div>              
                    
            </section>

    <?php
        error_reporting(E_ALL  ^  E_NOTICE  ^  E_WARNING); //Error por si el usuario o pass no COINCIDEN 
        if ($_GET["error"]=="si") { 
        echo "<span style='color:#F00; font-size:2em;'>Usuario No encontrado</span>";
        }
    ?>     

    </main>
    

    </body>
    
</html>








































































































<!-- 





























<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bienvenido Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
    <link rel ='stylesheet' href='css/estilos.css'>
    <link rel ='stylesheet' href='css/info.css'>
    <link rel ='stylesheet' href='css/banner.css'>
    <link rel ='stylesheet' href='css/menu.css'>
    <link rel ='stylesheet' href='css/blog.css'>
    <link rel ='stylesheet' href='css/fontello.css'>

    <link href = "https://fonts.googleapis.com/css?family= Roboto + Mono & display = swap" rel = "stylesheet">
</head>
<body>
        
<section id='banner'>
    <img src="img/fondo_pantalla_tecnologia.jpg" >                  
    <div class='contenedor'>                           
        <form method ='post' action='validar.php' enctype="application/x-www-form-urlencoded">
            <table border='5'>    
            <tr>
                <td>Usuario</td>
                <td><input type='text' name= 'usuario_for'></td><tr>
                <tr>
                    <div class="form-group" id="contrasena-group">
                        <td>Contraseña</td>
                        <td><input type='password' name='pass_for'></td><tr>
                        <td>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type= 'submit' name ='boton_enviar' value='Enviar' > 
                        </td>                            
                    </div>                    
            </table>   
        </form>              
    </div>         
 </section>


</body>
 
</html> -->