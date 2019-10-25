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
        switch($month)
        {
            case 1: $monthname = 'january';         
            break;
            case 2: $monthname = 'february';        
            break;
            case 3: $monthname = 'march';           
            break;
            case 4: $monthname = 'april';           
            break;
            case 5: $monthname = 'may';             
            break;
            case 6: $monthname = 'june';            
            break;
            case 7: $monthname = 'july';            
            break;
            case 8: $monthname = 'august';          
            break;
            case 9: $monthname = 'september';       
            break;
            case 10: $monthname = 'october';        
            break;
            case 11: $monthname = 'november';       
            break;
            case 12: $monthname = 'december';       
            break;
            default: $monthname = 'invalid month';  
            break;
        }

        echo "month name is - " . $monthname . "<br/>";
?>    


</body>
</html>