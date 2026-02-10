<?php

// vai usar a calsse da conta
include('classes/conta.php');

//criar um objeto tipo conta
//ou instanciar um objeto
//nesse momento o construct é execultado

$conta1 = new Conta("123");
$conta2 = new Conta("456");
echo "<h1>O numero da conta1 = " . $conta1->getCodigoConta() . "<br>";
echo "<h1>O numero da conta2 = " . $conta2->getCodigoConta() . "<br>";


?>