<?php

function converter(float $amount, string $currency){
    switch ($currency){
        case "USD":
            echo "$amount $currency is " . $amount * 123 . " Taka";
            break;
        case "GBP":
            echo "$amount $currency is " . $amount * 165 . " Taka";
            break;
        case "EUR":
            echo "$amount $currency is " . $amount * 145 . " Taka";
            break;
        case "Riyal":
            echo "$amount $currency is " . $amount * 35 . " Taka";
            break;
        case "Yuan":
            echo "$amount $currency is " . $amount * 18 . " Taka";
            break;
        default:
            echo "only USD / GBP / EUR / Riyal / Yuan Supported";
    }
}

converter(100, "Riyal");
