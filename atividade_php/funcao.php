<?php


function calcimc($peso, $altura) {
    if ($altura > 0) {
        return $peso / ($altura * $altura);
    }
    return 0;
}


function maiormenor($n1, $n2) {
    if ($n1 > $n2) {
        return "O maior número é $n1 e o menor é $n2.";
    } elseif ($n2 > $n1) {
        return "O maior número é $n2 e o menor é $n1.";
    } else {
        return "Os dois números são iguais.";
    }
}


function veriimpar($numero) {
    if ($numero % 2 == 0) {
        return "O número $numero é PAR.";
    } else {
        return "O número $numero é ÍMPAR.";
    }
}


function calcmedia($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}


function calcfatorial($numero) {
    $fatorial = 1;
    for ($i = $numero; $i > 1; $i--) {
        $fatorial *= $i;
    }
    return $fatorial;
}


function calcsoma($n1, $n2) {
    return $n1 + $n2;
}

function calccirculo($raio) {
    return 3.14159 * ($raio * $raio);
}


function convertertemp($celsios) {
    return ($celsios * 9 / 5) + 32;
}


function Tabuada($numero) {
    $resultado = "";
    for ($i = 1; $i <= 10; $i++) {
        $resultado .= "$numero x $i = " . ($numero * $i) . "<br>";
    }
    return $resultado;
}


function calcDesc($valor, $percentdesc) {
    $desc = $valor * ($percentdesc / 100);
    return $valor - $desc;
}
?>