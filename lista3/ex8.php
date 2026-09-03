<?php

$nome = "Yzadora";
$senha = "12345";
$confirmaresenha = "12345";
$datadenascimento = "25/11/2008";

if ($nome !== "Yzadora") {
    echo "Nome vazio";
} else {
    echo "Nome preenchido";
}
echo "<br>";

if ($senha = $confirmar_senha = "12345"){;
echo "Acesso Liberado";
} else {
    echo "Usuário ou senha incorretos!";
}
echo "<br>";
 echo $datadenascimento;
?>
