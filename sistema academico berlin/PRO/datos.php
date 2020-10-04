<?php
session_start();
?>


<html>
<head>

</head>
<body background="000.jpg" text=blue>
<CENTER>

<?php
echo "<br>";

$val=$_SESSION['idestudiante'];
require_once("pag2.php");
valoresdc($val);
echo "<H2>"."<CENTER>"."DATOS PERSONALES"."</CENTER>"."</H2>";

$conexion=mysql_connect("localhost","root","") or die("problemas en la conexion");
mysql_select_db("sistema_academico",$conexion)or die("problemas en la seleccion de la base de datos");

$registros=mysql_query("select * from estudiantes where ID_EST='$val'",$conexion)or die("problemas en el select:".mysql_error());


if($reg=mysql_fetch_array($registros))
{
echo "CODIGO: ".$val;
?>
<form action="damodi.php" method="post">

<table>
<tr>
<td><B>Apellido Paterno:</B><br>&nbsp</td>
<td><?php echo $reg['PATERNO'] ?><br>&nbsp
</td></tr>

<tr><td>
<B>Apellido Materno:</B><br>&nbsp</td><td>
<?php echo $reg['MATERNO'] ?><br>&nbsp</td></tr>

<tr>
<td><B>Nombres:</B><br>&nbsp</td><td>
<?php echo $reg['NOMBRES'] ?><br>&nbsp</td></tr>

<tr>
<td><B>Contraseña:</B><br>&nbsp</td><td><input type="password" name="conn" value="<?php echo $reg['CONTRASEÑA'] ?>">
<br><input type="hidden" name="conv" value="<?php echo $reg['CONTRASEÑA'] ?>">
	</td></tr>

<tr>
<td><B>Modulo a Cursar:</B><br>&nbsp</td>
<td><?php echo $reg['MODULO_CURSAR'] ?><br>&nbsp</td></tr>


</table>


<input type="submit" value="modificar CONTRASEÑA">
<?php
}

mysql_close($conexion);

?>
</body>
</html>