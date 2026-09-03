<?php

function verificarIdade($idade) {
    if ($idade >= 18) {
        return "Maior de idade. Pode tirar carta<br><br>";
    } else {
        return "Menor de idade. Não pode tirar carta<br><br>";
    }

}
echo verificarIdade(17);
echo verificarIdade(44);
echo verificarIdade(15); 
echo verificarIdade(18);
