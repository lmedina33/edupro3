<?php

require_once('../conexion.php');
define('XFS', '../');

require_once(XFS . 'pdf/pdf.php');
require_once(XFS . 'pdf/convert.php');

$cv = new convert();

$pdf = new _pdf('LEGAL');
$pdf->cp->selectFont(XFS . 'pdf/helvetica.afm');

$page_count = 0;
$coord_sum = 0;

$id_seccion = $_POST['seccion'];
$alumno = $_POST['alumno'];
$anio = $_POST['anio'];

$sql = 'SELECT *
	FROM secciones s, grado g
	WHERE s.id_seccion = ' . (int) $id_seccion . '
		AND s.id_grado = g.id_grado';
$ejecutar = mysql_query($sql);

$secciones = mysql_fetch_array($ejecutar);

$seleccionar = 'SELECT * FROM reinscripcion r, secciones s, grado g, alumno a
	WHERE r.id_grado = ' . $secciones['id_grado'] . '
		AND r.id_seccion = ' . $secciones['id_seccion'] . '
		AND r.anio = ' . (int) $anio . '
		AND r.id_seccion = s.id_seccion
		AND r.id_alumno = a.id_alumno
		AND r.id_grado = g.id_grado';

if ($alumno)
{
	$a_seleccionar = "SELECT id_alumno, nombre_alumno, apellido
		FROM alumno
		WHERE id_alumno = '" . (int) $alumno . "'";
	$a_ejecutar = mysql_query($a_seleccionar);
	
	if ($a_alumno = mysql_fetch_array($a_ejecutar))
	{
		$seleccionar .= ' AND a.id_alumno = ' . (int) $alumno;
	}
}

$ejecutar = mysql_query($seleccionar);

$i = 0;
while ($arreglo = mysql_fetch_assoc($ejecutar))
{
	if ($i) $pdf->new_page();
	
	$pdf->cp->addJpegFromFile('../images/logo-cert.jpg', 65, $pdf->cp->cy(125), 400); 
	
	$grado = ucfirst(strtolower(implode(' ', array_splice(explode(' ', $arreglo['nombre']), 0, 1))));
	$grado_sub = '';
	
	switch ($arreglo['id_grado'])
	{
		case 3:
			$grado_sub = '';
			 break;
		case 4:
		case 5:
		case 6:
			$grado_sub = '';
			break;
		case 7:
		case 8:
		case 9:
			$grado_sub = '';
			break;
	}
	
	
	$text_block = 'La Infrascrita Oficinista I, del Instituto Nacional de Educaci&oacute;n Diversificada,  de Santa Elena de la Cruz, Flores, Pet&eacute;n. Seg&uacute;n Acuerdo Ministerial No. 379 del 26 de febrero del 2009. Resoluci&oacute;n No. 002-2009 de fecha 20 de enero de 2009 DDE-Pet&eacute;n.';
	
	$text_block2 = 'Certifica:';
	$text_block3 = 'Que el (la) alumno (a): ' . $arreglo['nombre_alumno'] . ' ' . $arreglo['apellido'];
	$text_block4 = 'Durante el Ciclo Escolar ' . $anio . ' curs&oacute; el ' . $grado . ' GRADO DE BACHILLER EN CIENCIAS Y LETRAS  CON ORIENTACION EN COMPUTACION. Con C&oacute;digo Personal: ' . $arreglo['codigo_alumno'] . '. Asignado por el Ministerio de Educaci&oacute;n y que ha tenido a la vista los Cuadros de Registro de Evaluaci&oacute;n en donde aparece que se hizo acreedor (a) a las notas siguientes:';

	/*
	185 de margen derecho13
	65 margen izquierdo
	20 separacion de lineas de parrafo
	*/
	
	$pdf->text_wrap($text_block, 11, $pdf->page_width() - 140, 65, $pdf->top(150), 20, 'full', false, 40);
	$pdf->text_wrap($text_block2, 15, $pdf->page_width(), 0, $pdf->top(100), 20, 'center');
	$pdf->text_wrap($text_block3, 11, $pdf->page_width() - 140, 65, $pdf->top(30), 20);
	$pdf->text_wrap($text_block4, 11, $pdf->page_width() - 140, 65, $pdf->top(20), 20, 'full', false, 40);
	
	$infot = array(
		array(
			array('text' => 'No.', 'align' => 'center', 'width' => 30),
			array('text' => 'Curso', 'align' => 'center'),
			array('text' => 'Nota', 'align' => 'center', 'width' => 30),
			array('text' => 'Nota en letras', 'align' => 'center'),
			array('text' => 'Resultado', 'align' => 'center', 'width' => 75)
		)
	);
	
	$sql = "SELECT *
		FROM cursos c, reinscripcion r
		WHERE r.id_grado = " . $secciones['id_grado'] . '
			AND r.id_seccion = ' . $secciones['id_seccion'] . '
			AND r.anio = ' . date('Y') . '
			AND r.id_grado = c.id_grado
			AND r.id_alumno = ' . (int) $arreglo['id_alumno'];
	$ejecutar2 = mysql_query($sql);
	
	$j = 1;
	while($arreglo2 = mysql_fetch_assoc($ejecutar2))
	{
		$sql = 'SELECT *
			FROM examenes
			WHERE examen NOT LIKE \'%Recup%\'
			ORDER BY id_examen';
		$ejecutar3 = mysql_query($sql);
		
		$per_curse = 0;
		$per_curse_f = 0;
		
		while ($row = mysql_fetch_array($ejecutar3))
		{
			$sql = 'SELECT *
				FROM notas
				WHERE id_alumno = ' . $arreglo['id_alumno'] . '
					AND id_grado = ' . $arreglo['id_grado'] . '
					AND id_curso = ' . $arreglo2['id_curso'] . '
					AND id_bimestre = ' . $row['id_examen'];
			$ejecutar4 = mysql_query($sql);
			$notas = mysql_fetch_assoc($ejecutar4);
			
			if (!isset($notas['nota'])) $notas['nota'] = 0;
			if (!isset($notas['nota2'])) $notas['nota2'] = 0;
			
			$total = $notas['nota'] + $notas['nota2'];
			
			$per_curse += $total;
			
			if ($total) $per_curse_f++;
			
			/*if ($total)
			{
				if (!isset($note_sum[$row['id_examen']]))
				{
					$note_sum[$row['id_examen']] = 0;
				}
				
				if (!isset($note_quant[$row['id_examen']]))
				{
					$note_quant[$row['id_examen']] = 0;
				}
				
				$note_sum[$row['id_examen']] += $total;
				$note_quant[$row['id_examen']]++;
			}*/
		}
		
		if (!$per_curse_f) $per_curse_f = 1;
		
		$per_sum = number_format($per_curse / $per_curse_f, 0);
		
		$resultado = ($per_sum >= 60) ? 'Aprobado' : 'No aprobado';
		if (!$per_sum) $resultado = '';
		
		if ($per_sum)
		{
			$lets = ucfirst($cv->cv($per_sum));
		}
		else
		{
			$lets = '';
		}
		
		$infot[$j] = array(
			array('text' => $j, 'align' => 'center', 'width' => 25),
			array('text' => $arreglo2['nombre_curso'], 'align' => 'left'),
			array('text' => $per_sum, 'align' => 'center', 'width' => 30),
			array('text' => $lets, 'align' => 'left'),
			array('text' => $resultado, 'align' => 'center', 'width' => 75)
		);
		
		$j++;
	}
	
	$pdf->multitable($infot, 65, $pdf->top(100), 5, 9, 1, array('last_height' => $pdf->top()));
	
	switch($anio)
		{
		case 2010:
			$day_string = 'veintinueve';
			break;
		case 2011:
			$day_string = 'treinta y un';
			break;
		}
	
	$text_block = 'En fe de lo anterior se extiende el presente certificado en Santa Elena de la Cruz, Flores, Pet&eacute;n, a los ' . $day_string . ' d&iacute;as del mes de octubre del ' . $cv->cv($anio) . '.';
	
	$pdf->text_wrap($text_block, 11, $pdf->page_width() - 185, 65, $pdf->top(50), 20);
	
	$names = array(array(
		array('text' => 'P.E.M. Carmen Patz&aacute;n Cos', 'align' => 'center'),
		array('text' => 'Lic. Edy Josu&eacute; Romero Tz&iacute;n', 'align' => 'center')
	),
	array(
		array('text' => 'Oficinista I', 'align' => 'center'),
		array('text' => 'Director', 'align' => 'center')
	));
	
	$pdf->multitable($names, 35, $pdf->top(100), 5, 11, 0);
	
	$i++;
}

$pdf->cp->ezOutput();
$pdf->cp->stream();
die();

?>