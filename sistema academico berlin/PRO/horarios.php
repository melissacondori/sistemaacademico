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
<h3>HORARIOS</h3>
<TABLE>
  
  <tr>
    <TD colspan=3 BGCOLOR="#33cccc">[1]APLICACIONES</TD></TR>

  <TR BGCOLOR="#bbbbbb">
    <TD rowspan=1 ><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></TR>
  <tr>
	<TD>maria sol</TD><TD><center>A</TD><TD>Lun- Martes 10-12</TD></TR>  
  <tr>
	<TD>javier mamani quiroz</TD><TD><center>B</TD><TD>martes-viernes 12-13</TD></TR>
  <tr>
	<TD rowspan=1>daniel mancilla</TD><TD><center>C</TD><TD>Lun-vier 14-16</TD></TR>


  <TR>
    <TD colspan=3 BGCOLOR="#33cccc">[1]INTRODUCCION A LA PROGRAMACION</TD></TR>
  
  <tr BGCOLOR="#bbbbbb">
	<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
  <tr>
	<TD>Maria Sol Ramos Callisaya</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Daniel Ramires Muñoz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>

  <TR>
    <TD colspan=3 BGCOLOR="#33cccc">[1]PROGRAMACION I TURBO C++</TD></TR>
	
  <TR BGCOLOR="#bbbbbb">
	<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
   <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Maria Sol Ramos Callisaya</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Javier Mamani Quiroz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  
<TR>
    <TD colspan=3 BGCOLOR="#33cccc">[2]BASE DE DATOS I</TD></TR>
  
  <TR BGCOLOR="#bbbbbb">
	<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
   <tr>
	<TD>daniel mancilla</TD><TD><center>A</TD><TD>Lun-Martes 10-12</TD></TR>  
  <tr>
	<TD>maria sol</TD><TD><center>B</TD><TD>mar-vier12-13</TD></TR>
  <tr>
	<TD rowspan=1>javier mamani quiroz</TD><TD><center>C</TD><TD>vie-lun 14-16</TD></TR>
  
<TR>
   	<TD colspan=3 BGCOLOR="#33cccc">[2]CONTABILIDAD APLICADA</TD></TR>

  <TR BGCOLOR="#bbbbbb">
	<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Maria Sol Ramos Callisaya</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  
<TR>
	<TD colspan=3 BGCOLOR="#33cccc">[2]PROGRAMACION II TURBO C++</TD></TR>

  <TR BGCOLOR="#bbbbbb">

	<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Maria Sol Ramos Callisaya</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>

<TR>
    <TD colspan=3 BGCOLOR="#33cccc">[3]PROGRAMACION II TURBO C++</TD></TR>
<TR BGCOLOR="#bbbbbb">
	
	<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Daniel Ramires Muñoz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Maria Sol Ramos Callisaya</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>

<TR>
    		<TD colspan=3 BGCOLOR="#33cccc">[3]PROGRAMACION II TURBO C++</TD></TR>
<TR BGCOLOR="#bbbbbb">
    <TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Maria Sol Ramos Callisaya</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Javier Mamani Quiroz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>


<TR>
    <TD colspan=3 BGCOLOR="#33cccc">[3]PROGRAMACION II TURBO C++</TD></TR>

<TR BGCOLOR="#bbbbbb">
<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Maria Sol Ramos Callisaya</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Javier Mamani Quiroz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>


<TR>
    <TD colspan=3 BGCOLOR="#33cccc">[4]PROGRAMACION II TURBO C++</TD></TR>
<TR BGCOLOR="#bbbbbb">
<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Maria Sol Ramos Callisaya</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Javier Mamani Quiroz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>


<TR>
    <TD colspan=3 BGCOLOR="#33cccc">[4]PROGRAMACION II TURBO C++</TD></TR>
<TR BGCOLOR="#bbbbbb">
<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Maria Sol Ramos Callisaya</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Javier Mamani Quiroz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>


<TR>
    <TD colspan=3 BGCOLOR="#33cccc">[4]PROGRAMACION II TURBO C++</TD></TR>
<TR BGCOLOR="#bbbbbb">
<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Javier Mamani Quiroz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>


<TR>
    <TD colspan=3 BGCOLOR="#33cccc">[5]PROGRAMACION II TURBO C++</TD></TR>
<TR BGCOLOR="#bbbbbb">
<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Daniel Ramires Muñoz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Javier Mamani Quiroz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>

<TR>
    <TD colspan=3 BGCOLOR="#33cccc">[5]PROGRAMACION II TURBO C++</TD></TR>
<TR BGCOLOR="#bbbbbb">
<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Daniel Ramires Muñoz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Javier Mamani Quiroz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>

<TR>
    <TD colspan=3 BGCOLOR="#33cccc">[5]PROGRAMACION II TURBO C++</TD></TR>
<TR BGCOLOR="#bbbbbb">
<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Daniel Ramires Muñoz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Javier Mamani Quiroz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>

<TR>
    <TD colspan=3 BGCOLOR="#33cccc">[6]PROGRAMACION II TURBO C++</TD></TR>
<TR BGCOLOR="#bbbbbb">
<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Daniel Ramires Muñoz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Javier Mamani Quiroz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>

<TR>
    <TD colspan=3 BGCOLOR="#33cccc">[6]PROGRAMACION II TURBO C++</TD></TR>
<TR BGCOLOR="#bbbbbb">
<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Daniel Ramires Muñoz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Javier Mamani Quiroz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>

<TR>
    <TD colspan=3 BGCOLOR="#33cccc">[6]PROGRAMACION II TURBO C++</TD></TR>
<TR BGCOLOR="#bbbbbb">
<TD><center> Docente</TD><TD><center> Paralelo</TD><TD><center> Horario</TD></tr>
 <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>A</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>  
  <tr>
	<TD>Javier Mamani Quiroz</TD><TD><center>B</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>
  <tr>
	<TD rowspan=1>Daniel Ramires Muñoz</TD><TD><center>C</TD><TD>Lunes 08:00-10:00<br>Martes 08:00-10:00</TD></TR>


  
  

</TABLE>
</CENTER>
</body>
</html>