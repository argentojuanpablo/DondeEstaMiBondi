<?PHP
$json=array();
	if(isset($_GET["x"]) && isset($_GET["y"])){
		$x=$_GET['x'];
		$y=$_GET['y'];
		$results["x"]=$x;
		$results["y"]=$y;
		$json['coordenadas'][]=$results;
		echo json_encode($json);
		
	}
	else{
		   	$results["user"]='';
			$results["pwd"]='';
			$results["nombre"]='';
			$json['coordenadas'][]=$results;
			echo json_encode($json);
		}
?>