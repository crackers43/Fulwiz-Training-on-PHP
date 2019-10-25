<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        if (isset($_SESSION['s_username']))
        {
            echo "Home Page" . "<br/> welcome " . $_SESSION['s_username'] . "<br/>";
            echo "<a href=\"logout.php\">Logout Session </a>";
        }

        else 
        {
            header("location:reg.html");      
        }
    ?>
</body>
</html>