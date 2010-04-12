<?php

require_once('../conexion.php');

$carne = $_GET['carne'];

$seleccionar = "SELECT * FROM alumno WHERE carne ='$carne'";
$ejecutar = mysql_query($seleccionar);

if(!$arreglo = mysql_fetch_assoc($ejecutar))
{
	header('location: index.php');
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ingreso de Faltas Acad&eacute;micas</title>
<link rel="stylesheet" href="../style.css" type="text/css"  />

<script type="text/JavaScript">
<!--
function validar(){
if(!confirm("Seguro que Desea Guardar Falta Académica")){
return false;
}
MM_validateForm('falta','','R');return document.MM_returnValue;
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
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es Requerido....\n'; }
  } if (errors) alert('Complete los Siguientes Campos:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<table width="839" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="833"><form action="cod_falta.php" method="post" name="formulario" id="formulario" onsubmit="return validar();">
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
                  <td width="806" bgcolor="#4682B4"><div class="title">Modulo de Ingreso de Falta Acad&eacute;mica </div></td>
                </tr>
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
                        <td class="text1"><div align="right">Carn&eacute;:</div></td>
                        <td><label><span class="text1">
                          <input name="carne" type="text" id="carne" size="20"  autocomplete="off" value="<?php echo $arreglo['carne']; ?>" disabled="disabled" />
                        </span></label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                        <td><label></label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Nombre:</div></td>
                        <td class="text1"><input name="nombre" type="text" id="nombre" size="60"  autocomplete="off" value="<?php echo $arreglo['nombre_alumno']; ?>" disabled="disabled" /></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Apellido:</div></td>
                        <td class="text1"><input name="apellido" type="text" id="apellido" size="60"  autocomplete="off" value="<?php echo $arreglo['apellido']; ?>" disabled="disabled" /></td>
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
                        <td class="text1"><div align="right">Padre:</div></td>
                        <td class="text1"><input name="padre" type="text" id="padre" size="60"  autocomplete="off" value="<?php echo $arreglo['padre']; ?>" disabled="disabled" /></td>
                      </tr>
                      <tr>
                        <td class="text1"><div align="right"></div></td>
                        <td class="text1"><div align="right">Madr&eacute;:</div></td>
                        <td class="text1"><input name="madre" type="text" id="madre" size="60"  autocomplete="off" value="<?php echo $arreglo['madre']; ?>" disabled="disabled" /></td>
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
                  </table></td>
                </tr>
                <tr>
                  <td bgcolor="#999999"><div align="center" class="Estilo5">Ingresar Falta Acad&eacute;mica </div></td>
                </tr>
                <tr>
                  <td bgcolor="#F3F3F3"><table width="699" border="0">
                      <tr>
                        <td width="115">&nbsp;</td>
                        <td width="208" class="text1"><div align="right">Tipo:</div></td>
                        <td width="442"><label>
                          <select name="tipo_falta" id="tipo_falta" >
                            <option value="Baja">Baja</option>
                            <option value="Media">Media</option>
                            <option value="Alta">Alta</option>
                          </select>
                        </label></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><div align="right" class="text1">Falta Acad&eacute;mica: </div></td>
                        <td><label>
                          <textarea name="falta" cols="60" id="falta" ></textarea>
                        </label></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><label>
                          <input type="submit" name="Submit" value="Guardar Falta Acad&eacute;mica..." />

                        </label></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
            </table></td>
        </tr>
      </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.falta.focus();
</script>


<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("¿Seguro que desea Realizar la Acción...?");}
</script>
