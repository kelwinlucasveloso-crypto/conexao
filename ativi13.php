<?php 

include "conexao.php";

$numero1 = 300;
$numero2 = 45;
$numero3 = 78;
$numero4 = 90;

$resultado = $numero1 * $numero2 * $numero3 * $numero4;

$sql = "INSERT INTO Multiplicação (numero1, numero2, numero3, numero4, resultado)
VALUES ($numero1, $numero2, $numero3, $numero4, $resultado)";
 

 if ($conexao->query($sql)){
  
echo "<br>  Os dados da soma dos tres numero foram salvo com sucesso!";
}else {
    echo "<br> Erro ao salvar os dados da soma!";
}
?>