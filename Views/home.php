<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    
    <title>Fazer Login</title>
</head>
<body>
    <section class="login">
        <h2 id="texto-Login">Faça o Login</h2>
        <label class="form-login">
            <span>Email</span>
            <input type="email" name="email" class="dados-login">
        </label>
        <label class="form-login">
            <span>Senha</span>
            <input type="password" name="senha" class="dados-login">
        </label>
        
        <label class="form-lembrar">
            <input type="checkbox" name="lembrar" id="login-lembrar">
            <span>Lembrar Login?</span>
        </label>

        <input type="submit" value="Entrar">
    </section>
    <section class="plano-de-fundo">
        <div id="particles-js"></div>
    </section>

    <script src="/<?php echo DOCUMENT_ROOT;?>scripts/index.js"></script>
</body>
</html>