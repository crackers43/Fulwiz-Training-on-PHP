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
        if(isset($_POST['submit']))
        {
            $Firstname = $_POST['fname'];
            $Lastname = $_POST['lname'];
            $pAGE = $_POST['page'];
            
            if (empty($Firstname) || empty($Lastname) || empty($pAGE) || !is_int($pAGE))
            {
                if(empty($Firstname))
                {
                    echo "First name is empty!" . "<br/>";
                }
                if(empty($Lastname))
                {
                    echo "Last name is empty!" . "<br/>";
                }
                if(empty($pAGE))
                {
                    echo "Age is empty!" . "<br/>";
                }
                if(!is_int($pAGE))
                {
                    echo "Age is invalid!" . "<br/>";
                }
                echo "<a href=\"post.php\">Go Back </a>";
            }
            else
            {
                echo "Welcome " . $Firstname . " " . $Lastname . " - Age :" . $pAGE . "<br/>";
            }
        }

        else
        {
            //echo "Go to Post.php";
            header("location:post.php"); //used to redirect to a page
        }
    ?>
</body>
</html>