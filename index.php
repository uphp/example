<?php
    require("vendor/autoload.php");
    
    $config = require("vendor/Uphp/routes/files/requests.php");

    $app = new \UPhp\Web\Application();
    $app->start($config);