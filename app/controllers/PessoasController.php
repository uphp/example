<?php
namespace controllers;

class PessoasController extends ApplicationController
{
    public function index()
    {
        echo "Index de pessoa";        
        return view();
    }
}
