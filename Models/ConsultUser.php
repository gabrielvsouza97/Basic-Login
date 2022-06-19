<?php

class ConsultUser{
    private $sql;

    public function userExists($user){
        $this->sql = Connection::createConnection();
        $sql = "SELECT * FROM `tb.admin_usuarios` WHERE USUARIO = :user"; 
        $result = $this->sql->prepare($sql);
        $result->bindValue(':user', $user);
        $result->execute();
        return $result->fetch(PDO::FETCH_OBJ); 
    }
    public function passMatch($password){
        $this->sql = Connection::createConnection();
        $sql = "SELECT * FROM `tb.admin_usuarios` WHERE SENHA = :pass"; 
        $result = $this->sql->prepare($sql);
        $result->bindValue(':pass', $password);
        $result->execute();
        return $result->fetch(PDO::FETCH_COLUMN); 
    }
}