<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	include ("crear_sesion.php");
	try{
	
	$base=new PDO ("mysql:host=localhost; dbname=work", "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM usuarios_pass WHERE USER= :login AND PASSWORD= :password";
	$resultado=$base->prepare ($sql);
	$login=htmlentities(addslashes($_POST["login"]));
	$password=htmlentities(addslashes($_POST["password"]));	
	$resultado->bindValue(":login", $login);
	$resultado->bindValue(":password", $password);	
	$resultado->execute();
	$numero_registro=$resultado->rowCount();
	if($numero_registro!=0){
		
		//echo "<h2>Haz iniciado sesion</h2>";
		session_start();
		$_SESSION ["usuarios"]=$_POST["login"];
		header("location:Usuarios_registrados");
	}else{
		
		header("location:Login_page.php");
	}
	}catch (Exception $e){
	die ("Error: " . $e->getMessage());
	}
?>
</body>
</html>