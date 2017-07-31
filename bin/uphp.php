<?php

function uphpVersion()
{
    echo "UPhp Framework\n";
    echo "Version: 0.0.1 ALPHA\n";
    echo "Page: uphp.io\n";
}

if (! empty($argv[1])) {
    
    switch ($argv[1]) {

        case "db:dump":
            echo "Verificando banco de dados utilizado ...\n";
            $banco = require("config/database.php");
            if ($banco["type"] == "nosql") {
                echo "Detectado: " . $banco["driver"] . "\n";
                echo "Lendo db_dump.json ...\n";
                $db_dump_json = file_get_contents("db/db_dump.json");
                echo "Gerando db_dump.lock ...\n";
                unlink("db/db_dump.lock");
                $db_lock = fopen("db/db_dump.lock", "a");
                fwrite($db_lock, $db_dump_json);
                fclose($db_lock);
                echo "db_dump.lock gerado com sucesso";
            }
            break;

        case "-v":
        case "--version":
            uphpVersion();
            break;


        case "generate":
            
            if (isset($argv[2])) {
                echo $argv[2];
            }
            break;

        case "module:init":

            if (! empty($argv[2])) {

                $infFile = "vendor/" . $argv[2] . "/m_inf.txt";
                if (file_exists($infFile)) {
                    //$information = file_get_contents($infFile);
                    echo "\n";
                    $execInit = readline(include($infFile));
                    echo "\n";
                    if ($execInit === "Y" || $execInit === "y") {
                        require("vendor/" . $argv[2] . "/install/install.php");
                    } else {
                        echo "\n Canceled by user\n";
                    }
                } else {
                    echo "\n It's not a module\n";
                }

            } else {
                echo "\nPlease, you need inform the module name: uphp module:init [DEV_NAME]/[MODULE_NAME]\n";
            }
            break;
        
        default:

            echo $argv[1] . " is invalid command";

    }

} else {
    echo "\n";
    uphpVersion();
    echo "\n\nHow to use: \n-v | --version (show uphp script version)  \ndb:dump (create db_dump.lock)\n";
}