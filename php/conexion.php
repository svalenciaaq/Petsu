<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "pets";


$con=mysqli_connect($host,$user,$password,$db);

if(!$con){
    echo "conexion fail";
}else{
    //echo "Succesful";
}

