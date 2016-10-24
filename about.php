<?php
$firstname = 'Алексей';
$lastname = "Бальцер";
$yearofbirth = 1987;
$currentyear = 2016;
$age = $currentyear-$yearofbirth;
$name = $firstname . " " . $lastname;
$city = "Краснодар";
$about = "Мягкий и пушистый";
$email = "ibaltser@gmail.com"
?>

<head>
        <title>Alexey Baltser - personal Page</title>
        <style>
            dl {
                display: table-row;
            }

            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
    </head>

<body>

<h1>Страница пользователя <?php echo $name ?></h1>
<dl>
  <dt>Имя:</dt>
  <dd><?php echo $firstname ?></dd>
</dl>

<dl>
  <dt>Возраст:</dt>
  <dd><?php echo $age ?></dd>
</dl>

<dl>
  <dt>Адрес электронной почты:</dt>
  <dd><?php echo $email ?></dd>
</dl>

<dl>
  <dt>Город:</dt>
  <dd><?php echo $city ?></dd>
</dl>

<dl>
  <dt>О себе:</dt>
  <dd><?php echo $about ?></dd>
</dl>
 </body>
