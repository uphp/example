<?php
namespace controllers;

class WelcomeController extends ApplicationController
{
    public function index()
    {
         return view($this);
    }
}