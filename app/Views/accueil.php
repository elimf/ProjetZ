<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
         <!-- Permet d'acceder au formulaire qui crée les évenements-->
        <div class="col-5 text-center my-1" >
            <a href="<?= base_url() . '\agenda\add' ?>"> <button class="btn btn-primary"id="btndate"> Nouvelle Date</button></a>
        </div>
    </div>
</div>


 
<div class="container" id="bgsound">
    <div class="row ">
        
        <!-- Partie  de gauche de la partie accueil de l'agenda-->
            <div class="col-5 mt-1 p-4 " >
                 <!-- Affiche depuis le controlleur les données selon une requete passée par AgendaModel-->
                <?php foreach ($agenda as $sp) {
                        $intituleAgenda    = $sp->intituleAgenda;
                        $heureAgenda       = $sp->heureAgenda;
                        $dateAgenda       = $sp->dateAgenda;
                        $lieuAgenda       = $sp->lieuAgenda;
                        $idAgenda         = $sp->idAgenda;
                      ?>
                    <div class="tab">
                        <div class="container">
                            <div class="row">
                                    
                                <div class="col-6 ">
                                        <div class="col-12">
                                       <p>
                                           <!-- Affichage de la date pour chaque evenement crée au préalable-->
                                    <?php
                                    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR.UTF-8']);
                                    $d3 = $dateAgenda;
                                    $tmstp3 = strtotime($d3);
                                    $dfr3 = strftime(' %d %B %Y', $tmstp3);
                                    echo $dfr3

                                    ?>

                                </p>
                                        </div>
                                        <div class="col-12">
                                             <!-- Affichage de l'heure pour chaque evenement crée au préalable-->
                                             <?= date_create($heureAgenda)->format('H:i');?>
                                        </div>
                                </div>
                                <div class="col-4">
                                     <?= $intituleAgenda?>
                                </div>
                                <div class="col-1 my-auto">
                                     <!-- Bouton permettant d'afficher chaque evenement crée au préalable-->
                                   <button class="tablinks " onclick="openCity(event, '<?= $idAgenda?>')"  > 
                                        <i  class="arrow"> > </i>
                                    </button>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                            <?php } ?> 
            </div> 
      
           <div class="col-1">
                <hr>  
           </div>
             <!-- Partie  de droite de la partie accueil de l'agenda-->   
            <div class="col-6 p-4 " >
                <?php foreach ($agenda as $sp) {
                        $intituleAgenda    = $sp->intituleAgenda;
                        $heureAgenda       = $sp->heureAgenda;
                        $dateAgenda       = $sp->dateAgenda;
                        $lieuAgenda       = $sp->lieuAgenda;
                        $jaugeAgenda      =$sp->jaugeAgenda;
                        $contenuAgenda    =$sp->contenuAgenda;
                        $organisateurAgenda    =$sp->organisateurAgenda;
                        $contactAgenda    =$sp->contactAgenda;
                        $infoAgenda    =$sp->infoAgenda;
                        $contenuAgenda    =$sp->contenuAgenda;
                        $idAgenda         = $sp->idAgenda;
                      ?>
                <div id="<?= $idAgenda?>" class="tabcontent">
                   <div class="container">
                    <div class="row">
                        <div class="col-12 p-2">
                           <img src="<?= base_url('images/concert.png')?>" style="width:100%; border-radius: 20px;">
                        </div>
                        <div class="col-12 " style="text-align:center;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 mt-2" style="text-align:center;">
                                        <h3><?= $intituleAgenda?></h3>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="row ">
                                            <div class="col-4">
                                                <i class="bi bi-calendar-week" style="color: #1F97C7; font-size:20px"></i>
                                            </div>
                                            <div class="col-8 mt-1">
                                                <p> <?php setlocale(LC_TIME, ['fr', 'fra', 'fr_FR.UTF-8']);
                                                    $d1 = $dateAgenda;
                                                    $tmstp1 = strtotime($d1);
                                                    $dfr1 = strftime(' %d %B %Y', $tmstp1);
                                                    echo 'Le ' .$dfr1  
                                            ?></p>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-12">
                                       <div class="row ">
                                            <div class="col-4">
                                                <i class="bi bi-clock" style="color: #1F97C7; font-size:20px"></i>
                                            </div>
                                            <div class="col-8">
                                                <p> <?= date_create($heureAgenda)->format('H:i');?></p>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-12">
                                        <div class="row ">
                                            <div class="col-4">
                                                <i class="bi bi-geo-alt" style="color: #1F97C7; font-size:20px"></i>
                                            </div>
                                            <div class="col-8">
                                                <p><?= $lieuAgenda?></p>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-12">
                                        <div class="row ">
                                            <div class="col-4">
                                               <i class="bi bi-people" style="color: #1F97C7; font-size:20px"></i>
                                            </div>
                                            <div class="col-8">
                                                <p><?= $jaugeAgenda == 0 ? $jaugeAgenda='Pas de jauge' : $jaugeAgenda  ?></p>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <h4>Resumé</h4>
                                </div>
                                <div class="col-12">
                                    <p><?= $contenuAgenda?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <h4>Organisateur</h4>
                                </div>
                                <div class="col-1 ">
                                    <i class="bi bi-person-circle " style="color: gray; font-size:20px;"></i>
                                </div>
                                <div class="col-4">
                                    <p><?= $organisateurAgenda?></p>
                                </div>
                                <div class="col-1">
                                    <i class="bi bi-envelope my-auto" style="color: #1F97C7; font-size:20px"></i>
                                </div>
                                <div class="col-4">
                                    <p><?= $contactAgenda?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <h4>Plus d'infos</h4>
                                </div>
                                <div class="col">
                                    <p><?= $infoAgenda?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="text-align:center;">
                            <button class="btn text-light" id="share" >Partager l'événement</button>
                        </div>
                    </div>
                </div>
                </div>
                <?php } ?>
            </div>  
    </div>
</div>


<style>
    #btndate
    {
        background-color:#1F97C7;
        font-size:12px;
        margin-left:10%;
        width: 140px;
        height: 38px;
        border-radius: 5px;
    }
    h3{
        font-family: Sofia Pro;
        font-style: normal;
        font-weight: 600;
        font-size: 30px;
        line-height: 30px;
        /* identical to box height */

        text-align: center;

        /* NoirCoopEre */

        color: #2C2C2C;
    }
    h4{
        font-family: Sofia Pro;
        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 24px;
        color: #1F97C7;
    }
    p{
        font-family: Sofia Pro;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 20px;
        color: #2C2C2C;
    }
    #bgsound{
        background-color:#FFFFFF;
    }
    
     .tab {
        width: 114%;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }
   
    .tab button {
        display: block;
        color: black;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 20px;
    }
    .tab button.active .arrow {
        color: #1F97C7;
    }
    .arrow{
        color:#2C2C2C;
    }
    hr{ 
  
    border:         none;
    border-left:    1px solid #AEAEAE;
    height:         100vh;
    width:          1px;       
}
#share{
    background: #1F97C7; 
    border-radius: 97px;
}
 #share:hover{
    background-color:lightblue;
    
}
   

</style>
<script >
            function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
      }

            // Get the element with id="defaultOpen" and click on it
            document.getElementsByClassName('arrow')[0].click();
 </script>
   
<?php $content = ob_get_clean(); ?>
<?php include_once('template.php'); ?>