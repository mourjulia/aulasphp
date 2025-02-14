<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php //array associativo
      $titulos = [
          'index.php' => 'Página Inicial',
          'cursos.php' => 'Cursos',
          'duvidas.php' => 'Duvidas',
          'contato.php' => 'Contato',
      ];
      //obter o nome atual do arquivo //basename = Array super global
      $arquivoAtual = basename($_SERVER['SCRIPT_NAME']);

      //fazendo um if/else 
      $titulo = isset($titulos[$arquivoAtual]) ? $titulos[$arquivoAtual] : 'Título Padrão';
      $tituloCompleto = $titulo . ' - Site PHP';

      //Saindo com titulo mo mavegador
      echo $tituloCompleto;
      ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container ">
        <header>
            <h1 class="text-center">Site de PHP</h1>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">HOME</a>
                <a class="navbar-brand" href="cursos.php">Treinamentos</a>
                <a class="navbar-brand" href="duvidas.php">Dúvidas</a>
                <a class="navbar-brand" href="contato.php">Contato</a>
            </nav>
        </header>

        <main>