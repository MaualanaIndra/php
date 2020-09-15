<?php

function belajar (){
    echo "saya belajar php";
}

// belajar();

echo "<br>";

function luaspersegi ($p = 5,$L =3){
     $luas = $p * $L;
    echo $luaspersegi;

}

function luas ($p = 5,$L =3){
    $luas = $p * $L;
    return $luas;
}

function output(){
    return "belajar function";

}
echo luas() * 5;
?>