<div class="col-12 col-lg-7 mt-2 ">
            <?php foreach ($agenda as $sp) {
                        $intituleAgenda    = $sp->intituleAgenda; $heureAgenda =
            $sp->heureAgenda; $dateAgenda = $sp->dateAgenda; $lieuAgenda =
            $sp->lieuAgenda; $jaugeAgenda =$sp->jaugeAgenda; $contenuAgenda
            =$sp->contenuAgenda; $organisateurAgenda =$sp->organisateurAgenda;
            $contactAgenda =$sp->contactAgenda; $infoAgenda =$sp->infoAgenda;
            $contenuAgenda =$sp->contenuAgenda; $idAgenda = $sp->idAgenda; ?>
            <div id="<?= $idAgenda?>" class="tabcontent">
                <div class="container">
                    <div class="row justify-content-center">
                          <!-- COUVERTURE-->
                        <div class="col-12   ">
                          
                            <img
                                src="<?= base_url('images/concert.png')?>"
                                style="width: 100%; border-radius: 20px"
                            />
                        </div>
                            <!-- INTITULÉ -->
                        <div class="col-8 mt-2 text-center" >   
                                <div class="row justify-content-center ">
                                    <div class="col-12  text-center">
                                        <h3><?= $intituleAgenda?></h3>
                                    </div>
                                    <!--ICONE CALENDRIER -->
                                    <div class="col-8  ">
                                        <div class="row ">
                                            <div class="col-2  ">
                                                <i class="bi bi-calendar-week"
                                                    style="color: #1f97c7;"></i>
                                            </div>
                                            <div class="col-6 ">
                                                <p>
                                                    <?php setlocale(LC_TIME, ['fr', 'fra', 'fr_FR.UTF-8']);
                                                    $d1 = $dateAgenda;
                                                    $tmstp1 = strtotime($d1);
                                                    $dfr1 = strftime(' %d %B %Y', $tmstp1);
                                                    echo 'Le ' .$dfr1  
                                                    ?>
                                                </p>
                                            </div>
                                            <div class="col-4 ">
                                            </div>
                                        </div>
                                    </div>
                                     <!--ICONE HORLOGE -->
                                    <div class="col-8 text-center">
                                        <div class="row  ">
                                            <div class="col-2  ">
                                                <i class="bi bi-clock"
                                                    style="color: #1f97c7;"></i>
                                            </div>
                                            <div class="col-6 ">
                                                <p>
                                                    <?= date_create($heureAgenda)->format('H:i');?>
                                                </p>
                                            </div>
                                            <div class="col-4 ">
                                            </div>
                                        </div>
                                    </div>
                                     <!--ICONE LIEU -->
                                    <div class="col-8 text-center">
                                        <div class="row ">
                                            <div class="col-2 ">
                                                <i class="bi bi-geo-alt"
                                                    style="color: #1f97c7;"></i>
                                            </div>
                                            <!-- Affichage du lieu de l'évenement -->
                                            <div class="col-6 ">
                                                <p><?= $lieuAgenda?></p>
                                            </div>
                                            <div class="col-4 ">
                                            </div>
                                        </div>
                                    </div>
                                     <!--ICONE JAUGE -->
                                    <div class="col-8  text-center">
                                        <div class="row ">
                                            <div class="col-2 ">
                                                <i
                                                    class="bi bi-people"
                                                    style="
                                                        color: #1f97c7;"></i>
                                            </div>
                                            <!-- Affichage une jauge si il y en a une -->
                                            <div class="col-6  " >
                                                <p style=""> 
                                                    <?= $jaugeAgenda == 0 ? $jaugeAgenda='Pas de jauge' : $jaugeAgenda  ?>
                                                </p>
                                            </div>
                                            <div class="col-4 ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- RÉSUMÉ -->
                        <div class="col-12  ">
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <h4>Resumé</h4>
                                </div>
                                <div class="col-6 text-center">
                                    <p><?= $contenuAgenda?></p>
                                </div>
                            </div>
                        </div>
                        <!-- ORGANISATEUR & CONTACT -->
                        <div class="col-8 ">
                            <div class="row ">
                                    <div class="col-12">
                                        <h4>Organisateur</h4>
                                    </div>
                                    <div class="col-10 ">
                                        <div class="row  justify-content-end">
                                            <!-- ICONE ORGANISATEUR-->
                                        <div class="col-1 col-lg-1  ">
                                            <i
                                                class="bi bi-person-circle"
                                                style="color: gray; "
                                            ></i>
                                        </div>
                                        <!--  ORGANISATEUR -->
                                        <div class="col-7 col-lg-4 ">
                                            <p><?= $organisateurAgenda?></p>
                                        </div>
                                        <!-- ESPACE VIDE POUR LE CSS-->
                                        <div class="col-12 col-lg-2 "></div>
                                        <!-- ICONE CONTACT-->
                                        <div class="col-1 col-lg-1" >
                                            <i
                                                class="bi bi-envelope "
                                                style="color: #1f97c7;"> 
                                            </i>
                                        </div>
                                        <!-- CONTACT -->
                                        <div class="col-7 col-lg-4 ">
                                            <p><?= $contactAgenda?></p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                         <!-- INFOS -->
                        <div class="col-8">
                            <div class="row">
                               
                                <div class="col-12 mt-2">
                                    <h4>Plus d'infos</h4>
                                </div>
                                <div class="col-12  text-center">
                                    <?= $infoAgenda?>
                                </div>
                            </div>
                        </div>
                         <!-- PARTAGER -->
                        <div class="col-12" style="text-align: center">
                            <button
                                class="btn text-light"
                                id="share"
                                data-toggle="tooltip"
                                title="Prochainement"
                            >
                                Partager l'événement
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>