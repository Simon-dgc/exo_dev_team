
    <?php 
require_once("inc/auth.php");
require_once("classes/db.class.php");
require_once("inc/func.php");
require_once("inc/modals/actions.php");

$id = 0;
if(isset($_REQUEST["id"])) {$id = $_REQUEST["id"]; }
if($id!=0) {
    $oContact = new Database();
    $selCt = "SELECT * FROM contacts WHERE id ='".$id."'";
    $oContact->query($selCt);
    
    $rowAll = $oContact->resultset();
    
    if(!$rowAll) {
        header("Location: contacts.php");
        exit();}
    else{
        $row = $rowAll[0];}
$datecrea = dateTofr($row["date_rec"]);
$annaiss=substr($row["date_na"], 0, 4);}
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
                <li><a><i class="fa fa-home"></i> Contact <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                        
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

   
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Contact</h3>
            </div>

             <div class="title-right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <?php
                if($row["statut"]!=2) { ?>
                <a href="#" class="btn btn-warning pull-right" data-target="#myModal" data-toggle="modal"><i class="fa fa-edit"></i>Modifier</a>
                <?php 
                    $isEdit=1;
                    include("inc/modals/formct.php");
                }
                ?>
                </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
           <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Editer un Contact</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <span class="etatstatut stat<?=$row["statut"]?>"><?=$GLOBALS["TAB_STATUT_CT"][$row["statut"]]?></span>
                    <table style="margin: 5px;">
                    <tr>
                        <td style="padding : 10px; "> <h5><i class="fa fa-user"></i> INFO CONTACT </h5></td>
                        <td style="padding : 10px; "> <h5><i class="fa fa-euro"></i> INFO IMPOTS </h5></td>
                    </tr>
                    <tr>
                        <td style="padding : 0px 10px;"><i class="fa fa-user"></i> <?=$row["civ"]?> <?=$row["nom"]?> <?=$row["prenom"]?> </td>
                        <td style="padding : 0px 10px;">Niveau Imposition : </td>
                    </tr>
                    <tr>
                        <td style="padding : 0px 10px;"><i class="fa fa-home"></i> <?=$row["cpostal"]?> <?=$row["ville"]?> (Dept. : <?=$row["dept"]?>) </td>
                        <td style="padding : 0px 10px;"><?=$row["imp"]?></td>
                    </tr>
                    <tr>
                        <td style="padding : 0px 10px;"><i class="fa fa-birthday-cake"></i> <?=$row["age"]?> ans, né(e) en <?=$annaiss?> </td>
                        <td style="padding : 0px 10px;">Apport : <?=$row["app"]?></td>
                    </tr>
                    <tr>
                        <td style="padding : 0px 10px;"><i class="fa fa-envelope"></i> <?=$row["email"]?>
                        <?php if(isValidEmail($row["email"])){echo '<i class="fa fa-check green"></i>';}
else{echo '<i class="fa fa-time red"></i>';}?></td>
                        <td style="padding : 0px 10px;">Propriétaire : <?=$row["prop"]?></td>
                    </tr>
                    <tr>
                        <td style="padding : 0px 10px;"><i class="fa fa-phone"></i> <?=$row["telfixe"]?> 
                            <?php if(isValidPhone($row["telfixe"])){echo '<i class="fa fa-check green"></i>';}
else{echo '<i class="fa fa-time red"></i>';}?></td>
                        <td style="padding : 0px 10px;">Situation familiale : <?=$row["sf"]?></td>
                    </tr>
                    <tr>
                        <td style="padding : 0px 10px;"><i class="fa fa-mobile"></i> <?=$row["telport"]?>
                          <?php if(isMobilePhone($row["telport"])){echo '<i class="fa fa-check green"></i>';}
else{echo '<i class="fa fa-time red"></i>';}?></td>
                        <td style="padding : 0px 10px;">Profession : <?=$row["prof"]?></td>
                    </tr>
                    </table>
                <br>
                    <?=$row["id"]?>
  <pre><?php print_r($row); ?></pre>
                
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
      
    </div>

    
    

  <?php 
require_once("inc/scripts.php");
?>
       
</body>

</html>
