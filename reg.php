<?php
   if($_REQUEST['action'] === 'reg') {
      die(header('location: /'.FORUM.'/reg.php'));
   }
?>
<?php include PATH.'/header.php' ?>

<h1>Регистрация</h1>

<form action="/<?=FORUM ?>" method="post">
   <input type="text" name="name" placeholder="Введите имя"><br>
   <input type="text" name="email" placeholder="Введите email"><br>
   <input type="submit" value="Отправить">
</form>

<?php include PATH.'/footer.php' ?>