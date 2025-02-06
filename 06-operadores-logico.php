<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores lógicos </title>
</head>
<body>
    <h1>relembrando os Operadores Lógicos </h1>
    <hr>

    <h2>&& (E/AND)</h2>
    <p><i>todas as condições precisam ser <b>VERDADEIRAS/TRUE</b></i></p>
<?php
// avaliar um aluno mediante média e faltas
$media = 9.5;
$faltas = 10;

if($media >= 7 && $faltas <=10)
{
    echo "<p>Aprovado!</p>";
} else {
    echo "<p>Reprovado!</p>";
}
?>

    <!-- o simbolo | é chamado de pipe -->
    <h2>|| (OU/OR)</h2>
    <p><i>Basta que apenas uma condição seja <b>VERDADEIRA/TRUE</b></i></p>
<?php
// dar desconto ao cliente que seja vip ou tenha cupom ou ambos
$clienteVIP = true;  //valor/tipo lógico/boolean
$temCupom = false;

if ($clienteVIP || $temCupom) {
    echo "<p>Desconto aplicado!</p>";  
} else {
   echo "<p>Sem desconto!</p>";
}


?>    

    <h2>! (NÃO/NOT)</h2>


</body>
</html>