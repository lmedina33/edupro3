<?php

require_once('../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ver Historial de Alumno</title>
<link rel="stylesheet" href="../style.css" type="text/css" />


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
<table width="840" border="0" align="center" bgcolor="#FFFFFF">
      <tr>
        <td width="830"><form action="historial.php" method="get" name="formulario" id="formulario" onsubmit="MM_validateForm('carne','','R');return document.MM_returnValue">
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
                <td width="809"><br />
								<?php include('../menu.php');?>
                    <table width="821" align="center">
                      <tr>
                        <td width="806" bgcolor="#4682B4"><div class="title">Modulo de Historial del Alumno </div></td>
                      </tr>
                      <tr bgcolor="#F3F3F3">
                        <td bordercolor="#000000" bgcolor="#E0EBF3"><table width="520" border="0" align="center">
                            <tr>
                              <td width="3" class="text1">&nbsp;</td>
                              <td width="275" class="Estilo4">&nbsp;</td>
                              <td width="228"><label></label></td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text1">&nbsp;</td>
                              <td class="text1">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text1"><div align="right"><span class="text2"> Carn&eacute;:
                                <input name="carne" type="text" id="carne" aurotomplete="off" size="20"  autocomplete="off" />
                              </span></div></td>
                              <td class="text1"><div align="left" class="text2"><a href="#"></a>
                                  <input name="submit" type="image" src="../images/arrow_right.png" title="Buscar por carn�..." width="75" height="75" />
</div></td>
                            </tr>
                            
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text1">&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                          </table>
                          <div align="right"><br />
                          </div>
                          <table width="289" border="0" align="right">
                            <tr>
                              <td width="141"><div align="center"></div></td>
                              <td width="138"><label>
                              <span class="text2"><a href="#"><img src="../images/search.png" onclick="return buscar('../aux_search/search.php'); " title="Busqueda Rapida de Alumnos..." width="90" height="90" border="0" /></a></span>                                </label></td>
                            </tr>
                          </table>
                          <div align="center"></div></td>
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
document.formulario.carne.focus();
</script>


<script language="JavaScript" type="text/javascript">

function buscar(url) {  
ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425")  
}  
</script>
