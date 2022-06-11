<pre>
<?php
var_dump($_REQUEST);
?>
</pre>
<h1>Регистрация</h1>

<form action="forum/?action=reg&" method="post">
   <input type="text" name="name" placeholder="Введите имя"><br>
   <input type="text" name="email" placeholder="Введите email"><br>
   <input type="submit" value="Отправить">
</form>