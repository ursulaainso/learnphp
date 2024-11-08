<?php

function dump($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

function dd($variable){
    dump($variable);
    die;
}

function view($viewName, $variables=[]){
    extract($variables);
    include __DIR__ . "/views/$viewName.php";
}