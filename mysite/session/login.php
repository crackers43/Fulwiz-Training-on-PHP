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
        //if coming from reg.html
        if(isset($_POST['submit']))
        {
            $username = $_POST['uname'];
            $password = $_POST['pword'];
            
            //check if session variable is set
            if(!isset($_SESSION['s_username']))
            {
                $_SESSION['s_username'] = $username;
            }
            
            header("location:home.php");        
        }

        //not coming from reg.html
        else
        {
            if (isset($_SESSION['s_username']))
            {
                header("location:home.php");
            }
            else 
            {
                header("location:reg.html");    
            }
        }
    ?>    
</body>
</html>