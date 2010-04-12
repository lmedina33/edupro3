<?php

$toproot = '../../';
require_once('../../conexion.php');

encabezado('Mantenimiento de Alumnos', '../');

?>

<div id="content" class="float-holder">
	<div id="content2">
		<?php include('../../menu.php'); ?>
		
		<div class="title">Mantenimiento de alumnos</div>
	</div>
	
	<div class="blue">
		<form action="alumno.php" method="get" name="formulario" id="formulario" onsubmit="MM_validateForm('carne','','R');return document.MM_returnValue">
		<table width="520" border="0" align="center">
			<tr>
				<td class="text1">&nbsp;</td>
				<td class="text1">&nbsp;</td>
                              <td class="text1"><a href="../../aux_search/search.php"></a></td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text1">&nbsp;</td>
                              <td class="text1"><div align="left">Carn&eacute;:
                                <input name="carne" type="text" id="carne" size="20"  autocomplete="off" />
                                      <img src="../../images/iconos/250.ico" onclick="return buscar('../../aux_search/search.php')" /></div></td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="Estilo4">&nbsp;</td>
                              <td class="Estilo4"><label></label></td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="Estilo4">&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text1">&nbsp;</td>
                              <td><table width="290" border="0">
                                  <tr>
                                    <td></td>
                                    <td><label>
                                      <input type="submit" name="Submit2" value="Buscar" />
                                    </label></td>
                                  </tr>
                              </table></td>
                            </tr>
                        </table>
				
        </form>

	</div>
</div>

<script type="text/javascript">
document.formulario.carne.focus();

function alerta()
{
	return window.confirm("�Seguro que desea Realizar la Acci�n...?");
}

function buscar(url)
{
	ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425");
}

</script>

</body>
</html>