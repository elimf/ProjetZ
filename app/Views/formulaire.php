<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row justify-content-center ">
                    <!-- Titre de la page -->
            <div class="col-9 col-sm-10 col-md-10 col-lg-8  p-2 ">
                <h2 style="color:#F49A41;font-size:3vw;">Nouvelle date d’évènement</h2>
                <hr style="border: 1px solid #F49A41;font-size:auto;">
            </div>
            <!-- div pour le Formulaire-->
            <div class="col-9 col-sm-10 col-md-10 col-lg-8 p-4  "style="background:#FFFFFF;border-radius: 20px;">
                            <!-- Formulaire -->
                        <div class="form-group">
                            <!-- Partie pour l'intiulé-->
                            <div class="form-group  col-md-12 ">
                                <label for="">Intitulé*</label> <span id="error_intituleAgenda" class="text-danger ms-3"></span>
                                <input type="text" class="form-controle intituleAgenda" id="" placeholder="Donnez un titre à votre évènement" style="background:#EEEEEE;border-radius: 13px;">
                            </div>
                             <!--COUVERTURE -->
                            <div class="form-group col-12 ">
                                <label for="">Photo de couverture*</label> <span id="error_couvertureAgenda" class="text-danger ms-3"></span>
                                        <div class="file-upload couvertureAgenda"  data-input-name="input1">

                                        </div>                       
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- CONTENU -->
                            <div class="form-group col-md-12">
                                <label for="inputAddress">Contenu *</label> <span id="error_contenuAgenda" class="text-danger ms-3"></span>
                                <input type="text" class="form-controle contenuAgenda"  placeholder="Que va-t-il se passer lors de votre évènement ? " style="background:#EEEEEE;border-radius: 13px;">
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- DATE-->
                            <div class="form-group col-md-6">
                                <label for="">Date*</label> <span id="error_dateAgenda" class="text-danger ms-3"></span>
                                <input type="date" class="form-controle dateAgenda"  style="background:#EEEEEE;border-radius: 13px;">
                            </div>
                            <!-- LIEU -->
                            <div class="form-group col-md-6">
                                <label for="">Lieu*</label> <span id="error_lieuAgenda" class="text-danger ms-3"></span>
                                <div class="right-inner-addon input-container" >
                                    <i class="bi bi-geo-alt" id="geo"></i>
                                    <input type="text" class="form-controle lieuAgenda"  placeholder="Où se passe l’évènement ?" style="background:#EEEEEE;border-radius: 13px;">
                                </div>
                            </div>
                            <!-- HEURE -->
                            <div class="form-group col-md-6">
                                <label for="">Heure*</label> <span id="error_heureAgenda" class="text-danger ms-3"></span>
                                <input type="time" class="form-controle heureAgenda"  style="background:#EEEEEE;border-radius: 13px;">
                            </div>
                            <!-- JAUGE -->
                            <div class="form-group col-md-6">
                                <label for="">Jauge</label> 
                                    <div class="right-inner-addon input-container"  >
                                        <i class="bi bi-people" id="peo"></i>
                                        <input type="number" class="form-control jaugeAgenda" min="0" placeholder="Nb de personne max accueillies" style="background:#EEEEEE;border-radius: 13px;">
                                    </div>
                            </div>
                            <?php foreach ($user as $sp) {
                                $pseudoUsers        = $sp->pseudoUsers;
                                $mailUsers       = $sp->mailUsers;
                                ?>
                                <!-- ORGANISATEUR-->
                            <div class="form-group col-md-6">
                                <label for="">Organisateur*</label> <span id="error_organisateurAgenda" class="text-danger ms-3"></span>
                                <input type="text" class="form-controle organisateurAgenda"  placeholder="Est-ce vous ou un externe de votre réseau ? " value="<?= $pseudoUsers?>" style="background:#EEEEEE;border-radius: 13px;">
                            </div>
                            <!-- CONTACT-->
                            <div class="form-group col-md-6">
                                <label for="">Contact*</label> <span id="error_contactAgenda" class="text-danger ms-3"></span>
                                <input type="text" class="form-controle contactAgenda"  placeholder="Email ou téléphone de l’organisateur" value="<?= $mailUsers?>" style="background:#EEEEEE;border-radius: 13px;" >
                            </div>
                                <?php } ?>
                        </div>
                        <div class="form-group">
                            <label for="">Plus d'infos</label>
                            <input type="text" class="form-controle infoAgenda"  placeholder="Site internet de l’organisateur ou de l’évènement, autre, ..." style="background:#EEEEEE;border-radius: 13px;">
                        </div>
                        <div class="form-group">
                            <!--POUSSER L'EVENEMENT -->
                            <label for="">Pousser l’évènement</label>
                            <div class="form-check">
                            <input class="form-check-input pousserAgenda" style="background:green" type="checkbox" id="gridCheck">
                            <p class="form-check-label" for="gridCheck">
                                Mettre en avant l’évènement sur la page d’accueil de votre réseau
                            </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <!-- BAS DU FORMULAIRE-->
                                <div class="row justify-content-center  ">
                                    <div class="col-6 col-sm-6 col-md-7">
                                            <a href="<?= base_url() . '\agenda\all' ?>"> <button type="button" class="btn " style="color:#F49A41; background:#FFFFFF;border-radius: 45px;">Retour à l'agenda </button></a>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-5">
                                            <button type="button" class="btn formsave2"  style="color:#F49A41; background:#FFFFFF;border-radius: 45px; border: 1px solid #F49A41;box-sizing: border-box;">Ajouter à l'agenda</button>
                                    </div>
                                </div>
                        </div>
                            <p id="thisT" >Merci de remplir toutes les informations obligatoires marquées d’une étoile</p>
                        <div>
                            <!-- INFO SUR L'UTILISATEUR CONNECTÉ-->
                        <div class="form-group ">
                                <input type="hidden" class="form-controle idUser" value="1" >
                        </div>

            </div>
    </div>
</div>


<script>
    $(document).ready(function () {
            UnoDropZone.init();
        });
    $(document).ready(function ()
    {
        $(document).on('click','.formsave2', function(){
        
                if ($.trim($('.intituleAgenda').val()).length == 0 ) {
                    $('.intituleAgenda').css("background-color", "#FF2D2D");
                    $('.intituleAgenda').css("opacity","0.3");
                    $(this).css("color", "#FF2D2D");
                    $(this).css("border", "1px solid #FF2D2D");
                   $("#thisT").css("visibility","visible");
                } else {
                    error_intituleAgenda ='';
                    $('#error_intituleAgenda').text(error_intituleAgenda);
                    $('.intituleAgenda').css("background-color", "#EEEEEE");
                    $('.intituleAgenda').css("opacity","");
                     $(this).css("color", "#FFFFF");
                    $(this).css("border", "1px solid ##F49A41");
                    
                    
                }
                    if ($.trim($("input[name='input1']").val()).length == 0) {
                    $('.couvertureAgenda').css("background-color", "#FF2D2D");
                    $('.couvertureAgenda').css("opacity","0.3");
                    $(this).css("color", "#FF2D2D");
                    $(this).css("border", "1px solid #FF2D2D");
                    $("#thisT").css("visibility","visible");
                    console.log($(" input[name='input1']").val());
                    console.log("yes");
                        
                    }else{
                    error_couvertureAgenda ='';
                    $('#error_couvertureAgenda').text(error_couvertureAgenda);
                    $('.couvertureAgenda').css("opacity","1");
                    console.log($("input[name='input1']").val());
                            console.log("yes yes");   
                    }
                    var path = $("input[name='input1']").val();
                    var filename = path.replace(/^.*\\/, "");
                        console.log(filename);
                        

                if ($.trim($('.contenuAgenda').val()).length == 0 ) {
                    $('.contenuAgenda').css("background-color", "#FF2D2D");
                    $('.contenuAgenda').css("opacity","0.3");
                    $(this).css("color", "#FF2D2D");
                    $(this).css("border", "1px solid #FF2D2D");
                    $("#thisT").css("visibility","visible");
                } else {
                    error_contenuAgenda ='';
                    $('#error_contenuAgenda').text(error_contenuAgenda);
                    $('.contenuAgenda').css("background-color", "#EEEEEE");
                    $('.contenuAgenda').css("opacity","");
                    $(this).css("color", "#FFFFF");
                    $(this).css("border", "1px solid ##F49A41");
                    
                    
                }

                if ($.trim($('.dateAgenda').val()).length == 0 ) {
                    $('.dateAgenda').css("background-color", "#FF2D2D");
                    $('.dateAgenda').css("opacity","0.3");
                    $(this).css("color", "#FF2D2D");
                    $(this).css("border", "1px solid #FF2D2D");
                    $("#thisT").css("visibility","visible");
                } else {
                    error_dateAgenda ='';
                    $('#error_dateAgenda').text(error_dateAgenda);
                    $('.dateAgenda').css("background-color", "#EEEEEE");
                    $(this).css("color", "#FFFFF");
                    $(this).css("border", "1px solid ##F49A41");
                    
                    
                }
                if ($.trim($('.lieuAgenda').val()).length == 0 ) {
                    $('.lieuAgenda').css("background-color", "#FF2D2D");
                    $('.lieuAgenda').css("opacity","0.3");
                    $(this).css("color", "#FF2D2D");
                    $(this).css("border", "1px solid #FF2D2D");
                    $("#thisT").css("visibility","visible");
                } else {
                    error_lieuAgenda ='';
                    $('#error_lieuAgenda').text(error_lieuAgenda);
                    $('.lieuAgenda').css("background-color", "#EEEEEE");
                    $('.lieuAgenda').css("opacity","");
                    $(this).css("color", "#FFFFF");
                    $(this).css("border", "1px solid ##F49A41");
                    
                    
                }
                
                if ($.trim($('.heureAgenda').val()).length == 0 ) {
                    $('.heureAgenda').css("background-color", "#FF2D2D");
                    $('.heureAgenda').css("opacity","0.3");
                    $(this).css("color", "#FF2D2D");
                    $(this).css("border", "1px solid #FF2D2D");
                    $("#thisT").css("visibility","visible");
                } else {
                    error_heureAgenda ='';
                    $('#error_heureAgenda').text(error_heureAgenda);
                    $('.heureAgenda').css("background-color", "#EEEEEE");
                    $('.heureAgenda').css("opacity","");
                    $(this).css("color", "#FFFFF");
                    $(this).css("border", "1px solid ##F49A41");
                
                }

                if ($.trim($('.organisateurAgenda').val()).length == 0 ) {
                    $('.organisateurAgenda').css("background-color", "#FF2D2D");
                    $('.organisateurAgenda').css("opacity","0.3");
                    $(this).css("color", "#FF2D2D");
                    $(this).css("border", "1px solid #FF2D2D");
                    $("#thisT").css("visibility","visible");
                } else {
                    error_organisateurAgenda ='';
                    $('#error_organisateurAgenda').text(error_organisateurAgenda);
                    $('.organisateurAgenda').css("background-color", "#EEEEEE");
                    $('.organisateurAgenda').css("opacity","");
                    $(this).css("color", "#FFFFF");
                    $(this).css("border", "1px solid ##F49A41");
                    
                    
                }

                if ($.trim($('.contactAgenda').val()).length == 0 ) {
                    $('.contactAgenda').css("background-color", "#FF2D2D");
                    $('.contactAgenda').css("opacity","0.3");
                    $(this).css("color", "#FF2D2D");
                    $(this).css("border", "1px solid #FF2D2D");
                    $("#thisT").css("visibility","visible");
                } else {
                    error_contactAgenda ='';
                    $('#error_contactAgenda').text(error_contactAgenda);
                    $('.contactAgenda').css("background-color", "#EEEEEE");
                    $('.contactAgenda').css("opacity","");
                    $(this).css("color", "#FFFFF");
                    $(this).css("border", "1px solid ##F49A41");
                    
                    
                }

                if (error_intituleAgenda != ''|| error_contenuAgenda != ''|| error_couvertureAgenda != ''|| error_dateAgenda != '' || error_lieuAgenda != ''||  error_heureAgenda != ''|| error_organisateurAgenda != ''|| error_contactAgenda != '') {
                        return false;
                }else{
                    $("#thisT").css("visibility","hidden");
                     
                    var data={
                        'intituleAgenda':$('.intituleAgenda').val(),
                        'couvertureAgenda':$("input[name='input1']").val(),
                        'contenuAgenda':$('.contenuAgenda').val(),
                        'dateAgenda':$('.dateAgenda').val(),
                        'lieuAgenda':$('.lieuAgenda').val(),
                        'heureAgenda':$('.heureAgenda').val(),
                        'jaugeAgenda':$('.jaugeAgenda').val(),
                        'organisateurAgenda':$('.organisateurAgenda').val(),
                        'contactAgenda':$('.contactAgenda').val(),
                        'infoAgenda':$('.infoAgenda').val(),
                        'pousserAgenda':$('.pousserAgenda').val(),
                        'idUser':$('.idUser').val(),
                    };
                    console.log(data);
                    $.ajax({
                        method:"POST",
                        enctype: 'multipart/form-data',
                        url:"save",
                        data: data,
                        success: function (response){
                         window.location.href = "\confirm";
                        }
                    });
                }
            });
        

    });
</script>
<style> 

 #thisT
 {
    font-family: Sofia Pro;
    font-style: normal;
    font-weight: 500;
    font-size: 1vw;
    line-height: 16px;
    text-align: center;
    color: #FF2D2D;
    visibility:hidden;
    }
    label{
        color:#1F97C7;
        font-family: Sofia Pro;
        font-style: normal;
    }
    .input-container {
	padding-bottom: 1em;
    }


    .right-inner-addon {
        position: relative;
    }
    .right-inner-addon input {
        padding-right: 35px !important;
    }
    .right-inner-addon i {
        position: absolute;
        right: 0px;
        padding: 12px 12px;
        pointer-events: none;
    }
    .lieuAgenda {
        width: 100%;
            padding: 1em !important;
            margin: 0em !important;
            box-sizing: border-box;
    }
    .form-controle{
             width: 100%;
            padding: 1em !important;
            margin: 0em !important;
            box-sizing: border-box;
            border: 0px solid white;

    }
    #geo{
        color:aqua;
    }
    .jaugeAgenda {
        width: 100%;
            padding: 1em !important;
            margin: 0em !important;
            box-sizing: border-box;
    }
    #peo{
        color:aqua;
    }
      .file-upload {
            width: 100%;
            height: 190px;
            background-color: #EEEEEE;
            border-radius: 13px;            
        }
        
        .file-upload:hover {
            cursor: pointer;
            /*        border-style: solid;
            border-width: 1px;
            border-color: rgb(221, 220, 220);*/
        }
        
        .file-upload .filethumbnail img.img {
             width: 100%;
            height: 190px;
            border-radius: 13px;
        }
        
        .file-upload .file-input {
            display: none;
        }
        
        .file-upload .drop-click-zone {
             width: 100%;
            height: 190px;
            /* position: absolute; */
            /* z-index: 2;*/
            /*            background-color: red;*/
        }
        
        .file-upload .info {
            display: none;
        }
        
        .file-upload .filethumbnail {
            /*            background-color: green;*/
            
            width: 100%;
            height: 190px;
            /* top: -100%;*/
            
            position: relative;
            /* z-index: -1;*/
        }
        
      
        .file-upload .message {
            position: relative;
            top: -100%;
            color: rgba(245, 245, 245, 0);
            height: 100%;
            display: none;
            text-align: center;
        }
        
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
    
        }

    
    
</style>
<?php $content = ob_get_clean(); ?>
<?php include_once('template.php'); ?>