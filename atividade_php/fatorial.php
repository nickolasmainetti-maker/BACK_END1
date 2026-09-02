<?php

require_once 'funcao.php';

$resultado = "";


if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    
    $resultado = calcfatorial($numero);
}
?>

<!DOCTYPE html>
<html>

<body>

    
    <form action="fatorial.php" method="post">
        Digite um número: <input type="number" name="numero" min="0"><br>
        <input type="submit" value="Calcular Fatorial">
    </form>

   
    <?php
    if ($resultado != "") {
        echo "O fatorial é: " . $resultado . "<br>";
    }
    ?>

</body>
</html>