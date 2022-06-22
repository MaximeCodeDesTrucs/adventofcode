<!DOCTYPE html>
<html>
<body>

<?php
//http://localhost/custom/adventofcode/day2/day2.php

$file = fopen("input2","r");
$ligne = fgets($file);
$parse = explode(" ",$ligne,2);
$horizontal += $parse[1];

while(!feof($file)){
       
    $ligne = fgets($file);
    $parse = explode(" ",$ligne,2);
    if($parse[0]=="forward")
    {
        $horizontal += $parse[1];
        $profondeur += ($parse[1]*$aim);
    }
    if($parse[0]=="up")
    {
        $aim -= $parse[1];
    }
    if($parse[0]=="down")
    {
        $aim += $parse[1];
    }
}
echo ("Answer = " .($horizontal*$profondeur));
fclose($file);
?>

</body>
</html>