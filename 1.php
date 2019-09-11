<?php
for ($i=1; $i <= 9; ++$i) { 
  for ($j=1; $j <= $i; ++$j) { 
    echo "$j"."X"."$i"."=".$i*$j."  ";
  }
  echo "<br>";
}

function fi()
{
  for ($i=1; $i <= 9; ++$i) { 
    for ($j=1; $j <= $i; ++$j) { 
      echo "$j"."X"."$i"."=".$i*$j."  ";
    }
    echo "<br>";
  }
}
echo fi();

function nmu($n) {
  if ($n == 0 || $n == 1) {
    return 1;
  } else {
    $result = 1;
    for ($i=$n; $i > 1; $i--) { 
      $result *= $i;
    }
  }
  return $result;
}
echo nmu(6);
?>