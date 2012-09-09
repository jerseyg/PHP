<?php

$topping_prices = array (
                        'mushrooms'         => 0.50,
                        'onions'            => 0.50,
                        'tomatoes'          => 0.50,
                        'green peppers' => 0.50,
                        'olives'            => 0.50,
                        'ham'               => 0.75,
                        'pepperoni'         => 0.75,
                        'bacon'             => 0.75,
                        'shrimps'           => 0.75,
                        'beef'              => 0.75,
                        'feta'              => 0.75,
                        'extra sauce'   => 0,
                        'extra cheese'  => 0.25);
$size_prices = array(
                        'small' => 7.50,
                        'medium' => 10.50,
                        'large' => 14.00);
define('BR','<br/>');
define('GST_RATE',.05);
define('PST_RATE',.07);
function print_order($pizza_order) {
        global $topping_prices;
        global $size_prices;
   
        $number_of_pizzas = count($pizza_order['pizzas']);
   
        echo "Customer: {$pizza_order['customer_name']}" . BR;
        echo "Address: {$pizza_order['customer_address']}" . BR;
        echo "Number of Pizzas: $number_of_pizzas" . BR . BR;
   
        $sub_total = 0;
        foreach ($pizza_order['pizzas'] as $number => $pizza) {
            $topping_total = 0;
            echo "Pizza " . ($number + 1) . BR;
            echo "Size: " . $pizza['size'] . BR;
            foreach ($pizza['toppings'] as $topping) {
                $topping_total += $topping_prices[$topping];
                echo $topping . BR;
            }
            $pizza_total = $topping_total + $size_prices[$pizza['size']];
            echo "Sub-Total for Pizza " . ($number + 1) . ": $" . number_format($pizza_total,2) . BR . BR;
            $sub_total += $pizza_total;
        }
        echo "Overall Sub-Total: $" . number_format($sub_total,2) . BR;
        $grand_total = $sub_total + PST_RATE*$sub_total + GST_RATE*$sub_total;
        echo "With Taxes: $" . number_format($grand_total,2);
   
}
/* ------------------------------------- */
/* Define your $current_order hash here. */
/* ------------------------------------- */
$current_order = Array (
							'customer_name' => 'Wally Glutton',
							'customer_address' => '124 Home St.',
							'pizzas' => array (
											array(
										'size' => 'medium',
										'toppings' => array ('olives', 'bacon', 'feta', 'green peppers')
										),
										
										array(
										'size' => 'large',
										'toppings' => array ('beef', 'tomatoes', 'mushrooms')								
										)
						)
							
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Cigar Party

		</title>
</head>
<body>
	<h1>Pizza</h1>
	<p>
			<?php
				print_order($current_order);
?>
	</p>
</body>
</html>