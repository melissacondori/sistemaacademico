<?php
session_start();
?>
<html>
<head>
</head>
<body background="00.jpg" text=blue>

<form action="adim.php" method="post">

<?php	echo "<br>";
	$val=$_SESSION['idestudiante'];
	require_once("pag2.php");
	valoresdc($val);
	echo "<br>";
	echo "<H2><CENTER>INSCRIPCION</CENTER></H2>";
?>



Ingrese el codigo de  la materia:
<input type="text" name="nombre_materia">
<p>
<center>
Seleccione el paralelo:

<br><input type="radio" name="x" value="a">A
<br><input type="radio" name="x" value="b">B
<br><input type="radio" name="x" value="c">C
<p>
<input type="submit" name="Adicionar Materia">


</form>
</body>
</html>