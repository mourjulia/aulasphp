<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 04 - Loop e estrutura de dados</title>
    <style>
        
    </style>
</head>
<body>
    <h2>Loop e estruturação de dados</h2>
    
<?php
$linguagens = [
    "HTML" => "Estruturação",
    "CSS" => "Estilização",
    "JS" => "Comportamentos",
    "PHP" => "Desenvolvimento",
    "SQL" => "Manipulação de dados",
    "Java" => "Softwares"
];
?>

<?php
foreach ($linguagens as $linguagem => $frase) { 
?>

   <p><?=$linguagem?> : <?=$frase?></p>

<?php
}
?>

<table border="1">
        <caption>LINGUAGENS</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>01</td>
                <td>HTML</td>
                <td>Estruturação</td>
            </tr>

            <tr>
                <td>02</td>
                <td>CSS </td>
                <td>Estilização</td>
            </tr>

            <tr>
                <td>03</td>
                <td>JS</td>
                <td>Comportamentos</td>
            </tr>

            <tr>
                <td>04</td>
                <td>PHP</td>
                <td>Desenvolvimento</td>
            </tr>

            <tr>
                <td>05</td>
                <td>SQL</td>
                <td>Manipulaçao de dados</td>
            </tr>

            <tr>
                <td>06</td>
                <td>JAVA</td>
                <td>Softwares</td>
            </tr>

</body>
</html>