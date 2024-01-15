<?php
include ('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method = 'POST'>
  <h1>Registration Form</h1>

    <div>
         <label for="name">Name</label>
         <input type="text" id = "name" name = "name" required>
    </div>


    


    
    <div>
        <button type = "submit" name = "submit">Submit</button>
    </div>
</form>    
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == 'POST'){
     $username = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
     
     
          
          
          $sql = "INSERT INTO `try` (name, date) 
                  VALUES('$username', CURRENT_DATE)";
          
          $result = mysqli_query($conn, $sql);
     }

?>