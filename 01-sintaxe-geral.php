<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sintaxe geral</title>
    <style>
        .exemplo {
            color: pink;
            border:solid 4px;
            padding: 4px;
        }
    </style>
</head>
<body>
   <h1>Trabalhando com PHP</h1> 
   <hr>

   <?php
   //Geração de strings/textos
    echo "Hoje o Corinthians joga!";

    //Geração de tags e atributos
    echo "<p> Vai ganhar de goleada!</p>";
    
    //aspas duplas fora, aspas simples dentro  (CORRETO)
    echo "<p><abbr title='Sport Club Corinthian Paulista'>SCCP</abbr></p>";

    //aspas simples fora, aspas duplas dentro  (CORRETO)
    echo '<p><abbr title="Sport Club Corinthian Paulista">SCCP</abbr></p>';

    //Aspas duplas/;simples dentro e fora (ERRADO)
    //echo "<p><abbr title="Sport Club Corinthians Paulista">SCCP</abbr></p>";

    //Aspa usando escape \ (CORRETO)
    echo "<p><abbr title=\"sport club corinthians paulista\">SCCP</abbr></p>";

    echo "<h2>Programando <span class=\"exemplo\">PHP</span> </h2>";

    $saudacao = "Olá!!!";    
    ?>

    <script>
        const exemplo = document.querySelector(".exemplo");

        exemplo.addEventListener("click", function(){
            alert( "<?php echo $saudacao; ?>" );
        });
    </script>

</body>
</html>
