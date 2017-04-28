<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	h1 {text-align:center;}
	table {
	width;25%;
	background-color:aqua;
	border: 2px dotted #f00;
		margin:auto;}
	
	.izq{text-align: right;}
	.der{text-align: left;}
	.td{text-align: center;
	padding: 10px;
	}
	</style>
</head>

<body>
<h1> 
  
Iniciar sesion</h1>
<form action="comprueba_login.php" method="post">
<table>
  <tr>
    <td class="izq"> User: </td>
    <td class="der"><input type="text" name="login"/></td>
  </tr>
  <tr>
    <td class="izq"> Password: </td>
    <td><input type="password" name="password"/>
  </tr>
  <tr>
    <td height="26" colspan="2"><input type="submit" name="enviar" value="LOGIN"></td>
  </tr>
</table>


<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>