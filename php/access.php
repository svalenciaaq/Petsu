<?php

include 'conexion.php';


  
  $name= $_POST["name"];
  $race = $_POST["race"];
  $age = $_POST["age"];
  $subject = $_POST["subject"];
  $owner = $_POST["owner"];
  $cellphone = $_POST["cellphone"];
  $date = $_POST["date"];

$insert = "INSERT INTO pets(name,race,age,subject,owner,cellphone,date) VALUE('$name' , '$race' , '$age' , '$subject' , '$owner' 
, '$cellphone' , '$date')";

$resultado = mysqli_query($con,$insert);
  
if(!$resultado){
    echo 'err';
}else{
    header('location:../index.php');
}