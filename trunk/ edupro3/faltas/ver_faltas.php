<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listado de &Uacute;ltimos Ingresos de Faltas Acad&eacute;micas</title>
<style type="text/css">
.text2{
font-family:tahoma;
color:#000000;
font-size:12px;
}

.text1{
font-family:Tahoma;
color:#339933;
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
	background-color: #FCFBE9;
}
.Estilo4 {color: #990000; font-weight: bold; }
.Estilo6 {font-family: Tahoma; font-size: 14px; color: #FFFFFF;}
.text11 {color:#000000;
font-size:11px;
font-family:Tahoma;
}
.Estilo8 {
	color: #000000;
	font-size: 11px;
	font-family: Tahoma;
	font-weight: bold;
	font-style: italic;
}
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
</style>
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
<div align="left">
  <table width="800" align="left">
        <tr>
          <td width="806" bgcolor="#4682B4"><div align="center" class="Estilo6">Ver Historial  de Faltas Acad&eacute;micas </div></td>
        </tr>
        <tr bgcolor="#F3F3F3">
          <td bordercolor="#000000" bgcolor="#E0EBF3"><br />
            <table width="794" border="0">
            <tr>
              <td width="191">&nbsp;</td>
              <td width="14">&nbsp;</td>
              <td width="368">&nbsp;</td>
              <td width="191"><img src="../images/iconos/73.ico" class="text2" /> <a href="faltas_alumnos.php"><span class="text2">Regresar...</span> </a></td>
            </tr>
            <tr>
			<?php 
			
			//$id_alumno = $_GET['id_alumno'];
			$id_falta = $_GET['id_falta'];
						
			$seleccionar = "SELECT * FROM alumno a, faltas f WHERE f.id_falta = '$id_falta' AND a.id_alumno = f.id_alumno " ;
			$ejecutar = mysql_query($seleccionar);
			//var_dump($ejecutar);
			if($arreglo = mysql_fetch_assoc($ejecutar)){
			}
			?>
              <td><div align="right" class="Estilo4"><?php echo $arreglo['carne']; ?></div></td>
              <td>&nbsp;</td>
              <td class="text2"><?php echo $arreglo['apellido']; ?><?php echo " , "  ?><?php echo $arreglo['nombre_alumno']; ?></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right" class="text1">Fecha de Ingreso de Falta: </div></td>
              <td>&nbsp;</td>
              <td class="text2"><?php echo $arreglo['fecha_falta']; ?></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td class="text2">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><div align="right" class="text1">Falta Acad&eacute;mica: </div></td>
              <td>&nbsp;</td>
              <td class="text2"><?php echo $arreglo['falta']; ?></td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <br /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
        <br />
        <br />
        <br />
        <br />
    <br />
  
</div>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.encargado.focus();
</script>


<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("¿Seguro que desea Realizar la Acción...?");}
</script>
