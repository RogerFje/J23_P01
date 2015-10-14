<!--
Exemple unit a 151006_pagina1.php que recull el paràmetre passat per url i el mostra per pantalla
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
<?php

for($i=1; $i<=10; $i++) //<-un ciclo de 10 (uno para cada tabla)
{
    echo "$_GET[parametro] x $i = ". ($_GET['parametro']*$i) . "<br/>";
}
?>
	<br/><br/>
	<a href="ej2.php">Volver</a>
</body>
</html>