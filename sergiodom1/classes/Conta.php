<?php 
 // a clase começa com a palavra reservada class
 // a primeira letra da classe deve ser maiuscula 

 class Conta {
     
    // atributos começam com a primeira letra 
    // em maiuscula 

    private $codConta; 
    private $saldo;

    // metado construdor no PHP


    function __construct($codConta){

        $this->codConta = $codConta;
    }
     
    // metado depositor na conta 
    public function depositar ($valor){

          //somar o valor do objeto 
    $this->saldo = $this->saldo + $valor;

    }

  
    //metado sacar da conta 
    public function  sacar($valor){

        $this->saldo = $this->saldo - $valor;
    }

    //metado consultar a conta 
    public function consultar(){

        return $this->saldo;

    }
    
    // guardar o cod da conta 
    public function setCodigoConta($codigo){  //set-put
     $this->codConta = $codigo;
    }
    
    public function getCodigoConta(){  //set-put
     
     return $this->codConta;
    }
 }
 ?>