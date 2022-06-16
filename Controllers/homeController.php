<?php

Class homeController extends Controller{
    public function index(){
        /**
         * 1) Chamar o model
         * 2) Chamar a View
         * 3) Fazer a junção de View e Model
         */
        $this->loadTemplate('home');
    }
}

    