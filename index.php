
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PetRegister</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header class= "header">
            <div class= "container">
                <h1>Register Pets</h1>
            </div>
        </header> 
        <form action="php/access.php" class= "form_register"  name="register" id ="myForm" method= "POST">
            <div class= "container_inputs">
                <label for="name">Name</label>
                <input type="text" name = "name" placeholder = "Name" class = "in"  id="name" >
                <label for="race"> Race</label>
                <input type="text" name = "race"  placeholder = "Race" class = "in"  id="race">
                <label for="age"> Age </label>
                <input type="text" name = "age" placeholder = "Age" class = "in" id="age">
                <label for="subject">Subject</label>
                <input type="text" name = "subject" placeholder = "Subject" class = "in"  id="subject" >
                <label for="owner">Owner</label>
                <input type="text" name = "owner" placeholder = "owner" class = "in"  id="owner" >
                <label for="tel">Cellphone</label>
                <input type="text" name = "cellphone" placeholder = "Cellphone" class = "in"  id="celphone" >
                <label for="date"> Date</label>
                <input type="date" name = "date" placeholder = "Date" class = "in" id="date" >
                <input type="submit" value="send" class = "btn_send">
                <a href="showpets.php" class = "btn">Show</a>
            </div>
        </form>
    </body>
</html>