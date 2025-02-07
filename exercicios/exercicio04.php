<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 04 - Loop e estrutura de dados</title>
    <style>
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
        }
    </style>
</head>
<body>
    <h2>Loop e estruturação de dados</h2>
    <h3>Linguagens</h3>

    <table>
        <thead>
            <tr>
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
            <tr>
                <td><?= $linguagem['id'] ?></td>
                <td><?= $linguagem['nome'] ?></td>
                <td><?= $linguagem['descricao'] ?></td>
            </tr>
        <?php } ?>
  
</table>

            

            

</body>
</html>