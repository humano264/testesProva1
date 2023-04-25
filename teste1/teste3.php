<?php
$A = floatval(fgets(STDIN));
$B = floatval(fgets(STDIN));
$C = floatval(fgets(STDIN));

$tempo = $B / $A;

$custo = $B / $C;

$tempo = number_format($tempo, 2, '.', '');
$custo = number_format($custo, 2, '.', '');
echo"Total horas: $tempo\n";
echo"Total combustivel: $custo\n";
?>