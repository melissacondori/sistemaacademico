<html>

<?php

function cabeceraPagina($tit)
{
echo"<table width=\"100%\"><tr><td bgcolor=\"#ff9900\" aling=\"center\">$tit</td></tr></table>";

}


function valoresdc($valcod)
{
$conexion=mysql_connect("localhost","root","") or die("problemas en la conexion");
mysql_select_db("sistema_academico",$conexion)or die("problemas en la seleccion de la base de datos");

$registros=mysql_query("select * from estudiantes where ID_EST='$valcod'",$conexion)or die("problemas en el select:".mysql_error());

if($reg=mysql_fetch_array($registros))
{
require_once("pag2.php");

cabeceraPagina("<b> Usuario: </b>".$reg['PATERNO']." ".$reg['MATERNO']." ".$reg['NOMBRES']);
}
mysql_close($conexion);
}


?>