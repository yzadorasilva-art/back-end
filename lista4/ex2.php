<?php

$email = "maria@gmail.com";
$senha = "12345";

echo "Bem vindo ao FACEBOOK <br>";

if($email == "maria@gmail.com" && $senha == "12345"){
    echo "Acesso liberado! <br>";
    header("Location: https://www.facebook.com");
}
else{
    echo "Email ou senha inálido!";
}
