<?php

    require_once("funcoes.php"); // Inclui o arquivo com a função

    $usuario = $_POST["usuario"] ?? '';
    $senha = $_POST["senha"] ?? '';

    if (function_exists('conecta')) {
        conecta($usuario, $senha); // Chama a função
    }
?>