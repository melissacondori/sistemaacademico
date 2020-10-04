<?php
session_start();
$_SESSION['idestudiante']=$_REQUEST['codigo'];
$_SESSION['clave']=$_REQUEST['contraseña'];
?>


<html>
<head></head>
<body background="00.jpg" text=blue>

<?php
$conexion=mysql_connect("localhost","root","") or die("problemas en la conexion");
mysql_select_db("sistema_academico",$conexion)or die("problemas en la seleccion de la base de datos");

$registros=mysql_query("select * from estudiantes where ID_EST='$_REQUEST[codigo]' and CONTRASEÑA='$_REQUEST[contraseña]'",$conexion)or die("problemas en el select:".mysql_error());

if($reg=mysql_fetch_array($registros))
{

echo "<BR>"."<h3>   Bienvenido!!!</h3>"."<BR>"."<i> Relizado por Melissa Katherine Condori Choque</i><BR>";
echo"<br>"."<CENTER><H3>Sistema academico</H3></CENTER>";
echo"<br>"."control de inscripciones ";
echo"<br>"."De los alumnos pertenecientes a la carrera"; 
echo"<br>"."PROGRAMACION DE SISTEMAS DE LA INSTITUCION BERLIN";

?>
<center><br><a href="inicio11.php">click aqui para iniciar</a>
<?php
}
ELSE
{
?>
<br><center><img src="i-close.gif" width=30 height=30>
<?php
echo "<BR>"."<h3>NO EXISTE EL USUARIO, ASEGURESE DE<br>QUE EL CODIGO Y LA CONTRASEÑA SEAN CORRECTAS"."<BR>";
?>
<a href="portada.php">volver a intentar</a><?php

}

mysql_close($conexion);

?>
</body>
</html>