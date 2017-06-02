<?php
    require("vendor/autoload.php");

    $app = new Uphp\web\Application();
    $app->start();

    echo 1/0;