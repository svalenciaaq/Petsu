<?php 
include "conexion.php";


$query = "SELECT * FROM  pets";


$result = mysqli_query($con, $query);

if(!$result){
    echo "Err";
}else{
   
}


