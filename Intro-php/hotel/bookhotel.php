<?php

$roomType = $_POST["room_type"];
$checkIn = $_POST["checkin"];
$checkOut = $_POST["checkout"];


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $date1=date_create($checkIn);
    $date2=date_create($checkOut);

    $diff = date_diff($date1, $date2);
    $noOfDays = $diff->format("%a"); 
    $totalDue = $roomType * $noOfDays;
    
    header("location: hotelform.php?totalDue=" .$totalDue);
}