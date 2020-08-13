<?php

include "conexion.php";


$id = $_GET["id"];


$query="DELETE FROM pets WHERE id = $id";

$result =mysqli_query($con,$query);


if(!$result){
    echo "err";
}else{
    header("location:../showpets.php");
}