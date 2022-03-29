<?php
include("config/config.inc.php");
include ("model/pdo.inc.php");

try{
    $query="
    SELECT display_name, cat_descr, LEFT(post_content, " . TRONCATURE . ") AS post_content 
        FROM blog_posts
        JOIN blog_users
        ON ID = post_author
        JOIN blog_categories
        ON cat_id = post_category
    
";

    $req = $pdo ->query($query); 

    $data =$req->fetchAll(); 
   
} catch(Exception $e){
    die("ereur Mysql: " .$e->getMessage());
};




$title="Tableau des articles";