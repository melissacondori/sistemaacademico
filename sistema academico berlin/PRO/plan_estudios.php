<?php
session_start();
?>

<HTML>
<HEAD>
<TITLE>Sistema Académico</TITLE>

</HEAD>

<BODY background="000.jpg" text=blue>
<?php
echo "<br>";
$val=$_SESSION['idestudiante'];
require_once("pag2.php");
valoresdc($val);
?>

<CENTER>

<p>
<h3>PLAN DE ESTUDIOS</h3>

<TABLE>
  
  <tr>
    <TD colspan=3 BGCOLOR="#33ffff"><center> <BR><H3>PRIMER MODULO<BR>&nbsp</CENTER></TD></TR>
  <TR BGCOLOR="#ff9900">
    <TD rowspan=1 ><BR>&nbsp &nbsp APLICACIONES &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <BR></TD>
	<TD><BR>INTRODUCCION A LA <BR> PROGRAMACION<BR></TD>
	<TD><BR>PROGRAMACION I<BR> TURBO C++ </TD></TR>


  <TR>
    <TD colspan=3 BGCOLOR="#33ffff"><center> <BR><H3>SEGUNDO MODULO<BR>&nbsp</CENTER></TD></TR>
  <tr BGCOLOR="#ff9900">
  <TD rowspan=1><BR>BASE DE DATOS I<BR>(ACCES)<BR></TD><TD>CONTABILIDAD APLICADA</TD><TD>PROGRAMACION II <BR> TURBO C++</TD></TR>

<TR>
    <TD colspan=3 BGCOLOR="#33ffff"><center><BR> <H3>TERCER MODULO<BR>&nbsp</CENTER></TD></TR>
<TR BGCOLOR="#ff9900">
    <TD><BR>PROGRAMACION <BR>WEB I (HTML)<BR></TD><TD>BASE DE DATOS II</TD><TD>HADWARE</TD></TR>

<TR>
    <TD colspan=3 BGCOLOR="#33ffff"><center><BR> <H3>CUARTO MODULO<BR>&nbsp</CENTER></TD></TR>
<TR BGCOLOR="#ff9900">
    <TD><BR>INSTALACION DE <BR>SOFTWARE<BR></TD><TD>SISTEMAS OPERATIVOS</TD><TD>VISUAL BASIC I</TD></TR>

<TR>
    <TD colspan=3 BGCOLOR="#33ffff"><center><BR> <H3>QUINTO MODULO<BR>&nbsp</CENTER></TD></TR>
<TR BGCOLOR="#ff9900">
    <TD><BR>ANALISIS DE<BR> SISTEMAS</TD><TD>JAVA</TD><TD>VISUAL BASIC II</TD></TR>

<TR>
    <TD colspan=3 BGCOLOR="#33ffff"><center><BR> <H3>SEXTO MODULO<BR>&nbsp</CENTER></TD></TR>
<TR BGCOLOR="#ff9900">
    <TD><BR>PROGRAMACION <BR> WEB II PHP<BR></TD><TD>VISUAL BASIC III</TD><TD>&nbsp &nbsp PROYECTO DE GRADO &nbsp &nbsp </TD></TR>


  
  

</TABLE>
</CENTER>
</body>
</html>