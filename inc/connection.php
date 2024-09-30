<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'masenocu';

$link = mysqli_connect($host, $username, $password, $database);

if (!$link){
   die('could not connect: ' .mysqli_connect_error());
}

// echo 'connected successfully';

 