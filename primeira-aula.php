<?php

$nome = 'Vinicio Lima';

$ehDaMinhaFamilia = str_contains($nome, 'Lima');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}
