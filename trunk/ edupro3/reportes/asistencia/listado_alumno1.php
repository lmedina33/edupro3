<?php

require_once('../../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listado de Alumnos en Grado</title>
<link rel="stylesheet" type="text/css" href="../../style.css"  />

</head>

<body>
<table width="840" border="0" align="center" bgcolor="#000000">
  <tr>
    <td width="830"><table width="833" border="0" align="center" bgcolor="#FFFFFF">
      <tr>
        <td width="8" valign="top"><label><br />
              <br />
              <br />
              <a href="../../conexion.php"></a><br />
        </label></td>
        <td width="809"><div align="right">
            <table width="353" border="0">
              <tr>
                <td width="24">&nbsp;</td>
                <td width="10">&nbsp;</td>
                <td width="153"><img src="../../images/iconos/73.ico" /><a href="../index.php"> Sub Menu </a></td>
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
                  <table width="776" border="0">
                    <tr>
                      <td width="58">&nbsp;</td>
                      <td width="681" class="text1">Nombre del Grado: 
                       <?php 
				$grado = $_GET['grado'];
				$seccion = $_GET['seccion'];
				
				$seleccionar = "SELECT *
					FROM grado g, secciones s
					WHERE g.id_grado ='$grado'
						AND s.id_seccion = '$seccion'
						AND g.id_grado = s.id_grado";
				$ejecutar = mysql_query($seleccionar);
				
				if($arreglo = mysql_fetch_assoc($ejecutar)){
				}
				
				$grado = $_GET['grado'];
				//$conteo= $arreglo['id_grado'];
				
				echo $arreglo['nombre'] . '<br /><br />Secci&oacute;n: ', $arreglo['nombre_seccion'];
				?>
				</td>
                      <td width="23"><div align="center"><img src="../../images/logo.jpg" width="110" height="117" /></div></td>
                    </tr>
                  </table>
                <br />
                    <div align="center"></div></td>
              </tr>
            </table>
          <table width="820">
              <tr>
                <td width="810">
				<?php 
				$grado = $_GET['grado'];
				$seccion = $_GET['seccion'];
				
				$anio = date("Y");
				
				$seleccionar = "SELECT * FROM alumno a, grado g, reinscripcion r WHERE r.id_alumno = a.id_alumno AND g.id_grado = r.id_grado AND r.id_grado = '$grado' AND r.id_seccion = '$seccion' AND r.anio = '$anio' ORDER BY a.apellido, a.nombre_alumno ASC ";
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
                    <td width="208">
											_________________________
										</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><?php $i++; }?></td>
              </tr>
          </table>
					
					<br />
					Total de alumnos: <?php echo $i; ?>
					<br /><br /><div class="a_center">_______________________________________________<br /><br />Vo.Bo. Director</div>
					<br /><br />
					</td>
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
