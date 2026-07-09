<?php

/*Uma empresa de eventos contratou três fornecedores. O buffet custou
R$ 8.500,00, a decoração R$ 2.800,00 e a sonorização R$ 3.200,00. Calcule o
valor total gasto.
Resultado esperado: o custo total do evento deverá ser de R$ 14.500,00.
*/

// entradas - variaveis
$decoracao = 2.800;
$sonorizacao = 3.200;
$buffet = 8.500;



//processamento
$valorGasto =  $buffet + $decoracao + $sonorizacao;








?>










<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h6> Atividade 6</h6>


    <p>
    *Uma empresa de eventos contratou três fornecedores. O buffet custou
R$ 8.500,00, a decoração R$ 2.800,00 e a sonorização R$ 3.200,00. Calcule o
valor total gasto.
Resultado esperado: o custo total do evento deverá ser de R$ 14.500,00.
    </p>

    <p> <?php echo ("Valor final: " . $valorGasto); ?></p>








    
</body>
</html>