<?php
include ("conexion.php");
if (isset($_POST['signin']) && !empty($_POST['signin']) && isset($_POST['pasword']) && !empty($_POST['pasword']))
{
$con=mysqli_connect($host,$user,$pw)or die("problemas al conectar");
mysqli_select_db($con,$db)or die("problemas al conectar la bd");
mysqli_query($con,"INSERT INTO usuarios_pass (USER,PASSWORD) VALUES ('$_POST[signin]',' $_POST[pasword]')");
echo"A creado una sesion";
	
	

}else{
	echo "problemas al insertar datos";
}
?>	
<p><a href="Login_page.php">volver para iniciar sesion</a></p>

</p>