<?php 
function load_page($uri,$routes){
    require "$routes[$uri]";
}

function dd($args){
    echo "<pre>";
    var_dump($args);
    echo "</pre>";
    
}