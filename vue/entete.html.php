<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link href="btstrp/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="btstrp/assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="btstrp/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title><?php echo $titre ?></title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/cgu.css");
            @import url("css/corps.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    <body>
      <?php /*if(!isset($_SESSION)) {*/ ?>
           <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
           <div id="navbar-text">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav navbar-center">
                    <li class="nav-item"><a class="nav-link" href="./?action=accueil"><i class="fa fa-home"></i> Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="./?action=liste"><i class="fa fa-list"></i> Liste</a></li>
                    <li class="nav-item"><a class="nav-link" href="./?action=connexion"><i class="fa fa-user"></i> Utilisateur</a></li>
                 </ul>
               </div>
            </div>
            </nav>
         <?php /*}*/ ?>
    <div id="corps">
