<?php

$servername = "localhost";
$username = "ant_db";
$password = "ant_db";
$dbname = "ant_db";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
   die('Ошибка подключения');
}