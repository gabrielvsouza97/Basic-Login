<?php
//Criando métodos de login
class Login{
    private $con; 
    public function __construct(){
        $this->con = new ConsultUser();
    }
    public function createLogin($dadosPost){
        //Checar o nome de usuário
        $user = $this->con->userExists($dadosPost['email']);
        $userExists = ($user != '') ? 1 : 0;
        //Checar a senha
        $passMatch = ($this->con->passMatch(md5($dadosPost['senha'])) != "" ) ? 2 : 0;
        //Se for sim, retornar a session e o login ok;
        $result = (int)$userExists + (int)$passMatch;
        if($result == 3){
            $session = array("Dados" => $this->createSession($user,$dadosPost), "login" => "allDone");
            return $session;
        } 
        //Se não, retornar o login falhou e o motivo
        else if ($result == 1){
            $session = array("login" => "User", "Dados" => $user);
            return $session;
        } else{
            $session = array("login" => "Pass", "Dados" => Null);
            return $session;
        }
    }

    private function createSession($dados,$dadosPost){
       
        $_SESSION['email'] = $dados->USUARIO;
        $_SESSION['name'] = $dados->NOME;

        if(isset($dadosPost['lembrar']) && $dadosPost['lembrar'] == 'on'){
            setcookie('email', $dados->USUARIO, time() + (300 * 30), "/");
            setcookie('senha', $dados->NOME, time() + (300 * 30), "/");
            setcookie('lembrar', true, time() + (300 * 30), "/");
        }

        return array("email" => $dados->USUARIO, "name" => $dados->NOME);
    }

}