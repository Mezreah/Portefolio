
<?php


$page = isset($_GET["page"]) ? $_GET["page"] : "accueil";


switch($page){
    case "accueil" :
        include_once "View/main.php";
        break;
    case "presentation" :
        include_once "View/presentation.php";
        break;
    case "projet" : 
        include_once "View/projet.php";
        break;
    case "album" : 
        include_once "View/album.php";
        break;
}
?>