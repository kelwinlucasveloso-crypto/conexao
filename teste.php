<?php 

include "conexao.php";

$numero1 = 30;
$numero2 = 50;

$resultado = $numero1+$numero2;

$sql = "INSERT INTO calculo (numero1, numero2, resultado)
VALUES ($numero1, $numero2, $resultado)";
 

$conexao->query($sql);
 
?>