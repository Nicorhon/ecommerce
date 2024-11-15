<?php

$loanAmount = $_POST["loan_amount"];
$clientType = $POST["client_type"];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $interestRate = 10;

    if($loanAmount < 10000){
        $interestRate = 10;
    } else {
        $interestRate = 5;
    }

    if($clientType == 1){
        $interestRate = $interestRate - 2;
    }
    
    $interestAmount = $loanAmount * ($interestRate / 100);
    $totalLoan = $loanAmount + $interestAmount;

    header("location: loancalculator.php?loan=".$totalLoan);
}