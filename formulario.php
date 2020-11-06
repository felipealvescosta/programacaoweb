<?php
//pega o nome
$nome = $_POST['nome'];

//pega o telefone
$telefone = $_POST['telefone'];

//pega o email
$email = $_POST['e-mail'];

//pega o sobre
$sobre = $_POST['sobre'];

//imprime os valores
?>

<html>

<head>
    <title>Dados do formulário</title>
</head>

<body>
    <h1>Olá, <?php print($nome); ?></h1>
    <p>
        Seus dados foram cadastrados com sucesso!<br>
        <br> Seu telefone é <b><?php print($telefone); ?></b> e
        <br> e-mail é <b> <?php print($email); ?></b>
        <Br>
        Sobre você:
        <br>
        <?php print($sobre); ?>
        <br>
        <br>Agradecemos seu contato, e volte sempre.<br>
        Mas não quiser voltar, não precisa também.
        Morra que passa.
    </p>
    <br>
    <a href="formulario.html">Voltar</a>
</body>

</html>