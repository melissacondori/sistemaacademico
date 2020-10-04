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
	$k=0;

	$conexion=mysql_connect("localhost","root","") or die("problemas en la conexion");
mysql_select_db("sistema_academico",$conexion)or die("problemas en la seleccion de la base de datos");

	$registrosnot=mysql_query("select * from notas where Id_EST='$val'",$conexion) or die("problemas en el select:".mysql_error());
echo "<p>";
echo "<br>";
echo "<center>"."<H2>NOTAS</H2>";
?>
<center>
<TABLE>
<tr bgcolor="#ff9900">
<TD><center><H3>&nbsp &nbsp CODIGO &nbsp &nbsp</TD><TD><center><h3> &nbsp &nbsp  MATERIA &nbsp &nbsp</TD><TD><center> <h3>&nbsp &nbsp MODULO &nbsp &nbsp</TD><TD><CENTER><h3>&nbsp &nbsp NOTA &nbsp &nbsp</TD></TR>
<?php
while($regn=mysql_fetch_array($registrosnot))
{
$k=1;

$nommat=$regn['ID_MAT'];
$registrosmat=mysql_query("select * from materias where ID_MAT=$nommat",$conexion) or die("problemas en el select:".mysql_error());	

While($regm=mysql_fetch_array($registrosmat))
{
?> 
<tr bgcolor="#33ffff">
<TD><center> <?php echo $regm['ID_MAT'] ?> </TD><TD> <?php echo $regm['MATERIA'] ?></TD><TD> <?php echo $regm['MODULO'] ?></TD><TD><center> <?php echo $regn['NOTA']?></TD></TR> <?php

}



}

mysql_close($conexion);

if($k==0)
{
echo "no tiene ninguna nota"."<p>";
}


?>
</body>
</html>