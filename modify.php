<?php
include "php/conexion.php";

$id=$_GET["id"];
$query = "SELECT * FROM pets WHERE id = $id";

$result=mysqli_query($con,$query);


$fila = mysqli_fetch_assoc($result);
if(isset($fila)){
 
   
    $name= $fila["name"];
    $race = $fila["race"];
    $age = $fila["age"];
    $subject = $fila["subject"];
    $owner = $fila["owner"];
    $cellphone = $fila["Cellphone"];
    $date = $fila["date"];
}
?>

<!DOCTYPE hmtl>
<html>
    <head>
        <meta charset= "UTF-8">
        <link rel="stylesheet" href="css/styles.css">
        <title>Modify</title>
    </head>
    <body>
        <header class = "cabezera">
            <div class = "container">
                <h1>Modify pets</h1>
            </div>
        </header>
        <form action="php/edit.php" method="POST" class ="form_del" name = "delete" id="formDel" >
            <div class = "container_inputs">
                <label for="name">Name</label>
                <input type="text" name = "name" placeholder = "Name" class = "in"  id="name"  value ="<?php echo $name?>" >
                <label for="race"> Race</label>
                <input type="text" name = "race"  placeholder = "Race" class = "in"  id="race"  value ="<?php echo $race?>">
                <label for="age"> Age </label>
                <input type="text" name = "age" placeholder = "Age" class = "in" id="age"  value ="<?php echo $age?>">
                <label for="subject">Subject</label>
                <input type="text" name = "subject" placeholder = "Subject" class = "in"  id="subject" value ="<?php echo $subject?>" >
                <label for="owner">Owner</label>
                <input type="text" name = "owner" placeholder = "owner" class = "in"  id="owner" value ="<?php echo $owner?>" >
                <label for="tel">Cellphone</label>
                <input type="text" name = "cellphone" placeholder = "Cellphone" class = "in"  id="tel" value ="<?php echo $cellphone?>">
                <label for="date"> Date</label>
                <input type="date" name = "date" placeholder = "Date" class = "in" id="date"  value ="<?php echo $date?>" >
                <input type="hidden"  name = "id" id = "id" value="<?php echo $id?>">
                <input type="submit" value= "send" class = "btn_send">
                <a href="showpets.php" class = "btn"> Back</a>
            </div>
        </form>
    </body>    
</html>