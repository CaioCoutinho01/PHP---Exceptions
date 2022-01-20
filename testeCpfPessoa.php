<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\NomeCurtoException;
use Alura\Banco\Modelo\Pessoa;

require_once 'autoload.php';

try {
    $pessoa = new Pessoa('Caio', new CPF('123.456.789-10'));
} catch (NomeCurtoException | InvalidArgumentException $exception){
    echo $exception->getMessage();
}