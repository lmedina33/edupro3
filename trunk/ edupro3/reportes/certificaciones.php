<?php

require_once('../conexion.php');

encabezado('Certificaciones Anuales');

?>

<div id="content" class="float-holder">
	<div id="content2">
	    <?php include('../menu.php'); ?>
		
		<div class="title">Certificaciones Anuales</div>
	</div>
	
	<div class="blue">
		<form action="certificaciones2.php" method="post" name="formulario" id="formulario" target="_blank">
		
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