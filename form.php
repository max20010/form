<!DOCTYPE html>
<html>
<head>
<title>Московский политехнический университет</title>
<meta charset="utf-8">
<style type="text/css">
.one {
    float: left;
    text-align: left;
	text-indent: 450px;
}
.two {
    float: center;
    text-align: center;
	text-indent: 70px;
}
p {
    text-indent: 450px;
   }
</style>
</head>
<body>
<h5 align="center"> МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ<br>
ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ</h5>
<h3 align="center"> «МОСКОВСКИЙ ПОЛИТЕХНИЧЕСКИЙ УНИВЕРСИТЕТ»<br>(МОСКОВСКИЙ ПОЛИТЕХ)<br>
 Высшая школа печати и медиаиндустрии</h3>
<hr align="center" width="1000" size="5" color="#000000 " />
<div class="one" ><?php 
$instit = "Институт принтмедиа и информационных технологий";
echo "$instit";
?></div>
<div class="two">Кафедра 
<?php $kaf = "ИиИТ";echo "$kaf";?></div>
<p>
<p><?php $dis = "«ИНФОРМАЦИОННЫЕ ТЕХНОЛОГИИ В МЕДИАИНДУСТРИИ»";
echo "Дисциплина $dis";?></p>
<p>Направление подготовки <?php $np = "09.03.02 «Информационные системы и технологии";
echo "$np";?></p>
<p><?php $_cours = "Курс 4";$group = "ДЦисБ-4-3";$form_o = "очная";
echo "$_cours, группа $group, форма обучения $form_o";?></p>
<h3 align="center">ЭКЗАМЕНАЦИОННЫЙ БИЛЕТ № 1. </h3>
<p><?php $numb = 1;echo "$numb";?>.<br><br></p>
<p><?php $date = "«15» декабря 2019 г."; $prot = "протокол № 4";
echo "Утверждено на заседании кафедры $date, $prot.";?></p>
<div class="one" >И.о. <?php $io = "зав. кафедрой ИиИТ";echo "$io";?></div>
<div class="two"><?php $name = "Д.Г. Демидов";echo "/$name/";?></div>
<p><br><br>
<form align="center" action="form_pdf.php" method="POST">
<input type="submit" value=" PDF ">
<p><br></p>
</form>
</body>
</html>
