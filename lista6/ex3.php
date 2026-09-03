<?php
$opcao = 2;
echo "Bem vindo a ALARES INTERNET <br>";
echo "1 - suporte tecnico <br>";
echo "2 - Segunda via da fatura <br>";
echo "3 - Falar com atendente <br>";
echo "4 - Sair <br>";

switch ($opcao) {
    case 1:
        echo "Voce escolheu: Suporte tecnico";
        break;
    case 2:
        echo "Voce escolheu: Segunda via da fatura";
        break;
    case 3:
        echo "Voce sera encaminhado para falar com um atendente";
        break;
    case 4:
        echo "Obrigado por utilizar a alares!";
        break;
    default:
        echo "Opção inválida.";
}
