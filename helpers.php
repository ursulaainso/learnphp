<?php

use App\Models\User;

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

function redirect($location){
    header("Location: $location");
}

function auth(){
    if(isset($_SESSION['userId'])){
        $user = User::find($_SESSION['userId']);
        if($user){
            return $user;
        }
    }
    return null;
}