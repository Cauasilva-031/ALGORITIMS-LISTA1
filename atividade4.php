<?php

/*Um organizador recebeu R$ 18.000,00 para realizar um evento e gastou R$
12.750,00 com fornecedores. Calcule quanto dinheiro ainda restou.
Resultado esperado: após gastar R$ 12.750,00 de um orçamento de
R$ 18.000,00, restam R$ 5.250,00.
*/

// entradas - variaveis
$valorRecebido = 18.000;
$valorGasto = 12.750;


// processamento
$resto = $valorRecebido - $valorGasto;












?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h4> Atividade 4</h4>

<p>
Um organizador recebeu R$ 18.000,00 para realizar um evento e gastou R$
12.750,00 com fornecedores. Calcule quanto dinheiro ainda restou.
Resultado esperado: após gastar R$ 12.750,00 de um orçamento de
R$ 18.000,00, restam R$ 5.250,00.

</p>


<p> <?php echo ("Resto: " . $resto); ?></p>













    
</body>
</html>