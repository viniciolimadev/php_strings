<?php

$telefones = ['(24) 99999 - 9999 ', ' (21) 99999 - 9999', '(24) 2222 - 2222'];

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match('/^\(\d{2}\) \d{4,5} - \d{4}$/', trim($telefone));
    
    if (!$telefoneValido) {
        echo "O telefone $telefone é inválido" . PHP_EOL;

}else {
        echo "O telefone $telefone é válido" . PHP_EOL;
    }
}
echo implode(array: $telefones, separator: ', ') . PHP_EOL;