<?php
session_start();
$_SESSION['idestudiante']=$_REQUEST['codigo'];
$_SESSION['clave']=$_REQUEST['contraseña'];
?>



<HTML>
<HEAD>
<TITLE>Sistema Académico</TITLE>

</HEAD>

<BODY bgcolor=black text=red>
<CENTER>



<?php
$conexion=mysql_connect("localhost","root","") or die("problemas en la conexion");
mysql_select_db("sistema_academico",$conexion)or die("problemas en la seleccion de la base de datos");

$registros=mysql_query("select * from estudiantes where ID_EST='$_REQUEST[codigo]' and CONTRASEÑA='$_REQUEST[contraseña]'",$conexion)or die("problemas en el select:".mysql_error());

if($reg=mysql_fetch_array($registros))
{
require_once("pag2.php");

cabeceraPagina("<b> Usuario: </b>".$reg['PATERNO']." ".$reg['MATERNO']." ".$reg['NOMBRES']);

echo "<BR>";

echo "<br>"."<h3>Bienvenidos al Sistema Academico!!!</h3>";

?><a href="inicio11.php"> ittttttt</a><?php
}
ELSE
{

echo "<BR>"."NO EXISTE EL USUARIO, ASEGURESE DE QUE EL CODIGO Y LA CONTRASEÑA SEAN CORRECTAS"."<BR>";
?>
<a href="portada.php">volver a intentar</a><?php
}

mysql_close($conexion);

?>
</CENTER>
</BODY>
</HTML>