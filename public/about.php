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
  <div class="container-fluid" id="mainContainer">

    <!--head section -->

    <!--top section -->
    <div class="container-fluid justify-content-end mt-5 py-5  text-left">
      <div class="container py-5 about__main--content">
        <div class="row">

          <div class="image__grid">
            <div class="image-grid image-grid__card">
              <img src="img/main.jpg" alt="Site Workers" class="image-grid image-grid__image">
              <img src="img/pexels-photo-544966.jpg" alt="Construction Worker" class="image-grid image-grid__image">
              <img src="img/pexels-photo-544965.jpeg" alt="Man at work" class="image-grid image-grid__image">
              <img src="img/modern-design.jpg" alt="Modern Building" class="image-grid image-grid__image">
            </div>
          </div>

          <div class="about__board">
            <div class="about__board about__board--history">
              <img src="img/photo-1581783898377-1c85bf937427.jpg" alt="image" class="about__board--image">
            </div>
            <div class="about__board--text">
              <div class="heading_sub text-muted text-left text-uppercase">How we started</div>
              <div class="heading-secondary mb-3 about-heading">IT TOOK More than a few nails and a hammer</div>
              <p class="mb-5 text">Ginux Construction started as a service based contractor rendering single and combination of construction services like dry walling, painting, plumbing, framing, finish, carpentry, tiling and electrical, but
                progressed
                to full contracting services due to kind hearted referrals from clients who were satisfied with our services.</p>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit non fermentum et tortor est dui per rutrum at, dis consequat proin condimentum curae curabitur a vehicula nisi lobortis augue aliquet mus interdum. Platea phasellus lacus proin cursus arcu, condimentum non posuere ultrices, fusce dictumst vehicula lacinia. Luctus morbi ullamcorper tortor diam congue pharetra class neque venenatis facilisi id taciti, natoque mollis nisi a per tempor platea nisl vitae risus ac.</p> -->

              <!-- <div class="h4 text-muted">Who we are</div> -->
              <div class="mb-5 about__intro-2">
                <div class="heading_sub text-muted text-left text-uppercase">Who are we?</div>
                <div class="heading-secondary mb-3 about-heading">PARDON OUR MANNERS</div>
                <p class="text">Ginux Construction and Renovation services is a toronto based number one source for quality services in building design, kitchen and bath construction and renovation, basement completion, landscaping and survey.
                  We're dedicated to giving you the very best of civil construction services, with a focus on client satisfaction ,quality assurance and control<p>
                    <!-- <img src="img/photo-1581783898377-1c85bf937427.jpg" alt="" class="about__board--image-2"> -->
              </div>
            </div>

          </div>
        </div>

        <!-- Mid section -->
        <div class="about__special">
          <div class="container heading_about mb-5 mt-5 about-strategy">
            <div class="about__special--strategy col-12 lead text-center">
              <div class="heading_sub text-uppercase">Our Strategy</div>
              <p class="heading-secondary">Doing it the best way the first time</p>
            </div>
          </div>


          <!-- Vision -->
          <div class="vision__mission">
            <div class="container-flex mb-5 testimony-main">
              <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                  <!-- Vision -->
                  <div class="container text-center py-1 mt-5">
                    <div class="row company-image">
                      <div class=" mb-5">
                        <img src="img/vision-telescope.svg" class="company-image--vision" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class=" col-lg-7 col-md-7 col-sm-12">
                  <!-- Vision Image -->
                  <div class="container-flex text-center py-1 mt-5">
                    <div class="row justify-content-center">
                      <div class="col-12 display-3 testimony mb-5 text-left">
                        <div class="heading_sub mb-2 text-uppercase">OUR VISION</div>
                        <div class="company__text text text-left">Delivering qualitative, world class, environmentally friendly infrastructure projects ahead of schedule.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Mission -->
            <div class="container-flex mb-5 testimony-main">
              <div class="row mission">
                <div class=" col-lg-7 col-md-7 col-sm-12">
                  <!-- Mission -->
                  <div class="container-flex py-1 mt-4">
                    <div class="col-12 display-3 testimony mb-5 text-left">
                      <div class="heading_sub mb-2  text-left text-uppercase">OUR Mission</div>
                      <div class="company__text text text-left">To become one of the most reliable value focused infrastructure service delivery company, driven by outstanding team of industry professionals which
                        <br /> goes the extra mile in client satisfaction.</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                  <!-- Mission Image -->
                  <div class="container py-1 mt-2 mb-5">
                    <div class="row company-image">
                      <div class=" mb-5">
                        <img src="img/focus-target.svg" class="company-image--mission" />
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
    <?php require APPROOT . '/views/footer.php'; ?>
    <!-- End of main container -->
  </div>
</body>

</html>
