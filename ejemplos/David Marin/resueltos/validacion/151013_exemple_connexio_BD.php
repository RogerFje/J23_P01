<?php
	//realizamos la conexión con mysql
	$con = mysqli_connect('localhost', 'root', '', 'BD_exemple');
	//ejecutamos la consulta que devuelve todos los registros cuyo campo pro_preu (precio) sea igual o superior a 30
	$sql = "SELECT * FROM producto WHERE pro_preu>=$_REQUEST[precio_min] AND pro_preu<=$_REQUEST");
    echo $sql;

	
	mysqli_close($con);
?>