<?php
session_start();
?>
<html>
<head>
</head>
<body background="00.jpg" text=blue>

<?php
echo "<br>";

$val=$_SESSION['idestudiante'];
require_once("pag2.php");
valoresdc($val);
echo "<br>";
echo "<H2><CENTER>INSCRIPCION</CENTER></H2>";

$sw=1;
if($_REQUEST['x']=="a")
{
$sw="A";
}
else
{
	if($_REQUEST['x']=="b")
	{
	$sw="B";
	}
	else
	{
		if($_REQUEST['x']=="c")
		{
		$sw="C";
		}
		else
		{
		echo "Seleccione el paralelo!!!";
		}
	}
}


if($sw!=1)
{

$conexion=mysql_connect("localhost","root","")or die("problemas en la conexion");
mysql_select_db("sistema_academico",$conexion)or die("problemas en la seleccion de la base de datos");

$registros=mysql_query("select * from estudiantes where ID_EST='$val'",$conexion) or die("problemas en el select:".mysql_error());

if($reg=mysql_fetch_array($registros))
{
$modulo=$reg['MODULO_CURSAR'];

$registros1=mysql_query("select * from materias where MODULO='$modulo' and ID_MAT='$_REQUEST[nombre_materia]'",$conexion) or die("problemas en el select:".mysql_error());

if($reg1=mysql_fetch_array($registros1))
{
$idmat=$reg1['ID_MAT'];


$registros11=mysql_query("select * from paralelo where ID_MAT='$idmat' and NOMBRE_PAR='$sw'",$conexion) or die("problemas en el select:".mysql_error());
if($reg11=mysql_fetch_array($registros11))
{

$idpar=$reg11['ID_PAR'];
mysql_query("insert into inscripcion(ID_EST,ID_PAR) values ('$val','$idpar')",$conexion)or
die("problemas en el select:".mysql_error());

echo "<h4>Su inscripcion fue un exito"."<br>";
?>
<a href="inscri.php">volver a inscripcion</a>
<?php

}
}
else
{
echo "verifique la materia!!!"."<br>";
echo "Recuerde que el modulo a cursar es: ";
echo "$modulo";
}
}


}



?>
</body>
</html>