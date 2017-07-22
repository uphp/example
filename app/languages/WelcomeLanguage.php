<?php
namespace app\languages;
use UPhp\Languages\Label;

Label::addType(["Welcome"]);

Label::init(["type" => "Welcome"])

    ->language("PT-BR")
    ->set("db",[
        "nome" => "Nome"
    ])
    ->set("validate",[
        "required" => [
            "nome" => "Nome é obrigatório"
        ],
        "uniqueness" => [
            "nome" => "Nome já existe"
        ]
    ])
    /*->set("ChainComponents", [
        "button" => [
            "novo_condominio" => [
                "label" => "Novo Condomínio",
                "icon" => "glyphicon glyphicon-plus",
                "type" => "success",
                "design" => "metro"
            ],
            "excluir_condominio" => [
                "label" => "Excluir Condomínio",
                "icon" => "glyphicon glyphicon-minus",
                "type" => "danger",
                "design" => "metro"
            ]
        ]
    ])*/

    ->language("EN")
    ->set("db", [
        "nome" => "Name",
    ])

->define();