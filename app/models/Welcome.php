<?php
namespace models;

use \UPhp\Model\ActiveRecord;

class Welcome extends ActiveRecord
{
    //Definição das validações
    public $validate = [
        "required" => ["nome"],
        "uniqueness" => ["nome"]
    ];

    //Atributos da classe
    private $id;
    private $nome;

    public function getId()
    {
        $this->$id;
    }

    public function setId($id)
    {
        $this->$id = $id;
    }

    public function getNome()
    {
        $this->$nome;
    }

    public function setNome($nome)
    {
        $this->$nome = $nome;
    }
}