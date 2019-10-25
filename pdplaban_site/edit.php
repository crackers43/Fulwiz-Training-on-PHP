<font color = "blue">
<?php 
    include_once ("config.php");
    if (isset($_GET['id']))
    {
        $eid = $_GET['id'];
        $efname = $_GET['fname'];
        $elname = $_GET['lname'];
        echo "Editing Employee ID - " . $eid . "<br/>";
        echo "Name: " . $elname . ", " . $efname .  "<br/>";
    }

    $sql = "SELECT * FROM pdplabanmafia.tbl_employee where E_ID = :id";
    $query = $dbConn->prepare($sql);
    $query->execute(array(':id' => $eid));

    while($row = $query->fetch(PDO::FETCH_ASSOC))
    {
        $firstname = $row['E_FNAME'];
        $lastname = $row['E_LNAME'];
        $gender = $row['E_GENDER'];
        $birthdate = $row['E_BDATE'];
        $department = $row['E_DEPT'];
        $rank = $row['E_RANK'];
    }
?>

<hr>

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
    <form action="update.php" method="POST">
        <label for="">LAST NAME </label> <br>
        <input type="text" name="lastname" value="<?php echo $lastname ?>"> <br> <br>
        <label for="">FIRST NAME </label> <br>
        <input type="text" name="firstname" value="<?php echo $firstname ?>"> <br> <br>
        <label for="">GENDER </label> <br>
        <input type="text" name="gender" value="<?php echo $gender ?>"> <br> <br>
        <label for="">BIRTH DATE </label> <br>
        <input type="text" name="birthdate" value="<?php echo $birthdate ?>"> <br> <br>
        <label for="">DEPARTMENT </label> <br>
        <input type="text" name="department" value="<?php echo $department ?>"> <br> <br>
        <label for="">RANK </label> <br>
        <input type="text" name="rank" value="<?php echo $rank ?>">
        <input type="hidden" name="id" value="<?php echo $eid ?>"> <br> <br> <br>
        <input type="submit" name="update" value="UPDATE">
</body>
</html>