<?php
session_start();
?>
<html>
<head>
</head>
<body background="00.jpg" text=blue>

<form action="adimaterias.php" method="post">
<?php


	echo "<br>";
	$val=$_SESSION['idestudiante'];
	require_once("pag2.php");
	valoresdc($val);
	echo "<br>";
	echo "<H2><CENTER>INSCRIPCION</CENTER></H2>";


$conexion=mysql_connect("localhost","root","")or die("problemas en la conexion");

mysql_select_db("sistema_academico",$conexion)or die("problemas en la seleccion de la base de datos");

$registros=mysql_query("select * from estudiantes where ID_EST='$val'",$conexion) or die("problemas en el select:".mysql_error());


while($reg=mysql_fetch_array($registros))
{
	$modulo=$reg['MODULO_CURSAR'];
echo "<CENTER>"."<H4>".MODULO A CURSAR:".$reg['MODULO_CURSAR']."</H4>"."<BR>";

$registrosmod=mysql_query("select * from materias where modulo='$modulo'",$conexion) or die("problemas en el select:".mysql_error());



while($regmo=mysql_fetch_array($registrosmod))
{
	$exmat=$regmo['ID_MAT'];

echo "<b>"."MATERIA:  "."</b>".$regmo['MATERIA']."<br>        ";

$www=mysql_query("select * from notas where ID_EST='$val'",$conexion)or die("problemas en el selct:".mysql_error());
if($w=mysql_fetch_array($www))
{
	$registrosnot=mysql_query("select * from notas where ID_MAT='$exmat' and 	NOTA<51 and ID_EST='$val'",$conexion) or die("problemas en el 	select:".mysql_error());
	echo "<b>"."Paralelo:  "."   ";
	while($regnot=mysql_fetch_array($registrosnot))
	{
	?>
	<select name="codigoparalelo">
	<?php
	$registrosnompar=mysql_query("select ID_PAR, NOMBRE_PAR from paralelo where 	ID_MAT='$exmat'",$conexion)or die("problemas en el select:".mysql_error());
	while($regnompar=mysql_fetch_array($registrosnompar))
	{
	echo "<option value=\"$regnompar[ID_PAR]\">$regnompar[NOMBRE_PAR]</option>";
}
?>
</SELECT>
<input type="submit" value="adicionar">
<?php

}
else
{
echo "nuevos datos";


}
echo "<br>";
echo "<p>";
}
}
?>
</form>
</body>
</html>