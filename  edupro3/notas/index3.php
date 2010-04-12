<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ingreso de Notas</title>
<link rel="stylesheet" type="text/css" href="../style.css"  />

</head>

<body>
<table width="200" border="0" align="center" bgcolor="#000000">
  <tr>
    <td><table width="840" border="0" align="center" bgcolor="#FFFFFF">
      <tr>
        <td width="830"><form action="notas.php" method="get" name="formulario" id="formulario" onsubmit="MM_validateForm('carne','','R');return document.MM_returnValue">
            <table width="833" border="0" align="center">
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
                    <table width="353" border="0">
                      <tr>
                        <td width="24">&nbsp;</td>
                        <td width="24">&nbsp;</td>
                        <td width="24">&nbsp;</td>
                        <td width="172">&nbsp;</td>
                        <td width="87"><div align="right"><img src="../images/iconos/chat-home.ico" class="text1" /><span class="text1 Estilo6"><a href="../index.php">Principal</a></span></div></td>
                      </tr>
                    </table>
                </div>
                    <table width="821" align="center">
                      <tr>
                        <td width="806" bgcolor="#4682B4"><div class="title"> Ingreso de Notas </div></td>
                      </tr>
                      <tr bgcolor="#F3F3F3">
                        <td bordercolor="#000000" bgcolor="#E0EBF3"><table width="732" border="0" align="center">
                            <tr>
                              <td width="11" class="text1">&nbsp;</td>
                              <td width="160" class="Estilo4">&nbsp;</td>
                              <td width="405"><label></label></td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text2"><div align="right" class="text2">Grado:</div></td>
                              <td class="text1"><div align="left" class="Estilo6">
							  <?php 
				$grado = $_GET['grado'];
				
				$seleccionar = "SELECT * FROM grado WHERE id_grado ='$grado'";
				$ejecutar = mysql_query($seleccionar);
				
				if($arreglo = mysql_fetch_assoc($ejecutar)){
				}
				
				$grado = $_GET['grado'];

				
				//$conteo= $arreglo['id_grado'];
				
				switch($grado){
				case $arreglo['id_grado']:
				echo $arreglo['nombre'] ; echo "--Secci&oacute;n:", $arreglo['seccion'];
				break;
				}
				?>
                                  <input name="grado" type="hidden" id="grado" value="<?php echo $arreglo['id_grado']; ?>" /></td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text1">&nbsp;</td>
                              <td class="text1">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text2"><div align="right" class="text2">Curso:</div></td>
                              <td class="text1"><div align="left" class="Estilo6">
                                  <?php 
				$curso = $_GET['curso'];
				
				$seleccionar = "SELECT * FROM cursos WHERE id_curso ='$curso'";
				$ejecutar = mysql_query($seleccionar);
				
				if($arreglo = mysql_fetch_assoc($ejecutar)){
				}
				
				//$curso = $_GET['curso'];

				switch($curso){
				case $arreglo['id_curso']:
				echo $arreglo['nombre_curso'] ;// echo "--Capacidad:", $arreglo['capacidad'];
				break;
				}
				?>
                                  <input name="curso" type="hidden" id="curso" value="<?php echo $arreglo['id_curso']; ?>" />
                              </div></td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="Estilo4">&nbsp;</td>
                              <td class="Estilo4"><label></label></td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text1"><div align="right" class="text1">Tiempo de Examen: </div></td>
                              <td><?php 
			  $seleccionar = "SELECT * FROM examenes";
			  $ejecutar = mysql_query($seleccionar);
			  	echo '<select name="tiempo" >';
				//echo '<option value="0">Seleccione... </option>';
				//por cada registro encontrado en la tabla me genera un <option>
 					 while ($arreglo = mysql_fetch_array($ejecutar)){
  					  echo '<option value="' . $arreglo['id_examen'] . '" >' . $arreglo['examen'] . '</option>'; 

							  }

								echo '</select>'; 
                ?>
                                  <input name="id_examen" type="hidden" id="id_examen" value="<?php echo $arreglo['id_examen']; ?>" />
                                  <input type="submit" name="Submit2" value="Ir..." /></td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text1">&nbsp;</td>
                              <td><table width="290" border="0">
                                  <tr>
                                    <td><label></label></td>
                                    <td><label></label></td>
                                  </tr>
                              </table></td>
                            </tr>
                        </table></td>
                      </tr>
                    </table>
                  </td>
              </tr>
            </table>
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.carne.focus();
</script>


<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("¿Seguro que desea Realizar la Acción...?");}
</script>
