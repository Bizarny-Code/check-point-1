<?php

 $db = new POD(dsn: "mysql:host=localhost:3306;dname=Kenalix",
  username: root);


?>
 
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
	<link rel="import" href="import/11.html">
<link rel="import" href="import/reg2.html">
<link rel="import" href="import/signup.html">
<link rel="import" href="import/main.html">
<link rel="import" href="import/interes.html">

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
 <H1> Ваш личный кабинет</h1>
 <script>
    function submit() {
		var a = include.getElementById("want")
		alert (a)
	}
 </script>
</form>