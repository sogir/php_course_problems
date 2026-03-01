<?php

function gradeCalculator(int $mark) {
    echo "You got ";
    if ($mark < 33){
        echo "Grade- F \n";
        echo "GPA 00";
    } else if ($mark > 33 && $mark <= 50 ){
        echo "Grade D \n";
        echo "GPA 2.00";
    } else if ($mark > 50 && $mark <= 60 ){
        echo "Grade D \n";
        echo "GPA 2.00";
    } else if ($mark > 60 && $mark <= 70 ){
        echo "Grade C \n";
        echo "GPA 2.50";
    } else if ($mark > 70 && $mark <= 80 ){
        echo "Grade B \n";
        echo "GPA 3.00";
    } else if ($mark > 80 && $mark <= 90 ){
        echo "Grade A \n";
        echo "GPA 3.50";
    } else if ($mark > 90 && $mark <= 100 ){
        echo "Grade A+ \n";
        echo "GPA 4.00";
    } else {
        echo "provide a correct mark";
    }
}

gradeCalculator(50);

?>
