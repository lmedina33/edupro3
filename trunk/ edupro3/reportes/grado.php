<?php

require_once('../conexion.php');

$id_alumno = $_GET['id_alumno'];
$id_grado = $_GET['id_grado'];

$seleccionar = "SELECT *
	FROM reinscripcion r, secciones s, grado g, alumno a
	WHERE g.id_grado = '$id_grado'
		AND r.id_seccion = s.id_seccion
		AND r.id_alumno = a.id_alumno
		AND r.id_alumno = '$id_alumno'
		AND r.id_grado = g.id_grado ";
//$seleccionar = "SELECT * FROM alumno a, grado g WHERE a.id_alumno = '$id_alumno' AND a.id_grado = g.id_grado";
$ejecutar = mysql_query($seleccionar); // || die (mysql_error());

if ($arreglo = mysql_fetch_array($ejecutar))
{
	
}

$sql = 'SELECT *
	FROM secciones s, grado g
	WHERE s.id_seccion = ' . (int) $arreglo['id_seccion'] . '
		AND s.id_grado = g.id_grado';
$ejecutar = mysql_query($sql);

$secciones = mysql_fetch_array($ejecutar);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" type="text/css" href="../style.css"  />

<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es REQUERIDO.\n'; }
  } if (errors) alert('Complete los Siguientes Campos:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>

<div id="content" class="float-holder">
	<div id="content2">
		<?php include('../menu.php'); ?>
		
		<div class="title">Visualizaci&oacute;n de Notas - Grado</div>
	</div>
	
	<form action="../reinscripcion/reinscripcion.php" method="get" name="formulario" id="formulario" onsubmit="MM_validateForm('carne','','R');return document.MM_returnValue">
	
	<table width="804" border="0">
		<tr>
			<td width="111">&nbsp;</td>
			<td width="127" class="text1"><div align="right">Carn&eacute;:</div></td>
			<td width="325" class="Estilo11"><?php echo $arreglo['carne']; ?></td>
			<td width="73" class="text1"><div align="right">Fecha:</div></td>
			<td width="146"><span class="text2"><?php echo $arreglo['fecha']; ?></span></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><div align="right" class="text1">Nombres y Apellidos: </div></td>
			<td class="text2"><?php echo $arreglo['nombre_alumno']; ?><?php echo " , " ?><?php echo $arreglo['apellido']; ?></td>
			<td><div align="right" class="text1">Telefono:</div></td>
			<td class="text2"><?php echo $arreglo['telefono1']; ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><div align="right" class="text1">Email: </div></td>
			<td class="text2"><?php echo $arreglo['email']; ?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
      <td><div align="right" class="text1">Grado:</div></td>
			<td class="text2"><?php echo $arreglo['nombre'] . ' ' . $arreglo['nombre_seccion']; ?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><div align="right" class="text1">Encargado:</div></td>
			<td class="text2"><?php echo $arreglo['encargado_reinscripcion']; ?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	
	<br />
	<table width="95%" border="1" align="center" style="border-collapse:collapse">
		<tr>
			<td class="a_center Estilo6" width="25%">Curso</td>
			<?php
			
			$sql = 'SELECT *
				FROM examenes
				ORDER BY id_examen';
			$ejecutar = mysql_query($sql);
			
			while ($row = mysql_fetch_array($ejecutar))
			{
				echo '<td class="a_center Estilo6" width="15%">' . $row['examen'] . '</td>';
			}
			
			?>
		</tr>
		
		<?php
		
		$id_alumno = $_GET['id_alumno'];
		$id_grado = $_GET['id_grado'];
		
		$seleccionar = "SELECT *
			FROM alumno a, grado g, cursos c, reinscripcion r
			WHERE r.id_grado = g.id_grado
				AND r.id_alumno = a.id_alumno
				AND g.id_grado = c.id_grado
				AND g.id_grado ='$id_grado'
				AND a.id_alumno = '$id_alumno'";
		$ejecutar = mysql_query($seleccionar); //|| die (mysql_error());
		
		while($arreglo9 = mysql_fetch_assoc($ejecutar))
		{
		
		?>
		<tr>
			<td class="text1"><?php echo $arreglo9['nombre_curso']; ?></td>
			<?php
			
			$sql = 'SELECT *
				FROM examenes
				ORDER BY id_examen';
			$ejecutar3 = mysql_query($sql);
			
			while ($row = mysql_fetch_array($ejecutar3))
			{
				$sql = 'SELECT *
					FROM notas
					WHERE id_alumno = ' . $arreglo9['id_alumno'] . '
						AND id_grado = ' . $arreglo9['id_grado'] . '
						AND id_curso = ' . $arreglo9['id_curso'] . '
						AND id_bimestre = ' . $row['id_examen'];
				$ejecutar20 = mysql_query($sql) or die(mysql_error());
				
				$notas = mysql_fetch_assoc($ejecutar20);
				
				mysql_free_result($ejecutar20);
				
				echo '<td class="a_center Estilo11" width="15%">' . $notas['nota'] . '</td>';
			}
			
			?>
		</tr>
		<?php
		
		}
		?>
		</table>
		
		<br />
		<table width="95%" border="0" align="center" style="border-collapse:collapse">
			<tr>
				<td>
				<strong>Observaciones:</strong><br /><br />
				De 0 a 59 puntos, reprobado.<br />
				De 60 a 100 puntos, aprobado.<br /><br />
				
				<strong>Faltas acad&eacute;micas:</strong>
		<ul>
		<?php
		
		$sql = 'SELECT *
			FROM faltas
			WHERE id_alumno = ' . (int) $arreglo9['id_alumno'] . '
			ORDER BY fecha_falta DESC
			LIMIT 3';
		$ejecutar = mysql_query($sql);
		
		$i = 0;
		while ($row = mysql_fetch_array($ejecutar))
		{
			echo '<li>' . $row['falta'] . '</li>';
			$i++;
		}
		
		if (!$i)
		{
			echo '<li>No hay faltas.</li>';
		}
		
		?>
		</ul>
		
		<br /><br />
		<div class="a_center">
		Vo. Bo.<br /><br />
		DIRECTOR.
		</div>
		<br />
		<hr />
		<p>Se&ntilde;or Director:</p>
		<p>Yo <strong><?php echo $arreglo['encargado_reinscripcion']; ?></strong> por este medio hago constar que he quedado 
		enterado de las calificaciones de mi hijo(a): <strong><?php echo $arreglo['nombre_alumno'] . ' ' . $arreglo['apellido']; ?></strong> 
		que cursa el <?php echo $secciones['nombre']; ?>, seccion: <?php echo $secciones['nombre_seccion']; ?>.
		<p align="right">Fecha: <?php echo date('d m Y'); ?></p>
		<p align="left">(f) _____________________________________________<br />Padre de familia o Encargado</p>
				</td>
			</tr>
		</table>
		
		<br />
	</form>
</div>
</div>

<script type="text/javascript">
document.formulario.carne.focus();

function alerta(){
return window.confirm("Seguro que desea Realizar la Accion...?");}
</script>

</body>
</html>