<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Arrays</title>
    <style>

        .clientes {
            display: flex;
            gap: 20px;
        }

        .cliente {
            background-color: wheat;
            border-radius: 5px;
        }

        h3 {
            font-size: 18px;
            /* padding-left: 10px; */
            /* padding-right: 10px; */
            margin: 10px;
        }
        
        p{
            font-size: 12px;
            color: crimson;
            margin-left: 5px;
        }
        
        
    </style>
</head>
<body>
    <h1>Trabalhando com arrays</h1>
    <hr>

    <?php
    $pessoa1 = [
        "nome" => "Júlia de A. Moura", 
        "email" => "julia.moura@gmail.com",
        "senha" => "20814480",
        "idade" =>  17,
        "sexo" => "Feminino"
    ];
    ?>
    
    <?php
    $pessoa2 = [
        "nome" => "Alana R. Silva", 
        "email" => "alana.rocha@gmail.com",
        "senha" => "123456789",
        "idade" =>  16,
        "sexo" => "Feminino"
    ];
    ?>

    <div class="clientes">
    <div class="cliente">
        <h3>Acessando os dados do cliente 1:</h3>
            <p>Nome do(a) cliente: <?=$pessoa1["nome"]?></p>
            <p>Email do cliente: <?=$pessoa1["email"]?></p>
            <p>Idade do cliente: <?=$pessoa1["idade"]?> </p> 
            <p>Sexo do cliente: <?=$pessoa1["sexo"]?> </p>
    </div> 

    
    <div class="cliente">
        <h3>Acessando os dados do cliente 2:</h3>
            <p>Nome do(a) cliente: <?=$pessoa2["nome"]?></p>
            <p>Email do cliente: <?=$pessoa2["email"]?></p>
            <p>Idade do cliente: <?=$pessoa2["idade"]?> </p> 
            <p>Sexo do cliente: <?=$pessoa2["sexo"]?> </p>
    </div> 
    </div>

</body>
</html>