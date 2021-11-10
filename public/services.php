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
if (isset($_POST['submit-quote'])) {
    if (isset($_POST['name']) || $_POST['email']) {
        $request->getFormData('submit-quote');
        $register->runValidation($request->formData());
        if ($register->runSubmit() == "") {
            $request->sendQuote($register->postfields());
            //submit if succesful validated
        }
    }
}
require APPROOT . '/views/header.php';
?>
<div class="container-fluid" id="mainContainer">

<!--head section -->

  <!--Service One -->
  <div class="container-fluid justify-content-end mt-5 py-5 px-0 text-left service__col">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <h1 class="heading-secondary sm-mt-3">BUILDING DESIGN & CONSTRUCTION</h1>
          <p class="heading_sub text-uppercase pt-3 text-left">We got you covered</p>
           <div class="col-12 m-0 p-0">
            <div class="row">
              <div class="text col-lg-6 col-sm-12 mb-3">
                We deliver a high level of expertise in building and designing of residential and commercial projects across the GTA.
                <br><br>
                Due to our in depth practical usage of the ONTARIO BUILDING CODE, our drawings
                and designs are promptly approved by the municipal govt authority responsible
                for the region where the   project is sited.
              </div>
              <div class="text col-lg-6 col-sm-12">
                Every stage of our construction is inspected by the municipal government responsible for monetary.
                <br>
                Appropriate permits are obtained at every stage of construction.
              </div>
            </div>
          </div>
          <div class="row px-2 py-3 sm-ml-0 sm-mtb-1 md-ml-0">
          <a href="#popup" class="btns btn-alt"><span class="">Get Quote</span></a>
          </div>
        </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-12 mb-1">
                <img srcset="img/building-construction-sm.jpg 300w, img/building-construction.jpg 1000w"
                sizes="(max-width: 900px) 40vw, (max-width: 600px) 40vw, 500px"
                alt="photo-1"
                class="img-fluid"
                src="img/building-construction.jpg" class="img-fluid">
              </div>
              <div class="col-sm-6 col-md-6 col-lg-12">
                <img srcset="img/design-sm.jpg 300w, img/design.jpg 1000w"
                sizes="(max-width: 900px) 40vw, (max-width: 600px) 40vw, 500px"
                alt="photo-1"
                class="img-fluid"
                src="img/design.jpg" class="img-fluid">
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>



 <!--Service Two -->
 <div class="container-flex mt-0 py-5 text-left service__col">
   <div class="container py-2">
     <div class="row">

         <div class="col">
           <h1 class="heading-secondary sm-mt-3">KITCHEN Design & CONSTRUCTION</h1>
           <p class=" heading_sub text-uppercase pt-3 text-left">Go beyond just a cooking area</p>
            <div class="col-12 m-0 p-0">
             <div class="row">
               <div class="text col-lg-6 col-sm-12  mb-3">
                 A kitchen being one of the most important compartments in a house makes us dedicate reasonable time and energy in creating final designs that accommodate our customers' needs.
              </div>
               <div class="text col-lg-6 col-sm-12">
                If you are looking to design or revamp a kitchen that truly reflects class and style,
                then we sure will fit the requirents.</div>
             </div>
           </div>
           <div class="row px-2 py-3 sm-ml-0 sm-mtb-1 md-ml-0">
             <a href="#popup" class="btns btn-alt"><span class="p-3">Get Quote</span></a>
           </div>
         </div>
         <div class="col-lg-4 col-md-12 col-sm-12">
           <div class = "col">
             <div class="row">

                 <div class="col-sm-6 col-md-6 col-lg-12 mb-1">
                   <img srcset="img/1ccb6bde3631bfb382164315442359a3-sm.jpg 300w, img/1ccb6bde3631bfb382164315442359a3.jpg 1000w"
                   sizes="(max-width: 900px) 40vw, (max-width: 600px) 40vw, 350px"
                   alt="Modern Kitchen"
                   class="img-fluid"
                   src="img/1ccb6bde3631bfb382164315442359a3.jpg">
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-12">
                   <img srcset="img/modern_kitchen-sm.jpg 300w, img/modern_kitchen.jpg 1000w"
                   sizes="(max-width: 900px) 40vw, (max-width: 600px) 40vw, 350px"
                   alt="Kitchen"
                   class="img-fluid"
                   src="img/modern_kitchen.jpg">
                 </div>
                </div>
            </div>
          </div>
        </div>
     </div>
   </div>

<!-- End of service two -->


<!--Service three -->
<div class="container mt-5 py-5 px-0 text-left service__col">
  <div class="container py-2">
    <div class="row">

        <div class="col">
          <h1 class="heading-secondary sm-mt-3">basement construction & renovation</h1>
          <p class="heading_sub text-uppercase pt-3 text-left">We go all the way with our designs</p>
           <div class="col-12 m-0 p-0">
            <div class="row">
              <div class="text col-lg-6 col-sm-12 mb-3">
                Basements are very important sections of a building. it structurally supports the framework of the building.
                <br><br>
                We specialise in adding that extra touch when renovating or finishing a new basement,while maintaining the structural integrity of the building.
              </div>
              <div class="text col-lg-6 col-sm-12">
              From the start, all major segments such as the <span class="">electrical, plumbing, tiling, dry wall and framing </span> is done great level of accuracy.
              <br><br>
              We ensure client satisfaction by leading them through the whole process.
              <br>
              We use simple to understand project scheduling software, that gives an overall view of what, where and when each activity would be carried out.
              </div>
            </div>
          </div>
          <div class="row px-2 py-3 sm-ml-0 sm-mtb-1 md-ml-0">
          <a href="#popup" class="btns btn-alt"><span class="">Get Quote</span></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="row">

              <div class="col-sm-6 col-md-6 col-lg-12 mb-1">
                <img srcset="img/28aa655811177fd384e98df96b3c3453-sm.jpg 300w, img/28aa655811177fd384e98df96b3c3453.jpg 1000w"
                sizes="(max-width: 900px) 40vw, (max-width: 600px) 40vw, 500px"
                alt="photo-1"
                class="img-fluid"
                src="img/28aa655811177fd384e98df96b3c3453.jpg">
              </div>
              <div class="col-sm-6 col-md-6 col-lg-12">
                <img srcset="img/mike-holmes-frame-a-basement-sm.jpg 300w, img/mike-holmes-frame-a-basement.jpg 1000w"
                sizes="(max-width: 900px) 37vw, (max-width: 600px) 40vw, 500px"
                alt="photo-1"
                class="img-fluid"
                src="img/mike-holmes-frame-a-basement.jpg">
              </div>
            </div>
        </div>
    </div>


    </div>
  </div>
  <!-- End of service three -->

  <!--Service four -->
  <div class="container mt-2 py-5 px-0 text-left service__col">
    <div class="container py-2">
      <div class="row">

          <div class="col">
            <h1 class="heading-secondary">Bathroon Construction & Design</h1>
            <p class="heading_sub text-uppercase pt-3 text-left">Our Designs will fit your home</p>
             <div class="col-12 m-0 p-0">
              <div class="row">
                <div class="text col-lg-6 col-sm-12  mb-3">
                  A beautiful bathroom brings overall beauty and serenity to the interior part of a home.
                  <br>
                  We know how important this is, that’s why we provide beautiful design, renovation and construction of bathrooms that suit our clients' needs.
                </div>
                <div class="text col-lg-6 col-sm-12">
                 Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
               </div>
              </div>
            </div>
            <div class="row px-2 py-3 sm-ml-0 sm-mtb-1 md-ml-0">
              <a href="#popup" class="btns btn-alt"><span class="p-3">Get Quote</span></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class = "col">
              <div class="row">

                  <div class="col-sm-6 col-md-6 col-lg-12 mb-1">
                    <img srcset="img/stylish_bathroom-sm.jpg 300w, img/stylish_bathroom.jpg 1000w"
                    sizes="(max-width: 900px) 40vw, (max-width: 600px) 40vw, 500px"
                    alt="photo-1"
                    class="img-fluid"
                    src="img/stylish_bathroom.jpg" class="img-fluid">
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-12">
                    <img srcset="img/modern_bathroom-sm.jpg 300w, img/modern_bathroom.jpg 1000w"
                    sizes="(max-width: 900px) 40vw, (max-width: 600px) 40vw, 500px"
                    alt="photo-1"
                    class="img-fluid"
                    src="img/modern_bathroom.jpg" class="img-fluid">
                  </div>


                <!-- <div class="col-sm-6 col-md-6 col-lg-12 mb-1"><img src="img/landscape_ideas.jpg" class="img-fluid"></div>
                <div class="col-sm-6 col-md-6 col-lg-12"> <img src="img/shutterstock_671823163-700x525.jpg" class="img-fluid"></div> -->
              </div>
             </div>
           </div>
      </div>


      </div>
    </div>
  <!-- End of service four -->

  <!--Service five -->
  <div class="container mt-2 py-5 px-0 text-left service__col">
    <div class="container py-2">
      <div class="row">

          <div class="col">
            <h1 class="heading-secondary">landscaping & survey</h1>
            <p class="heading_sub text-uppercase pt-3 text-left">Our essence is in the details</p>
             <div class="col-12 m-0 p-0">
              <div class="row">
                <div class="text col-lg-6 col-sm-12  mb-3">
                  Establishing the right bearing and distance of locations in a construction site creates
                  the bedrock for every phase to thrive succefully.

                  <br><br>
                  Our survey team ensures your design is well set out on ground, using the latest setting out
                  instrument and industry global best practice
                </div>
                <div class="text col-lg-6 col-sm-12">
                  Knowing that you like to give a lot of attention to maintaining a beautiful lawn, makes us to provide good quality landscaping to your home .
                  <br><br>
                  Our landscaping team provide good quality services that brings completing of beauty to the overall property view.

                </div>
              </div>
            </div>
            <div class="row px-2 py-3 sm-ml-0 sm-mtb-1 md-ml-0">
              <a href="#popup" class="btns btn-alt"><span class="p-3">Get Quote</span></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class = "col">
              <div class="row">

                  <div class="col-sm-6 col-md-6 col-lg-12 mb-1">
                    <img srcset="img/landscape_ideas-sm.jpg 300w, img/landscape_ideas.jpg 1000w"
                    sizes="(max-width: 900px) 40vw, (max-width: 600px) 40vw, 500px"
                    alt="photo-1"
                    class="img-fluid"
                    src="img/landscape_ideas.jpg" class="img-fluid">
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-12">
                    <img srcset="img/shutterstock_671823163-700x525-sm.jpg 300w, img/shutterstock_671823163-700x525.jpg 1000w"
                    sizes="(max-width: 900px) 40vw, (max-width: 600px) 40vw, 500px"
                    alt="photo-1"
                    class="img-fluid"
                    src="img/shutterstock_671823163-700x525.jpg" class="img-fluid">
                  </div>


                <!-- <div class="col-sm-6 col-md-6 col-lg-12 mb-1"><img src="img/landscape_ideas.jpg" class="img-fluid"></div>
                <div class="col-sm-6 col-md-6 col-lg-12"> <img src="img/shutterstock_671823163-700x525.jpg" class="img-fluid"></div> -->
              </div>
             </div>
           </div>
      </div>


      </div>
    </div>
    <!-- End of service five -->
<?php require APPROOT . '/views/footer.php'; ?>
</div>

<div class="popup" id="popup">
  <div class="popup__content">
    <div class="spinner">
      <span class="loader"></span>
    </div>
    <p class="popup__content--text">
      Please fill in your details and we will be in contact.
    </p>

    <span class="text-black ml-3 mb-4" id="successMsg"></span>
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
<script type="text/javascript" src="js/script.js"></script>
