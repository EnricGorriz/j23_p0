<?php
	$opMin = $_GET['opMin'];
	$opMax = $_GET['opMax'];
	$nomPr = $_GET['nomPr'];
	if($opMin == ""){
		$opMin = 0;
	}
	$con = mysqli_connect('localhost', 'root', 'DAW22015', 'bd_exemple');
	$sql = ("SELECT * FROM producto WHERE pro_preu>=$opMin ");
	
	if($opMax!==""){
		$sql.= "&& pro_preu<=$opMax ";
	}
	if ($nomPr!== ""){
		$sql.= "&& pro_nom LIKE '%$nomPr%' ";
	}
	$sql.= "ORDER BY pro_id";
	$datos = mysqli_query($con, $sql);
	if(mysqli_num_rows($datos) > 0){
		while($pro = mysqli_fetch_array($datos)){
			echo "$pro[pro_id] - $pro[pro_nom] - $pro[pro_descripcio] - $pro[pro_preu]<br/>";
		}
	}else{
		echo "No hi ha dades ";
	}
	mysqli_close($con);
	echo "<br/>";
	echo "<a href='preuMinMax.php'>Volver</a>";
	echo "</center>";
?>
