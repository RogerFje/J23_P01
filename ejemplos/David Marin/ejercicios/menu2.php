
<!DOCTYPE html>
<html>
<body>

Bienvenido <?php echo $_POST["nombre"]." ". $_POST["apellido"];?><br/>
Tu Nombre de usuario: <?php echo $_POST["userid"];?><br/>
Tu contrseña: <?php echo $_POST["psw"];?><br/>
Tu correo es: <?php echo $_POST["email"];?><br/>
Su género es: <?php echo $_POST["sexo"];?><br/>
Tienes un total de: <?php echo $_POST["hijos"];?><br/>
Mensaje: <br/><?php echo $_POST["mensaje"];?><br/>
</body>
</html> 