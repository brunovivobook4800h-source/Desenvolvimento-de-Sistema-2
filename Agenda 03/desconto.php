<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["txtNome"];
    $valorCompra = $_POST["txtValorCompra"];
    $formaPagamento = $_POST["cmbPag"];
    $desconto = 0;

    // ERRO: cálculo incorreto para boleto e depósito - Corrigido
    if ($formaPagamento == "cartaoCredito") {
        $desconto = 0;
        $mensagem = "Olá $nome, sua compra de R$ " . number_format($valorCompra, 2, ',', '.') . " foi realizada com cartão de crédito. Não há desconto.";
    } elseif ($formaPagamento == "boleto") {
        $desconto = $valorCompra * 0.08; // ERRO: deveria ser 8% para boleto. Corrigido, com 2 casas decimais.
        $mensagem = "Olá $nome, sua compra de R$ " . number_format($valorCompra, 2, ',', '.') . " foi realizada com boleto. Seu desconto é de R$ " . number_format($desconto, 2, ',', '.') . ".";
    } elseif ($formaPagamento == "deposito") {
        $desconto = $valorCompra * 0.10; // ERRO: deveria ser 10% para depósito. Corrigido, com 2 casas decimais.
        $mensagem = "Olá $nome, sua compra de R$ " . number_format($valorCompra, 2, ',', '.') . " foi realizada com depósito. Seu desconto é de R$ " . number_format($desconto, 2, ',', '.') . ".";
    } else {
        $mensagem = "Forma de pagamento inválida.";
    }

    // valor final depois do desconto
    $valorFinal = $valorCompra - $desconto;

    // ERRO: mensagem final não mostra valor com desconto. Corrijido, com 2 casa decimais
    if ($formaPagamento == "cartaoCredito" || $formaPagamento == "boleto" || $formaPagamento == "deposito") {
        $mensagem .= " Valor final da compra: R$ " . number_format($valorFinal, 2, ',', '.') . ".";
    }

    echo "<div class='w3-panel w3-green'>$mensagem</div>";
}

/*
Comentário: Inverti a ordem de multiplicação, fazendo 0.08 para o boleto e 0.1 para depósito. Além disso, criei
a váriavel $valorfinal, depois do calculo do desconto, já atribuindo valor a ele. No final concatenei mensagem 
com outro valor mensagem, mostrando o valor com desconto. Eu preferia apenas calcular e depois escrever uma mensagem 
com as variáveis já calculadas, mas eu preferi manter o código o mais original possivel.
Não foi especificado se o PHP precisaria de formatação ,então não fiz isso, apenas formatei com css o html, mas usei IA
para me ajudar com isso, pois sou um péssimo estilista. No else tem uma opção de pagamento invalido, mas na htmlk ,eu obrigei
o comprador escolher uma forma de pagamento, acredito que não precisaria dela. Não sabia muito bem 
*/
?>