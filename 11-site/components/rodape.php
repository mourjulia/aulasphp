</main>

<?php
//date_default_timezone_set("America/Sao_Paulo");

//$datadehoje = date("d/m/Y"); //DEFININDO A DATA AUTOMATICAMENTE
//$hora = date("H:i"); //DEFININDO O HORÁRIO

//echo "<p><b>Data de Hoje:</b> $datadehoje<?p>";
//echo "<p><b>Horário:</b> $hora<?p>"
//?> 

<?php
// Definir o locale como 'pt_BR' (português do Brasil)
setlocale(LC_TIME, 'pt_BR.UTF-8');

// Criar um objeto DateTime
$data = new DateTime();

// Usar IntlDateFormatter para formatar a data por extenso
$fmt = new IntlDateFormatter('pt_BR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
$data_extenso = $fmt->format($data);

//echo $data_extenso;
?>

<footer>
    <p class="text-center">Site criado para curso Téc. Informática para Internet</p>
    <p class="text-center"><time><?=$data_extenso?></time></p>
</footer>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>