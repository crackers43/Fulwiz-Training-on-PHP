
<?php 
    include_once ("config.php");
    $result = $dbConn->query("SELECT * FROM pdplabanmafia.tbl_employee");
    session_start();

    //Check if session is not set. If no session set, send to Login.php
    if(!isset($_SESSION['user']))
    {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>Document</title>
</head>

<body> 
    <font color = "black">
    <h1 align="center"> Welcome to PDP Laban Mafia - Employee Database</h1>
    <font color = "black">
    <table>
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>GENDER</th>
            <th>BIRTH DATE</th>
            <th>DEPARTMENT</th>
            <th>RANK</th>
            <th>EDIT</th>
            <th>DELETE</th>   
        </tr>
        <?php
            echo "<br/>" . "Welcome, ";
            echo $_SESSION['nickname'] . "<br/>" . "<br/>";
            echo "<a href=\"logout.php\" >Logout?</a>" . "<br/>" . "<br/>";

            while($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr>";
                echo "<td>" . $row['E_ID'] . "</td>";
                echo "<td>" . $row['E_FNAME'] . "</td>";
                echo "<td>" . $row['E_LNAME'] . "</td>";
                echo "<td>" . $row['E_GENDER'] . "</td>";
                echo "<td>" . $row['E_BDATE'] . "</td>";
                echo "<td>" . $row['E_DEPT'] . "</td>";
                echo "<td>" . $row['E_RANK'] . "</td>";
                echo "<td> <a href=\"edit.php?id=$row[E_ID]&fname=$row[E_FNAME]&lname=$row[E_LNAME]\">EDIT</a></td>";
                echo "<td> <a href=\"delete.php?id=$row[E_ID]&fname=$row[E_FNAME]&lname=$row[E_LNAME]\">DELETE</a></td>";
                echo "</tr>";
            }
            
        ?>
    </table>

    <?php
        echo "<br/>" . "<a href=\"add.php\">Add New Employee</a>" . "<br/>";
        echo "<br/>" . "<a href=\"useradd.php\">Add New Username</a>";
    ?>

</body>
</html>