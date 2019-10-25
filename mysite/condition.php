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
        $month = 13;
        if ($month == 1)
        {
            echo "january" . "<br/>";
        }
        else if ($month == 2)
        {
            echo "february" . "<br/>";
        }
        else if ($month == 3)
        {
            echo "march" . "<br/>";
        }
        else if ($month == 4)
        {
            echo "april" . "<br/>";
        }
        else if ($month == 5)
        {
            echo "may" . "<br/>";
        }
        else if ($month == 6)
        {
            echo "june" . "<br/>";
        }
        else if ($month == 7)
        {
            echo "july" . "<br/>";
        }
        else if ($month == 8)
        {
            echo "august" . "<br/>";
        }
        else if ($month == 9)
        {
            echo "september" . "<br/>";
        }
        else if ($month == 10)
        {
            echo "october" . "<br/>";
        }
        else if ($month == 11)
        {
            echo "november" . "<br/>";
        }
        else if ($month == 12)
        {
            echo "december" . "<br/>";
        }
        else
        {
            echo "invalid number" . "<br/>";
        }
    ?>

    <hr>
    
    <?php 
        $e = 200;
        
        if(isset($e))
        {
            echo 'variable $e is set' . "<br/>";
        }
        else
        {
            echo "variable e is not set" . "<br/>";
        }
    ?>

    <hr>

    <?php 
        $quantity = 34;
        if (is_numeric($quantity))
        {
            $total = 5 * $quantity;
            echo "total =" . $total . "<br/>";
        }
        else
        {
            echo "invalid value" . "<br/>";
        }
        
        $username = " ";
        if (empty($username))
        {
            echo "it is empty" . "<br/>";
        }
        else
        {
            echo "it is not empty" . "<br/>";        
        }

?>





</body>
</html>