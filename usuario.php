<?php

$email = 'dev.vinicio@gmail.com';

$posicaoDoArroba = strpos($email, '@');

$senha = '123456dadadw';

echo mb_strlen($senha) . PHP_EOL;

if(strlen($senha) >= 8) {
    echo "Senha segura" . PHP_EOL;
} else {
    echo "Senha insegura" . PHP_EOL;
} 

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;

echo strtolower($usuario) . PHP_EOL;

echo $usuario . PHP_EOL;
echo substr($email, $posicaoDoArroba+1) . PHP_EOL;