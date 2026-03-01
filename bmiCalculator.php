<?php 

function bmiCalc(
        float $weight,
        float $height, 
        string $heightUnit = "m",
    ):float {
    if ($heightUnit == "ft"){
        $height = $height * 0.3048;
    }
    return $bmi = $weight / ($height * $height);
}

// give weight in kg, Height, unit: "m" or "ft", 
$bmiResult = bmiCalc(60, 5.8, "ft");

echo "Your Body Mass Index is: $bmiResult \n";

if ($bmiResult <=18.5){
    echo "You're Underweight";
} else if ($bmiResult > 18.5 && $bmiResult <= 25){
    echo "You're Healthy Weight";
} else if ($bmiResult > 25 && $bmiResult <= 30){
    echo "You're Overweight";
} else {
    echo "You're Obese";
}

