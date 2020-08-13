<?php
include "php/show.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="css/styles.css">
        <title>Show</title>   
    </head>
    <body>
        <header class = "cabezera">
            <div class = "container">
                <h1>Pes</h1>
            </div>
        </header>
        <div class = "container">
            <table class = "table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Race</td>
                        <td>Age</td>
                        <td>Subject</td>
                        <td>Owner</td>
                        <td>Cellphone</td>
                        <td>Date</td>
                </thead>
                <tbody>
                <?php
                    while($filas = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $filas["id"]?></td>
                        <td><?php echo $filas["name"]?></td>
                        <td><?php echo $filas["race"]?></td>
                        <td><?php echo $filas["age"]?></td>
                        <td><?php echo $filas["subject"]?></td>
                        <td><?php echo $filas["owner"]?></td>
                        <td><?php echo $filas["Cellphone"]?></td>
                        <td><?php echo $filas["date"]?></td>
                        <td><a href="php/delete.php?id=<?php echo $filas["id"]; ?>" onclick =  "return confirm('¿Are you sure?');">delete</a></td>
                        <td><a href="modify.php?id=<?php echo $filas["id"]; ?>">edit</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class = "container">
                <div class ="container_btn">
                        <a href="index.php" class = "btn"> Back</a>
                </div>
            </div>
        </div>
    </body>
</html>











