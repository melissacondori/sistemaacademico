<?
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




?>
<h4>Bienvenidos al sistema academico!!!</h4>
</CENTER>
</body>
</html>

