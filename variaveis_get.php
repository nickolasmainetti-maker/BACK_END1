<?php

    $n1 = $_GET[("n1")] ?? '';
    $n2 = $_GET[("n2")] ?? '';

    $resultado = ($n1 + $n2);

    echo ("$n1 + $n2 = " . $resultado);

?>


/* Para testar: http://10.140.169.8/nickolas.com.br/variaveis_get.php?n1=20&n2=5 /*