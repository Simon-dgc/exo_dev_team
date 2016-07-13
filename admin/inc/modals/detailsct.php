  <div id="detailsct<?=$id_ct?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
        <form class="form-horizontal form-label-left form-cmd" method="post" action="" novalidate>
             <input type="hidden" name="action" value="addct">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Details de la fiche contact <?=$ligne["id"]?>, enregistré le <?=dateTofr($ligne["date_rec"])?></h4></div>
            <div class="modal-body">
            <div class="row">
                <div class="col-sm-6">
                    <h3><i class="fa fa-user"></i> <?=$ligne["civ"]?> <?=$ligne["nom"]?> <?=$ligne["prenom"]?> </h3>
                    <h4><i class="fa fa-map-marker"></i> <?=$ligne["cpostal"]?> <?=$ligne["ville"]?> </h4>
                    <h4><i class="fa fa-phone"></i> <?=$ligne["telfixe"]?> - <?=$ligne["telport"]?> </h4>
                </div>
                   <div class="col-sm-6">
                </div>
                </div></div>
              <pre>
            <?php
            print_r($ligne);
            ?>
            </pre>
            
      

        
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn pull-right" >Fermer</button>
      </div>
        </form>
         </div>

  </div>
</div>
    

