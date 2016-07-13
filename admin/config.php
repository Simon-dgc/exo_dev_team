<?php 
define('DB_NAME', 'app_contacts');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');

$GLOBALS["DOSSIER_ROOT"] = "/programmation/_t/admin";

$GLOBALS["TAB_SELECT_IMP"] =
    array(
    "non-imposable",
    "0-1499",
    "1500-2499",
    "2500-4999",
    "5000-6499",
    "7000-9999",
    "10000-15000",
    "15000 et plus"
    );
$GLOBALS["TAB_FAUX_NUM"] =
     array(
"0123456789",
"0000000000",
"0102030405",
);

$GLOBALS["TAB_STATUT_CT"] = array("0"=>"NON STATUE","-1"=>"ERREUR","1"=>"NON AFFECTE","2"=>"AFFECTE");
$GLOBALS["TAB_STATUT_CMD"] = array("1"=>"Nouvelle","2"=>"En cours","3"=>"Complète","4"=>"Stoppé");

?>
