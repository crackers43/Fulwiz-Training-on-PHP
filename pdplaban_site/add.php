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
    <form action="addnew.php" method="POST">
        <label for="">LAST NAME </label> <br>
        <input type="text" name="lastname" value=""> <br> <br>
        <label for="">FIRST NAME </label> <br>
        <input type="text" name="firstname" value=""> <br> <br>
        <label for="">GENDER </label> <br>
        <input type="text" name="gender" value=""> <br> <br>
        <label for="">BIRTH DATE </label> <br>
        <input type="text" name="birthdate" value=""> <br> <br>
        <label for="">DEPARTMENT </label> <br>
        <input type="text" name="department" value=""> <br> <br>
        <label for="">RANK </label> <br>
        <input type="text" name="rank" value=""> <br>
        <input type="submit" name="add" value="ADD EMPLOYEE"> <br>  
    </form>
</body>
</html>

