<?php

// customer = for who
function orderPizza($pizzatype, $customer) 
{
    $type = $pizzatype;
    echo 'Creating new order... <br>';
    $price = calculateCost($type);


    $address = 'unknown';
        if($customer == 'koen'){
            $address = 'a yacht in Antwerp';
            }
        if ($customer == 'manuele'){
            $address = 'somewhere in Belgium';
            }
        if ($customer == 'students') {
            $address = 'BeCode office';
        }

    $toPrint =  
        "A {$pizzatype} pizza should be sent to {$customer}" . 
        "<br> The address: {$address}."  . 
        "<br> The bill is € {$price}." . 
        "<br> Order finished. <br><br>"; 

    echo $toPrint;              
        
}


function calculateCost($p_type)
{
    $cost = 'unknown';

    if ($p_type == 'marguerita'){
        $cost = 5;
    }
    
    if ($p_type == 'golden'){
            $cost = 100;
    }

    if ($p_type == 'calzone'){
        $cost = 10;
    }

    if ($p_type == 'hawai') {
            throw new Exception('Computer says no');
    }

    return $cost;
}

function ordr_piz_all()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

ordr_piz_all();
