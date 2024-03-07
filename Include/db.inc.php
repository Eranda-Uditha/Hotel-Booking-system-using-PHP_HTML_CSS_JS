<?php
/**
 * 
 * Databse Config
 */
$dbServer='localhost';
$dbUser='root';
$dbPass='';
$database='hotel_bookdb';

//connect
$conn = mysqli_connect($dbServer,$dbUser,$dbPass,$database);
if(!$conn){
    die("Connection Faild : ".mysqli_connect_error());
}

?>