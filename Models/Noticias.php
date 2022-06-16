<?php 
require_once("Connection.php");

Class Noticias{
    private $con;

    public function __construct(){
        $this->con = Connection::createConnection();
    }

    public function getAllNoticias(){
        $dados = array();
        $sql = "SELECT * FROM `noticias`";
        $result = $this->con->query($sql);
        $dados = $result->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
}
