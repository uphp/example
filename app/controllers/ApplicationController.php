<?php
namespace controllers;
use \UPhp\ActionController\ActionController;

class ApplicationController extends ActionController
{
    public function __construct(){
        $this->beforeFilter = [
            ["function"=>"verificaLogin", "except" => ["login", "entrar", "signout", "signup", "cadastrar"]]
            //,["function"=>"redirecionaLogado", "only" => ["login"]]
        ];
    }

    public function verificaLogin(){

    }
}