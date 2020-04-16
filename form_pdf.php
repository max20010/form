<?php
require('fpdf/fpdf.php'); 
  define('FPDF_FONTPATH',"fpdf/font/");
  $pdf = new FPDF();
  $pdf->AddPage(); 
  $pdf->AddFont('Arial','','arial.php'); 
  function ru($word){
	  return iconv('utf-8', 'windows-1251',$word);
  }
  $pdf->SetFont('Arial','',8);
  $pdf->Cell(85);
  $pdf->Cell(20, 5,ru('МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ'),0,0,'C');
  $pdf->ln();
  $pdf->Cell(85);
  $pdf->Cell(20, 5,ru('ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ'),0,0,'C');
  $pdf->ln();
  $pdf->ln();
  $pdf->SetFont('Arial','',12);
  $pdf->Cell(85);
  $pdf->Cell(20, 5,ru('«МОСКОВСКИЙ ПОЛИТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ»'),0,0,'C');
  $pdf->ln();
  $pdf->Cell(85);
  $pdf->Cell(20, 5,ru('(МОСКОВСКИЙ ПОЛИТЕХ)'),0,0,'C');
  $pdf->ln();
  $pdf->ln();
  $pdf->SetFont('Arial','',10);
  $pdf->Cell(20, 5,ru('Институт принтмедиа и информационных технологий'),0,0);
  $pdf->Cell(170, 5,ru('Кафедра ИиИТ'),0,0,'R');
  $pdf->ln();
  $pdf->Cell(20, 5,ru('Дисциплина «ИНФОРМАЦИОННЫЕ ТЕХНОЛОГИИ В МЕДИАИНДУСТРИИИ»'),0,0,);
  $pdf->ln();
  $pdf->Cell(20, 5,ru('Направление подготовки 09.03.02 «Информационные системы и технологии'),0,0);
  $pdf->ln();
  $pdf->Cell(20, 5,ru('Курс 4, группа ДЦисБ-4-3, форма обучения очная'),0,0);
  $pdf->ln();
  $pdf->SetFont('Arial','',12);
  $pdf->ln();
  $pdf->ln();
  $pdf->ln();
  $pdf->Cell(85);
  $pdf->Cell(20, 5,ru('ЭКЗАМЕНАЦИОННЫЙ БИЛЕТ № 1.'),0,0,'C');
  $pdf->ln();
  $pdf->ln();
  $pdf->SetFont('Arial','',10);
  $pdf->cell(20,5,'1.');
  $pdf->ln();
  $pdf->ln();
  $pdf->ln();
  $pdf->ln();
  $pdf->Cell(20, 5,ru('Утверждено на заседании кафедры «15» декабря 2019 г., протокол № 4.'));
  $pdf->ln();
  $pdf->Cell(20, 5,ru('И.о. зав. кафедрой ИиИТ /Д.Г. Демидов/'));
  $pdf->Output();
?>
