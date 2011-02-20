<?php

require_once('../conexion.php');

$carne = $_GET['carne'];

$seleccionar = "SELECT * FROM alumno WHERE carne ='$carne'";
$ejecutar = mysql_query($seleccionar);

if (!$arreglo = mysql_fetch_assoc($ejecutar))
{
	header('location: index.php');
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Datos: Calificaciones, Datos Alumno</title>
<link rel="stylesheet" type="text/css" href="../style.css" />


<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>

    <td width="833">
      <table width="833" border="0" align="center" bgcolor="#FFFFFF">
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
          
          <form action="../reinscripcion/cod_reinscripcion.php" method="post" name="formulario" id="formulario" onsubmit="MM_validateForm('encargado','','R','telefonos','','R');return document.MM_returnValue">
		  <div class="content2"> 
		  <?php include('../menu.php'); ?>
		  <div class="title"> Historial General del Alumno </div>
		  </div>	  
		  </div>
              <table width="821" align="center">
                  <tr bgcolor="#F3F3F3">
                  <td bordercolor="#000000" bgcolor="#E0EBF3"><table width="583" border="0" align="center">
                      <tr>
                        <td width="3" class="text1">&nbsp;</td>
                        <td width="184" class="Estilo6">Datos Alumno: </td>
                        <td width="319"><label>
                          <input name="id_alumno" type="hidden" id="id_alumno" value="<?php echo $arreglo['id_alumno']; ?>" />
                          <input name="carnet" type="hidden" id="carnet" value="<?php echo $arreglo['carne']; ?>" />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right" class="text2">Carn&eacute;:</div></td>
                        <td><label><span class="text1">
                          <input name="carne" type="text" id="carne" aurotomplete="off" size="20"  autocomplete="off" value="<?php echo $arreglo['carne']; ?>" disabled="disabled" />
                        </span></label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                        <td><label></label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right" class="text2">Nombre:</div></td>
                        <td class="text1"><input name="nombre" type="text" id="nombre" aurotomplete="off" size="60"  autocomplete="off" value="<?php echo $arreglo['nombre_alumno']; ?>" disabled="disabled" /></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right" class="text2">Apellido:</div></td>
                        <td class="text1"><input name="apellido" type="text" id="apellido" aurotomplete="off" size="60"  autocomplete="off" value="<?php echo $arreglo['apellido']; ?>" disabled="disabled" /></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="Estilo6">Datos Padres: </td>
                        <td class="text1">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right" class="text2">Padre:</div></td>
                        <td class="text1"><input name="padre" type="text" id="padre" aurotomplete="off" size="60"  autocomplete="off" value="<?php echo $arreglo['padre']; ?>" disabled="disabled" /></td>
                      </tr>
                      <tr>
                        <td class="text1"><div align="right"></div></td>
                        <td class="text1"><div align="right" class="text2">Madr&eacute;:</div></td>
                        <td class="text1"><input name="madre" type="text" id="madre" aurotomplete="off" size="60"  autocomplete="off" value="<?php echo $arreglo['madre']; ?>" disabled="disabled" /></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="Estilo4">&nbsp;</td>
                        <td class="Estilo4"><label></label></td>
                      </tr>
                  </table>
                 </form></td>
                </tr>
                <tr>
                  <td bgcolor="#999999"><div align="center" class="Estilo4">Historial de Grados </div></td>
                </tr>
                <tr>
                  <td bgcolor="#4682B4"><table width="808" border="0">
                      <tr>
                        <td width="94" class="Estilo6"><div align="center">A&ntilde;o</div></td>
                        <td width="342"><div align="center" class="Estilo6">Grado</div></td>
                        <td width="248"><div align="center" class="Estilo6">Encargado</div></td>
                        <td width="106"><div align="center" class="Estilo6">Informaci&oacute;n</div></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td bgcolor="#F3F3F3"><?php 
				  $carne = $_GET['carne'];
				 // $id_alumno = $_GET['id_alumno'];
				  
		$seleccionar = "SELECT *
			FROM reinscripcion r, alumno a, grado g, secciones s
			WHERE r.id_alumno = a.id_alumno
				AND r.id_grado = g.id_grado
				AND s.id_seccion = r.id_seccion
				AND s.id_grado = r.id_grado
				AND r.carne = '$carne'";
		$ejecutar = mysql_query($seleccionar);

		while($arreglo = mysql_fetch_assoc($ejecutar)){

?>
                      <br />
                      <table width="808" border="0">
                        <tr>
                          <td width="94" class="Estilo6"><div align="center" class="text2"><?php echo $arreglo['anio']; ?></div></td>
                          <td width="342"><div align="center" class="Estilo6">
                              <div align="left"><span class="tex2"><?php echo $arreglo['nombre'] . ', secci&oacute;n: ' . $arreglo['nombre_seccion']; ?>
                              </span></div>
                          </div></td>
                          <td width="252" align="left" class="text2"><div align="left"><?php echo $arreglo['encargado_reinscripcion']; ?></div></td>
                          <td width="102" class="text2"><div align="center"><a href="../reportes/grado.php?id_alumno=<?php echo $arreglo['id_alumno']; ?>&amp;id_grado=<?php echo $arreglo['id_grado']; ?> " target="_blank"><img src="../images/iconos/133.ico" border="0" /></a></div></td>
                          <td width="102" class="text2">
	                          <form action="../reportes/certificaciones.php" method="post">
	                          <input type="hidden" name="alumno" value="<?php echo $arreglo['id_alumno']; ?>" />
	                          <input type="hidden" name="anio" value="<?php echo $arreglo['anio']; ?>" />
	                          <input type="hidden" name="seccion" value="<?php echo $arreglo['id_seccion']; ?>" />
	                          <input type="submit" name="enviar" value="Certificado" />
	                          </form>
													</td>
                        </tr>
                      </table>
                    <?php }?>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
            </table></td>
        </tr>
      </table>
    
    
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.encargado.focus();
</script>


<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("Seguro que desea Realizar la Accion...?");}
</script>
