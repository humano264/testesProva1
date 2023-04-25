<?php
function Cebola($x) {
  $erros = [
    'P' => 'B',
    'F' => 'V',
    'T' => 'D',
    'R' => 'L',
    'J' => 'Z',
    'X' => 'S'
  ];
  return $erros[$x] ?? $x;
}

function criptografar($entrada) {
  $frase = explode(" ", $entrada);
  $a = array_map(function($palavra) {
    $x = str_split($palavra);
    $x = array_map('Cebola', $x);
    return implode("", $x);
  }, array_reverse($frase));
  return implode(" ", $a);
}

$stdin = fopen('php://stdin', 'r');
$n = (int) trim(fgets($stdin));
for ($i = 0; $i < $n; $i++) {
  $entrada = trim(fgets($stdin));
  $fim = criptografar($entrada);
  echo $fim . "\n";
}
fclose($stdin);
?>