<?php

$escolha = $_POST['escolha'];

if ($escolha ==  1) {
    $a = array( "VAI TROCAR UMA LAMPADA",
                "VAI BATER UMA LAJE",
                "CHORAR NAO EH COISA DE VIADOOO");

$frase = $a[rand(0, count($a)-1)];


}else 
{
    $a = array( "VIVA AS MULHERES!",
                "TA GRAVIDAAAAAA",
                "EMPODERADA AAAAAAJKSDRNKJRWGFKOMPPLW UYHULLLLLLLL");

$frase = $a[rand(0, count($a)-1)];   
}

echo $frase;

?>