<?php


function resultCalculator(
        int $sub_1, 
        int $sub_2, 
        int $sub_3, 
        int $sub_4, 
        int $sub_5, 
        int $sub_6,
    ): float{
        $motGPA = 0;
        
        for ($i=1 ; $i<=6 ; $i++){
            $mark = ${"sub_" . $i};
            if ($mark < 33){
                echo "Subject $i \n";
                echo "Grade- F \n";
                echo "GPA 00 \n";
                echo "------------------ \n";
            } else if ($mark >= 33 && $mark <= 50 ){
                echo "Subject $i \n";
                echo "Grade D \n";
                echo "GPA 2.00 \n";
                echo "------------------ \n";
                $motGPA = $motGPA + 2.00;
            } else if ($mark > 50 && $mark <= 60 ){
                echo "Subject $i \n";
                echo "Grade D \n";
                echo "GPA 2.50 \n";
                echo "------------------ \n";
                $motGPA = $motGPA + 2.50;
            } else if ($mark > 60 && $mark <= 70 ){
                echo "Subject $i \n";
                echo "Grade C \n";
                echo "GPA 3.00 \n";
                echo "------------------ \n";
                $motGPA = $motGPA + 3.00;
            } else if ($mark > 70 && $mark <= 80 ){
                echo "Subject $i \n";
                echo "Grade B \n";
                echo "GPA 3.50 \n";
                echo "------------------ \n";
                $motGPA = $motGPA + 3.50;
            } else if ($mark > 80 && $mark <= 90 ){
                echo "Subject $i \n";
                echo "Grade A \n";
                echo "GPA 4.50 \n";
                echo "------------------ \n";
                $motGPA = $motGPA + 4.50;
            } else if ($mark > 90 && $mark <= 100 ){
                echo "Subject $i \n";
                echo "Grade A+ \n";
                echo "GPA 5.00 \n";
                echo "------------------ \n";
                $motGPA = $motGPA + 5.00;
            } else {
                echo "provide a correct mark";
            } 
            
       
        
    }
    
    return $motGPA / 6;
}

$finalResult = resultCalculator(50,60,70,80,90,50);

echo "Final Result:". $finalResult;

?>
