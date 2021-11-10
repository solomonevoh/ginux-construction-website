<?php
$CurrentYear =date("Y", time());
?>

<div class="container text-white footer mb-0">
  <div class="row">

    <div class="col-lg-6 col-md-12 col-sm-12 px-5">
      <div class="row">

        <div class="col-lg-12 mt-3 social">
          <span class="lead px-4 social__head">
            Get in Touch</span>
          <div class="social social__icons col-lg-9 col-md-12 col-sm-12 mt-2 ">
            <span class=""><a href="#"><i class="fa fa-twitter fa-twitter--twitter"></i></a>
              <p class="social__icons social__icons--name social__icons--name-1">Twitter</p>
            </span>
            <span class=""><a href="https://www.facebook.com/ginuxconstruction" target="_blank"><i class="fa fa-facebook fa-facebook--facebook"></i></a>
              <p class="social__icons social__icons--name social__icons--name-2">Facebook</p>
            </span>
            <span class=""><a href="#"><i class="fa fa-youtube fa-youtube--youtube"></i></a>
              <p class="social__icons social__icons--name social__icons--name-3">Youtube</p>
            </span>
            <span class=""><a href="https://instagram.com/ginuxreno" target="_blank"><i class="fa fa-instagram fa-instagram--instagram"></i></a>
              <p class="social__icons social__icons--name social__icons--name-4">Instagram</p>
            </span>
            <span class=""><a href="#"><i class="fa fa-google-plus fa-google-plus--google-plus"></i></a>
              <p class="social__icons social__icons--name social__icons--name-5">Google+</p>
            </span>
          </div>

          <div class="col-lg-12 py-3 footer__text mt-3">
            <p class="mt-3">We believe your search for quality service will end here.</p>
          </div>

          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
              <div class="col-12 mt-1">
                <span class="footer__text">info@ginux.ca</span>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 mb-5">
              <div class="col-12">
                <span class="footer__text">+14377722214</span>
              </div>
            </div>
          </div>
        </div>

      </div>




    </div>

    <!-- <div class="col-lg-3 col-md-5 col-sm-12 pt-5 footer__text"></div> -->

    <div class="col-lg-6 col-md-12 col-sm-12 py-0  px-4 footer__legal">
      <div class="row">

        <div class="col-12 mt-3">
          <div class="row justify-content-center">
            <div class="col-lg-12 mt-5 mr-5 mb-3 footer__img-box">
              <img srcset="img/logo-1x.png 300w, img/logo-2x.png 1000w" sizes="(max-width: 900px) 35vw, (max-width: 600px) 16vw, 307px" alt="Ginux logo" src="img/logo-2x.png">
            </div>
          </div>

          <div class="container mb-5">
            <div class="row">
              <div class="col-12">
                <div class="col-lg-12 quickLinks">
                  <span class="px-4 lead"><a href="index.php">Home</a></span>
                  <span class="px-4 lead"><a href="about.php">About us</a></span>
                  <span class="px-4 lead"><a href="services.php">Services</a></span>
                  <span class="px-4 lead"><a href="contact.php">Contact</a></span>
                </div>
              </div>
              <div class="col-12">
                <div class="col-lg-12 py-1 footer__text mb-3">
                  <p class="footer__copy"> &copy; <?php echo $CurrentYear ?> Ginux Construction & Renovations </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

</body>

</html>
<?php //}

require APPROOT . '/views/scripts.php';
  echoScript(array(['js' => ['main', 'popper', 'bootstrap', 'util']]));
?>
