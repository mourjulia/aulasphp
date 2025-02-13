<?php
define("ESCOLA", "Senac");
$curso = "Téc. Informática para internet";
$tecnologias = ["HTML", "CSS", "JS"];

function verificarIdade(int $valordaIdade):string{
    return $valordaIdade >= 18 ? "maior" : "menor";
}

