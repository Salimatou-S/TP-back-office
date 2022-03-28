<?php
include("config/config.inc.php");
include ("model/pdo.inc.php");

try{
    $query="
    SELECT * 
    FROM blog_users 
";

    /* try permet de recuperer les données dans la base dans une variable query. On selectionne les id des articles, leur date  de parution, les titres le nom des auteurs, la catégories et url des images ainsi que leur contenu en faisant appel aux tables blog_users et categories par ordre chronologique (du plus recent au plus ancien )
    Left(post_content, " .TRONCATURE .") as post_content: nous permet de ne pas afficher tout le texte du contenu en le tronquant à gauche: on recuprère dans ce cas les n premiers caractères du contenu , le n est defini dans config.inc, qui est de 200 */


    //die($query);
    $req = $pdo ->query($query); //requete lancée à la base de données

   /* while($data=$req ->fetch()){ */
    /* var_dump($req); */
    /* echo"fetch()"; */

    $data =$req->fetchAll(); // permet de recuperer toutes les datas

    /* var_dump($data); */
    /* echo "<br>" . $data["post_title"] ."<br>"; */
 /*   } */

} catch(Exception $e){//Quand une erreur est constatée dans le try(exception), la fonction catch la recupère et le processus est arrêté par la fonction "die" qui va afficher le message d'erreur 
    die("ereur Mysql: " .$e->getMessage());
};




$title="Tableau des utilisateurs";