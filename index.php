<?php
//Распечатать
function d($array) {
   echo '<pre>';
   print_r($array);
   echo '</pre>';
}

//
define('SEC', true);

// Путь к проекту
// define('PATH', __DIR__);
define('PATH','C:/MAMP/htdocs/forum');

//Название папки проекта
$path = end(explode("/", PATH));

define('FORUM', $path);

include PATH.'/db_conn.php';
// echo current($path);
// end($path);

//Форум
if (!$_REQUEST['page']) {
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