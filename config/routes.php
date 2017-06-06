<?php
namespace config\routes;

\UPhp\ActionDispach\Routes::route([

    get("/", "pessoas#index"),
    post("/pes", "pessoas#save"),
    put("/pesso", "pessoas#editar"),
    delete("/pessoa", "pessoas#excluir"),

    resources("caixas")

]);