<html>
	<body>
		<table border=1 >
			<?php
				$cont=0;
				$e=0;
				$s=0;
				for($e=0;$e<10;$e++){
					echo "<tr>";
					for($s=0;$s<10;$s++){
					$cont++;
                        if($s === 0){
                            echo "<td style=padding:20px; >";
                            echo "<b>" . $cont . "</b>";
                            echo "</td>";
                        }else{
                            echo "<td style=padding:20px; >";
                            echo $cont;
                            echo "</td>";
                        }
					}
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>