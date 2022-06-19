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
    public function noticiasCarro($notice = null){
        //1) Chamando o model
        $noticias = new Noticias();
        if(count($notice)>0) {
            $pesquisa = $noticias->getNotice(1, $notice);
        } else {
            $pesquisa = $noticias->getCategory(1);
        }

        //2) Chamando a view
        $this->loadTemplate('noticiasCarro',array(), $pesquisa);
    }
}