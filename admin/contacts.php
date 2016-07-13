
    <?php 
require_once("inc/auth.php");
require_once("classes/db.class.php");
require_once("inc/func.php");
require_once("inc/modals/actions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
require_once("inc/meta.php");
?>
    <title>Isma-cours | </title>


</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>John Doe</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Contacts <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="#" data-toggle="modal" data-target="#myModal">Ajouter un contact</a>
                        
                    </li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt="">John Doe
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                 <!-- <li><a href="javascript:;">  Profile</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>-->
                  <li><a href="index.php?action=deconnexion"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
        <!-- Modal -->

          <?php require_once("inc/modals/formct.php");?>
        
   
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Contact <small>Liste</small></h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rechercher...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
            <?php 
if(isset($_GET["okadd"]) && $_GET ["okadd"]==1) {
 ?>
            <div class="alert alert-success">
                <p>Contact correctement enregistré.</p>
            
            </div>
            <?php
            }
            ?>
            <?php 
if(isset($_GET["oksup"]) && $_GET ["oksup"]==1) {
 ?>
            <div class="alert alert-success">
                <p>Contact correctement supprimé.</p>
            
            </div>
            <?php
            }
            ?>
            <?php 
if(isset($_GET["okmod"]) && $_GET ["okmod"]==1) {
 ?>
            <div class="alert alert-success">
                <p>Contact correctement modifié.</p>
            
            </div>
            <?php
            }
            ?>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Rechercher ou filtrer</h2><br><br>
                  </div>
                    <?php
                  $maRequett="SELECT * FROM contacts WHERE 1";
                  $tab_des_Filtres=array();
                  $block_filtre= '<span class="label label-search"><strong><a href="#" class="desactiveFiltre" title="Désactiver ce filtre" data-filtre="#__IDFILTRE__"><i class="fa fa-times-circle"></i></a>__TITRE_FILTRE__ :</strong> <em>__VALEUR_FILTRE__</em></span>';
 
                    $s_nom=$s_dept="";
        $s_statut = array();
                  if($action == "search") {
      
    if(isset($_REQUEST["s_nom"])) {$s_nom = $_REQUEST["s_nom"];}
    if(isset($_REQUEST["s_dept"])) {$s_dept = $_REQUEST["s_dept"];}
    if(isset($_REQUEST["s_statut"])) {$s_statut = $_REQUEST["s_statut"];}
    
    $where="1";
    if($s_nom !="") {$where .= " AND (nom = '".$s_nom."' OR nom like'%".$s_nom."%' ) ";
                    $block_filtre_temp = str_replace("__IDFILTRE__", "s_nom", $block_filtre);
                    $block_filtre_temp = str_replace("__TITRE_FILTRE__", "<i class='fa fa-user'></i>Nom du contact", $block_filtre_temp);
                    $block_filtre_temp = str_replace("__VALEUR_FILTRE__", $s_nom, $block_filtre_temp);
                    array_push($tab_des_Filtres,$block_filtre_temp);
                    }
    if($s_dept !="") {$where .= " AND (dept = '".$s_dept."')";
                    $block_filtre_temp = str_replace("__IDFILTRE__", "s_dept", $block_filtre);
                    $block_filtre_temp = str_replace("__TITRE_FILTRE__", "<i class='fa fa-user'></i>Département", $block_filtre_temp);
                    $block_filtre_temp = str_replace("__VALEUR_FILTRE__", $s_dept, $block_filtre_temp);
                    array_push($tab_des_Filtres,$block_filtre_temp);
                     }
    $str_temp = $str_pour_filtre = "";
        foreach($s_statut as $val){
                                    $str_temp.=$val.",";
                                    $str_pour_filtre.=$GLOBALS["TAB_STATUT_CT"][$val]." + ";
                                  }
        if($str_temp !=""){
                            $str_temp=substr($str_temp, 0,strlen($str_temp)-1);
                            $where .= " AND (statut IN (".$str_temp."))";
                            $str_pour_filtre=substr($str_pour_filtre, 0, strlen($str_pour_filtre)-3);
                            $block_filtre_temp = str_replace("__IDFILTRE__", "s_statut", $block_filtre);
                            $block_filtre_temp = str_replace("__TITRE_FILTRE__", "<i class='fa fa-tag'></i>Statut", $block_filtre_temp);
                            $block_filtre_temp = str_replace("__VALEUR_FILTRE__", $str_pour_filtre, $block_filtre_temp);
                            array_push($tab_des_Filtres,$block_filtre_temp);   
                          }
    $maRequett = "SELECT * FROM contacts WHERE ".$where; 
        /*echo "<h3>".$maRequett."</h3>";*/
                            }
                    ?>
               <form method="post" action="contacts.php" class="sform" id="search_form">
                   <input type="hidden" name="action" value="search">
                    <div class="row"> 
                        <div class="col-sm-2">
                            <label for="">Nom du contact</label>
                            <input type="text" name="s_nom" id="s_nom" value="<?=$s_nom?>">
                        </div>
                         <div class="col-sm-2">
                            <label for="">Département</label>
                            <input type="text" name="s_dept" id="s_dept" value="<?=$s_dept?>">
                        </div>
                        <div class="col-sm-2">
                          <?php foreach($GLOBALS["TAB_STATUT_CT"]as $cle=>$valeur) { ?>
                            <label><input type="checkbox" name="s_statut[]" class="mycheckbox" value="<?=$cle?>" <?php if(in_array($cle, $s_statut)) { ?> checked="checked" <?php }?>><?=$valeur?></label> <?php } ?> 
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary">Filtrer</button>
                        </div>
                    </div> 
                </form>
                   
                  <div class="clearfix"></div>
                
                <div class="x_content">
                    
                    <?php
if(isset($_REQUEST["p"])){ $p=$_REQUEST["p"];}
if(!isset($p)){ $p=1;}
if(isset($_REQUEST["max_by_page"])){ $max_by_page=$_REQUEST["max_by_page"];}
else {$max_by_page=5;}
if(isset($_REQUEST["sens"])){ $sens=$_REQUEST["sens"];}
else {$sens="DESC";}
if(isset($_REQUEST["tri"])){ $tri=$_REQUEST["tri"];}
else {$tri="id";}
$start_limit=0;

                    $dblist = new Database();
                    $kerylistall=$maRequett;
                    echo $kerylistall;               
                    $dblist->query($kerylistall);
                    $dblist->execute();
                    $nbtotal = $dblist->rowCount();
                    echo $nbtotal." résultats ";
                        $nbtotal_page = ceil($nbtotal/$max_by_page);
                    echo $nbtotal_page." pages ";
                    $start_limit=($max_by_page*$p) - $max_by_page;
                    $kerylist = $maRequett. ' ORDER BY '.$tri.' '.$sens.' Limit '.$start_limit.','.$max_by_page;
                    echo $kerylist;
                    $dblist->query($kerylist);
                    $lignes= $dblist->resultset();

$lignea=$p*$max_by_page;
$lignede=$lignea-$max_by_page+1;
    if($lignea>$nbtotal){$lignea=$nbtotal;}
  ?>
                
                       <!--<pre><?php //print_r($lignes); ?></pre>-->
                        <div class="alert alert-warning">
                            <form method="post" action="contacts.php">
                           <div class="col-sm-2"> Afficher <select name="max_by_page" class="form-control">
                                <option value="2" <?php if ($max_by_page==2) {echo 'selected="selected"';}?>>2 lignes</option>
                                <option value="3" <?php if ($max_by_page==3) {echo 'selected="selected"';}?>>3 lignes</option>
                                <option value="5" <?php if ($max_by_page==5) {echo 'selected="selected"';}?>>5 lignes</option>
                                <option value="7" <?php if ($max_by_page==7) {echo 'selected="selected"';}?>>7 lignes</option>
                                <option value="10" <?php if ($max_by_page==10) {echo 'selected="selected"';}?>>10 lignes</option>
                                </select></div>
                            <div class="col-sm-2"> Trier par <select name="tri" class="form-control">
                                <option value="id" <?php if ($tri=="id") {echo 'selected="selected"';}?>>ID</option>
                                <option value="nom" <?php if ($tri=="nom") {echo 'selected="selected"';}?>>NOM</option>
                                <option value="prenom" <?php if ($tri=="prenom") {echo 'selected="selected"';}?>>PRENOM</option>
                                <option value="ville" <?php if ($tri=="ville") {echo 'selected="selected"';}?>>VILLE</option>
                                <option value="cpostal" <?php if ($tri=="cpostal") {echo 'selected="selected"';}?>>CP</option>
                                </select></div>
                           <div class="col-sm-2"> Et ordonner par ordre
                                <label><input type="radio" name="sens" value="ASC" <?php if ($sens=="ASC") {echo ' checkek="checked"';}?>>Croissant </label><br>
                                <label><input type="radio" name="sens" value="DESC" <?php if ($sens=="DESC") {echo ' checkek="checked"';}?>>Décroissant</label>
                                <input type="hidden" name="p" value="1"></div>
                               <button type="submit" class="btn btn-sm btn-primary">Go</button>
                            </form>
                <p>Page <?=$p."/".$nbtotal_page?>. Affichage des résultats <?=$lignede?> à <?=$lignea?>. </p>
                  <ul class="pagination">
                            <?php
      for ($i=1;$i<=$nbtotal_page;$i++){
  echo '<li><a href="contacts.php?p='.$i.'&max_by_page='.$max_by_page.'&sens='.$sens.'&tri='.$tri.'">'.$i.'</a></li>';
  }
                      ?>
                            </ul> 
            
            </div>
                   <p><?=$nbtotal?> <small style="text-transform: uppercase;"> résultats pour votre recherche sur :</small><?php if ($action=="search") {foreach($tab_des_Filtres as $filtre) {echo $filtre;}}?></p>
                  
                  <!-- start project list -->
                  <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">ID</th>
                        <th style="width: 20%">Nom Prénom</th>
                        <th>C.P</th>
                        <th>Ville</th>
                        <th>Email</th>
                          <th>Statut</th>
                        <th style="width: 20%">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php


foreach ($lignes as $ligne)
{
                        ?>
                      <tr  class="stat<?=$ligne["statut"]?>">
                        <td><?php echo $ligne["id"];?></td>
                        <td>
                          <a><?=$ligne["civ"]?> <?=$ligne["nom"]?> <?=$ligne["prenom"]?></a>
                          <br />
                          <small>Enregisté le <?=dateTofr($ligne["date_rec"])?></small>
                        </td>
                        <td><?=$ligne["cpostal"]?></td>
                        <td><?=$ligne["ville"]?></td>
                        <td><?=$ligne["email"]?></td>
                          <td > <span class="etatstatut stat<?=$ligne["statut"]?>"><?=$GLOBALS["TAB_STATUT_CT"][$ligne["statut"]]?></span></td>
                        <td class="actions">
                          <a href="#" class="btn btn-primary btn-xs" data-target="#detailsct<?=$ligne["id"]?>" data-toggle="modal"><i class="fa fa-folder" ></i> Aperçu </a>
                          <a href="contact.php?id=<?=$ligne["id"]?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editer </a>
                            <form method="post" action="contacts.php" style="display:inline-block; margin: 0;">
                                <input type="hidden" name="action" value="supct">
                                <input type="hidden" name="id" value="<?=$ligne["id"]?>">
                          <a href="#" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Supprimer </a>
                            </form>
                          
                            <?php
                            $id_ct = $ligne["id"];
                            include("inc/modals/detailsct.php"); ?>
                        </td>
                      </tr>
                         <?php 
}
                        ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Bootstrap Admin Template by Ismaïlou Lefebvre <a href="https://colorlib.com">Colorlib</a>
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
     
    </div>

  </div>
    
    
    <!-- form validation -->
  <script src="js/validator/validator.js"></script>
  <script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('.form-cmd').submit(function(e) {
      e.preventDefault();
      var submit = true;
      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
        submit = false;
      }

      if (submit)
        this.submit();
      return false;
    });

 
  </script>
  <?php 
require_once("inc/scripts.php");
?>
        <script type="text/javascript">
       jQuery(document).ready(function() {
            jQuery(".delete").click(function() {
                if(confirm("Voulez-vous vraiment supprimer ce contact ?")) {
                    jQuery(this).parent().submit();} 
                else{ return false;}
            });
       });
            jQuery(".desactiveFiltre").click(function(){
                var target = jQuery(this).attr("data-filtre");
                if(target !='#s_statut') {
                    jQuery(target).val('');} else {
                       jQuery('.mycheckbox').each(function() {
                           jQuery(this).prop('checked', false);
                    });
                }
                jQuery('#search_form').submit();
            });
    </script>
</body>

</html>
