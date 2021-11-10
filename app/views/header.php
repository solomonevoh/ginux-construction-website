<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo URLROOT; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/css/jquery-ui.css" rel="stylesheet"/>
    <link href="<?php echo URLROOT; ?>/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo URLROOT; ?>/css/animate.css" rel="stylesheet"/>
    <title>Ginux Construction & Renovations</title>
</head>
<body>

  <?php
  function active($currect_page)
  {
      $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
      $url = end($url_array);
      if ($currect_page == $url) {
          echo 'active'; //class name in css
      }
  }
?>

</php>

  <nav class="page-scroll navbar navbar-expand-lg fixed-top navbar-light bg-faded myNav mb-5">
    <div class="container-flex brandHead py-2">
      <div class="col">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-7 col-sm-7 brand brand__name--logo">
            <img srcset="img/Ginux.svg 80w, img/Ginux.svg 800w"
            sizes="(max-width: 900px) 10vw, (max-width: 600px) 20vw, 120px"
            class="img-fluid"
            alt="Ginux logo"
            src="img/Ginux.svg">
          </div>
          <div class="col-lg-7 col-md-7 col-sm-7 brand brand__name--tag">
            <img srcset="img/Ginux_head-tag.svg 300w, img/Ginux_head-tag.svg 1000w"
            sizes="(max-width: 900px) 35vw, (max-width: 600px) 20vw, 307px"
            class="img-fluid"
            alt="Ginux logo"
            src="img/Ginux_head-tag.svg">
          </div>
       </div>
      </div>
    </div>

    <div class="container" style="z-index: 1060;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse mainNav" id="navbarCollapse">
       <ul class="navbar-nav justify-content-center col-12">
           <li class="<?php active('index.php');?> nav-item px-5 py-4">
             <a href="index.php" class="nav-link">Home</a>
           </li>
           <li class="<?php active('about.php');?> nav-item px-5 py-4">
             <a href="about.php" class="nav-link">About Us</a>
           </li>
           <div class="col-md-4 col-sm-12 col-lg-4 logo_blank">
          </div>
          <li class="<?php active('services.php');?> nav-item px-5 py-4">
            <a href="services.php" class="nav-link">Services</a>
          </li>
           <li class="<?php active('contact.php');?> nav-item px-5 py-4">
             <a href="contact.php" class="nav-link">Contact Us</a>
           </li>
         </ul>

      </div>
     </div>
    </nav>
