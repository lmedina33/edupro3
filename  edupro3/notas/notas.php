<?php

require_once('../conexion.php');

encabezado('Ingreso de Calificaciones');

?>

<div id="content" class="float-holder">
	<div id="content2">
	    <?php include('../menu.php'); ?>
		
		<div class="title">Ingreso de Notas</div>
	</div>
	
	<div class="blue">
		<form action="./cod_notas.php" method="post" name="formulario" id="formulario" onsubmit="return validar();">
		
		<table width="761" border="0" align="center">
			<tr>
				<td>&nbsp;</td>
				<td class="text1 a_right">Grado:</td>
				<td class="text1 Estilo6">
					<?php
					
					$seccion = $_POST['grado'];
					
					$sql = 'SELECT id_grado, nombre_seccion
						FROM secciones
						WHERE id_seccion = ' . (int) $seccion;
					$ejecutar = mysql_query($sql);

					if (!$gradoar = mysql_fetch_assoc($ejecutar))
					{
						exit;
					}
					
					$grado = $gradoar['id_grado'];

					$sql = 'SELECT * FROM grado WHERE id_grado = ' . (int) $grado;
					$ejecutar = mysql_query($sql);
					
					if (!$arreglo = mysql_fetch_assoc($ejecutar))
					{
						exit;
					}
					
					echo $arreglo['nombre'] . ' - secci&oacute;n: ' . $gradoar['nombre_seccion'];
					
					?>
					
					<input name="grado" type="hidden" id="grado" value="<?php echo $grado; ?>" />
				</td>
			</tr>
			<tr>
				<td class="text1">&nbsp;</td>
				<td class="text1 a_right">Curso:</td>
				<td class="text1 Estilo6">
					<?php
					
					$curso = $_POST['curso'];
					
					$sql = 'SELECT * FROM cursos WHERE id_curso = ' . (int) $curso;
					$ejecutar = mysql_query($sql);
					
					if (!$arreglo = mysql_fetch_assoc($ejecutar))
					{
					}
					
					echo $arreglo['nombre_curso'];
					// echo " --Capacidad: ", $arreglo['capacidad'];
					
					?>
					<input name="curso" type="hidden" id="curso" value="<?php echo $curso; ?>" />
				</td>
			</tr>
			<tr>
				<td class="text1">&nbsp;</td>
				<td class="text1"><div align="right" class="Estilo11">Tiempo de Examen: </div></td>
				<td class="text1 Estilo6">
					<?php
					
					$examen = $_POST['examen'];
					
					$sql = 'SELECT * FROM examenes WHERE id_examen = ' . (int) $examen;
					$ejecutar = mysql_query($sql);
					
					if (!$arreglo = mysql_fetch_assoc($ejecutar))
					{
					}
					
					echo $arreglo['examen'];
					
					?>
					
					<input name="examen" type="hidden" id="examen" value="<?php echo $arreglo['id_examen']; ?>" />
				</td>
			</tr>
            <tr>
            <td>           </td>
           <td align="right" class="text1"> A&ntilde;o           </td>
           <td class="text1 Estilo6"><?php
            $anio = $_POST['anio'];
            echo $anio;?></td>
            </tr>
		</table>
		
		<br />
		<div class="a_center">
			<input type="submit" name="Submit2" value="Guardar Notas" />
		</div>
		<br />
		
		<table width="96%" align="center">
			<?php
			
			$anio = (int) $_POST['anio'];
			
			$sql = 'SELECT * FROM alumno a, grado g, reinscripcion r
				WHERE r.id_grado = g.id_grado
					AND r.id_alumno = a.id_alumno
					AND g.id_grado = ' . (int) $grado . '
					AND r.id_seccion = ' . (int) $seccion . '
					AND r.anio = ' . (int) $anio . '
				ORDER BY a.apellido, a.nombre_alumno ASC';
			$ejecutar = mysql_query($sql) or die(mysql_error());
			
			while($arreglo = mysql_fetch_array($ejecutar))
			{
			
			?>
					
			<tr>
				<td width="139"><?php echo $arreglo['carne']; ?></td>
				<td width="395" class="text2"><img src="../images/iconos/59.ico" /> <?php echo $arreglo['apellido'] . ', ' . $arreglo['nombre_alumno']; ?></td>
				<td width="168"><?php
				
				$sql = 'SELECT *
					FROM notas
					WHERE id_alumno = ' . (int) $arreglo['id_alumno'] . '
						AND id_grado = ' . (int) $grado . '
						AND id_curso = ' . (int) $curso . '
						AND id_bimestre = ' . (int) $examen;
				$ejecutar_notas = mysql_query($sql);
				
				if ($cada_nota = mysql_fetch_array($ejecutar_notas))
				{
					echo $cada_nota['nota'];
				}
				else
				{
					echo '<input name="nota[' . $arreglo['id_alumno'] . ']" type="text" size="5" />';
				}
				
				?>
				puntos</td>
			</tr>
			
			<?php
			
			}
			?>
		</table>
		<br />
		</form>
	</div>
</div>

<script type="text/javascript">
document.formulario.nota.focus();

function validar() {
	if (!confirm("Seguro que Desea Realizar esta Accion?")) {
		return false;
	}
	MM_validateForm('nota','','RinRange0:100');
	return document.MM_returnValue;
}
</script>

</body>
</html>