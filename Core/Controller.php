<?php

class Controller{
    public $dados;
    public $dadosarray;

    public function __construct()
    {   
        $this->dados = array();
    }
    public function loadView($viewName, $viewData = array(), $data = array())
    {
        extract($viewData);
        require_once "Views/".$viewName.".php";
    }
    public function loadTemplate($viewName, $viewData = array(), $data = array())
    {
        $this->dados = $viewData;
        $this->dadosarray = $data;
        require_once "Views/template.php";
    }
}