<?php

class noticiasController extends Controller{
    public function index(){
        
        //1) Chamar o model
        $noticias = new Noticias();
        $pesquisa = $noticias->getAllNoticias();
        
        //2) Chamar a View
        $this->loadTemplate('noticias',array(),$pesquisa);
        //3) Fazer a junção de View e Model
        

    }
    public function noticiasCarro(){
        $this->loadTemplate('noticiasCarro');
    }
}