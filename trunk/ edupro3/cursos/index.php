<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ingreso de Cursos</title>
<link rel="stylesheet" type="text/css" href="../style.css"  />

<script type="text/JavaScript">
<!--

function validar(){
if(!confirm("Seguro que Desea Realizar la Acción...")){
return false;
}
MM_validateForm('curso','','R','capacidad','','RinRange0:99');return document.MM_returnValue;
}

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
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es REQUERIDO.\n'; }
  } if (errors) alert('El Siguiente Error ha Ocurrido,\n Complete los Siguientes Campos:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<table width="849" border="0" align="center" bgcolor="#000000">
  <tr bgcolor="#FFFFFF">
    <td width="830" bgcolor="#FFFFFF"><form action="cod_cursos.php" method="post" name="formulario" id="formulario" onsubmit="return validar();">
      <table width="843" border="0" align="center">
        <tr>
          <td width="8" valign="top"><label><br />
                <br />
                <br />
                <a href="../conexion.php"></a><br />
          </label></td>
          <td width="809"><div align="right"><img src="../images/fond1.jpg" width="830" height="150" /><br />
                  <table width="392" border="0">
                    <tr>
                      <td width="24">&nbsp;</td>
                      <td width="24">&nbsp;</td>
                      <td width="24">&nbsp;</td>
                      <td width="172">&nbsp;</td>
                      <td width="87"><div align="right"><img src="../images/iconos/chat-home.ico" class="text1" /><span class="text1 Estilo6"><a href="../index.php">Principal</a></span></div></td>
                    </tr>
                  </table>
          </div>
              <table width="811" align="center" bgcolor="#E0EBF3">
                <tr>
                  <td width="806" bgcolor="#4682B4"><div class="title"> Ingreso de Cursos para Grado </div></td>
                </tr>
                <tr bgcolor="#F3F3F3">
                  <td bordercolor="#000000" background="../images/fond1.gif" bgcolor="#E0EBF3"><table width="520" border="0" align="center">
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="Estilo6">&Aacute;reas:</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">&Aacute;reas:
                        </div>
                        <div align="right" class="text1"></div></td>
                        <td>
						<?php 
						$seleccionar = "SELECT * FROM areas_cursos";
						$ejecutar = mysql_query($seleccionar);
						echo '<select name = "areas_cursos"';
						while ($arreglo = mysql_fetch_array($ejecutar))
                        {
                        	echo '<option value="' . $arreglo['id_area'] . '" >' . $arreglo['nombre_area'] . '</option>';
                        }
                        
                        echo '</select>';
						?>
						</td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="Estilo4">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="3" class="text1">&nbsp;</td>
                        <td width="137" class="Estilo6">Datos Sub &aacute;reas: </td>
                        <td width="316"><label></label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Nombre del Curso :</div></td>
                        <td><label>
                          <input name="curso" type="text" id="curso" aurotomplete="off" size="60"  autocomplete="off" />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Capacidad: </div></td>
                        <td><label>
                          <input name="capacidad" type="text" class="text2" id="capacidad" size="10"  autocomplete="off" />
                          <span class="text1">Alumnos</span> </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                        <td><label></label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="Estilo6">Relacionado a: </td>
                        <td class="Estilo4"><label></label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Grado:</div></td>
                        <td><label><?php
                        
                        $seleccionar = "SELECT * FROM grado";
                        $ejecutar = mysql_query($seleccionar);
                        
                        echo '<select name="grado" >';
                     //   echo '<option value="0">Seleccione </option>';
                        
                        //por cada registro encontrado en la tabla me genera un <option>
                        while ($arreglo = mysql_fetch_array($ejecutar))
                        {
                        	echo '<option value="' . $arreglo['id_grado'] . '" >' . $arreglo['nombre'],$arreglo['seccion'] . '</option>';
                        }
                        
                        echo '</select>';
                        
                        ?></label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="Estilo6">Impartido por: </td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Catedratico:</div></td>
                        <td><label><?php
                        
                        $seleccionar = "SELECT * FROM catedratico";
                        $ejecutar = mysql_query($seleccionar);
                        
                        echo '<select name="catedratico" >';
                        //echo '<option value="0">Seleccione </option>';
                        
                        //por cada registro encontrado en la tabla me genera un <option>
                        while ($arreglo = mysql_fetch_array($ejecutar))
                        {
                        	echo '<option value="'.$arreglo['id_catedratico'].'" >' . $arreglo['nombre_catedratico'] , $arreglo['apellido'] . '</option>';
                        }
                        
                        echo '</select>';
                        ?></label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                        <td><table width="290" border="0">
                            <tr>
                              
                              <td><label></label></td>
                            </tr>
                            <tr>
                              <td><input type="submit" name="Submit2" value="Guardar" /></td>
                            </tr>
                        </table></td>
                      </tr>
                    </table>
                      <br />
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
            <table width="820">
                <tr>
                  <td width="810" bgcolor="#999999"><div align="center"><span class="Estilo4">Relaci&oacute;n de Cursos - Grados - Profesores </span></div></td>
                </tr>
              </table>
            <iframe src="cursos.php" width="100%" height="250" align="center"></iframe></td>
        </tr>
      </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.curso.focus();
</script>


<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("¿Seguro que desea Realizar la Acción...?");}
</script>
