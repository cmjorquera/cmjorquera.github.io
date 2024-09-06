<?php
include('conexion.php');
session_start();


$usuario = $_POST['usuario_for'];
$pass = $_POST['pass_for'];

$consulta = "SELECT * FROM login WHERE rut = '$usuario' AND clave = '$pass'";

$ejecutar = mysqli_query($conexion,$consulta);
$resul = mysqli_num_rows($ejecutar);

if ($resul > 0) {
		session_start();
		$_SESSION['activo'] = true;
		$_SESSION['usuario_for'] = $usuario;
		$_SESSION['pass_for'] = $pass; //esta es necesaria?
		
		// if ($usuario == 'cristian') { //si el usuario es cristian que me ingrese a uan pagina exusiva para mi 
			header("Location:inicio.php");		
		//  }

}else{
     header("Location:login.php?error=si");
          
}

?>