<html>
    <head>
        <style>
        table{
            border: 1px;
            background: linear-gradient(to bottom right, rgba(0,92,185,0), rgba(0,140,220,1));
        }
        </style>
</head>
	<body>
		<table border=1  >
			<?php
				$cont=0;
				$e=0;
				$s=0;
				for($e=1;$e<=4;$e++){
					echo "<tr>";
					for($s=0;$s<4;$s++){
					$cont= $e + $s;
                            echo "<td style=padding:20px; >";
                            echo $cont;
                            echo "</td>";
					}
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>
