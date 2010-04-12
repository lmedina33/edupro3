<?php

require_once('../conexion.php');

$curso = $_POST['curso'];
$capacidad = $_POST['capacidad'];
$grado = $_POST['grado'];
$catedratico = $_POST['catedratico'];
$areas_cursos = $_POST['areas_cursos'];

$status = "Alta";

$seleccionar = "INSERT INTO cursos(id_area, nombre_curso, capacidad, fecha, status, id_grado, id_catedratico)
	VALUES ('$areas_cursos','$curso','$capacidad',now(),'$status','$grado','$catedratico')";
$ejecutar = mysql_query($seleccionar);

if($ejecutar)
{
	header ("location: index.php");
}
else
{
	echo "Error al Procesar la Informacion por que:" . mysql_error();
}

?>