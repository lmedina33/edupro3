<?php

require_once('../conexion.php');

encabezado('Certificaciones Anuales');

if (isset($_POST) && isset($_POST['alumno']))
{
	$alumno = $_POST['alumno'];
}
else
{
	$alumno = 0;
}

?>

<div id="content" class="float-holder">
	<div id="content2">
	    <?php include('../menu.php'); ?>
		
		<div class="title">Certificaciones Anuales</div>
	</div>
	
	<div class="blue">
		<form action="certificaciones2.php" method="post" name="formulario" id="formulario" target="_blank">
		
		<table width="731" border="0" align="center">
			<?php
			
			if ($alumno)
			{
			?>
			<tr>
				<td>&nbsp;</td>
				<td class="text1 a_right">Alumno:</td>
				<td>
					<?php
					
					$seleccionar = "SELECT id_alumno, nombre_alumno, apellido
						FROM alumno
						WHERE id_alumno = '" . (int) $alumno . "'";
					$ejecutar = mysql_query($seleccionar);
					
					if ($a_alumno = mysql_fetch_array($ejecutar))
					{
						echo $a_alumno['nombre_alumno'] . ' ' . $a_alumno['apellido'];
						echo '<input type="hidden" name="alumno" value="' . $a_alumno['id_alumno'] . '" />';
					}
					
					?>
				</td>
			</tr>
			<?php
			}
			
			?>
			<tr>
				<td>&nbsp;</td>
				<td class="text1 a_right">Grado:</td>
				<td>
					<?php
					
					$seleccionar = "SELECT *
						FROM grado g, secciones s
						WHERE g.id_grado = s.id_grado";
					$ejecutar = mysql_query($seleccionar);
					
					echo '<select name="seccion" id="seccion">';
					
					while ($arreglo = mysql_fetch_array($ejecutar))
					{
						echo '<option value="' . $arreglo['id_seccion'] . '" >' . $arreglo['nombre']. ' - secci&oacute;n: ' .$arreglo['nombre_seccion'] .'</option>';
					}
					
					echo '</select>';
					
					?>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td class="text1 a_right">A&ntilde;o:</td>
				<td>
					<select name="anio" id="anio">
						<?php
						  
						  for ($i_year = date('Y'); $i_year >= 2010; $i_year--)
						  {
							echo '<option value="' . $i_year . '">' . $i_year . '</option>';
						  }
						  
						  ?>
					</select>
				</td>
			</tr>
		</table>
		
		<br />
		<div class="a_center">
			<input type="submit" name="Submit2" value="Ir..." />
		</div>
		<br />
		
		</form>
	</div>
</div>

</body>
</html>