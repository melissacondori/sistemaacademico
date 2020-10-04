<?php
session_start();
?>

<html>
<head>
</head>
<body background="00.jpg" text=blue>

<FONT COLOR="#FF0000" >

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$val=$_SESSION['idestudiante'];

$conexion=mysql_connect("localhost","root","") or die("problemas en la conexion");
mysql_select_db("sistema_academico",$conexion)or die("problemas en la seleccion de la base de datos");



$registros=mysql_query("update estudiantes set CONTRASEÑA='$_REQUEST[conn]' where CONTRASEÑA='$_REQUEST[conv]' and ID_EST='$val'", $conexion)or 
die("problemas en el select:".mysql_error());




echo "LA CONTRASEÑA FUE MODIFICADA!!!";

?>
</FONT>
</body>
</html>