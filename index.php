<?php
    require("vendor/autoload.php");
    
    $config = require("vendor/Uphp/routes/files/requests.php");
    //$config["BASEURL"] = "uphp.example";

    $app = new \Uphp\web\Application();
    $app->start($config);