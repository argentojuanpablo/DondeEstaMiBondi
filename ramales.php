<?PHP
$hostname="localhost";
$database="choferes";
$username="root";
$password="";
$json=array();

		if( isset($_GET["linea"]) ){
		$linea=$_GET['linea'];
		
				
		$conexion = mysqli_connect($hostname,$username,$password,$database);
		$consulta="SELECT Ramal FROM `colectivo ramal` where linea='{$linea}'";
		$resultado=mysqli_query($conexion,$consulta);
		
		while($registro=mysqli_fetch_object($resultado)){
			$json['ramales'][]=$registro;
			
		}
		mysqli_close($conexion);
		echo json_encode($json);
?>