<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
.text2{
font-family:tahoma;
color:#000000;
font-size:12px;
}

.text1{
font-family:Tahoma;
color:#000000;
font-size:13px;
}
</style>
<style type="text/css">
<!--
input{
-moz-border-radius: 5px;
background-color : #eaf9ff;
border : 1px solid #000000;
font-family : "Tahoma", Tahoma, monospace;
font-size : 12px;
padding-left : 7px;
padding-right : 7px;
}

body {
	background-color: #5EC3F9;
}
.Estilo5 {color: #FFFFFF}
.Estilo6 {color: #990000}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
	color: #990000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.Estilo8 {color:#000000}
</style>

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
    <td width="830"><form action="cod_alumnos.php" method="post" name="formulario" id="formulario" onsubmit="MM_validateForm('nombre','','R','apellido','','R','profesion','','R','email','','NisEmail','telefonos','','R','direccion','','R');return document.MM_returnValue">
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
          <td width="813"><div align="right">
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
              <table width="815" border="0">
                <tr>
                  <td bgcolor="#4682B4"><div align="center"><span class="Estilo5">Alumno Ingresado Exitosamente... </span></div></td>
                </tr>
                <tr>
                  <td bgcolor="#E0EBF3" class="text1"><br />
                      <span class="Estilo6">Alumno Ingresado con &Eacute;xito...</span><br />
                      <br />
                    en la Secci&oacute;n de Visualizaci&oacute;n, podra ver el Documento de Compromiso de Estudio para su Impresi&oacute;n. <br />
                    <br />
                    <table width="808" border="0">
                      <tr>
                        <td width="276">&nbsp;</td>
                        <td width="125">&nbsp;</td>
                        <td width="109">&nbsp;</td>
                        <td width="145"><div align="center"><img src="../images/iconos/multisend.ico" /> <a href="index.php" class="text2">Nueva Inscripci&oacute;n</a> </div></td>
                        <td width="131"><div align="center"><img src="../images/iconos/yahoo.ico" /> <a href="../reinscripcion/index.php">Re-Inscripci&oacute;n</a></div></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td bgcolor="#999999"><div align="center" class="Estilo5">Visualizaci&oacute;n de Alumnos Nuevos </div></td>
                </tr>
                <tr>
                  <td><iframe src="alumnos.php" width="100%" height="250" align="center"></iframe></td>
                </tr>
              </table>
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
