<?php
    $n=5;
   // right angle trinagle
    for($i=0;$i<$n;$i++){
        for($j=0;$j<=$i;$j++){
            echo "* ";
        }
        echo "<br/>";
    }
?>
<?php
echo "<br/><br/><br/>"
?>
<?php
 // inverted right angle trinagle
 $n=5;
 for($i=0;$i<$n;$i++){
    for($j=$n-$i;$j>0;$j--){
        echo "* ";
    }
    echo "<br/>";
 }
?>
<?php
echo "<br/><br/><br/>"
?>

<?php
 //equilateral trinagle
$n=5;
for($i=0;$i<$n;$i++){
    for($j=$n-$i;$j>0;$j--){
        echo "&nbsp;&nbsp;";
    }
    for($k=0;$k<=$i;$k++){
        echo "*&nbsp;&nbsp;";
    }
    echo "<br/>";
}
?>
<?php
echo "<br/><br/><br/>"
?>

<?php
$n=1;
for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo $n." ";
    }
    $n++;
    echo "<br/>";
}
?>

<?php
echo "<br/><br/><br/>"
?>

<?php
$n=65;
for($i=0;$i<5;$i++){
    for($j=0;$j<=$i;$j++){
        echo chr($n)." ";
    }
    $n++;
    echo "<br/>";
}
echo "<br/><br/><br/>";
$n=5;
$p=1;
for($i=0;$i<$n;$i++){
    for($j=0;$j<=$i;$j++){
        if($p%2==0){
            $p = $p+2;
            echo $p;
        }
        else{
            echo $p."&nbsp ";
            $p = $p+2;
            
        }

    }
    echo "<br/>";
}
?>

<?php
echo "<br/><br/><br/>"
?>

<?php
    $n=5;
    for($i=0;$i<$n;$i++){
        for($j=$n-$i;$j>0;$j--){
            echo"&nbsp;&nbsp;";
        }
        for($k=0;$k<=$i;$k++){
            echo "*&nbsp;&nbsp;";
        }
        echo "<br/>";
    }
    for($i=$n-1;$i>=1;$i--){
        for($j=$n;$j>=$i;$j--){
            echo"&nbsp;&nbsp;";
        }
        for($k=1;$k<=$i;$k++){
            echo "*&nbsp;&nbsp;";
        }
        echo "<br/>";
    }



    // $n=5;
    // $p=1;
    // for($i=0;$i<$n;$i++){
    //     for($j=0;$j<=$i;$j++){
    //         if($p%2==0){
    //             $p = $p+2;
    //             echo $p;
    //         }
    //         else{
    //             echo $p."&nbsp ";
    //             $p = $p+2;
                
    //         }

    //     }
    //     echo "<br/>";
    // }
    
?>
<?php
echo "<br/><br/><br/>"
?>

