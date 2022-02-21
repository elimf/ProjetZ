<!DOCTYPE html>
<html>
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>CoopEre</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" defer ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>
    <script src="//code.jquery.com/jquery-2.1.4.js"></script>
    
    <script src="<?= base_url()?>\js\UnoDropZone.js" ></script>
    
    <style>
        nav{
            background-color:#FFFFFF;

        }
        #fond
        {
            margin-top:90px;
            width:100%;
            background-color: #F7F7F7;
        }

        .has-search .form-control {
        padding-left: 2rem;
        border-radius:19px;
        width:100%;
        background-color: #F7F7F7;

        }

        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }
            
    </style>
  </head>
  
<body style="background-color: #F7F7F7" >
<nav class="navbar navbar-expand-md navbar-light fixed-top">
    <img
        src="<?= base_url('images/logocoopere.svg')?>"
        alt=""
        style="width: 4%"
    />
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item dropdown"></li>
                        <li class="nav-item"></li>
            </ul>
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-md-6 col-lg-7  ">
                    
                </div>
                <div class=" col-md-3 col-lg-3 ">
                    <form  class="form-group has-search my-auto">
                        <button  type="submit" class="btn form-control-feedback" style="background: transparent">
                            <i class="bi bi-search"></i>
                        </button>
                        <input type="text" name="recherche" class="form-control" placeholder="Recherche" />
                    </form>
                  
                </div>
                <div class="col-md-2 col-lg-0 ">
                    <div class="row justify-content-end" >
                        <div class="col-0 m-0">
                            <button class="btn btn-info mx-1"><i class="bi bi-bell"></i></button>
                        </div>
                        <div class="col-0">
                            <button class="btn mx-1"><i class="bi bi-person-circle"></i></button>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</nav>
<section id="fond">
<?= $content ?>
</section>
</body>
</html>
