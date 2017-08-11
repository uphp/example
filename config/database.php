<?php
/**
 * Retorna um array contendo informações de conexão com os bandos de dados que serão utilizados dentro do sistema.
 * Composto pelos indexs obrigatórios "default" e "conections".
 * @index default Armazena a conexão padrão que o sistema utilizará em suas interações com o banco de dados
 * @index conection Armazena um array de conexões que o sistema comportará, sendo a KEY o nome da conexão e seu VALUE um array com os dados para a conexão ser realizada.
 *
 * @return array
 */
return [
    /**
     * Define qual será a conexão padrão do framework
     */
    "default" => "mysql",

    /**
     * Define em qual é o ambiente padrão que o framework vai utilizar.
     */
    "environment" => "development",

    /**
     * Responsável por armazenar as conexões que o framework utilizará
     */
    "connections" => [
        /**
         * Define as conexões de desenvolvimento utilizadas pelo framework
         */
        "development" => [
            /**
             * Conexão com o banco de dados MySQL
             */
            "mysql" => [
                "driver"   => "mysql",
                "type"     => "relational",
                "server"   => "localhost",
                "port"     => "3306",
                "user"     => "root",
                "password" => "",
                "dbname"   => "dbteste",
                'charset'   => 'utf8mb4',
            ],

            /**
             * Conexão com o banco de dados MongoDB
             */
            "mongodb" => [
                "driver"   => "mongodb",
                "type"     => "nosql",
                "server"   => "172.25.1.12",
                "port"     => "37017",
                "user"     => "root",
                "password" => "",
                "dbname"   => "cipaweb"
            ]
        ],

        /**
         * Define as conexões de desenvolvimento utilizadas pelo framework
         */
        "production" => [
            "teste" => [
                "driver"   => "mysql",
                "type"     => "relational",
                "server"   => "localhost",
                "port"     => "3306",
                "user"     => "root",
                "password" => "",
                "dbname"   => "teste"
            ],
            "mysql" => [
                "driver"   => "mysql",
                "type"     => "relational",
                "server"   => "192.168.02.1",
                "port"     => "3306",
                "user"     => "root",
                "password" => "",
                "dbname"   => "dbteste",
                'charset'   => 'utf8mb4',
            ],
        ],

        /**
         * Define as conexões de desenvolvimento utilizadas pelo framework
         */
        "test" => [

        ]
    ]
];

