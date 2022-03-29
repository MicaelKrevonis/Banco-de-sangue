<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Analise Doação de Sangue</title>
</head>
<body>
   <h1>Analise de doador de Sangue</h1>

<?php
    $idade = 16;
    $peso = 48;

    $allowedAge = false;
    $allowedWeight = false;

    if ($idade >= 16 && $idade <= 69) {
        $allowedAge = true;
    }

    if ($peso > 50) {
        $allowedWeight = true;
    }

    if ($allowedAge && $allowedWeight) {
        echo "pode doar sangue";
    } else if (!$allowedAge) {
        echo "não pode doar sangue por causa da idade";
    } else if (!$allowedWeight) {
        echo "não pode doar sangue por causa do peso";
    }
?>
  </body> </html>


