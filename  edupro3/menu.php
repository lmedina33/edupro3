<?php

if (!isset($toproot))
{
	$toproot = '../';
}

?>

<div id="tmenu">
    <ul id="menu" class="float-holder">
		<li><a href="<?php echo $toproot; ?>alumnos/index.php" title="Inscripci&oacute;n de Nuevo Alumno">Inscripci&oacute;n</a></li>
		<li><a href="<?php echo $toproot; ?>reinscripcion/index.php" title="Re-Inscripci&oacute;n de Alumno Existente">Re-inscripci&oacute;n</a></li>
		<li><a href="<?php echo $toproot; ?>notas/index.php" title="Visualizaci&oacute;n de Notas">Notas</a></li>
		<li><a href="<?php echo $toproot; ?>historial/index.php" title="Record Acad&eacute;mico del Alumno">Historial de alumno</a></li>
		<li><a href="<?php echo $toproot; ?>reportes/index.php" title="Visualizaci&oacute;n de Reportes Varios">Reportes</a></li>
		<li><a href="<?php echo $toproot; ?>faltas/index.php" title="Visualizaci&oacute;n de Faltas / Ingreso de Faltas Acad&eacute;micas">Faltas acad&eacute;micas</a></li>
		<li><a href="#" title="Ingreso de Codigo / Matricula del Alumno">Codigos de alumnos</a></li>
		<li><a href="#" title="Ingreso de Areas Ocupacionales para Alumnos">Cursos ocupacionales</a></li>
		<li><a href="<?php echo $toproot; ?>mantenimientos/alumnos/">Modificaci&oacute;n de alumnos</a></li>
		<li><a onclick="return buscar('<?php echo $toproot; ?>aux_search/search.php'); " href="#">B&uacute;squeda de alumno</a></li>
	</ul>
</div>

<script type="text/javascript">
function buscar(url) {  
ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425");
return false;
}
</script>