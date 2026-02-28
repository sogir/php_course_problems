<?php

function loopCreator(
        int $startValue,
        int $finishValue,
        string $cycle,
        int $changeRate
    ){
    if ($cycle == "increment" || $cycle ==  "Increment") {
        if ($startValue > $finishValue){
            echo "Start value must be smaller than Finish value";
        } else {
            echo "Incrementing from $startValue to $finishValue by $changeRate \n";
            for($startValue; $startValue <= $finishValue; $startValue = $startValue + $changeRate)
            echo "$startValue \n";
        }
    } else if ($cycle == "decrement" || $cycle ==  "Decrement"){
        if ($startValue < $finishValue){
            echo "Start value must be larger than Finish value";
        } else {
            echo "Decrementing from $startValue to $finishValue by $changeRate \n";
            for($startValue; $startValue >= $finishValue; $startValue = $startValue - $changeRate)
                echo "$startValue \n";
        }
    } else {
        echo "Please Provide Correct Arguments";
    }
}

loopCreator(50, 100, "increment", 5);

?>
