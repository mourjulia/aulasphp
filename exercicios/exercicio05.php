<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 05: FUNÇÕES </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!-- Exercicio principal -->
    <h1 class="text-center text-secondary">Exercício 05: FUNÇÕES</h1>
    <p class="text-muted text-center">Trabalhando com a função de cálculo de média</p>

    <?php
    $alunos = [
        "Julia" => [8.0, 7.0, 9.0],
        "Alana" => [6.5, 7.8, 8.2],
        "Nathy" => [9.0, 8.5, 9.5],
        "Clara" => [7.0, 6.5, 7.8],
        "Analu" => [8.5, 9.0, 9.2]
    ];

    // calcular média
    function calcularMedia(array $notas): float
    {
        return array_sum($notas) / count($notas);
    }
    ?>

    <ul class="list-group mt-3">
        <?php foreach ($alunos as $aluno => $notas): ?>
            <?php $media = calcularMedia($notas); ?>
            <?php $situacao = $media >= 7 ? "aprovado" : "reprovado" ?> 
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="fw-bold"><?= $aluno ?></div>
                <!-- <div class="badge bg-success"> -->
                <div class=""><?= $situacao ?> </div>
                    <?= number_format($media, 2, ',', '.') ?>
        </div>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>
    </div>

    <!-- Primeiro Versão -->

    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            <h1 class="text-secondary">Exercício 05: FUNÇÕES</h1>
            <p class="text-muted">Trabalhando com a função de cálculo de média</p>

            <?php
            $aluno = "Julia";

            $calcularMediaDasNotas = function (float $nota1, float $nota2, float $nota3) {
                $mediaDasNotas = ($nota1 + $nota2 + $nota3) / 3;
                return $mediaDasNotas;
            };

            // Chamando a função com valores de exemplo
            $media = $calcularMediaDasNotas(8.0, 7.0, 9.0);
            ?>

            <p class="fs-5 fw-bold">Média das notas do aluno <span class="text-danger"><?= $aluno ?></span> foi:
                <span class="badge bg-success fs-7">
                    <?= number_format($media, 2, ',', '.') ?>
                </span>
            </p>
        </div>
    </div>


    <!-- CHAMAMOS A FUNÇÃO E DEPOIS PASSAMOS A VARIÁVEIS PARA ELA 
  
</div> 
    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 9;

    function calcularMediaNotas ($nota1, $nota2, $nota3){
        $media = ($nota1 + $nota2+ $nota3) /3;
 
        return $media;
    };
 
    function verificarSituacao($media) {
        if ($media >= 7) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
 
    $mediaFinal = calcularMediaNotas($nota1, $nota2, $nota3);
 
    $situacao = verificarSituacao($mediaFinal);
 
    $classeCor = ($situacao == "Aprovado") ? "text-primary" : "text-danger";
?> 
 
</div>  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>