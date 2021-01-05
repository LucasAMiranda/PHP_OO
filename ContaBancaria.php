<?php 

class ContaBancaria{
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
		String $banco,
		String $nomeTitular, 
		String $numeroAgencia, 
		String $numeroConta,
		float $saldo,
	){

		$this->banco = $banco;
		$this->nomeTitular = $nomeTitular->
		$this->numeroAgencia = $numeroAgencia;
		$this->numeroConta = $numeroConta;
		$this->saldo = $saldo;
	}

	public fuction obterSaldo() string
	{
		return 'seu saldo atual é de R$' . $this->saldo;
	}

	public function depositar(float $valor) string 
	{
		$this->saldo += $valor;
		return 'Depósito de R$ '. $valor .'realizado com sucesso!';
	}

	public function sacar(float $valor) string
	{
		$this->saldo -= $valor;
		return 'Saque de R$ '. $valor .'realizado com sucesso!';
	}

}

$conta = new ContaBancaria
(
	'Banco do Brasil',
	'Lucas Miranda',
	'8881',
	'32567-10',
	 0 

);

//var_dump($conta->obterSaldo());
echo $conta->obterSaldo() //0

echo '<br>';

echo $conta -> depostiar (300.00);

echo '<br>';

echo $conta->obterSaldo()// 300

echo '<br>';

$conta->sacar(150.00)

echo '<br>';

echo $conta->obterSaldo();