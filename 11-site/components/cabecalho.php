<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php //array associativo
      $titulos = [
          'index.php' => 'Página Inicial',
          'cursos.php' => 'cursos',
          'duvidas.php' => 'Duvidas',
          'contato.php' => 'Contato',
      ];
      //obter o nome atual do arquivo
      $arquivoAtual = basename($_SERVER['SCRIPT_NAME']);

      $titulo = isset($titulos[$arquivoAtual]) ? $titulos[$arquivoAtual] : 'Título Padrão';
      $tituloCompleto = $titulo . ' - Site PHP';

      echo $tituloCompleto;
      ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <header>
            <h1>Site de PHP</h1>
            <nav>
                <a href="index.php">HOME</a>
                <a href="cursos.php">Treinamentos</a>
                <a href="duvidas.php">Dúvidas</a>
                <a href="contato.php">Contato</a>
            </nav>
        </header>

        <main>