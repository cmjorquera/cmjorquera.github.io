	
<?php
	class MySQL
		{
			private $conexion;
			private $total_consultas;
			private $error;


			public function MySQL($bd,$usuario,$pass)
			{/*
			    if(!isset($this->conexion))
			    {
			        // ************************BASE DE DATOS SEDUC ******************
			        $this->conexion = mysqli_connect("localhost", "qaseduc_ucomun", "jorquera86;");// or die(mysqli_error());
			        mysqli_select_db("qaseduc_".$bd,$this->conexion);// or die(mysqli_error());
			     }
			   */
		     	if(!isset($this->conexion))
		     	{
		     	    $this->conexion=mysqli_connect('localhost', 'qaseduc_ucomun', 'jorquera86;', "qaseduc_seduc_".$bd);
		     	    if(mysqli_connect_errno())
		     	    {
		     	        printf("Connect failed: %s\n", mysqli_connect_error());
		     	        exit();
		     	    }
							// else{
							// 	echo("conexion exitosa");
							// }
		        }
					}

			public function consulta($consulta)
				{/*
					$this->total_consultas++;
					$resultado = mysqli_query($consulta,$this->conexion);
					if(!$resultado)
						{
							echo 'MySQL Error: ' . mysqli_error();
							exit;
						}
					return $resultado;
					*/
					$this->total_consultas++;
					$resultado = mysqli_query($this->conexion, $consulta);
					if(!$resultado)
					{
					    echo 'MySQL Error: '.mysqli_error($this->conexion);
					    exit;
					}
					return $resultado;

				}

			public function fetch_array($consulta)
				{
					return mysqli_fetch_array($consulta);
				}

			public function num_rows($consulta)
				{
					return mysqli_num_rows($consulta);
				}

			public function getTotalConsultas()
				{
					return $this->total_consultas;
				}

				//GUARDAR
			public function guardar($sql)
				{
					$bl=0;
					$resultado=mysqli_query($this->conexion,$sql);
					if(!$resultado)
						{
							$message='Invalid query: ' . mysqli_error() . "\n";
							$message.=mysqli_errno();
							$bl=mysqli_errno();
						}
					return $bl;
				}

			public function borrar($sql)
				{
					$resultado=mysqli_query($sql);
					if(!$resultado)
						{
							$message='Invalid query: ' . mysqli_error() . "\n";
							$message.=mysqli_error();
							$bl=mysqli_error();
						}
				}
				//Cierra la conexion no-persistente con el servidor MySQL.
			function CerrarConexion()
				{
					if(!@mysqli_close($this->conexion))
						{
							$this->error = mysqli_error();
							return( False );
						}
					else
						{
							return( True );
						}
				}
//Libera la memoria associoada a la variable donde se guarda la consulta.
function LimpiarConsulta() //Libera la memoria associoada a la variable donde se guarda la consulta.
		{
			if(!@mysqli_free_result($this->consulta))
				{
					$this->error = mysqli_error();
					return( False );
				}
			else
				{
					return( True );
				}
		}
		//------------------------------------ FUNCION PARA SELECCIONAR SI O NO --------
		    function select_sino($valor)
		    {
		    	$psi=$pno="";
		    	if($valor == "SI")	$psi=" selected";
		    	if($valor == "NO")	$pno=" selected";

			   	echo "<option value='si' $psi>Si</option>"."\n";
			   	echo "<option value='no' $pno>No</option>"."\n";
		    }
		//--------FIN-------------------------- FUNCION PARA SELECCIONAR SI O NO -------
		function select_sinoo($valor)
		{
			$psi=$pno="";
			if($valor == "SI")	$psi=" checked";
			if($valor == "NO")	$pno=" checkbox";
			echo '<input type="checkbox"'.'checked'.'/>';
		}

				function num_registro($enlace,$tabla,$campo,$valor)
				{
					$sql = "SELECT * FROM $tabla WHERE $campo = '$valor'";
					$result_incorporacion = mysqli_query($enlace, $sql);
					return $result_incorporacion->num_rows;
				}






		} //Fin CLase

// FUNCION PARA GUARDAR EL IP
		function get_client_ip() {
					 $ipaddress = '';
					 if (getenv('HTTP_CLIENT_IP'))
							 $ipaddress = getenv('HTTP_CLIENT_IP');
					 else if(getenv('HTTP_X_FORWARDED_FOR'))
							 $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
					 else if(getenv('HTTP_X_FORWARDED'))
							 $ipaddress = getenv('HTTP_X_FORWARDED');
					 else if(getenv('HTTP_FORWARDED_FOR'))
							 $ipaddress = getenv('HTTP_FORWARDED_FOR');
					 else if(getenv('HTTP_FORWARDED'))
							$ipaddress = getenv('HTTP_FORWARDED');
					 else if(getenv('REMOTE_ADDR'))
							 $ipaddress = getenv('REMOTE_ADDR');
					 else
							 $ipaddress = 'UNKNOWN';
					 return $ipaddress;
			 }


		$ip= get_client_ip();         //$_POST['ip'];;














?>

