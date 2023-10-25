<?php

 $db = new POD(dsn: "mysql:host=localhost:3306;dname=Kenalix",
  username: root);

?>
<head>
<link rel="import" href="import/11.php">
<link rel="import" href="import/reg2.php">
<link rel="import" href="import/signup.php">
<link rel="import" href="import/main.php">
<link rel="import" href="import/interes.php">
</head>
 <div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Имя</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Фамилия</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div> 

<td>Kaк вы нашли Boвaнa?</td>

<td>

<select name="find">

<option value = "а">Я постоянный клиент</option>

<option value = "b">B телевизионной рекламе</option>

<option value = "c">B телефонном справочнике</option>

<option value = "d">Устная рекомендация</option>

</select>

</td>

</tr>