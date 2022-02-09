<?php ob_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col" >
         <a href="<?= base_url() . '\agenda\add' ?>"> <button class="btn btn-primary"id="btndate"> Nouvelle Date</button></a>
        </div>
    </div>
</div>
<div class="container bg-light">
    <div class="row">
            <div class="col-5  p-0" >
                <ul class="list-group">
                    <li class="list-group-item">The Lord of the Rings <a href="#"><i class="bi bi-arrow-right"></i></a></li>
                    <li class="list-group-item">One Hundred Years of Solitude <a href="#"><i class="bi bi-arrow-right"></i></a></li>
                    <li class="list-group-item">Brave New World <a href="#"><i class="bi bi-arrow-right"></i></a></li>
                    <li class="list-group-item">Gone with the Wind<a href="#"><i class="bi bi-arrow-right"></i></a></li>
                </ul>

            </div>
            <div class="col-6 p-3 " >
                <div class="container">
                    <div class="row">
                        <div class="col-12 p-2">
                           <img src="<?= base_url('images/concert.png')?>" style="width:100%; border-radius: 20px;">
                        </div>
                        <div class="col-12">
                            <p>Evenement</p>
                        </div>
                        <div class="col-12">
                            <p>resumé</p>
                        </div>
                        <div class="col-12">
                            <p>organisateur</p>
                        </div>
                        <div class="col-12">
                            <p>plus d'infos</p>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-info">Partager l'événement</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<style>
#btndate
{
     background-color:#1F97C7;
     font-size:1rem;
     margin-left:10%;
}

</style>
<?php $content = ob_get_clean(); ?>
<?php include_once('template.php'); ?>