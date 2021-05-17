<?php
require_once '../libs/Autoloader.php';
Smarty_Autoloader::register();

$smarty = new Smarty();
$smarty->setConfigDir('../configs');
$smarty->setTemplateDir('../templates');
$smarty->setCacheDir('../cache');
$smarty->setCompileDir('../templates_c');

// load a section
$smarty->configLoad('my.conf');



// display the output
// var_dump($_GET); 
if(isset($_POST['action'])){
    if($_POST['action'] == "add"){
        $newJeu = Jeuxvideo::build($_POST['nom'], $_POST['realisateur'], $_POST['annee'], $_POST['plateforme']);
    }

    if($_POST['action'] == "update"){
        $newJeu = Jeuxvideo::build($_POST['nom'], $_POST['realisateur'], $_POST['annee'], $_POST['plateforme'], $_POST['ID']);
    }
    
    if(!empty($newJeu)){
        $newJeu->save();
    }
    
    header("Location: accueil");
    exit;
}

switch($_GET['page']){
    case "create":
        $smarty->display('pages/create.tpl');
        break;
    case "update":
        $jeu = Jeuxvideo::getById($_GET["id"]);
        $smarty->assign("jeu", $jeu);
        $smarty->display('pages/update.tpl');
        break;
    case "delete":
        Jeuxvideo::delete($_GET["id"]);
        header("Location: ../accueil");
        break;
    default:
        $jeux = Jeuxvideo::getAll();
        $smarty->assign("jeux", $jeux);
        $smarty->display('pages/read.tpl');
        break;
}
//