<?php

$peso = 110;
$altura = 1.77;
$resultado = $peso / ($altura * $altura);

echo "IMC: " . number_format($resultado, 2) . "<br>";

if ($resultado < 18.5) {
    echo "Baixo peso";
} elseif ($resultado < 25) {
    echo "Peso ideal";
} elseif ($resultado < 30) {
    echo "Sobrepeso";
} elseif ($resultado < 35) {
    echo "Obesidade grau I";
} elseif ($resultado < 40) {
    echo "Obesidade grau II";
} else {
    echo "Obesidade grau III";
}

?>