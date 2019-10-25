<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- this is a comment -->
    <?php echo "Hello PHP" ?> <br/>
    <?php echo "Hello MySQL" ?> 
    <?php //echo "another" ?>
    <?php
        // echo is used to display text
            //echo "Hello";
            echo "<br/>";
            echo "Web Development";
            echo "<br/>";

        $number = 100;
        $number2 = 500;
            echo $number;
            echo "<br/>"; 
        
        $firstName = "John";
        $lastName = "Doe";
            echo $firstName . " " . $lastName;
            echo "<br/>"; 
            echo "Welcome, {$firstName} {$lastName} <br/>";
    ?>

    <hr>

    <?php
        $price = 30;
            echo $price . "<br/>";
        
        $price = 40;
            echo "New price is {$price}" . "<br/>";

        define ("pi",3.14);
            echo "the value of pi is " . pi . "<br/>"; 
    ?>

    <hr>

    <?php
        $text = "the quick brown fox";
        echo "Original text : " . $text . "<br/>";
        echo "Upper case first word : " . ucfirst($text) . "<br/>";
        echo ucwords($text) . "<br/>";
        echo strtolower($text) . "<br/>";
        echo strtoupper($text) . "<br/>";
    ?>

    <hr>

    <?php
        $user = "John";
            echo str_repeat($user, 5) . "<br/>";
        $product = "computer";
        $product2 = "smartphone";

            echo substr($product, 0, 3) . "-001" . " <br/>";
            echo substr($product2, 0, 3) . "-1" . "<br/>";
            echo substr($product2, 5, 5) . "-001" . "<br/>";
        
        $text2 = "the quick brown fox jumps over the lazy dog";
            echo "Position - " . strpos($text2, "fox") . "<br/>"; 
        
        $item = "Watermelon";
            echo "The length of $item is " . strlen($item) . "<br/>";
            echo "New text - " . str_replace("quick", "slow", $text2) . "<br/>";
    ?>

</body>
</html>