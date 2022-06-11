<?php

// $servername = "localhost";
// $username = "ant_db";
// $password = "ant_db";
// $dbname = "ant_db";


$connect = new mysqli('localhost', "root", "root", "forum");

if ($connect->connect_error) {
   die('Error: ' .$connect->connect_error);
}