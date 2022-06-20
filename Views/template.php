<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/<?php echo DOCUMENT_ROOT;?>css/style.css">
    <title>Document</title>
    
</head>
<body>
<!-- Template Heder -->

<!-- Verificando a session -->

<?php
session_start();
//Verificando se não tem uma session
if(!isset($_SESSION['email'])){
    $this->loadView('login');
}else{
    $this->loadView('panel');
    $this->loadView($viewName);
}


?>

<!-- Fim PHP -->

  
<!-- Template Footer -->
</body>
</html>