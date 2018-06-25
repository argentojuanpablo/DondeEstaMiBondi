<?PHP
$hostname="localhost";
$database="choferes";
$username="root";
$password="";
$json=array();
				
		$conexion = mysqli_connect($hostname,$username,$password,$database);
		$consulta="SELECT Linea FROM `colectivo linea`";
		$resultado=mysqli_query($conexion,$consulta);
		
		while($registro=mysqli_fetch_object($resultado)){
			$json['colectivos'][]=$registro;
			
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
?>