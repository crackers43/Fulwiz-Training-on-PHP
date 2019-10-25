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
        echo "start for loop :" . "<br/>";
        for ($val = 10; $val <=20; $val++)
        {
            echo "number - " . $val . "<br/>";

        }

        echo "start while loop :" . "<br/>";
        $init = 1;
        while ($init < 11)
        {
            echo "number - " . $init . "<br/>";
            $init++;
        }

        echo "start foreach loop :" . "<br/>";
        $ages = array(1,2,3,4,5);
        foreach($ages as $age)
        {
            echo "age - " . $age . "<br/>";
        }

        $person = array("first_name" => "Kevin",
                        "last_name" => "Skoglund",
                        "address" => "123 Main Street",
                        "city" => "Beverly Hills",
                        "state" => "CA",
                        "zip_code" => "90210");

        foreach($person as $att => $dat)
        {
            echo $att . " - " . $dat . "<br/>";
        }

        // multiplication table
        for ($y = 1; $y <= 10; $y = $y + 1)
        {
            for ($x = 1; $x <= 10; $x++)
            {
                echo ($y * $x) . " ";

            }
            echo "<br/>";
        }

        $product = array("product_code" => "a001",
                        "product_name" => "LG TV 50\"",
                        "product_price" => 23000,
                        "product_brand" => "LG",
                        "prodct_stock" => 5);

        foreach($product as $prod => $dat)
        {
            if (is_numeric($dat))
            {
                echo $prod . " : " . number_format($dat) . "<br/>";
            }

            else
            {
                echo $prod . " : " . $dat . "<br/>";
            }
            
        }
    ?>    
</body>
</html>