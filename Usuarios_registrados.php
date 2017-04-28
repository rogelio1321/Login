<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<h1>Bienvenidos usuarios</h1>

<body>
<p>
  <?php
session_start();
	if (!isset($_SESSION["usuarios"])){
		header("Location:Login_page.php");
	}
	
?>
  <?php
echo "hola: " . $_SESSION["usuarios"] . "<br><br>"	
?>
<p><a href="Cerrar_sesion.php">Cerrar sesion</a></p>

</p>
<p>&nbsp;</p>	
</body>
</html>