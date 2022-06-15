<?php 
if(!defined('SEC')) {die('Доступа нет');}

if ($_REQUEST['message']) {

   $systemMessage = '';

   switch($_REQUEST['message']) {
      case 'reg_success'; 
      $systemMessage = 'Регистрация прошла успешно!';
      break;
   }
}
?>
<?php include PATH.'/header.php' ?>

<?php if($systemMessage): ?>
   <b>Системное сообщение:</b><br>
   <div><?=$systemMessage ?></div>
<?php endif?>

<h1>Темы</h1>

<?php include PATH.'/footer.php' ?>