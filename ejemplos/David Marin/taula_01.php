<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<table width="300" border="1" align="center">
	<tr>
		
    <?php

    for($num=1;$num<=4;$num++){
        echo "<tr>";
			for($numero=1;$numero<=4;$numero++){
                echo "<td>$num</td>";           
			}
        echo "</tr>";
    }
		?>
        
	</tr>
</table>

<br/><br/>
<table width="300" border="1" align="center">
	<tr>
		
    <?php

    for($num=1;$num<=16;$num++){
        echo "<tr>";
        if($num=4||$num=8||$num=12||$num=16){
            echo "</tr>"; 
			        
			}
         echo "<td>$num</td>";
    }
		?>
        
	</tr>
</table>

<br/><br/>
<table border="1" align="center">
	<?php
		for($numero=1;$numero<=8;$numero++){
			echo "<tr><td>$numero</td></tr>";
		}
	?>
</table>

</body>
</html>