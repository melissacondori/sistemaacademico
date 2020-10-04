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
echo "<h3>"." <center>Materias a cursar:"."</h3>"."<h4>";
?>
<center>
<TABLE>
<tr bgcolor="#ff9900">
<TD><center><H3>&nbsp &nbsp CODIGO&nbsp &nbsp</TD><TD><center><h3> &nbsp &nbsp  MATERIA &nbsp &nbsp</TD></TR>
<?php


$conexion=mysql_connect("localhost","root","")or die("problemas en la conexion");
mysql_select_db("sistema_academico",$conexion)or die("problemas en la seleccion de la base de datos");

$registros=mysql_query("select * from estudiantes where ID_EST='$val'",$conexion) or die("problemas en el select:".mysql_error());

while($reg=mysql_fetch_array($registros))
{
$modulo=$reg['MODULO_CURSAR'];

$registrosmod=mysql_query("select * from materias where modulo='$modulo'",$conexion) or die("problemas en el select:".mysql_error());
while($regmo=mysql_fetch_array($registrosmod))
{

$exmat=$regmo['ID_MAT'];

$registrosnt=mysql_query("select * from notas where ID_EST='$val'",$conexion) or die("problemas en el select:".mysql_error());
if($regnt=mysql_fetch_array($registrosnt))
{

$registrosnot=mysql_query("select * from notas where ID_MAT='$exmat' and NOTA<51 and ID_EST='$val'",$conexion) or die("problemas en el select:".mysql_error());
while($regnot=mysql_fetch_array($registrosnot))
{
?> 
<tr bgcolor="#33ffff">
<TD><center> <?php echo $regnot['ID_MAT'] ?> </TD>
<TD> <?php echo $regmo['MATERIA'] ?></TD></TR> <?php

}
}
else
{
?>
<tr bgcolor="#33ffff">
<TD><center> <?php echo $regmo['ID_MAT'] ?> </TD>
<TD> <?php echo $regmo['MATERIA'] ?></TD></TR> <?php
}

}
}
?>


</body>
</html>