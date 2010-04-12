<?php 
require_once('../conexion.php');

//$carne = $_GET['carne'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Busqueda Alumno</title>
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
.Estilo1 {
	font-size: 24px;
	color: #990000;
}

body {
	background-color: #FCFBE9;
}
.Estilo4 {color: #990000; font-family:Tahoma; font-size: 12px; }
.Estilo6 {font-family: Tahoma; font-size: 14px; color: #FFFFFF;}
.Estilo8 {color: #FFFFFF}
.Estilo10 {
	font-family: Tahoma;
	color: #FFFFFF;
}
.Estilo11 {color: #990000}
.Estilo12 {color: #990000; font-weight: bold; }
a:link {
	color: #339933;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #339933;
}
a:hover {
	text-decoration: underline;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #339933;
}
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
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<table width="339" border="0" align="left">
  <tr>
    <td width="612"><form action="dato_alumno.php" method="get" name="formulario" id="formulario" onsubmit="MM_validateForm('carne','','R');return document.MM_returnValue">
      <table width="331" align="center">
        <tr>
          <td width="806" bgcolor="#4682B4"><div align="center" class="Estilo6">Busqueda Rapida de Alumnos</div></td>
        </tr>
        <tr bgcolor="#F3F3F3">
          <td bordercolor="#000000" bgcolor="#E0EBF3"><table width="320" border="0" align="center">
            <tr>
              <td width="1" class="text1">&nbsp;</td>
              <td width="60" class="Estilo12">&nbsp;</td>
              <td width="290"><label></label></td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text1">Nombres:</td>
              <td class="text1"><div align="left">
                  <input name="nombre" type="text" id="nombre" aurotomplete="off" style="background-color:#E6E6FA; text-align:center; border:#4682B4 2px solid; font-size: 12px;" size="35"  autocomplete="off" />
              </div></td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text1">Apellidos:</td>
              <td class="Estilo12"><label>
                <input name="apellido" type="text" id="apellido" aurotomplete="off" style="background-color:#E6E6FA; text-align:center; border:#4682B4 2px solid; font-size: 12px;" size="35"  autocomplete="off" />
              </label></td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="Estilo12">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text1">&nbsp;</td>
              <td><table width="232" border="0">
                  <tr>
                    <td width="120"><label>
                      <input type="reset" name="Submit" value="Limpiar" />
                    </label></td>
                    <td width="160"><label>
                      <input type="submit" name="Submit2" value="Buscar" />
                    </label></td>
                  </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><table width="306" border="0">
            <tr>
              <td width="65"><?php
              
              $nombre = $_GET['nombre'];
              $apellido = $_GET['apellido'];
              
              $seleccionar = "SELECT * FROM alumno WHERE nombre_alumno LIKE '%$nombre%' AND apellido LIKE '%$apellido%'";
              $ejecutar = mysql_query($seleccionar);
              
              while($arreglo = mysql_fetch_assoc($ejecutar))
              {
              
              ?></td>
              <td width="250">&nbsp;</td>
            </tr>
            <tr>
              <td class="Estilo4"><?php echo $arreglo['carne']; ?></td>
              <td class="text1"><a href="dato_alumno.php?id_alumno=<?php echo $arreglo['id_alumno']; ?>"><?php echo $arreglo['nombre_alumno']; ?><?php echo " , " ?><?php echo $arreglo['apellido']; ?></a></td>
            </tr>
            <tr>
              <td><?php }?></td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
        </tr>
      </table>
    </form></td>
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
