<?php 
//Подключение к бд
$db = new mysqli('localhost', "root", "root", "forum");

if ($db->connect_error) {
   die('Error: ' .$db->connect_error);
}