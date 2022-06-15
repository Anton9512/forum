<?php
   if(!defined('SEC')) {
      die('Доступа нет');
   }

   if($_REQUEST['action'] === 'reg') {

      mysqli_query($db, "
      INSERT INTO user (email, login, password, name, surname)
      VALUES ('{$_REQUEST['email']}', '{$_REQUEST['login']}', '{$_REQUEST['password']}', '{$_REQUEST['name']}', '{$_REQUEST['surname']}');
   ");

      die(header('location: /'.FORUM.'/?message=reg_success'));
   }
?>
<?php include PATH.'/header.php' ?>

<h1>Регистрация</h1>

<form action="/<?=FORUM ?>/?page=reg&action=reg" method="post">
   <input type="text" name="email" placeholder="Введите email"><br>
   <input type="text" name="login" placeholder="Введите логин"><br>
   <input type="password" name="password" placeholder="Введите пароль"><br>
   <input type="text" name="name" placeholder="Введите имя"><br>
   <input type="text" name="surname" placeholder="Введите фамилию"><br>
   <input type="submit" value="Отправить">
</form>

<?php include PATH.'/footer.php' ?>