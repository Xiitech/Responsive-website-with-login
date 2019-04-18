<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'ibis_praksa';


$bp = mysqli_connect($server, $user, $pass, $db);
if (!$bp){
    die('There is problem with connection to database.');
}