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
        $myvalue = -200;
            echo "abosulte value - " . abs($myvalue) . "<br/>";
            echo pow(2,8) . "<br/>";
            echo sqrt(144) . "<br/>";
            echo sqrt(144) . "<br/>";
            echo fmod(2050, 100) . "<br/>";
            echo rand() . "<br/>";
            echo rand(0,10) . "<br/>";
            echo "ceiling value - " . ceil(74.36) . "<br/>";
            echo "floor value - " . floor(74.36) . "<br/>";
            echo "round off - " . round(74.36) . "<br/>";
    ?>

    <?php
        $value = 23435.34;
            echo number_format($value, 4) . "<br/>";
        $queue = 1;
            echo $queue . "<br/>";
        $queue++;
            echo $queue . "<br/>";
        $queue += 10;
            echo $queue . "<br/>";
        $numbers = array(23,45,64,34,13,4);
            echo $numbers[4] . "<br/>";
    ?>

</body>
</html>