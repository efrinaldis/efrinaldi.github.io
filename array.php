<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1> PHP ARRAY</h1>

<?php
    echo "<br>";
    $kota = array("Batam", "Bandung", "Jakarta");
    echo count($kota);
    echo "<hr>";
    echo "<br>";
?>

<?php
    echo "<br>";
    $kota = array("Batam", "Bandung", "Jakarta");
    echo "I Like ".$kota[0] .", ".$kota[1] .", ".$kota[0] ;
    echo "<hr>";
    echo "<br>";
?>

<?php
    
    $umur = array("Efrinaldi" => "21", "Putri"=>"20", "viola"=>"19");
    echo "Efrinaldi berusia ". $umur['Efrinaldi']. " Tahun";
    echo "<hr>";
    echo "<br>";
?>

<?php

$motor = array (
    array ("suzuki", 10, 15),
    array ("honda", 17, 12),
    array ("yamaha", 18, 20),
);

echo $motor[0][0]. ": Stock: ".$motor[0][1].", Terjual: " .$motor[0][2]."<br>";
echo $motor[1][0]. ": Stock: ".$motor[1][1].", Terjual: " .$motor[1][2]."<br>";
echo $motor[2][0]. ": Stock: ".$motor[2][1].", Terjual: " .$motor[2][2]."<br>";
echo "<hr>";
    echo "<br>";
?>

<?php


$number = array(4, 6 ,2 ,22, 11);
sort($number);

$arrlength = count ($number);
for ($a = 0; $a < $arrlength; $a++){
    echo $number[$a];
    echo "<br>";
    
}
echo "<hr>";
echo "<br>";
?>

<?php

$kota = array("Batam", "zimbabwe", "Jakarta");
rsort($kota);

$clength = count($kota);
for ($a = 0; $a < $clength; $a++){
    echo $kota[$a];
    echo "<br>";
}
    ?>
</body>
</html>