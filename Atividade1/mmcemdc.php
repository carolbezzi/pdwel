<?php

  function mmc($i, $j)
  {
    return (($i * $j) / (mdc($i, $j)));
  }

  function mdc($i, $j)
  {
    $a = max($i, $j);
    $b = min($i, $j);
    
    if ($a % $b == 0) {
      return $b;
    } else {
      return mdc($b, ($a % $b));
    }
  }
    
  $resultado1 = $_GET['n1'];
  $resultado2 = $_GET['n2'];

  $mmc = mmc($resultado1, $resultado2);

  $mdc = mdc($resultado1, $resultado2);

  echo "<h3> MMC dos números digitados é: $mmc </h3>";
  
  echo "<h3>MDC dos números digitados é: $mdc </h3>";

?>
