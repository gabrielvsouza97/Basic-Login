<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    
    <title>Fazer Login</title>
</head>
<body>
    <?php
    if(isset($_POST['acao'])){
       $newLogin = new Login();
       $createLogin = $newLogin->createLogin($_POST);
         if($createLogin['login'] == 'allDone'){
              header('Location: /'.DOCUMENT_ROOT);
         } else if($createLogin['login'] == 'User'){
              echo '<div class="alert alert-danger">Bem-vindo novamente '.$createLogin["Dados"]->NOME.', sua senha está incorreta. <br/>Gostaria de alterar a senha?</div>';
         } else if($createLogin['login'] == 'Pass'){
              echo '<div class="alert alert-danger">Usuário e senha não encontrados</div>';
         }
    }


?>
        <form method="post">
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

        <input type="submit" value="Entrar" name='acao'>
    </section>
</form>
    <section class="plano-de-fundo">
        <div id="particles-js"></div>
    </section>

    <script src="/<?php echo DOCUMENT_ROOT;?>scripts/index.js"></script>
</body>
</html>