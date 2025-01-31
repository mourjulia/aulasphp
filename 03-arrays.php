<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays (Vetores e Matrizes)</title>
</head>
<body>
    <h1>Trabalhando com Arrays</h1>
    <hr>

        <h2>Arrays numéricos/indexados</h2>
    <?php
    //Sintaxe de colchetes
    $bandas = ["Savatage", "Rush", "Slayer"];

    //Sintaxe de função array()
    $cursos = array("HTML5", "Node.js", "PHP", "SQL");

    //Sintaxe de atribuição manual usando os índices
    $comidas[0] = "Bolinho de Bacalhau";
    $comidas[1] = "Pastel";
    $comidas[2] = "Coxinha";

    //Constante de array
    define("UNIDADE", ["Penha", "Tatuapé"]);
    const FRUTAS = ["Morango", "Abacaxi"];
    ?>

    <h3>Acessando os dados</h3>

    <ul>
        <li>Bandas que mais curto: <?=$bandas[1]?></li>
        <li>Em breve vou lançar um curso de  <?=$cursos[2]?></li>
        <li>Quero comer <?=$comidas[1]?></li>
        <li>Estamos no senac <?=UNIDADE[0]?></li>
        <li>Vou fazer uma vitamina de <?=FRUTAS[0]?></li>
    </ul>
    

    <h2>Arrays associativos</h2>

    <?php
    $curso = [
        "titulo" => "Gastronomia", 
        "carga_horaria" => 200,
        "descricao" => "Aprender a esquentar água e fazer ovo cozido..."

    ];
    ?>

    <h3>Acessando os dados</h3>
    <p>Nome do curso: <?=$curso["titulo"]?> </p>
    <p>Craga horária: <?=$curso["carga_horaria"]?> horas. </p>
    <p>Descrição: <?=$curso["descricao"]?> </p>


    <?php
    //array associativo usando constantes
    define(
        "EMPRESA",
        [
            "nome" => "Biribinha informática",
            "ano_fundacao" => 2021
        ]

        );

        echo EMPRESA["nome"];

        echo "<br><br>";

        const OUTRA_EMPRESA = ["nome" => "ABC TI", "ano_fundacao" => 2022];
        echo OUTRA_EMPRESA["nome"];
    ?>


    <h2>Matriz (array dentro de array)</h2>

    <?php
    $planoDeEstudos = [
        ["JS Avançado", "Node.js", "Next.js"],
        ["PHP", "Orientação a Objetos"],
        ["Teoria das cores", "Photoshop", "UX/UI", "Motion Design"] 
    ];
    ?>

    <h3>Acessando os dados</h3>
    <p>Vou estudar nos próximos meses:
        <?=$planoDeEstudos[0][2]?>, <?=$planoDeEstudos[1][0]?> e 
        <?=$planoDeEstudos[2][3]?>
    </p>

    <hr>

    <h2>Funções de análises/depuração de estruturas de dados</h2>

    <h3><code>print_r()</code></h3>
    <pre><?=print_r($bandas)?></pre>

    <h3><code>var_dump()</code></h3>
    <pre><?=var_dump($bandas)?></pre>
    <pre><?=var_dump($curso)?></pre>

</body>
</html>