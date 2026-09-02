<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $disciplina = $_POST['materia'];
    $nota = floatval($_POST['nota']);

    if ($nota >= 7) {
        echo "Situação: Aprovado";
    } elseif ($nota >= 5 && $nota < 7) {
        echo "Situação: Recuperação";
    } else {
        echo "Situação: Reprovado";
    }
} else {
    echo "Nenhum dado enviado.";
}
?>