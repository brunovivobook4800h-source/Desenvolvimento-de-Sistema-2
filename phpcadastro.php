<?php

$nome = $_POST["nome1"];
$idade = $_POST["idade2"];
$profissao = $_POST["profissao3"];
$salario = $_POST["salario4"];
$experiencia = $_POST["experiencia5"];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado</title>
</head>

<body>

    <h1>Cadastro Realizado</h1>

    <p>Nome completo: <?php echo $nome; ?></p>
    <p>Idade: <?php echo $idade; ?></p>
    <p>Profissão: <?php echo $profissao; ?></p>
    <p>Salário pretendido: R$ <?php echo $salario; ?></p>
    <p>Experiência anterior: <?php echo $experiencia; ?></p>

    <h2>Mensagem</h2>

    <p>
        Olá, <?php echo $nome; ?>! 
        Sua experiência como <?php echo $profissao; ?> foi registrada.
        Agradecemos por compartilhar sua experiência: <?php echo $experiencia; ?>
    </p>

    <br>

    <a href="Forms02.html">Voltar ao cadastro</a>

</body>
</html>