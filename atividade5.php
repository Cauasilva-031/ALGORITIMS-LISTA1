<?php

/*Uma empresa oferece 10% de desconto para pagamento à vista. Um serviço
custa R$ 4.500,00. Calcule o valor do desconto e o valor final.
Resultado esperado: um desconto de 10% sobre R$ 4.500,00 corresponde a R$
450,00, totalizando R$ 4.050,00.
*/

// entradas variaveis
$valorInicial = 4500.00;
$desconto =  $valorInicial * 10 / 100;


//processamento
$descontoFinal = $valorInicial * $desconto;


















?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5> Atividade 5 </h5>

    <p>*Uma empresa oferece 10% de desconto para pagamento à vista. Um serviço
custa R$ 4.500,00. Calcule o valor do desconto e o valor final.
Resultado esperado: um desconto de 10% sobre R$ 4.500,00 corresponde a R$
450,00, totalizando R$ 4.050,00.
    </p>


    <p> <?php echo ("Desconto final: " . $descontoFinal); ?></p>



   











    
</body>
</html>