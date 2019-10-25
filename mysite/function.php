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
    
    function message1()
    {
        echo "Welcome to Cebu" . "<br/>";
        message2("Jan");
    }
    
    function message2($user)
    {
        echo "Welcome, " . $user . "<br/>";
    }
    
    function total($price, $quantity)
    {
        $total = number_format($price * $quantity);     
        return $total;
    }

        message1();
        message2("Ian");
        echo " The total price of item (price x quantity) is Php" . total(350.35,3) . "<br/>";
        echo "<hr/>";

    function compute_mo_payment($product_price, $down_payment, $mos_to_pay, $interest)
    {
        $init_mo_payment = ($product_price - $down_payment) / $mos_to_pay;
        $mo_interest_to_pay = $init_mo_payment * (0.01 * $interest);
        $tot_mo_payment = $init_mo_payment + $mo_interest_to_pay;
        
        return  "The monthly payment is Php" . number_format($tot_mo_payment,2) . "<br/>" . 
                "The monthly interest is Php" . number_format($mo_interest_to_pay,2) . "<br/>" .
                "The monthly amount without interest is Php" . number_format($init_mo_payment,2) . "<br/> <hr/>"     ;
    }

        echo compute_mo_payment(40000,10000,9,3);
        echo compute_mo_payment(100,50,5,3);
    ?>

</body>
</html>