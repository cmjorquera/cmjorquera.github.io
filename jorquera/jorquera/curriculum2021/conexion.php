<!-- Conexión a la base de datos,
codificación de caracteres,
seleccion de base de datos. -->
<?php

   $servername = 'localhost';
   $database = "bd_pagina"; //nombre de la BD  ---> mysql_select_db (deberia haber usado esa)
   $username = "root"; //Usuario
   $password = "";
   
    
    $conexion = mysqli_connect($servername, $username, $password, $database);  
    if (!$conexion) {
          die("ERROR de conexion: ". mysqli_connect_error());
    }else{
       
   

            echo "---------------------------------------------------------------</br>";
            echo "Conexion EXITOSA</br>";
            echo "---------------------------------------------------------------</br>";
}
    //para poder ingresar caracteres con Ñ , ya sea en la BD y o  aca en el codigo
    $conexion -> set_charset("utf8");
    
?>