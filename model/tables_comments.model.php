<?php
include("config/config.inc.php");
include ("model/pdo.inc.php");

try{
    $query="
    SELECT display_name,post_title,comment_content 
    FROM blog_posts 
    INNER JOIN blog_users ON post_author = ID 
    INNER JOIN blog_comments ON comment_post_ID = post_ID;
";

    $req = $pdo ->query($query); 

    $data =$req->fetchAll(); 

} catch(Exception $e){
    die("ereur Mysql: " .$e->getMessage());
};




$title="Tableau des commentaires ";