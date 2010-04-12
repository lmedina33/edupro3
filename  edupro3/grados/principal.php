<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modulo de Mantenimiento</title>
<link rel="stylesheet" type="text/css" href="../style.css"  />

</head>

<body>
<table width="200" border="0" align="center" bgcolor="#000000">
  <tr>
    <td><table width="840" border="0" align="center" bgcolor="#FFFFFF">
      <tr>
        <td width="830"><form action="../historial/historial.php" method="get" name="formulario" id="formulario" onsubmit="MM_validateForm('carne','','R');return document.MM_returnValue">
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
                        <td width="10">&nbsp;</td>
                        <td width="153">&nbsp;</td>
                        <td width="57">&nbsp;</td>
                        <td width="87"><div align="right"><img src="../images/iconos/chat-home.ico" class="text1" /><span class="text1 Estilo6"><a href="../index.php">Principal</a></span></div></td>
                      </tr>
                    </table>
                </div>
                    <table width="821" align="center">
                      <tr>
                        <td width="806" bgcolor="#4682B4"><div class="title"> Llenado de Datos para el Sistema </div></td>
                      </tr>
                      <tr bgcolor="#F3F3F3">
                        <td bordercolor="#000000" bgcolor="#E0EBF3"><br />
                            <table width="781" border="0" align="center">
                              <tr>
                                <td><div align="right"><img src="../images/iconos/36.ico" width="23" height="23" /></div></td>
                                <td class="text2"><a href="index.php">Grados</a><a href="../secciones/index.php"></a></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td class="text2">&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td width="232"><div align="right"><img src="../images/iconos/106.ico" width="22" height="20" /></div></td>
                                <td width="506" class="text2"><a href="index.php"></a><a href="../secciones/index.php">Secciones</a></td>
                                <td width="29">&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td class="text2">&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="right"><img src="../images/iconos/59.ico" width="19" height="19" /></div></td>
                                <td class="text2"><a href="../catedraticos/index.php">Catedr&aacute;ticos</a></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td class="text2">&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="right"><img src="../images/iconos/30.ico" width="25" height="22" /></div></td>
                                <td class="text2"><a href="../areas/index.php">Areas</a></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td class="text2">&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="right"><img src="../images/iconos/166.ico" width="20" height="21" /></div></td>
                                <td class="text2"><a href="../cursos/index.php">Sub Areas - Cursos</a></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td class="text2">&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="right"><img src="../images/iconos/292.ico" width="18" height="20" /></div></td>
                                <td class="text2"><a href="../examenes/index.php">Rango de Tiempo para Examenes</a> </td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td class="text2">&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="right"><img src="../images/iconos/77.ico" /></div></td>
                                <td class="text2"><a href="../area_ocupacional/index.php">Nombre de Areas Ocupacionales</a> </td>
                                <td>&nbsp;</td>
                              </tr>
                            </table>
                          <br />
                            <br />
                            <br />
                        <div align="center"></div></td>
                      </tr>
                  </table></td>
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

function buscar(url) {  
ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425")  
}  
</script>
