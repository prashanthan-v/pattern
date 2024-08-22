<?php
    // square
    for($i=0;$i<5;$i++){

        for($j=0;$j<5;$j++){
            echo "*";
        }
        echo "<br>";
    }
  
    // triangle
    $n=5;
    for($i=0; $i<$n; $i++) { 

        for($j=0;$j<$n-$i-1;$j++){
            echo "&nbsp;&nbsp";
        }
        for($k=0;$k<$i+1;$k++){
            echo "*&nbsp;&nbsp";
        }
        echo "<br>";

    }

    for($i=4; $i>=0; $i--) { 

        for($j=$n-$i-1;$j>0;$j--){
            echo "&nbsp;&nbsp";
        }
        for($k=$i+1;$k>0;$k--){
            echo "*&nbsp;&nbsp";
        }
        echo "<br>";

    }
    
    
     for($k=0;$k<=$n;$k++){
        if($k%2==0){
            continue;
        }
         for($j=0;$j<$k+1;$j++){
            echo "".$k;
         }
         echo"<br>";
     }
     

     for($i=0;$i<$n;$i++){
        for($j=0;$j<=$i;$j++){
            echo "* ";
        }
        echo "<br/>";
    }
       $name2 = "pr";
       

?>