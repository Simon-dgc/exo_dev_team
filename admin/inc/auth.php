<?php 
session_start(); 
require_once( "config.php"); 

if(!isset($_SESSION[ "connecte"]) || $_SESSION[ "connecte"]!=1) { 
    /*Si je ne suis pas connecté*/ 
    if(isset($_POST[ "l"]) && isset ($_POST[ "p"])){ /* si j 'envoie un login et mdp a tester pour se connecter */
        $l=$_POST["l"];
        $p=$_POST["p"];
       
        if($l=="login" && $p=="password") {
        /*  Si le couple log/mdp est correct, alors connecter et rediriger vers page accueil */
            $_SESSION["connecte"] = 1;
            header("Location: contacts.php");
            exit();
        } else { 
            /*  sinon pas  correct, redirigé vers page index avec erreur*/
            header("Location: index.php?error=1");
            exit();
        }
    } else {
    /*echo coucou*/
        if($_SERVER['PHP_SELF']!=$GLOBALS["DOSSIER_ROOT"]."/index.php"){
        header("Location: index.php");
        exit();
        }

    } 
}  else { /*sinon je suis connecté*/
    /*je verifie que l'on veut pas se deconnecter*/ 
    if(isset($_REQUEST[ "action"]) && $_REQUEST[ "action"]=="deconnexion" ){ 
        $_SESSION=array(); 
        session_destroy(); 
        header( "Location: index.php"); 
        exit();
    } 
    if($_SERVER['PHP_SELF']==$GLOBALS[ "DOSSIER_ROOT"]."/index.php") { 
        /* si je suis connecté et que j 'essaye d'aller sur index.php*/
        header( "Location: contacts.php"); 
        /*je redirige vers accueil.php*/ 
        exit(); 
    } 
}
?>