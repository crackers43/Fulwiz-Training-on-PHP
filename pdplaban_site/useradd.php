<?php 
    include_once ('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <font color = "black">

    <?php
        echo "Welcome to add new user." . "<br/>" . "<br/>";
    ?>

    <form action="useraddnew.php" method="POST">
        <label for="">USERNAME </label> <br>
        <input type="text" name="username" value=""> <br> <br>
        
        <label for="">PASSWORD </label> <br>
        <input type="password" name="password" value=""> <br> <br>

        <label for="">NICKNAME </label> <br>
        <input type="text" name="nickname" value=""> <br> <br>

        <label for="">USER ROLE </label> <br>
        <select name="userrole">
            <option value="Admin">ADMIN</option>
            <option value="Staff">STAFF</option>
        </select> <br> <br>     
        
        <input type="submit" name="adduser" value="ADD USERNAME"> <br><br>  
    
        <?php
            echo "<a href=\"index.php\">Return to Index </a>" . "<br/>";
        ?>

    </form>
</body>
</html>