<?php
	$con = mysqli_connect('localhost', 'root', 'DAW22015', 'bd_exemple');
	$datos = mysqli_query($con, "SELECT * FROM producto WHERE pro_preu>=10&&pro_preu<=20 ORDER BY pro_id");
	if(mysqli_num_rows($datos) > 0){
		while($pro = mysqli_fetch_array($datos)){
			echo "$pro[pro_id] - $pro[pro_nom] - $pro[pro_descripcio] - $pro[pro_preu]<br/>";
		}
	}else{
		echo "No hi ha dades ";
	}
	mysqli_close($con);
?>