<?php
namespace app\languages;
use UPhp\Languages\Label;

Label::addType(["models\Person"]);

Label::init(["type" => "models\Person"])

    ->language("PT-BR")
    ->set("db",[
        "name" => "Nome"
    ])
    ->set("validate",[
        "required" => [
            "name" => "Nome é obrigatório"
        ],
        "uniqueness" => [
            "name" => "Nome já existe"
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
        "name" => "Name",
    ])

    ->define();