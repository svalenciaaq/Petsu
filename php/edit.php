<?php

include "conexion.php";


$id = $_POST["id"];
$name= $_POST["name"];
$race = $_POST["race"];
$age = $_POST["age"];
$subject = $_POST["subject"];
$owner = $_POST["owner"];
$cellphone = $_POST["cellphone"];
$date = $_POST["date"];



$query = "UPDATE pets SET name = '$name' , race = '$race' , age = '$age' , subject = '$subject' , 
owner =  '$owner' , Cellphone = '$cellphone' , date = '$date'  WHERE id = $id ";

$result=mysqli_query($con,$query);


if(!$result){
    echo "Err";
}else{
   
     header("location: ../showpets.php");
}



