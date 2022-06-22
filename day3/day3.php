<!DOCTYPE html>
<html>
<body>

<?php
//http://localhost/custom/adventofcode/day3/day3.php

$i=0;
$tab1=array(array());
$tab1_2=array(array());
$file=fopen("input3","r");

while(!feof($file)){
    
    $ligne = fgets($file);
    for($j=0;$j<12;$j++){
        $tab1[$i][$j]=$ligne[$j];
    }
    
    $i++;
}

$tab2 = array(array());
$tab2_2 = array(array());

for($j=0;$j<12;$j++){    
    echo $j."<br>";
    $count0=0;
    $count1=0;
    for($i=0;$i<count($tab1);$i++){
        if($tab1[$i][$j]==0){
            $count0++;
        }
        else {
            $count1++;
        }
    }
    if($count0>$count1){
        for($l=0;$l<count($tab1);$l++){
            if($tab1[$l][$j]==0){
                for($k=0;$k<12;$k++){
                    $tab2[$l][$k]=$tab1[$l][$k];
                }
            } else {
                $tab2_2[$l][$j]=$tab1[$l][$j];
            }
        }
    } else {
        for($l=0;$l<count($tab1);$l++){
            if($tab1[$l][$j]==1){
                for($k=0;$k<12;$k++){
                    $tab2[$l][$k]=$tab1[$l][$k];
                }
            } else {
                $tab2_2[$l][$j]=$tab1[$l][$j];
            }
        }
    }
    $tab1 = $tab2;
    $tab1_2 = $tab2_2;
    echo "oui"."<br>";
    echo count($tab1) ."<br>";
    if(count($tab1)==1){
        $oxygene = $tab1;
        echo 'oui';
    }
    if(count($tab1_2)==1){
        $CO2 = $tab1_2;
    }
      
    $j=0;
}

$oxygeneValue=bindec(implode($gamma));
$CO2Value=bindec(implode($epsilon));

echo ("Answer = " .($oxygeneValue*$CO2Value));
fclose($file);
?>

</body>
</html>