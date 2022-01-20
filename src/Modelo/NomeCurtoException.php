<?php

namespace Alura\Banco\Modelo;


class NomeCurtoException extends \DomainException
{
    public function __construct(string $nome)
    {
        $message = "O nome: $nome precisa ter mais de 5 letras";
        parent::__construct($message);
    }
}