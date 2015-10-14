<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<?php
	//Condicional simple: if
	$numero=20;
	if($numero<10){
		echo "El número $numero es menor que 10<br/>";
	} elseif ($numero<20) {
		echo "El número $numero es mayor o igual que 10 y menor que 20<br/>";
	} else {
		echo "El número $numero es mayor o igual que 20<br/>";
	}



	echo "<br/>";
	//Ejemplo de bucle con for que va de 0 a 10 de uno en uno y lo muestra por pantalla
	echo "Ejemplo con For:<br/>";
	for($contador=0;$contador<=10;$contador++){
		echo "Contador: " . $contador . "<br/>";
	}

	echo "<br/>";
	//Ejemplo de bucle con while que va de 2 a 50 de dos en dos y lo muestra por pantalla
	echo "Ejemplo con While:<br/>";
	$contador=2;
	while($contador<=50){
		echo "Contador: $contador<br/>";
		$contador+=2;		
	}

	echo "<br/>";
	//Ejemplo de bucle con do..while que va de 10 a 0 de uno en uno y lo muestra por pantalla
	echo "Ejemplo con Do..while:<br/>";
	$contador=10;
	do{
		echo "Contador: $contador<br/>";
		$contador--;		
	}while($contador>=-10);

?>
</html>