<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        <!-- Bootstrap Components-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom styles for this template -->

        <!-- Styles and links-->
        <link rel="icon" href="hash-ico.png" /><!--icon location for the header of the page(title bar) -->
        <link href="html/css/bootstrap.css"  rel="stylesheet">
        <link href="html/css/style.css"  rel="stylesheet"> 
        <link href="html/css/logo.css"  rel="stylesheet">
        
    <title><?php echo htmlspecialchars($title) ?></title>
  </head>
  <body>
  <body>

    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="text-info"><h4><span class="glyphicon glyphicon-heart-empty "></span></h4></span>
                </button>
        <a class="navbar-brand" href="<?php echo $name_address ?> "><?php echo htmlspecialchars($_SESSION['name']) ?></a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-right navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
            <a href=" "><?php echo htmlspecialchars($picture_name) ?></a>
                    </li>
                   
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>