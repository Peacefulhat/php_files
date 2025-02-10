<?php
$config=require "config/config.php";

$connection = null;
$statement =null;
function connect($config, $username = 'root', $password = 'forsometime')
{
    global $connection;

    $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';charset=' . $config['charset'];
        $connection = new PDO($dsn, $username, $password);
  
}

function query($querie){
    if(!isValidPDO()){
        return "Connection failed";
    }
    global $statement;
    global $connection;
    $statement=$connection->prepare($querie);
    $res=$statement->execute();
    if(!$res){
        return "Failed to execute sql querry";
    }
    return $statement->fetchALL(PDO::FETCH_ASSOC);
}
function isValidPDO()
{
    global $connection; 
    return $connection instanceof PDO;
}
?>

