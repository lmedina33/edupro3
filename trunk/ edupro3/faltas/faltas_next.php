<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Falta Acad&eacute;mica Guardada Exitosamente</title>
<link rel="stylesheet" href="../style.css" type="text/css"  />
<script type="text/JavaScript">
<!--
function validar(){
if(!confirm("Seguro que Desea Guardar Falta Académica")){
return false;
}
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
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<table width="839" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="833"><form action="" method="post" name="formulario" id="formulario" onsubmit="return validar();">
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
                  <td width="172"><img src="../images/iconos/84.ico" /> <a href="index.php">Sub Menu</a> </td>
                  <td width="87"><div align="right"><img src="../images/iconos/chat-home.ico" class="text1" /><span class="text1 Estilo6"><a href="../index.php">Principal</a></span></div></td>
                </tr>
              </table>
          </div>
              <table width="821" align="center">
                <tr>
                  <td width="806" bgcolor="#4682B4"><div class="title">Modulo de Faltas Acad&eacute;micas </div></td>
                </tr>
                <tr bgcolor="#F3F3F3">
                  <td bordercolor="#000000" bgcolor="#E0EBF3"><div align="center" class="text2">
                      <p><br />
                          <img src="../images/iconos/227.ico" />Falta Acad&eacute;mica Guardada Exitosamente...</p>
                    <p>&nbsp; </p>
                  </div></td>
                </tr>
                <tr>
                  <td bgcolor="#999999"><div align="center" class="Estilo8">&Uacute;ltimos Alumnos Ingresados por Faltas Acad&eacute;micas </div></td>
                </tr>
                <tr>
                  <td bgcolor="#F3F3F3"><iframe src="faltas_alumnos.php" width="100%" height="300"> </iframe></td>
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
document.formulario.encargado.focus();
</script>


<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("¿Seguro que desea Realizar la Acción...?");}
</script>
