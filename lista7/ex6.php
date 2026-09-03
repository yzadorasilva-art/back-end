<?php

function calcularmedia($nota1, $nota2, $nota3) {
    $resultado = ($nota1 + $nota2 + $nota3) / 3;
    return "A média do aluno é: $resultado";
}

echo calcularMedia(8, 9, 7);
echo calcularMedia (10, 6, 8);
echo calcularMedia (5, 7, 9);

?>