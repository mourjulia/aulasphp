<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Objetos</title>
</head>
<body>
    <h1>Trabalhando com Objetos genéricos</h1>
    <hr>

<?php
// criando uma instância chamada de uma classe genérica chamada stdClass (Standar class)
$usuario = new stdClass(); //instância ou objeto 

//  Adicionando propriedades/atributos ao objeto
$usuario -> nome = "Chapolin Colorado";
$usuario -> idade = 25;
$usuario -> email = "chapolin.colorado@gmail.com";
$usuario -> telefone = ["11-21350300", "11-98888-7777"];  
?>   
    <h2>Analisando a estrutura do objeto</h2>
    <pre><?=var_dump($usuario)?></pre>
    <hr>

    <h2>Saída de dados</h2>
    <p>Nome: <?=$usuario-> nome?></p>
    <p>Idade: <?=$usuario-> idade?>anos</p>
    <p>Telefone: <?=$usuario-> telefones[1]?></p>

    <hr>

    <h2>Convertendo um objeto em um array associativo

<?php
$arrayUsuario = (array) $usuario;
?>    
    
    <h3>Analisando o array gerado a partir de um obejto</h3>
    <pre><?=var_dump($arrayUsuario)?></pre>

</body>

</html>