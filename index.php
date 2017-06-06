<?php
    require("vendor/autoload.php");
    
    $config = require("vendor/Uphp/routes/files/requests.php");
    $config["BASEURL"] = "uphp.example";
    //$config["URL"] = $_REQUEST["REQUEST_URI"];

    $app = new \Uphp\web\Application();
    $app->start($config);

    //echo src\Inflection::pluralize("papel");

    //$pessoa = new \controllers\PessoasController();
    //$pessoa->index();
