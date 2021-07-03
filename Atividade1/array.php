<?php

function criarArray($m, $n)
{
    $arrayMultiplos = array();

    for ($i = 0; $i < $m; $i++) {
        $arrayMultiplos[$i] = $n * $i;
    }
    return $arrayMultiplos;
}

if (isset($_POST["submit"])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $array = criarArray($n1, $n2);

    echo "<h3> Valores do array: </h3>";
    foreach($array as $num){
      echo "[".$num."]";
    }
}

?>