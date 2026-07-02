<?php 

include "conexao.php";

$numero1 = 99;
$numero2 = 24;
$numero3 = 55;


$resultado = $numero1 * $numero2 * $numero3;

$sql = "INSERT INTO Multiplicação (numero1, numero2, numero3,resultado)
VALUES ($numero1, $numero2, $numero3, $resultado)";
 

 if ($conexao->query($sql)){
  
echo "<br>  Os dados da soma dos tres numero foram salvo com sucesso!";
}else {
    echo "<br> Erro ao salvar os dados da soma!";
}
?>