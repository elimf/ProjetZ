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
   <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"defer ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>
    <script src="//code.jquery.com/jquery-2.1.4.js"></script>
    <link rel="stylesheet" href="<?= base_url()?>\css\UnoDropZone.css">
    <script src="<?= base_url()?>\js\UnoDropZone.js" ></script>
    

  </head>
  <style>
      nav{
          background-color:#FFFFFF;

      }
      #fond
      {
         margin-top:65px;
         background-color: #F7F7F7;
         width:100%;

      }

    .has-search .form-control {
        padding-left: 3rem;
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
<body >
<header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <a class="navbar-brand text-dark" href="#">CoopEre</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    
                </li>
                <li class="nav-item">
                    
                </li>
                <li class="nav-item">
                    
                </li>
                </ul>
                <form class="form-group has-search my-auto">
                <button class="btn  form-control-feedback" style="background:transparent;" ><i class="bi bi-search "></i></button>
                <input type="text" class="form-control" placeholder="Recherche">
                </form>

                <button class="btn btn-info mx-1"><i class="bi bi-bell"></i></button>
                <button class="btn mx-1"><i class="bi bi-person-circle"></i></button>
            </div>
        </nav>
</header>
  <section id="fond">
<?= $content ?>
</section>
</body>
</html>
