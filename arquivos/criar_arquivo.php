<?php
$arquivo = fopen("dados.txt", "w");
fwrite($arquivo, "Eu vou ser o rei dos piratas e encotrar o one piece!\n");
fclose($arquivo);
?>