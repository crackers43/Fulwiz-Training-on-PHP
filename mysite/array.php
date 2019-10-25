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
        $numbers = array(23,45,68,34,36,54);
            echo "Index 5 is - " . $numbers[5] . "<br/>";

        $person = array("John","Doe",24,array("php","mysql","javascript"),"Cebu");  
            echo "Welcome " . ucwords($person[0]) . " " . ucwords($person[1]) . " who lives in " . $person[4] . "<br/>";
            echo "Skills : " . strtoupper($person[3][0]) . "<br/>"; //, {$person[3][1]}, {$person[3][2]}" . "<br/>"; 
            echo print_r($person) . "<br/>";
    ?>

    <?php
        $data = array(  "fname"=>"john",
                        "lname"=>"doe",
                        "address"=>"cebu",
                        "age"=>25
                    );
            echo "first name - " . ucwords($data["fname"]) . "<br/>";
            echo "welcome  {$data['fname']}  {$data['lname']} " . "<br/>";
            echo "count - " . count($data) . "<br/>";
            
            
        $numbers1 = array(23,45,68,34,36,54);
            echo "min - " . min($numbers1) . "<br/>";        
            echo "max - " . max($numbers1) . "<br/>";
            sort($numbers1) . "<br/>";
            echo print_r($numbers1) . "<br/>";
            rsort($numbers1) . "<br/>";
            echo print_r($numbers1) . "<br/>";

            echo "is 46 present ? " . in_array(46,$numbers1) . "<br/>";

        




    ?>
</body>
</html>