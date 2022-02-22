<div class="col-12  col-lg-5 mb-5  ">
            <!-- Affiche depuis le controlleur les données selon une requete passée par AgendaModel-->
            <?php foreach ($agenda as $sp) {
                                        $intituleAgenda    = $sp->intituleAgenda;
            $heureAgenda = $sp->heureAgenda; $dateAgenda = $sp->dateAgenda;
            $lieuAgenda = $sp->lieuAgenda; $idAgenda = $sp->idAgenda; ?>
            <div class="card" style="width: 100%;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" data-toggle="tooltip" >
                        <div class="container-fluid w-100">
                            <div class="row ">
                                <div class="col-5 col-lg-5 ">
                                    <div class="col-12 mb-1">
                                        <p style=""><?php
                                        setlocale(LC_TIME, ['fr', 'fra', 'fr_FR.UTF-8']);
                                        $d3 = $dateAgenda;
                                        $tmstp3 = strtotime($d3);
                                        $dfr3 = strftime(' %d %B %Y', $tmstp3);
                                        echo $dfr3
                                        ?></p>
                                    </div>
                                    <div class="col-12 ">
                                         <p style=""><?= date_create($heureAgenda)->format('H:i');?></p>
                                    </div>
                                    
                                </div>
                                <div class="col-5 col-lg-6 text-center align-middle ">
                                  <p style=""><?= $intituleAgenda?></p> 
                                </div>
                                <div class="col-2 col-lg-1 ">
                                    <div class="row justify-content-center  ">
                                            <a  class="align-bottom"
                                        style="width:auto%;height:1rem;background:none;"
                                        onclick="openCity(event, '<?= $idAgenda?>')" >
                                       <i class=" arrow bi bi-arrow-right-short "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                           
                </ul>
            </div>
                <?php } ?>
                <div class="d-none d-md-block" style="margin-left:100%;">
                     <hr style="z-index:2;position:absolute;height:100%;top:0">
                </div>
        </div>