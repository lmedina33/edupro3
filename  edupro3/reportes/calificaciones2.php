<?php

require_once('../conexion.php');

$id_seccion = $_POST['seccion'];

$sql = 'SELECT *
	FROM secciones s, grado g
	WHERE s.id_seccion = ' . (int) $id_seccion . '
		AND s.id_grado = g.id_grado';
$ejecutar = mysql_query($sql);

$secciones = mysql_fetch_array($ejecutar);

$seleccionar = 'SELECT * FROM reinscripcion r, grado g, alumno a
	WHERE r.id_grado = ' . $secciones['id_grado'] . '
		AND r.id_seccion = ' . $secciones['id_seccion'] . '
		AND r.anio = ' . date('Y') . '
		AND r.id_alumno = a.id_alumno
		AND r.id_grado = g.id_grado';
$ejecutar = mysql_query($seleccionar); // || die (mysql_error());

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tarjeta de calificaciones</title>
<link rel="stylesheet" type="text/css" href="../style.css"  />

</head>

<body>

<div id="content" class="float-holder">

<?php

while ($arreglo = mysql_fetch_assoc($ejecutar))
{

?>

	<br />
	<table width="100%" border="0">
	<tr>
		<td width="2%">&nbsp;</td>
		<td width="15%"><img src="../images/logo.jpg" width="110" height="117" /></td>
		<td>
		<p align="center">
		ESCUELA NORMAL RURAL No. 5<br />
		&quot;Prof. Julio Edmundo Rosado Pinelo&quot;<br />
		Santa Elena, Flores, Pet&eacute;n. Tel. 79260549<br />
		www.enormal5.com<br /><br />
		&quot;SIMIENTE DE CULTURA EN PET&Eacute;N&quot;<br /><br />
		<u><strong>FICHA DE RENDIMIENTO ESCOLAR</strong></u>
		</p>
		</td>
	</tr>
	</table>
	
	<table width="100%" border="0">
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
			<td><div align="right" class="text1">C&oacute;digo: </div></td>
			<td class="text2"><?php echo $arreglo['codigo_alumno']; ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
      <td><div align="right" class="text1">Grado:</div></td>
			<td class="text2"><?php echo $arreglo['nombre'] , $arreglo['seccion']; ?></td>
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
		<tr>
			<td>&nbsp;</td>
			<td><div align="right" class="text1">Carrera:</div></td>
			<td class="text2">Diversificado ___ Bachillerato ___</td>
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
				WHERE examen NOT LIKE \'%Recup%\'
				ORDER BY id_examen';
			$ejecutar2 = mysql_query($sql);
			
			while ($row = mysql_fetch_array($ejecutar2))
			{
				echo '<td class="a_center Estilo6" width="15%">' . $row['examen'] . '</td>';
			}
			
			?>
		</tr>
		
		<?php
		
		$seleccionar = "SELECT *
			FROM cursos c, reinscripcion r
			WHERE r.id_grado = " . $secciones['id_grado'] . '
				AND r.id_seccion = ' . $secciones['id_seccion'] . '
				AND r.anio = ' . date('Y') . '
				
				AND r.id_grado = c.id_grado
				AND r.id_alumno = ' . (int) $arreglo['id_alumno'];
		$ejecutar2 = mysql_query($seleccionar); //|| die (mysql_error());
		
		$note_sum = array();
		$note_quant = array();
		while($arreglo2 = mysql_fetch_assoc($ejecutar2))
		{
		
		?>
		<tr>
			<td class="text1"><?php echo $arreglo2['nombre_curso']; ?></td>
			<?php
			
			$sql = 'SELECT *
				FROM examenes
				WHERE examen NOT LIKE \'%Recup%\'
				ORDER BY id_examen';
			$ejecutar3 = mysql_query($sql);
			
			$total_examenes = 0;
			while ($row = mysql_fetch_array($ejecutar3))
			{
				$sql = 'SELECT *
					FROM notas
					WHERE id_alumno = ' . $arreglo['id_alumno'] . '
						AND id_grado = ' . $arreglo['id_grado'] . '
						AND id_curso = ' . $arreglo2['id_curso'] . '
						AND id_bimestre = ' . $row['id_examen'];
				$ejecutar4 = mysql_query($sql) or die(mysql_error());
				$notas = mysql_fetch_assoc($ejecutar4);
				
				echo '<td class="a_center Estilo11" width="15%">' . ($notas['nota'] ? $notas['nota'] : '&nbsp;') . '</td>';
				$total_examenes++;
				
				if ($notas['nota'])
				{
					$note_sum[$row['id_examen']] += $notas['nota'];
					$note_quant[$row['id_examen']]++;
				}
			}
			
			?>
		</tr>
		<tr>
		<?php
		}
		
		echo '<td align="right"><strong>Promedio</strong></td>';
		
		foreach ($note_sum as $note_id => $note_each)
		{
		?>
		<td class="a_center Estilo11"><strong><?php echo number_format(($note_each / $note_quant[$note_id]), 2); ?></strong></td>
		<?php
		}
		
		for ($i = 0; $i < ($total_examenes - count($note_sum)); $i++)
		{
			echo '<td>&nbsp;</td>';
		}
		
		?>
		</tr>
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
			WHERE id_alumno = ' . (int) $arreglo['id_alumno'] . '
			ORDER BY fecha_falta DESC
			LIMIT 3';
		$ejecutar6 = mysql_query($sql);
		
		$i = 0;
		while ($row = mysql_fetch_array($ejecutar6))
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
		
		<br />
		<div class="a_center">
		Vo. Bo.<br /><br />
		DIRECTOR.
		</div>
		<br />
		- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
		<p>Se&ntilde;or Director:</p>
		<p>Yo <strong><?php echo $arreglo['encargado_reinscripcion']; ?></strong> por este medio hago constar que he quedado 
		enterado de las calificaciones de mi hijo(a): <strong><?php echo $arreglo['nombre_alumno'] . ' ' . $arreglo['apellido']; ?></strong> 
		que cursa el <?php echo $secciones['nombre']; ?>, seccion: <?php echo $secciones['nombre_seccion']; ?>.
		<p align="right">Fecha: <?php echo date('d m Y'); ?></p>
		<p align="left">(f) _____________________________________________<br />Padre de familia o Encargado</p>
		
		<hr />
				</td>
			</tr>
		</table>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<?php

}
?>

</div>
</div>

</body>
</html>