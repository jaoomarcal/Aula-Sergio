<?php

// a classe começa com a palavra reservada class

//a primeira letra da classe deve ser maiúscula

class Conta{
    //atributos começam com a primeira letra em maiúscula
    
    private $codConta;
    private $saldo;

    //metodo construtor no PHP
    function __construct($codConta){
        $this->codConta = $codConta;
    }

    //metodo depositar na conta
    public function depositar($valor){
        //somar o valor no saldo do objeto
        $this->saldo = $this->saldo + $valor;
    }

    //metodo sacar da conta
    public function sacar($valor){
        $this->saldo = $thos->saldo - $valor;
        //mesma coisa this->saldo -=$valor
    }

    //metodo consultara conta
    public function consultar(){
        return $this->saldo;
    }

    // guardar o código da conta 
    public function setCodigoConta($codigo){
        $this->codConta = $codigo;
    }

    public function  getCodigoConta(){
        return $this->codConta;
    }
}




?>