<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Variáveis</title>
</head>
<body>
    <h1>Informações do estudante</h1>
    <hr>




    <h2>Variáveis</h2>

    <?php


    //DEFINDO O TIMEZONE (FUSO HORÁRIO)
    date_default_timezone_set("America/Sao_Paulo");

    /* Variáveis */
    //$datadehoje = "30/01/2025"; 
    $datadehoje = date("d/m/Y"); //DEFININDO A DATA AUTOMATICAMENTE
    $hora = date("H:i"); //DEFININDO O HORÁRIO
    $nome = "Julia de A. Moura";
    $curso = "Téc. em informática para internet"; 
    $cargahoraria = 1000;
    $limitesdefaltas = $cargahoraria / 4;
   
    echo "<p><b>Data das informações: $datadehoje no horário de $hora </b></p>";
    echo  "<p>Seu nome é $nome</p>";
    echo  "<p>O curso feito é <b>".$curso."</b><p>";
    echo  "<p>A carga horária dele é de $cargahoraria,  sendo então de limites de faltas de $limitesdefaltas.</p>"
    ?>






    <h2>Constantes</h2>
    <!-- USAR CONSTANTES EM ELEMENTOS QUE NÃO IRÃO MUDAR
     neste caso a data e o nome poderia ser uma variável -->

    <?php
    const DATA = "30/01/2025";
    const NOME = "Julia de A. Moura";
    const CURSO = "Téc. em informática para internet";
    const CARGAHORARIA = 1000;
    const LIMITESDEFALTAS = CARGAHORARIA / 4;
    ?>

    <p><b>Data das informações: <?=DATA?></b></p>
    <p>Seu nome é: <?=NOME?></p>
    <p>O curso feito é: <b><?=CURSO?></b></p>
    <p>A carga horária dele é de: <?=CARGAHORARIA?>, sendo então o 
    limte de faltas de <?=LIMITESDEFALTAS?></p>

</body>
</html>
