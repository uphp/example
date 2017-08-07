<?php
require("vendor/autoload.php");


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
                if (is_dir("vendor/" . $argv[2] . "/module")) {
                    $arrArgs = explode("/", $argv[2]);
                    $dev = $arrArgs[0];
                    $module = $arrArgs[1];
                    $module = str_replace("-","_", $module);
                    $moduleClass = \src\Inflection::classify($module);
                    $classFile = "vendor/" . $argv[2] . "/module/" . $moduleClass . ".php";
                    if (file_exists($classFile)) {
                        require $classFile;
                        $instance = new $moduleClass;
                        echo $instance->description();
                        $response = $instance->getResponseAfterDescription ? rtrim(fgets(STDIN)) : null;
                        $instance->start($response);
                    } else {
                        echo "\n Class $moduleClass not found\n";
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