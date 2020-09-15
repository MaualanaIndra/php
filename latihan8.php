<?php

// $nama = array("Aldi","budi","rkaa",100);

// var_dump ($nama);

// echo "<br>";

// foreach ($nama as $nam) {
//     echo $nam."<br>";
// }



$nama = array(
    "aldi"=> "surabya",
    "rudi"=> "malang",
    "Aidit"=> "madiun"
);

var_dump($nama);
echo "<br>";

foreach ($nama as $key => $value) {
    echo $key.'-'.$value;

    echo"<br>";
}

?>