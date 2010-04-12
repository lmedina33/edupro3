<?php

require_once('../conexion.php');

$id_alumno = $_POST['id_alumno'];
$tipo_falta = $_POST['tipo_falta'];
$falta = $_POST['falta'];

$anio_falta = date("Y");

$seleccionar = "INSERT INTO faltas(id_alumno, falta, tipo_falta, anio_falta, fecha_falta) VALUES ('$id_alumno' , '$falta' , '$tipo_falta' , '$anio_falta' , NOW()	)";

$ejecutar = mysql_query($seleccionar);

if ($ejecutar)
{
	header("location: faltas_next.php");
}
else
{
	echo "Error al Guardar el Archivo por que?.." .mysql_error();
}

?>