<? php

$firstname="Алексей";
$lastname="Бальцер";
$yearofbirth="1987";
$currentyear="2016";
$age=$currentyear-$yearofbirth;
$name=$firstname . " " . $lastname;
$city="Краснодар";
$about="Мягкий и пушистый";
?>

<body>

<h1>Страница пользователя <? $name ?></h1>
<dl>
  <dt>Имя</dt>
  <dd><? $firstname ?></dd>
</dl>

<dl>
  <dt>Возраст</dt>
  <dd><? $age ?> </dd>
</dl>

<dl>
  <dt>Адрес электронной почты</dt>
  <dd>ibaltser@gmail.com</dd>  
</dl>

<dl>
  <dt>Город</dt>
  <dd><? $city ?></dd>
</dl>

<dl>
  <dt>О себе</dt>
  <dd><? $about ?></dd>
</dl>
  
 </body>
