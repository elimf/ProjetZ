<?php ob_start(); ?>
<div class="container-fluid " >
    <div class="row ">
        <!-- Permet d'acceder au formulaire qui crée les évenements-->
        <div class="col-12 text-start mb-3" style="margin-left:10%">
            <a href="<?= base_url() . '\agenda\add' ?>">
                <button class="btn btn-primary" id="btndate">
                    Nouvelle Date
                </button></a
            >
        </div>
    </div>
</div>

<div class="container-fluid " id="bgsound">
    <div class="row justify-content-center ">
        <!-- Partie  de gauche de la partie accueil de l'agenda-->
        <?php require __DIR__.'/AccueilAffichage/leftPart.php' ?>
        
        <!-- Partie  de droite de la partie accueil de l'agenda-->
         <?php require __DIR__.'/AccueilAffichage/rightPart.php' ?>
    </div>
</div>



<style>
    #btndate
    {
        background-color:#1F97C7;
        margin-left:10%;
        width: auto;
        height: auto;
        border-radius: 5px;
    }
    h3{
        font-family: Sofia Pro;
        font-style: normal;
        font-weight: 600;
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
        line-height: 24px;
        color: #1F97C7;
    }
    p{
        font-family: Sofia Pro;
        font-style: normal;
        font-weight: normal;
        line-height: 20px;
        color: #2C2C2C;
    }
    #bgsound{
        background-color:#FFFFFF;
        width:80%;
        height:auto;
       padding:0;
    }
    
     .tab {
        width: 100%;
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
    height:         400px;
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
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(
                " active",
                ""
            );
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementsByClassName("arrow")[0].click();
</script>

   
<?php $content = ob_get_clean(); ?>
<?php include_once('template.php'); ?>