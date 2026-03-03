<?php

include("classes/conta.php");
include("classes/json.php");
// na linha abaixo o comando new executa  o construct da classe conta 

$conta1 = new Conta(001);
$conta1->depositar(50.21);

$conta2 = new Conta(002);
$conta2->depositar(35.21);

$array1 = [];
$array2 = [];

$array1["saldo"] = $conta1->consultar();
$array2["saldo"] = $conta2->consultar();

$json1 = json_encode(array1);
$json2 = json_encode(array2);

$nomeArq1 = $conta1 ->getCodigoConta() . ".json";
$nomeArq2 = $conta2 ->getCodigoConta() . ".json";

$arquivo = new Json(json1, $nomeArq1);
$arquivo->gravar();
echo "<h1>Gravado arquivo da conta1 <br>";

?>