<?php
require "functions.php";
require "controller/database.php";
connect($config);

$stmt = query("select * from Worker");
$dstmt=query("describe Worker");

$routes=require "config/routes.php";

load_page($_SERVER['REQUEST_URI'],$routes);

if($_SERVER['REQUEST_URI']==="/home"){
echo "<ul>";  
foreach ($stmt as $row) {
        echo "<li>";
        foreach ($row as $column => $value) {
        echo "<strong>{$column}:</strong> {$value} <br>";
    }
    echo "</li>";  
    echo "<br>";
}
echo "</ul>";  
}
