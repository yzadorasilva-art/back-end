<?php

$idadecliente = 55;
$possuiDeficiencia = "não";
$gestante = "não";

if ($idadecliente >= 60 || $possuiDeficiencia == "sim" || $gestante == "sim"){
    echo "Atendimento prioritário";
}
else
{
    echo "Atendimento normal";
}
?>