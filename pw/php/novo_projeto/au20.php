<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação  de Formulário</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <main>
        <h1><span>PHP</span><br>Validação de Formulário</h1>

        <form action="#">
            <label for="nome">Nome Completo </label>
            <input type="text" name="nome" id="inome" placeholder="Digite seu nome">
            <br><span class="erro"></span>

            <label for="iemail">E-mail</label>
            <input type="text" name="email" id="iemail" placeholder="email@provedor.com">
            <br><span class="erro"></span>
        </form>
    </main>
</body>
</html>