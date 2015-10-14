<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> 
		<title> Pagina 1 </title>
	</head>
	<body>
		<?php
			for($cont=1;$cont<=10;$cont++){
			echo "<a href='pagina2.php?parametre=$cont'>$cont</a><br/>";
			}
		?>
	</body>
</html>