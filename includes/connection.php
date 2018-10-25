<?php

ob_start();

if(!isset($_SESSION)){
    session_start();
}

$host='localhost';
$user='root';
$dbpass='';
$db_name='ovs';

$db= mysqli_connect($host,$user,$dbpass,$db_name);

if(!$db){
   die("connection to db failed" . mysqli_error($db));
}
?>
