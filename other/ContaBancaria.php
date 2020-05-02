<?php

declare(strict_types=1);

class ContaBancaria
{
    /**
     * @var string
     */
    private $banco;

    /**
     * @var string
     */
    private $nomeTitular; 

    /**
     * @var string
     */
    private $numeroAgencia;

    /**
     * @var string
     */
    private $numeroConta;

    /**
     * @var float
     */
    private $saldo;

    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo
    ) {
        //this representa a propria classe
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo() : string
    {
        return 'Seu saldo atual é: R$' . $this->saldo;
    }

    public function depositar(float $valor) : string
    {
        $this->saldo += $valor;
        return 'Deposito de R$' . $valor . ' realizado';
    }

    public function sacar(float $valor) : string
    {
        $this->saldo -= $valor;
        return 'Saque de R$' . $valor . ' realizado';
    }

}

//$conta = new ContaBancaria('Banco do Brasil', 'Taylan Silva', '8244', '57354-10', 300.00); igual abaixo

$conta = new ContaBancaria(
    'Banco do Brasil', // banco
    'Taylan Silva', // nomeTitular
    '8244', // numeroAgencia
    '57354-10', // numeroConta
    0 // saldo
); 

echo $conta->obterSaldo(); //0

echo "<br>";

echo $conta->depositar(300.00);

echo "<br>";

echo $conta->obterSaldo(); //300

echo "<br>";

echo $conta->sacar(150.00);

echo "<br>";

echo $conta->obterSaldo(); //300