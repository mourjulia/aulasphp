<?php include "components/cabecalho.php" ?>


<form action="" method="post">

<div class="mb-3">
        <p>
            <label for="nome" class="form-label" >Nome completo:</label>
            <input required type="text" class="form-control" name="nome" id="nome">
        </p>
        
        <p>
            <label for="email">Endereço de e-mail:</label>
            <input required type="email" class="form-control" name="email" id="email">
        </p>

        <button type="submit" class="btn btn-primary">Enviar dados</button>
</div>

<?php include "components/rodape.php" ?>