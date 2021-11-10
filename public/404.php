<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link rel="icon" href="img/favicon-32x32.png">
</head>

<body>

  <?php
require_once('../app/core/init.php');
require APPROOT . '/views/header.php';
?>

  <div class="container-flex" id="mainContainer">
    <div class="error__page">
      <div class="error__page-content">
        <img src="img/undraw_towing_6yy4.svg" alt="404-image" class="error__page-content--img">
      <div class="error__page-content--404"> 404 </div>
        <div class="error__page-content--main">
          <h2 class="heading-secondary mb-3">PAGE NOT FOUND</h2>
          <p class="text">The page you are requested does not exist.</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
