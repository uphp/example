<?php
namespace config\routes;

\UPhp\ActionDispach\Routes::route([

    /*get("/", "pessoas#index"),
    get("/diego", "pessoas#diego"),
    post("/pes", "pessoas#save"),
    put("/pesso", "pessoas#editar"),
    delete("/pessoa", "pessoas#excluir"),*/

    get("/", "welcome#index")

]);