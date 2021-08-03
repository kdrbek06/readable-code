<?php

function orderPizza($pizzatype, $customer) 
{
    $price = calculateCost($pizzatype);

    $address = 'unknown';

        if ($customer == 'Koen')  $address = "a yacht in Antwerp"; 
        if ($customer == 'Manuele') $address = 'somewhere in Belgium';
        if ($customer == 'students') $address = 'BeCode office';
    

    echo 'Creating new order... <br>';
    echo "A {$pizzatype} pizza should be sent to {$customer}. <br>";
    echo "The address: {$address}. <br> ";
    echo "The bill is € {$price}. <br>";
    echo "Order finished. <br><br>"; 
      
}


function calculateCost($pizzaType)
{
    $cost = 'unknown';

        if ($pizzaType == 'marguerita') $cost = 5;
        if ($pizzaType == 'golden') $cost = 100;
        if ($pizzaType == 'calzone') $cost = 10;
        if ($pizzaType == 'hawai') {
            throw new Exception('Computer says no');
        }

    return $cost;
}


function orderAllPizza()
{
    orderPizza('calzone', 'Koen');
    orderPizza('marguerita', 'Manuele');
    orderPizza('golden', 'students');
}

orderAllPizza();
