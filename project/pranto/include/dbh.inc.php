<?php

$servername="localhost";
$dbUsername="root";
$dbpassowrd="";
$dbname="loginsystem";

$conn = mysqli_connect($servername, $dbUsername,$dbpassowrd, $dbname);

if(!$conn){
    die("Connection faild: " .mysqli_connect_error());
}