<?php
    require("vendor/autoload.php");

    $app = new \Uphp\web\Application();
    $app->start();

    echo src\Inflection::pluralize("papel");

    echo 1/0;