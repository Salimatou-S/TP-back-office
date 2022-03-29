<?php
include("config/config.inc.php");
include ("model/pdo.inc.php");

try{
    $query="
    SELECT * 
    FROM blog_categories 
";

    $req = $pdo ->query($query); 

    $data =$req->fetchAll(); 

} catch(Exception $e){
    die("ereur Mysql: " .$e->getMessage());
};




$title="Tableau des categories";