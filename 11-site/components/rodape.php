</main>
<footer>
    <p>Site criado para curso Téc. Informática para Internet</p>
</footer>

<?php

date_default_timezone_set("America/Sao_Paulo");

$datadehoje = date("d/m/Y"); //DEFININDO A DATA AUTOMATICAMENTE
$hora = date("H:i"); //DEFININDO O HORÁRIO

echo "<p><b>Data de Hoje:</b> $datadehoje<?p>";
echo "<p><b>Horário:</b> $hora<?p>"
?>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>