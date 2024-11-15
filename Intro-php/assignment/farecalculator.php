<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $distance = isset($_POST['distance']) ? $_POST['distance'] : 0;
    $passengerType = isset($_POST['passengerType']) ? $_POST['passengerType'] : 'regular';


    $baseFare = 13.00; 
    $additionalRate = 1.75; 
    $discount = 0.20; 

    
    if ($distance <= 5) {
        $fare = $baseFare;
    } else {
        $fare = $baseFare + ($distance - 5) * $additionalRate;
    }

    if ($passengerType == "student/seniorcitizen") {
        $fare = $fare - ($fare * $discount);
    }

    echo "<h2>Jeepney Fare Calculation</h2>";
    echo "<p>Total Fare: Php " . number_format($fare, 2) . "</p>";
} 
?>

