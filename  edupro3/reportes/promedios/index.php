<?php

require_once('../../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listado de Alumnos</title>
<link rel="stylesheet" type="text/css" href="../../style.css"  />

<script src="../../jquery.js" type="text/javascript"></script>

</head>

<body>
<table width="840" border="0" align="center" bgcolor="#000000">
  <tr>
    <td width="830"><table width="833" border="0" align="center" bgcolor="#FFFFFF">
      <tr>
        <td valign="top">&nbsp;</td>
        <td><img src="../../images/fond1.jpg" width="830" height="150" /></td>
      </tr>
      <tr>
        <td width="8" valign="top"></td>
        <td width="809"><div align="right">
            <table width="353" border="0">
              <tr>
                <td width="24">&nbsp;</td>
                <td width="10">&nbsp;</td>
                <td width="153"><img src="../images/iconos/84.ico" /> <a href="../index.php">Mantenimiento</a></td>
                <td width="57">&nbsp;</td>
                <td width="87"><div align="right"><img src="../../images/iconos/chat-home.ico" class="text1" /><span class="text1 Estilo6"><a href="../../index.php">Principal</a></span></div></td>
              </tr>
            </table>
        </div>
            <table width="821" align="center">
              <tr>
                <td width="806" bgcolor="#4682B4"><div class="title"> Reportes de Alumnos </div></td>
              </tr>
              <tr bgcolor="#F3F3F3">
                <td bordercolor="#000000" bgcolor="#F3F3F3"><br />
								<form id="form1" name="form1" method="get" action="listado_alumno1.php">
                  <table width="776" border="0" cellpadding="5">
                    <tr>
                      <td class="text1 a_right">Grado y secci&oacute;n:</td>
											<td class="text1 a_left"><select id="grado" name="grado">
												<?php
                        
                        $seleccionar = "SELECT * FROM grado";
                        $ejecutar = mysql_query($seleccionar);
                        
                        //echo '<option value="0">Seleccione </option>';
                        //por cada registro encontrado en la tabla me genera un <option>
                        while ($arreglo = mysql_fetch_array($ejecutar))
                        {
                        	echo '<option value="' . $arreglo['id_grado'] . '" >' . $arreglo['nombre'] . '</option>';
                        }
                        
                        ?>
												</select>
                        
												<select id="seccion" name="seccion">
												<?php
                        
                        $seleccionar = "SELECT * FROM secciones WHERE id_grado = 1";
                        $ejecutar = mysql_query($seleccionar);
                        
                        //echo '<option value="0">Seleccione </option>';
                        //por cada registro encontrado en la tabla me genera un <option>
                        while ($arreglo = mysql_fetch_array($ejecutar))
                        {
                        	echo '<option value="' . $arreglo['id_seccion'] . '" >' . $arreglo['nombre_seccion'] . '</option>';
                        }
                        
                        ?>
												</select>
                        </td>
                    </tr>
										<tr>
										<td class="a_right text1">Tiempo de Examen:</td>
				<td class="text1 a_left">
					
					<?php
					
					$seleccionar = "SELECT * FROM examenes";
					$ejecutar = mysql_query($seleccionar);
					
					echo '<select name="examen">';
					
					// por cada registro encontrado en la tabla me genera un <option>
					while ($arreglo = mysql_fetch_array($ejecutar))
					{
						echo '<option value="' . $arreglo['id_examen'] . '" >' . $arreglo['examen'] . '</option>';
					}
					
					echo '</select>';
					
					?>
				</td>
			</tr>
			<tr>
                <td colspan="2">&nbsp;</td>
              </tr>
				<tr>
					<td colspan="2" class="text1 a_center"><input type="submit" name="Submit" value="Ver Listado..." /></td>
				</tr>
                  </table>
									</form>
</td>
              </tr>
              
            </table>
				</td>
      </tr>
    </table></td>
  </tr>
</table>

<script language="JavaScript" type="text/javascript">

function buscar(url) {  
ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425")  
}  

$(function() {
	$('#grado').change(function() {
		$.ajax({
			type: "POST",
			url: "../../actseccion.php",
			data: "grado=" + this.value,
			success: function(msg) {
				$('#seccion').html(msg);
			}
 });
	});
});

</script>

</body>
</html>