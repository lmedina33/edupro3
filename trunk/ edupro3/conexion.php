<?php
/*
$usuario = 'anjorame';
$contrasena ='anjorame1984';
$db = 'school';
*/
$usuario = 'root';
$contrasena ='8i8o11ag';
$db = 'edupro3';

$servidor = 'localhost';

$conectar = mysql_connect($servidor, $usuario, $contrasena) or die ('No se pudo conectar al servidor porque: ' . mysql_error());
$seleccionar = mysql_select_db($db) or die ('No se pudo seleccionar la base de datos porque: ' . mysql_error());

session_start();

function encabezado($titulo = '', $ruta = '')
{
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $titulo; ?></title>
<link rel="stylesheet" type="text/css" href="../<?php echo $ruta; ?>style.css" />
<script src="../<?php echo $ruta; ?>ff.js" type="text/javascript"></script>
<script src="../<?php echo $ruta; ?>jquery.js" type="text/javascript"></script>
</head>

<body>

<div id="header">
	<img src="../<?php echo $ruta; ?>images/fond1.jpg" width="830" height="150" alt="" />
</div>
<?php
}

?>