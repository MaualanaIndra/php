<?php

// //Array Dimensi
// $nama = array ("joni","tejo","alsi","andir");

// var_dump ($nama);


// echo "<br>";
// echo $nama [2];


// echo "<br>";

// for ($i=0; $i < 4 ; $i++) { 
//     // echo $i;

//     echo $nama[$i]."<br>";
// }


// foreach ($nama as $nam ) {
//     echo $nam.'<br>';
// }


//Array Asosiasif

$nama = array(
    "joni" => "surabaya",
    "aldi" => "malang",
    "bobo" => "semarang",
    "aidit"=> "sidorarjo"
);


var_dump ($nama);

echo "<br>";
// echo $nama ["aldi"];


foreach ($nama as $key => $value) {
    echo $key."=>".$value;

    echo"<br>";
}




?>