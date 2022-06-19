<?php 
require_once("Connection.php");

Class Noticias{
    private $con;

    public function __construct(){
        $this->con = Connection::createConnection();
    }

    public function getAllNoticias(){
        $dados = array();
        $sql = "SELECT n.*, LOWER(cn.CATEGORIA) as CATEGORIAS FROM `noticias` n INNER JOIN categorias_noticia cn ON n.CATEGORIA = cn.ID";
        $result = $this->con->query($sql);
        $dados = $result->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
    public function getCategory($category){
        $dados = array();
        $sql = "SELECT n.*, LOWER(cn.CATEGORIA) as CATEGORIAS FROM `noticias` n INNER JOIN categorias_noticia cn ON n.CATEGORIA = cn.ID WHERE n.CATEGORIA = '$category'";
        $result = $this->con->query($sql);
        
        $dados = $result->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
    public function getNotice($category,$notice){
        $id = $notice[0];
        $sql = "SELECT n.*, LOWER(cn.CATEGORIA) as CATEGORIAS FROM `noticias` n INNER JOIN categorias_noticia cn ON n.CATEGORIA = cn.ID WHERE n.CATEGORIA = '$category' AND n.ID = '$id'";
        $result = $this->con->query($sql);
        $dados = $result->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
}
