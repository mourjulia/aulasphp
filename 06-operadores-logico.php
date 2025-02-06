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
?>

    <p>Aprovado!</p>

<?php
} else {
?>

    <p>Reprovado!</p>

<?php
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
?>

    <p>Desconto aplicado!</p>
<?php    
} else {
?>

    <p>Sem desconto!</p>

<?php   
}
?>    

    <h2>! (NÃO/NOT)</h2>
    <p><i>É uma inversão de lógica: VERDADEIRO vira <b>FALSO</b>,
    FALSO vira <b>VERDADEIRO</b></i></p>

<?php
// se o usuario NÃO ESTIVER logado, exibir o link/botão LOGIN.
//caso contrário, exibir uma saudação

$usuarioLogado = false;
if (!$usuarioLogado) { 
?>
    <a href="login.php">login<a>

<?php 
} else { 
?>
    <span> Bem-vindo ao sistema!</span>

<?php    
}
?>

    <hr>
    <h2>Usanso os 3 operadores combinados para uma lógica mais elaborada</h2>

<?php
/*Para entrar em uma festa é necessãrio atender os seguintes critérios
- idade mínima de 18 anos
- Ou estar acompanhando dos pais
- E não estar bêbado */ 
$idade = 20;
$acompanhadoDosPais = true;
$estarBebado = false;

if ( ($idade >= 18 || $acompanhadoDosPais) && !$estarBebado) {
?>

    <p>Entrada permitida</p>

<?php
} else { 
?>

    <p>Entrada negada</p>

<?php 
}
?>

</body>
</html>