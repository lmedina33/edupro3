<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ingreso de Cadedr&aacute;ticos</title>
<link rel="stylesheet" type="text/css" href="../style.css"  />

<script type="text/JavaScript">
<!--

function validar(){
if(!confirm("Seguro que Desea Realizar esta Acción...")){
return false;
}
MM_validateForm('nombre','','R','apellido','','R','profesion','','R','email','','NisEmail','telefonos','','R','direccion','','R');return document.MM_returnValue;
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
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' Es REQUERIDO...\n'; }
  } if (errors) alert('Los Siguientes Errores han Ocurrido,\n Complete los Siguientes campos:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<table width="840" border="0" align="center" bgcolor="#000000">
  <tr>
    <td width="830"><form action="cod_cate.php" method="post" name="formulario" id="formulario" onsubmit="return validar();">
      <table width="833" border="0" align="center" bgcolor="#FFFFFF">
        <tr>
          <td valign="top">&nbsp;</td>
          <td><img src="../images/fond1.jpg" width="830" height="150" /></td>
        </tr>
        <tr>
          <td width="10" valign="top"><label><br />
                <br />
                <br />
                <a href="../conexion.php"></a><br />
          </label></td>
          <td width="813">
              <table width="815" border="0">
                <tr>
                  <td><?php include("../menu.php");?></td>
                </tr>
                <tr>
                  <td bgcolor="#4682B4"><div class="title">Ingreso de Catedraticos </div></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td bgcolor="#E0EBF3"><table width="645" border="0" align="center">
                      <tr>
                        <td width="3" class="text1">&nbsp;</td>
                        <td width="150"><div align="right" class="text1"> Nombres: </div></td>
                        <td width="478"><label>
                          <input name="nombre" type="text" id="nombre" size="60" autocomplete="off"  />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Apellidos:</div></td>
                        <td><label>
                          <input name="apellido" type="text" id="apellido" aurotomplete="off"  />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Profesi&oacute;n:</div></td>
                        <td><label>
                          <input name="profesion" type="text" id="profesion"  autocomplete="off" />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Correo Electronico: </div></td>
                        <td><label>
                          <input name="email" type="text" id="email"  size="60" autocomplete="off" />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Tel&eacute;fonos:</div></td>
                        <td><label>
                          <input name="telefonos" type="text" id="telefonos" autocomplete="off"  />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Direcci&oacute;n:</div></td>
                        <td><label>
                          <input name="direccion" type="text" id="direccion" size="60" autocomplete="off"  />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Observaci&oacute;n:</div></td>
                        <td><label>
                          <textarea name="observacion" cols="45" id="observacion" autocomplete="off"></textarea>
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                        <td><table width="290" border="0">
                            <tr>
                              <td></td>
                              <td><label></label></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><input type="submit" name="Submit2" value="Guardar" /></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td bgcolor="#999999"><div align="center" class="Estilo4">Visualizacion de Catedraticos Activos </div></td>
                </tr>
              </table>
            <iframe src="catedratico.php" width="100%" height="250" align="center"><br />
              <br />
              </iframe>
            <br />
              <br />
              <br />
              <br />
              <br /></td>
        </tr>
      </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.nombre.focus();
</script>


<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("¿Seguro que desea Realizar la Acción...?");}
</script>
