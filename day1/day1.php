<!DOCTYPE html>
<html>
<body>

<?php
$end==false;
$compteur = 0;
$var1 = 0;
$var2 = 0;
$var3 = 0;
$sum1 = 0;
$sum2 = 0;
$offset = 0;
$file = fopen("input1","r");

$var1 = fgets($file);
$var2 = fgets($file);
$var3 = fgets($file);
$sum1 = $var1 + $var2 + $var3;
$offset = strlen($var2) + strlen($var3);
fseek($file,-$offset,SEEK_CUR);

while(!feof($file) and $end==false){
          
    $var1 = fgets($file);
    echo $var1."<br>";
    $var2 = fgets($file);
    echo $var2."<br>";
    $var3 = fgets($file);
    echo $var3."<br>";
    echo "<br>";

    if( ($var1 == false) or ($var2 == false) or ($var3 == false) ){
        $end = true;
        break;
    }

    $offset = strlen($var2) + strlen($var3);
    
    $sum2 = $var1 + $var2 + $var3;

    if($sum2>$sum1 and $end==false){
        $compteur++;
    }
    $sum1 = $sum2;

    fseek($file,-$offset,SEEK_CUR);
}
echo ("Answer = " .$compteur);
fclose($file);
?>

</body>
</html>