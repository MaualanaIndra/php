<?php

//operator matematika
$a = 5;
$b = 2;

$c= $a + $b;

echo $c.'<br>';

$c= $a - $b;
echo $c.'<br>';

$c= $a * $b;
echo $c.'<br>';

// pembulatan ke atas round, pembulatan ke baeah floor
$c= $a / $b;
echo round($c).'<br>';

$c= $a % $b;
echo $c.'<br>';


//operator Logika

$c = $a < $b;
echo $c.'<br>';

$c = $a > $b;
echo $c.'<br>';

$c = $a == $b;
echo $c.'<br>';

$c = $a != $b;
echo $c.'<br>';


//increment(++)/Decrement(--)
$a++;
echo $a.'<br>' ;

//Operator String
$kata = 'sura';
$kota = 'baya';

$hasil = $kata . $kota;

$hasil .=' Kota Pahlawan';

echo $hasil;




?>