<?php

/*Uma empresa de eventos oferece um bônus de 5% sobre o valor arrecadado para
o gerente responsável. O evento arrecadou R$ 42.000,00. Calcule o valor do
bônus.
Resultado esperado: 5% de R$ 42.000,00 correspondem a um bônus de
R$ 2.100,00.
*/

// entradas - variaveis

$valorArrecadado = 42.000;
$bonus = 5;



//processamento
$bonusFinal = $valorArrecadado * $bonus











?>







<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h9> Atividade 9 </h9>

    <p>
    Uma empresa de eventos oferece um bônus de 5% sobre o valor arrecadado para
o gerente responsável. O evento arrecadou R$ 42.000,00. Calcule o valor do
bônus.
Resultado esperado: 5% de R$ 42.000,00 correspondem a um bônus de
R$ 2.100,00.
    </p>


    <p> <?php echo ("Bonus final: " . $bonusFinal); ?></p>


    
</body>
</html>
