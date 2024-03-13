<?php
     $age = 23;
     $isCnic = false;

     if($age>=18){
        echo"<br> you can drive a car";
             
        if($isCnic == true){
            echo"<br> you can take my car";
        }
        else{
            echo"<br> you cannot take my car";
        }
    
     }
    else{
        echo"<br> you cannot drive a car";
     }

    
     //task

     for($i=0; $i<50; $i++){
        if($i%2==0){
            echo "<br> this is $i even";
        }
        else{
            echo "<br> this is $i odd";
        }
     }



?>