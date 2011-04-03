<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listado de Codigos</title>
<link rel="stylesheet" type="text/css" href="../style.css"  />

</head>

<body>
<table width="840" border="0" align="center" bgcolor="#000000">
  <tr>
    <td width="830"><table width="833" border="0" align="center" bgcolor="#FFFFFF">
      <tr>
        <td valign="top">&nbsp;</td>
        <td><img src="../images/fond1.jpg" width="830" height="150" /></td>
      </tr>
      <tr>
        <td width="8" valign="top"><label><br />
              <br />
              <br />
              <a href="../conexion.php"></a><br />
        </label></td>
        <td width="809"><div align="right">
		<div id="content2">
		<?php include('../menu.php'); ?>
		</div>
		
		</div>
            <table width="821" align="center">
              <tr>
                <td width="806" bgcolor="#4682B4"><div class="title">Ingreso de Codigos del Alumno </div></td>
              </tr>
              <tr bgcolor="#F3F3F3">
                <td bordercolor="#000000" bgcolor="#F3F3F3"><br />
                  <table width="776" border="0">
                    <tr>
                      <td width="58">&nbsp;</td>
                      <td width="681" class="Estilo6" style="font-size: 12px">Nombre del Grado: 
                       <?php 
				$grado = $_REQUEST['grado'];
				$seccion = $_REQUEST['seccion'];
				$anio = $_REQUEST['anio'];
				
				$seleccionar = "SELECT *
					FROM grado g, secciones s
					WHERE g.id_grado ='$grado'
						AND s.id_seccion = '$seccion'
						AND g.id_grado = s.id_grado";
				$ejecutar = mysql_query($seleccionar);
				
				if($arreglo = mysql_fetch_assoc($ejecutar)){
				}
								
				echo $arreglo['nombre'] . '<br/> <br/> Secci&oacute;n: ', $arreglo['nombre_seccion'];
				?>				</td>
                      <td width="23"><div align="center"><a href="../index.php"><img src="../images/logo.jpg" width="110" height="117" border="0" title="Ir al inicio..." /></a></div></td>
                    </tr>
                  </table>
                <br />
                    <div align="center"></div></td>
              </tr>
            </table>
            <br />
            <form id="form1" name="form1" method="post" action="cod_act.php">
              <table width="820">
                <tr>
                  <td width="810"><?php 
				
				$seleccionar = "SELECT *
					FROM alumno a, grado g, reinscripcion r
					WHERE r.id_alumno = a.id_alumno
						AND g.id_grado = r.id_grado
						AND r.id_grado = '$grado'
						AND r.id_seccion = '$seccion'
						AND r.anio = '$anio'
					ORDER BY a.apellido, a.nombre_alumno ASC ";
				$ejecutar = mysql_query($seleccionar);
				
				$i = 0;
				while($arreglo = mysql_fetch_assoc($ejecutar)){
				
				?></td>
                </tr>
                <tr>
                  <td><table width="796" border="0">
                      <tr>
                        <td width="136" class="Estilo11"><?php echo $arreglo['carne']; ?></td>
                        <td width="430"><?php echo $arreglo['apellido']; ?><?php echo " , " ?><?php echo $arreglo['nombre_alumno']; ?></td>
                        <td width="208"><label>
                          <div align="right">
														<?php
														
														if ($arreglo['codigo_alumno'])
														{
															echo '<div>' . $arreglo['codigo_alumno'] . '</div>';
														}
														else
														{
															echo '<input name="textfield[' . $arreglo['id_alumno'] . ']" type="text" size="25" value="' . $arreglo['codigo_alumno'] . '" />';
														}
														?>
                            </div>
                        </label></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td><?php $i++; }?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="right">
                    <label>
                    <input type="submit" name="Submit" value="Guardar Codigos" />
                    </label>
                  </div></td>
                </tr>
              </table>
            </form>  
					Total de alumnos: <?php echo $i; ?>
					<br />
					<br />
					<br />
					<br />		  </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.carne.focus();

function buscar(url) {  
ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425")  
}  
</script>
