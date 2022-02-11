<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-12 p-2">
            <h2 style="color:#F49A41;font-size:24px;">Nouvelle date d’évènement</h2>
            <hr style="border: 1px solid #F49A41;">
        </div>
        <div class="col-12" style="background:white;border-radius:40px;">
            <div style="text-align:center;">
                  <i class="bi bi-calendar-check my-auto" id="correct"></i>
            </div>
            <p>Votre évènement a bien été publié dans l’agenda</p>
            <div style="text-align:center;">
                   <a href="<?= base_url() . '\agenda\all' ?>"> <button type="button" class="btn " id="btnstyle">Retour à l'agenda </button></a>
            </div>
        </div>

    </div>
</div>
<style>

    #correct{
       font-size:205px;
       color:#1F97C7;
    }
    p{
       text-align: center;
       font-size:45px;
    }
    #btnstyle{
    color:#FFFFFF; 
    background:#F49A41;
    border-radius: 45px;
    height:50px;
    font-size:30px;
    margin-bottom:50px;
    }
       
</style>
<?php $content = ob_get_clean(); ?>
<?php include_once('template.php'); ?>