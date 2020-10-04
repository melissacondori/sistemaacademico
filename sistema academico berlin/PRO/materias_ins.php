
<?php
session_start();
?>



<html>

<title>sistema academico</title>
<head>
</head>
<body background="000.jpg" text=blue>	

<?php

echo "<br>";
$val=$_SESSION['idestudiante'];
require_once("pag2.php");
valoresdc($val);
$k=0;


$conexion=mysql_connect("localhost","root","")or die("problemas en la conexion");
mysql_select_db("sistema_academico",$conexion)or die("problemas en la seleccion de la base de datos");


$registrosins=mysql_query("select * from inscripcion where ID_EST='$val'",$conexion) or die("problemas en el select:".mysql_error());

echo "<p>";
echo "<br>";
echo "<center>"."<H2>MATERIAS INSCRITAS</H2>";
?>
<center>
<TABLE>
<tr bgcolor="#ff9900">
<TD><center><h4>   MATERIA </TD><TD><center> <h4> MODULO </TD><TD><CENTER><h4>PARALELO </TD><TD><center> <h4> DOCENTE </TD><TD><center> <h4>HORARIO </TD></TR>
<?php

while($regi=mysql_fetch_array($registrosins))
{
$k=1;
$nompar=$regi['ID_PAR'];

$registrospar=mysql_query("select * from paralelo where ID_PAR=$nompar",$conexion) or die("problemas en el select:".mysql_error());	


while($regp=mysql_fetch_array($registrospar))
{
$nommat=$regp['ID_MAT'];

$registrosmat=mysql_query("select * from materias where ID_MAT=$nommat",$conexion) or die("problemas en el select:".mysql_error());


While($regm=mysql_fetch_array($registrosmat))
{

?> 
<tr bgcolor="#33ffff">

<TD> <?php echo $regm['MATERIA'] ?></TD><TD> <?php echo $regm['MODULO'] ?></TD><TD><center> <?php echo $regp['NOMBRE_PAR']?></TD><TD><center> <?php echo $regp['DOCENTE']?></TD><TD><center> <?php echo $regp['HORARIO']?></TD></TR> <?php

}
}

}
if($k==0)
{

echo "No hay materias inscritas "."<p>";

}



mysql_close($conexion);


?>








</body>
</html>