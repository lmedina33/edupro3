<?php

require_once('../conexion.php');

encabezado('Ingreso de Notas');

?>

<div id="content" class="float-holder">
	<div id="content2">
	    <?php include('../menu.php'); ?>
		
		<div class="title">Tarjeta de Calificaciones</div>
	</div>
	
	<div class="blue">
		<form action="calificaciones2.php" method="post" name="formulario" id="formulario" target="_blank">
		
		<table width="731" border="0" align="center">
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
				<td class="text1 a_right">A&ntilde;o</td>
				<td>
						  <select name="anio">
						  <?php
						  
						  for ($i_year = date('Y'); $i_year >= 2010; $i_year--)
						  {
							echo '<option value="' . $i_year . '">' . $i_year . '</option>';
						  }
						  
						  ?>
						  </select></td>
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