  <?php 
$action="";
if(isset($_REQUEST["action"])) {$action = $_REQUEST["action"]; }

if($action == "supct") {
    if(isset($_REQUEST["id"])) {$id = $_REQUEST["id"]; }
                    $db = new Database();
                    $query="DELETE FROM contacts WHERE id = '".$id."'";
                    $db->query($query);
                    $db->execute();
    
    header("Location: contacts.php?oksup=1");
    
    //echo "Supprimer le contact" .$id;
}

if($action == "addct") {
$nom = $prenom = $civ = $email = $telfixe = $telport =  $cpostal =  $ville =  $date_na = $num_dept = $nivo_imp = "";
$nom = $_REQUEST["nom"];
$prenom = $_REQUEST["prenom"];
$civ = $_REQUEST["civ"];
$email = $_REQUEST["email"];
$telfixe = $_REQUEST["telfixe"];
$telport = $_REQUEST["telport"];
$cpostal = $_REQUEST["cpostal"];
$ville = $_REQUEST["ville"];
$date_na = $_REQUEST["date_na"]."-00-00";
$num_dept=substr($cpostal,0,2);
    if($num_dept=="97") { 
        $num_dept=substr($cpostal,0,3);
    }
$daterec=date("Y-m-d H:i:s"); /* 2016-04-20 11:47:45 */   
$nom_sql = addslashes(utf8_decode($nom));
$nivo_imp = $_REQUEST["imp"];    
$db = new Database();
        $kery="INSERT into contacts (nom, prenom, civ, date_rec, email, telfixe, telport, cpostal, ville, date_na, dept, imp) VALUES(:nom, :prenom, :civ, :toto, :email, :telfixe, :telport, :cpostal, :ville, :date_na, :dept, :imp)";
                    $db -> query($kery);
                    $db -> bind(":nom", $nom);
                    $db -> bind(":prenom", $prenom);
                    $db -> bind(":civ", $civ);
                    $db -> bind(":toto", $daterec);
                    $db -> bind(":email", $email);
                    $db -> bind(":telfixe", $telfixe);
                    $db -> bind(":telport", $telport);
                    $db -> bind(":cpostal", $cpostal);
                    $db -> bind(":ville", $ville);
                    $db -> bind(":date_na", $date_na);
                    $db -> bind(":dept", $num_dept);
                    $db -> bind(":imp", $nivo_imp);
                    $db -> execute();
    /*echo "CIV =".$civ." et NOM =".$nom." et PRENOM = ".$prenom;*/
    header("Location: contacts.php?okadd=1");
}

if($action == "modct") {
$nom = $prenom = $civ = $email = $telfixe = $telport =  $cpostal =  $ville =  $date_na = $num_dept = $nivo_imp = "";
$nom = $_REQUEST["nom"];
$prenom = $_REQUEST["prenom"];
$civ = $_REQUEST["civ"];
$email = $_REQUEST["email"];
$telfixe = $_REQUEST["telfixe"];
$telport = $_REQUEST["telport"];
$cpostal = $_REQUEST["cpostal"];
$ville = $_REQUEST["ville"];
$date_na = $_REQUEST["date_na"]."-00-00";
$num_dept=substr($cpostal,0,2);
    if($num_dept=="97") { 
        $num_dept=substr($cpostal,0,3);
    }
$daterec=date("Y-m-d H:i:s"); /* 2016-04-20 11:47:45 */   
$nom_sql = addslashes(utf8_decode($nom));
$nivo_imp = $_REQUEST["imp"];    
$db = new Database();
        $kery="UPDATE contacts SET nom=:nom,prenom=:prenom,civ=:civ,email=:email,telfixe=:telfixe,telport=:telport,cpostal=:cpostal,ville=:ville,date_na=:date_na,dept=:dept,imp=:imp WHERE id=:id";
                    $db -> query($kery);
                    $db -> bind(":id", $_REQUEST["id"]);
                    $db -> bind(":nom", $nom);
                    $db -> bind(":prenom", $prenom);
                    $db -> bind(":civ", $civ);
                    $db -> bind(":email", $email);
                    $db -> bind(":telfixe", $telfixe);
                    $db -> bind(":telport", $telport);
                    $db -> bind(":cpostal", $cpostal);
                    $db -> bind(":ville", $ville);
                    $db -> bind(":date_na", $date_na);
                    $db -> bind(":dept", $num_dept);
                    $db -> bind(":imp", $nivo_imp);
                    $db -> execute();
    /*echo "CIV =".$civ." et NOM =".$nom." et PRENOM = ".$prenom;*/
    header("Location: contact.php?id=".$_REQUEST["id"]."&okadd=1");
}
?>