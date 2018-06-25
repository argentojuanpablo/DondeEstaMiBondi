<?PHP
$hostname="localhost";
$database="choferes";
$username="root";
$password="";
$json=array();

		
		$conexion=mysqli_connect($hostname,$username,$password,$database);
		
		$consulta="SELECT user FROM chofer";
		$resultado=mysqli_query($conexion,$consulta);

		if($consulta){
		
			while($reg=mysqli_fetch_array($resultado)){
				$json['datosUsuarios'][]=$reg;
			}
			mysqli_close($conexion);
			echo json_encode($json);
		}
		else{
			$results["user"]='';
			$json['datosUsuarios'][]=$results;
			echo json_encode($json);
		}
		
		

?>