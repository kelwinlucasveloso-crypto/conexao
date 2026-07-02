
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./style.css">
</head>
</head>

<body>
   
    <h1>Resultado da multiplicacao</h1>

    <?php

    include "conexao.php";

   
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $multiplicacao = $num1 * $num2;

$sql="INSERT INTO multiplicação (numero1, numero2, resultado)
VALUES ($num1, $num2, $multiplicacao)";
 
  $conexao->query($sql);

  echo "A multiplicacao do $num1 * $num2 = $multiplicacao";

    ?>
</body>

</html>