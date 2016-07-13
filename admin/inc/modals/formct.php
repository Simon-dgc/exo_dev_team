<?php
$el_civ = $el_nom = $el_prenom = $el_email = $el_telfixe = $el_telport = $el_cpostal = $el_ville = $el_annaiss = $el_imp = "";
$txt_bouton = "Ajouter";
$action_to_put="addct";

if(isset($isEdit) && $isEdit==1) {
    $el_civ = $row["civ"];
    $el_nom = $row["nom"];
    $el_prenom = $row["prenom"];
    $el_email = $row["email"];
    $el_telfixe = $row["telfixe"];
    $el_telport = $row["telport"];
    $el_cpostal = $row["cpostal"];
    $el_ville = $row["ville"];
    $el_annaiss = substr($row["date_na"], 0, 4);
    $el_imp = $row["imp"];
    
    $txt_bouton = "Modifier";
    $action_to_put = "modct";
}
?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
        <form class="form-horizontal form-label-left form-cmd" method="post" action="" novalidate>
             <input type="hidden" name="action" value="<?=$action_to_put?>">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?=$txt_bouton?> un contact</h4>
      </div>
      <div class="modal-body">


                    
                    <span class="section">Fiche contact à compléter</span>

            <!--CIVILITE-->
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="civ">Civilité <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="civ" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="civ" placeholder="Civilité" required="required" type="text" value="<?=$el_civ?>">
                      </div>
                    </div>
            <!--NOM-->
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nom <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="nom" placeholder="Nom" required="required" type="text" value="<?=$el_nom?>">
                      </div>
                    </div>
           <!--PRENOM-->
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="surname">Prénom <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="surname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="prenom" placeholder="Prénom" required="required" type="text" value="<?=$el_prenom?>">
                      </div>
                    </div>
          <!--EMAIL-->
                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" id="email" name="email" placeholder="Email" required="required" class="form-control col-md-7 col-xs-12" value="<?=$el_email?>">
                      </div>
                    </div>
            <!--TELEPHONE FIXE-->
                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telfixe">Téléphone fixe <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="telfixe" name="telfixe" placeholder="telfixe" required="required" class="form-control col-md-7 col-xs-12" value="<?=$el_telfixe?>">
                      </div>
                    </div>
            <!--TELEPHONE PORTABLE-->
                  <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telport">Téléphone portable <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="telport" name="telport" placeholder="telport" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="<?=$el_telport?>">
                      </div>
                    </div>
              <!--CODE POSTAL-->
                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cpostal">Code postal <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="cpostal" name="cpostal" placeholder="cpostal" required="required" class="form-control col-md-7 col-xs-12" value="<?=$el_cpostal?>">
                      </div>
                    </div>
              <!--VILLE-->
                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ville">Ville <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="ville" name="ville" placeholder="ville" required="required" class="form-control col-md-7 col-xs-12" value="<?=$el_ville?>">
                      </div>
                    </div>
              <!--ANNEE DE NAISSANCE-->
                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date_na">Année de Naissance <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="date_na" name="date_na" placeholder="date_na" required="required" class="form-control col-md-7 col-xs-12" value="<?=$el_annaiss?>">
                      </div>
                    </div>
            <!--NIVEAU IMPOSITION-->
                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="imp">Niveau d'imposition <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="imp" class="form-control">
                        <option value="">Choisir votre niveau</option>
                            <?php
                        foreach($GLOBALS["TAB_SELECT_IMP"] as $toto){
                            $selectedIci='';
                            if($el_imp == $toto) {$selectedIci = ' selected="selected"';}
                        echo '<option value="'.$toto.'"'.$selectedIci.'>'.$toto.'</option>';}
                            ?>
                        </select>
     
     
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                       <!-- ANCIEN BOUTON  <button type="submit" class="btn btn-primary">Fermer</button>
                        <button id="send" type="submit" class="btn btn-success">Ajouter</button>-->
                      </div>
                    </div>
                         </div>
      </div>
          </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary pull-left" >Fermer</button>
        <button id="send" type="submit" class="btn btn-success"><?=$txt_bouton?></button>
        <!--  ANCIEN BOUTON <button type="button" class="btn btn-default" >Fermer</button>-->
      </div>
        </form>
         </div>

  </div>
</div>
    

