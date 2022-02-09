<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-12 p-3">
            <h2 style="color:#F49A41;font-size:24px;">Nouvelle date d’évènement</h2>
            <hr style="border: 1px solid #F49A41;">
        </div>
     <div class="col-12  p-5 "style="background:#FFFFFF;border-radius: 20px;">
        <form>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="inputEmail4">Intitulé*</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Donnez un titre à votre évènement" style="background:#EEEEEE;border-radius: 13px;">
                </div>
                <div class="form-group col-md-6 ">
                <label for="inputPassword4">Photo de couverture*</label>
                    <div class="box border">
                            <div class="js--image-preview"> </div>
                            <div class="upload-options">
                                <label>
                                    <input type="file" class="image-upload" accept="image/*" />
                                </label>
                            </div>
                    </div>

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputAddress">Contenu *</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Que va-t-il se passer lors de votre évènement ? " style="background:#EEEEEE;border-radius: 13px;">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Date*</label>
                    <input type="date" class="form-control" id="inputCity" style="background:#EEEEEE;border-radius: 13px;">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Lieu*</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="Où se passe l’évènement ?" style="background:#EEEEEE;border-radius: 13px;">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Heure*</label>
                    <input type="time" class="form-control" id="inputCity" style="background:#EEEEEE;border-radius: 13px;">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Jauge</label>
                    <input type="number" class="form-control" id="inputZip" placeholder="Nb de personne max accueillies" style="background:#EEEEEE;border-radius: 13px;">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Organisateur*</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Est-ce vous ou un externe de votre réseau ? " style="background:#EEEEEE;border-radius: 13px;">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Contact*</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="Email ou téléphone de l’organisateur"style="background:#EEEEEE;border-radius: 13px;" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Plus d'infos</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Site internet de l’organisateur ou de l’évènement, autre, ..." style="background:#EEEEEE;border-radius: 13px;">
            </div>
            <div class="form-group">
                 <label for="">Pousser l’évènement</label>
                <div class="form-check">
                <input class="form-check-input" style="background:green" type="checkbox" id="gridCheck">
                 <p class="form-check-label" for="gridCheck">
                    Mettre en avant l’évènement sur la page d’accueil de votre réseau
                </p>
                </div>
            </div>
            <div class="form-group "style="margin-left:400px;">
                <a href="<?= base_url() . '\agenda\all' ?>"> <button type="button" class="btn " style="color:#F49A41; background:#FFFFFF;border-radius: 45px;">Retour à l'agenda </button></a>
                 <button type="submit" class="btn "  style="color:#F49A41; background:#FFFFFF;border-radius: 45px; border: 1px solid #F49A41;box-sizing: border-box;">Ajouter à l'agenda</button>
            </div>
        </form>
        </div>
    </div>
</div>
<script>
        function initImageUpload(box) 
    {
        let uploadField = box.querySelector('.image-upload');

        uploadField.addEventListener('change', getFile);

        function getFile(e){
            let file = e.currentTarget.files[0];
            checkType(file);
        }
        
        function previewImage(file){
            let thumb = box.querySelector('.js--image-preview'),
                reader = new FileReader();

            reader.onload = function() {
            thumb.style.backgroundImage = 'url(' + reader.result + ')';
            }
            reader.readAsDataURL(file);
            thumb.className += ' js--no-default';
        }

        function checkType(file){
            let imageType = /image.*/;
            if (!file.type.match(imageType)) {
            throw 'Datei ist kein Bild';
            } else if (!file){
            throw 'Kein Bild gewählt';
            } else {
            previewImage(file);
            }
        }
    
    }

    // initialize box-scope
    var boxes = document.querySelectorAll('.box');

    for (let i = 0; i < boxes.length; i++) {
    let box = boxes[i];
    initDropEffect(box);
    initImageUpload(box);
    }



    /// drop-effect
    function initDropEffect(box){
    let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
    
    // get clickable area for drop effect
    area = box.querySelector('.js--image-preview');
    area.addEventListener('click', fireRipple);
    
    function fireRipple(e){
        area = e.currentTarget
        // create drop
        if(!drop){
        drop = document.createElement('span');
        drop.className = 'drop';
        this.appendChild(drop);
        }
        // reset animate class
        drop.className = 'drop';
        
        // calculate dimensions of area (longest side)
        areaWidth = getComputedStyle(this, null).getPropertyValue("width");
        areaHeight = getComputedStyle(this, null).getPropertyValue("height");
        maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

        // set drop dimensions to fill area
        drop.style.width = maxDistance + 'px';
        drop.style.height = maxDistance + 'px';
        
        // calculate dimensions of drop
        dropWidth = getComputedStyle(this, null).getPropertyValue("width");
        dropHeight = getComputedStyle(this, null).getPropertyValue("height");
        
        // calculate relative coordinates of click
        // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
        x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
        y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
        
        // position drop and animate
        drop.style.top = y + 'px';
        drop.style.left = x + 'px';
        drop.className += ' animate';
        e.stopPropagation();
        
    }
    }

</script>
<style> 
    label{
        color:#1F97C7;
        font-family: Sofia Pro;
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 24px;
    }
    .box {
        display: block;
        width: 600px;
        height: 200px;
        background-color: #EEEEEE;
        border-radius: 20px;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        overflow: hidden;
    }
    .upload-options {
        position: relative;
        height: 30px;
        background-color: transparent ;
        cursor: pointer;
        overflow: hidden;
        text-align: center;
        transition: background-color ease-in-out 150ms;
    }
    .upload-options:hover {
        background-color: #1F97C7;
    }
    .upload-options input {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
    .upload-options label {
        display: flex;
        width: 100%;
        height: 30px;
        cursor: pointer;
        overflow: hidden;
    }
    .upload-options label::after {
        z-index: -1;
    }
    .upload-options label span {
        width: 100%;
    }
    .js--image-preview {
        height: 180px;
        width: 100%;
        position: relative;
        overflow: hidden;
        background-image: url('');
        background-color: none;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        z-index:3;
    }
  
    .js--image-preview::after {
        position: relative;
        z-index: 0;
    }
  
    .js--image-preview.js--no-default::after {
        display: none;
    }
    .animate {
        animation: ripple 0.4s linear;
    }
    @keyframes ripple {
        100% {
            opacity: 0;
            transform: scale(2.5);
        }
    } 
</style>
<?php $content = ob_get_clean(); ?>
<?php include_once('template.php'); ?>