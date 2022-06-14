<?php
//Распечатать
function d($array) {
   echo '<pre>';
   print_r($array);
   echo '</pre>';
}


// Путь к проекту
// define('PATH', __DIR__);
define('PATH','C:/MAMP/htdocs/forum');

//Название папки проекта
$path = end(explode("/", PATH));

define('FORUM', $path);

// echo current($path);
// end($path);

//Подключение к бд
$connect = new mysqli('localhost', "root", "root", "forum");

if ($connect->connect_error) {
   die('Error: ' .$connect->connect_error);
}

//Форум
if (!$_REQUEST['page'] || $_REQUEST['page'] === 'forum') {
   include PATH.'/forum.php';
   exit;
}

//Темы
if ($_REQUEST['page'] === 'topic') {
   include PATH.'/topic.php';
   exit;
}

//Регистрация
if ($_REQUEST['page'] === 'reg') {
   include PATH.'/reg.php';
   exit;
}

//Авторизация
if ($_REQUEST['page'] === 'auth') {
   include PATH.'/auth.php';
   exit;
}



echo '  Ошибка 404 - страница не найдена, <a href="/forum/" a>Вернуться на главную</a>';

?>