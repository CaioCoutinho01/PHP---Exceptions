<?php

namespace Alura\Banco\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "Você tem $valorSaque, mas tem apenas $saldoAtual em conta";
        parent::__construct($mensagem);
    }
}