<?php

 $db = new POD(dsn: "mysql:host=localhost:3306;dname=Kenalix",
  username: root);

?>

   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Интересы</title>
	<link rel="import" href="import/11.php">
<link rel="import" href="import/reg2.php">
<link rel="import" href="import/signup.php">
<link rel="import" href="import/main.php">
<link rel="import" href="import/interes.php">

<style type="text/css">
   h1 { 
    font-size: 120%; 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    color: #333366;
	text-align=center
	}
 * {
    box-sizing: border-box
	}
	
  Body {
   font-size: 120%; 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    color: #333366;
	text-align=center
	background-color=white
	}
  value {
     font-size: 90%; 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    color: #333366;
	text-align=center
	background-color=white
	}
  
	
</style>
</head>
<body>
<h1> Укажите ваши интересы</h1>


<h3>
<td>Что вы хотели бы посетить в нашем городе?</td>
<td>
<select name="want">
<option value = "а">Театр</option>
<option value = "b">Музей</option>
<option value = "c">Кинотеатр</option>
<option value = "d">Выставки</option>
<option value = "d">Другое</option>
</select>
</td>
</h3>

<h3>
<td>Как часто вы посещаете театр?</td>
<td>
<select name="theatre">
<option value = "а">Более 2 раз в месяц</option>
<option value = "b">1 раз в месяц</option>
<option value = "c">1 раз в год</option>
<option value = "d">Не посещаю их</option>
</select>
</td>
</h3>

<h3>
<td>Кто вы?</td>
<td>
<select name="role">
<option value = "а">Студент</option>
<option value = "b">Рабочий</option>
<option value = "c">Приезжий</option>
<option value = "d">Другое</option>
</select>
</td>
</h3>

<h3>
<td>У вас есть карта Банка Центер Инвест</td>
<td>
<select name="bank">
<option value = "а">Да</option>
<option value = "b">Нет</option>
</select>
</td>
</h3>

<h3>
<td>Кто вы узнали о нас?</td>
<td>
<select name="from">
<option value = "а">Реклама</option>
<option value = "b">Знакомые</option>
<option value = "c">На мероприятии</option>
<option value = "d">Другое</option>
</select>
</td>
</h3>

</body>
</html> 
	
	
	
	
	
	
	
	
<a href="main.php">Продолжить</a>.</p>