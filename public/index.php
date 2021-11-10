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
$request = new Request();
$register = new Register();
$feedback = "";
//Form Processing

$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);

if (isset($_POST['submit_quote']) || isset($data->submit_quote)) {
    if (isset($_POST['name']) || isset($_POST['email']) || isset($data->name) || isset($data->email)) {
        $request->getFormData('submit_quote');
        $register->runValidation($request->formData());
        if ($register->runSubmit() == "") {
            $request->sendQuote($register->postfields());
            //submit if succesful validated
        }
    }
}
require APPROOT . '/views/header.php';
?>

  <div class="container-flex" id="mainContainer">
    <!--head section -->

    <!--top section -->
    <div class="container justify-content-center header">
      <!-- parallax image -->
        <div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="img/banner.png">
          <div class="heading text-left pt-2">
            <div class="container-flex">
              <div class="col-md-6 col-lg-6 col-sm-6">
                <div class="card w-90">
                  <div class="header__main card-block" id="mainCTA">
                    <div class="header__main--heading" id="callMain">Go beyond the ordinary</div>
                    <p class="">Let's Go with you!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      <div class="section-about">
        <div class="row">
          <div class="col-lg-6 col-md-11 col-sm-12">
            <h2 class="heading-secondary mb-3">modern construction and remodelling</h2>
            <p class="heading_sub text-uppercase text-left">You deserve better</p>
            <p class="text">From stylish kitchen design and remodelling, to cutting edge building designs, to our natural landscapes. </p>
            <p class="text">Are you looking at turning that old basement into something more classy, or do you think your bathroom deserves some tune up?</p>
            <a href="#popup" class="btns btn-alt"><span class="p-3">Get Quote</span></a>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="composition">
              <img srcset="img/Modern-Commercial-Building-Design-1.1539262611.6178-small.jpg 300w, img/Modern-Commercial-Building-Design-1.1539262611.6178.jpg 1000w"
              sizes="(max-width: 900px) 23vw, (max-width: 600px) 27vw, 250px"
              alt="photo-1"
              class="composition__photo composition__photo-p1"
              src="img/Modern-Commercial-Building-Design-1.1539262611.6178.jpg">

              <img srcset="img/modern-bathroom-tiles-ideas-small.jpg 300w, img/modern-bathroom-tiles-ideas.jpg 1000w"
              sizes="(max-width: 900px) 23vw, (max-width: 600px) 97vw, 250px"
              alt="photo-2"
              class="composition__photo composition__photo-p2"
              src="img/modern-bathroom-tiles-ideas.jpg">

              <img srcset="img/landscaping-small.jpg 300w, img/landscaping.jpg 1000w"
              sizes="(max-width: 900px) 23vw, (max-width: 600px) 27vw, 250px"
              alt="photo-3"
              class="composition__photo composition__photo-p3"
              src="img/landscaping.jpg">

              <img srcset="img/basement-interior-design-renovation-house-modern-1068x713-small.jpg 300w, img/basement-interior-design-renovation-house-modern-1068x713.jpg 1000w"
              sizes="(max-width: 900px) 23vw, (max-width: 600px) 27vw, 250px"
              alt="photo-4"
              class="composition__photo composition__photo-p4"
              src="img/basement-interior-design-renovation-house-modern-1068x713.jpg">

              <img srcset="img/kitchen_ref-small.jpg 300w, img/kitchen_ref.jpg 1000w"
              sizes="(max-width: 900px) 23vw, (max-width: 600px) 27vw, 250px"
              alt="photo-5"
              class="composition__photo composition__photo-p5"
              src="img/kitchen_ref.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- testimonial -->
    <div class="container mt-5 mb-5 section__testimony text-center">
      <div class="col section__testimony--heading-secondary heading-secondary text-center mb-5">-Our Clients Say-</div>
      <div class="row">

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="col-lg-12 col-md-12 section__testimony--quote">
              <i class="fa fa-quote-left"></i>
              Apart from their professionalism in implementation and design, Ginux went the extra mile in helping me paint some rooms which weren't part of
              the agreement in scope.<br>
              I recommend them to anybody looking for contractor to add extra value.
              <i class="fa fa-quote-right"></i>
            </div>
            <div class="col-12 section__testimony--name">
              Osagie Igbinosun
              <p>-Burlington, Ontario-</p>
            </div>
            <div class="col-12 section__testimony--photo">
              <img src="img/Osagie Igbinosun.jpg" class="rounded-circle">
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="col-lg-12 col-md-12 section__testimony--quote">
              <i class="fa fa-quote-left"></i>
              Ginux construction and renovation changed the face of my basement from a normal one bedroom to a two bed with two baths.<br>
              One thing that struck me with the Ginux team was the systematic manner they led me through the whole process from inception to completion.

              <i class="fa fa-quote-right"></i>
            </div>
            <div class="col-12 section__testimony--name">
              Seidu idris
              <p>Project Manager, <br>-Dassmass Development-</p>
            </div>
            <div class="col-12 section__testimony--photo">
              <img src="img/Seidu idris.jpg" class="rounded-circle">
            </div>
          </div>

      </div>
    </div>



    <!-- Feature lists -->
    <div class="container">
      <section class="section-feature">
        <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="product-box">
              <div class="product-box__side product-box__side--front">
                <div class="product-box__picture product-box__picture--1">
                  &nbsp;
                </div>
                  <h4 class="product-box__heading">
                  <span class="product-box__heading-span product-box__heading-span--1">BUILDING DESIGN & CONSTRUCTION</span>
                </h4>
                <p class="product-box__text">
                  We deliver a high level of expertise in building and designing of residential and commercial projects
                </p>
              </div>
              <div class="product-box__side product-box__side--back product-box__side--back-1">
                <div class="product-box__cta">
                  <a href="#popup" class="btns btn-orange"><span class="p-3">Get Quote</span></a>
                </div>
              </div>
            </div>
          </div>


        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="product-box">
              <div class="product-box__side product-box__side--front">
                <div class="product-box__picture product-box__picture--2">
                  &nbsp;
                </div>
                  <h4 class="product-box__heading">
                  <span class="product-box__heading-span product-box__heading-span--2">KITCHEN DESIGN & CONSTRUCTION</span>
                </h4>
                <p class="product-box__text">
                    Our designs are compelling, innovative and modern
                </p>
              </div>
              <div class="product-box__side product-box__side--back product-box__side--back-2">
                <div class="product-box__cta">
                  <a href="#popup" class="btns btn-navy"><span class="p-3">Get Quote</span></a>
                </div>
              </div>
            </div>
          </div>

    <!--Product Lists-->
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="product-box">
              <div class="product-box__side product-box__side--front">
                <div class="product-box__picture product-box__picture--3">
                  &nbsp;
                </div>
                  <h4 class="product-box__heading">
                  <span class="product-box__heading-span product-box__heading-span--3">BATH DESIGN & INSTALLATION</span>
                </h4>
                <p class="product-box__text">
                  We provide beautiful design, renovation and construction that suit your needs
                </p>
              </div>
              <div class="product-box__side product-box__side--back product-box__side--back-3">
                <div class="product-box__cta">
                  <a href="#popup" class="btns btn-red"><span class="p-3">Get Quote</span></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="product-box">
              <div class="product-box__side product-box__side--front">
                <div class="product-box__picture product-box__picture--4">
                  &nbsp;
                </div>
                  <h4 class="product-box__heading">
                  <span class="product-box__heading-span product-box__heading-span--4">BASEMENT CONSTRUCTION</span>
                </h4>
                <p class="product-box__text">
                  We can create a masterpiece with your old basement or an exceptional design with a
                  new one.
                </p>
              </div>
              <div class="product-box__side product-box__side--back product-box__side--back-4">
                <div class="product-box__cta">
                  <a href="#popup" class="btns btn-cyan"><span class="p-3">Get Quote</span></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>


    </div>
    <!-- End of main container -->
  </div>
  </div>
  </div>

  <div class="popup" id="popup">
    <div class="popup__content">
      <div class="spinner">
        <span class="loader"></span>
      </div>
      <p class="popup__content--text">
        Please fill in your details and we will be in contact.
      </p>

      <span class="text-black ml-3 mb-4" id="successMsg"><?php $register->getError('feedback'); ?></span>
        <div class="popup__left">
          <form action="" class="form" method="POST">
            <div class="form__group">
              <span class="text-danger ml-3 mb-4" id="feedbackMsg"><?php $register->getError('feedback'); ?></span>
              <label for="name" class="form__label">Full Name <span class="text-danger ml-3 mb-4" id="name_error"><?php $register->getError('name'); ?></span></label>
              <input type="text" class="form__input" placeholder="Full Name" id="name" name="name" value="<?php Sticky::stickyInput('name'); ?>">
            </div>

            <div class="form__group">
              <label for="email" class="form__label">Email address <span class="text-danger ml-3 mb-4" id="email_error"><?php $register->getError('email'); ?></span></label>
              <input type="text" class="form__input" placeholder="Email Address" id="email" name="email" value="<?php Sticky::stickyInput('email'); ?>">
            </div>

            <div class="form__group form__group--select">
              <label for="product__type" class="form__label">Select Service <span class="text-danger ml-3 mb-4" id="service_error"><?php $register->getError('category'); ?></span></label>
             <select class="form__input form__input--select" name="product__type" id="product__type">
              <option value="0" selected>Select Service type</option>
              <option value="Kitchen Design" <?php echo Sticky::stickyDropDown('product__type', 'Kitchen Design'); ?>>Kitchen Design</option>
              <option value="Landscaping" <?php echo Sticky::stickyDropDown('product__type', 'Landscaping'); ?>>Landscaping</option>
              <option value="Bath Installation" <?php echo Sticky::stickyDropDown('product__type', 'Bath Installation'); ?>>Bath Installation</option>
              <option value="Basement Construction" <?php echo Sticky::stickyDropDown('product__type', 'Basement Construction'); ?>>Basement Construction</option>
              <option value="Building Design" <?php echo Sticky::stickyDropDown('product__type', 'Building Design'); ?>>Building Design</option>
              <option value="Survey" <?php echo Sticky::stickyDropDown('product__type', 'Survey'); ?>>Survey</option>
              </select>
            </div>

            <div class="form__group">
              <button class="btns btn-popup" id="submit_quote" name="submit_quote">Submit</button>
            </div>
        </form>
        </div>
      <div class="popup__right">
        <a href="#section-quote" class="popup__close">&times</a>
      </div>
    </div>
  </div>
  <!-- End of quote popup -->
</body>

</html>
<?php require APPROOT . '/views/footer.php'; ?>
