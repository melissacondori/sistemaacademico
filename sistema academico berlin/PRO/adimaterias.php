<?php
session_start();
?>

<HTML>
<HEAD>
<TITLE>Sistema Académico</TITLE>
</HEAD>
<BODY background="00.jpg" text=blue>
<CENTER>

<?php
echo "<br>";
$val=$_SESSION['idestudiante'];
require_once("pag2.php");
valoresdc($val);
echo"<br>";

$conexion=mysql_connect("localhost","root","")or
die("problemas en la conexion");

mysql_select_db("sistema_academico",$conexion)or
die("problemas en la seleccion de la base de datos");

mysql_query("insert into inscripcion(ID_EST,ID_PAR) values ('$val','$_REQUEST[codigoparalelo]')",$conexion)or
die("problemas en el select:".mysql_error());


echo "<h4>Usted se incribio en: "."<br>";


$regis=mysql_query("select * from paralelo where ID_PAR='$_REQUEST[codigoparalelo]'",$conexion)or die("problemas en el select:".mysql_error());
while($reg=mysql_fetch_array($regis))
{
$de=$reg['ID_MAT'];
echo "Paralelo: ".$reg['NOMBRE_PAR']."<br>";
echo "Docente: ".$reg['DOCENTE']."<br>";
$sss=mysql_query("select *from materias where ID_MAT='$de'",$conexion)or die("problemas en el select: ".mysql_error());
while($sre=mysql_fetch_array($sss))
{
echo "Materia: ".$sre['MATERIA'];
}
}
mysql_close($conexion);
?>
<p>
<a href="inscripcion.php">ADICIONAR MAS MATERIAS</A>
</CENTER>
</body>
</html>    