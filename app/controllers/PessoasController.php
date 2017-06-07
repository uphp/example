<?php
namespace controllers;

class PessoasController extends ApplicationController
{
    public function index()
    {
        //echo "Index de pessoa";
        //echo $this->controllerName;
        $this->nome = "Diego Pessanha Bentes";
        return view($this);
    }

    public function diego()
    {
        //echo $this->controllerName;
        return view($this);
    }
}
