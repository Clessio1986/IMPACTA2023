<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="_css/stilo3.css">
</head>

<body>
    <a href="sistema.php">VOLTAR</a>
    <form class="form" action="email.php" method="post">
        <p class="title">Fale Conosco</p>
        <p class="message">Preencha sua dúvida!!! </p>

        <label>
            <input required="" placeholder="" type="text" name="nome" class="input">
            <span>Nome</span>
        </label>
        <label>
            <input required="" placeholder="" type="tel" name="telefone" class="input">
            <span>Telefone</span>
        </label>

        <label>
            <input required="" placeholder="" type="email" name="email" class="input">
            <span>Email</span>
        </label>
        <label>
            <textarea placeholder="Digite sua Mensgaem aqui:" type="message" name="mensagem" class="inputs"></textarea>

        </label>

        <input type="submit" class="submit" value="Enviar">
        <p class="signin">Já tem uma conta? <a href="home.php">Entrar</a></p>
    </form>
</body>

</html>