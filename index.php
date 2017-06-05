<?php
    require("vendor/autoload.php");

    $app = new \Uphp\web\Application();
    $app->start();

    //echo src\Inflection::pluralize("papel");

    $pessoa = new projectApp\controllers\PessoasController();
    $pessoa->index();
