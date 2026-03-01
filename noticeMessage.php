<?php
//success, error, warning, info

function meassage(string $message, string $state)
{
     switch ($state) {
          case "success":
               echo "<div style=\" 
                    padding: 15px 10px; background-color:green; color:white; border-radius: 5px; margin-bottom: 5px; max-width: 500px;
               \">
                    <strong>Success: </strong><br>
                    $message
               </div>";
               break;

          case "error":
               echo "<div style=\" 
                    padding: 15px 10px; background-color:red; color:white; border-radius: 5px; margin-bottom: 5px; max-width: 500px;
               \">
                    <strong>Error:</strong><br>
                    $message
               </div>";
               break;

          case "warning":
               echo "<div style=\" 
                    padding: 15px 10px; background-color:orange; color:black; border-radius: 5px; margin-bottom: 5px; max-width: 500px;
               \">
                    <strong>Warning:</strong><br>
                    $message
               </div>";
               break;

          case "info":
               echo "<div style=\" 
                    padding: 15px 10px; background-color:darkgrey; color:black; border-radius: 5px; margin-bottom: 5px; max-width: 500px;
               \">
                    <strong>Notice: </strong><br>
                    $message
               </div>";
               break;

          default;
               echo "Incorrect Arguments";
     }
}


meassage("Proceed with Caution", "warning");
meassage("Something Went Wrong", "error");
meassage("This is a info", "info");
meassage("Congratulations!!!!", "success");
