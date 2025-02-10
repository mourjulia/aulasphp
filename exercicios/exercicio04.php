<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 04 - Loop e estrutura de dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <style>
        table {
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: pink;
            color: white;
        }

        h2, h3{
            text-align: center;
    </style>  -->
</head>

<body>
    <h2 class="text-center text-danger">Loop e estruturação de dados</h2>
    <h3 class="text-center text-secondary">Linguagens</h3>

    <table class="table table-hover">
        <thead>
            <tr class="table table-danger">
                <th>ID</th>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $linguagens = [
                ["id" => 1, "nome" => "HTML", "descricao" => "Estruturação"],
                ["id" => 2, "nome" => "CSS", "descricao" => "Estilos"],
                ["id" => 3, "nome" => "JavaScript", "descricao" => "Comportamentos"],
                ["id" => 4, "nome" => "SQL", "descricao" => "Manipulação de dados"],
                ["id" => 5, "nome" => "Java", "descricao" => "Softwares e aplicativos"],
                ["id" => 6, "nome" => "PHP", "descricao" => "Back-end"]
            ];
            ?>


            <?php foreach ($linguagens as $linguagem) { ?>
                <tr class="ttable table-success">
                    <td><?= $linguagem['id'] ?></td>
                    <td><?= $linguagem['nome'] ?></td>
                    <td><?= $linguagem['descricao'] ?></td>
                </tr>
            <?php } ?>

    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>