<?php
<?php
$n = ($_POST['num']) ? (int) $_POST['num'] : 0; // Garante que seja um número inteiro
$num = rand(0, $n);

echo "Um número entre 0 e $n foi sorteado. Ele é $num."; 


    // $n = $_POST['num'];
    // $no = array(0, count($n)-1);
    // $num = $n[rand(0, count($n)-1)];

    // echo "Um número entre 0 e ".$n." foi sorteado. Ele é ".$num; 
