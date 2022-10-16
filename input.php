<!DOCTYPE html>
<html>
 <head>
 <link rel = "stylesheet" type="text/css" href = "lib/css/stylee.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ГРАМИЛЬ КОРП!!!</title>
 </head>
 <body>
</body>
</html>
<?php
if(isset($_POST["firstname"]) && isset($_POST["otnos"]) && 
isset($_POST["comment"]) && isset($_POST["music"])) 
{
$name = htmlentities($_POST["firstname"]);
$sex = htmlentities($_POST["sex"]);
$otnos = "Хорошо";
if(isset($_POST[""])) $hostel = "Плохо";
$comment = htmlentities($_POST["comment"]);
$music = $_POST["music"];
$output ="
<html>
<head>
<title>Данные</title>
</head>
<body>
Вас зовут: $name<br />
Ваш пол: $sex<br />
Ваше отношение к: $otnos<br />
Ваш музыкальный вкус:
<ul>";
foreach($music as $item)
$output.="<li>" . htmlentities($item) . "</li>";
$output.="</ul></body></html>";
echo $output;
}
else
{ 
    echo "Введенные данные некорректны";
}
?>