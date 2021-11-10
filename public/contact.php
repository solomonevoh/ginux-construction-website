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

  //Contact Form Processing

  $json = file_get_contents('php://input');

  // Converts it into a PHP object
  $data = json_decode($json);

  if (isset($_POST['send_contact']) || !empty($data)) {
      if (isset($_POST['name']) || isset($_POST['email']) || isset($data->name) || isset($data->email)) {
          $request->getFormData('send_contact');
          $register->runValidation($request->formData());
          if ($register->runSubmit() == "") {
              $request->sendMessage($register->postfields());
              //submit if succesful validated
          }
      }
  }
  require APPROOT . '/views/header.php';
?>
  <div class="container-flex" id="mainContainer">
    <div class="row contact__form-container">
      <div class="col-lg-5 col-md-5 col-sm-12 contact__form-container--form">
        <span class="text-black ml-3 mb-4" id="successMsg"><?php $register->getError('success');?></span>
        <div class="spinner">
          <span class="loader"></span>
        </div>
        <div class="contact-form-wrapper">
        <form action="" method="POST" class="form">
          <div class="form__group">
            <span class="text-danger ml-3 mb-4" id="feedbackMsg"><?php $register->getError('feedback'); ?></span>
            <span class="text-danger mb-4" id="name_error"><?php $register->getError('name');?></span>
            <input type="text" class="form__input" placeholder="Enter Name" id="name" name="name" value="<?php Sticky::stickyInput('name'); ?>">
            <label for="name" class="form__label">Name</label>
          </div>

          <div class="form__group">
            <span class="text-danger mb-4" id="email_error"><?php $register->getError('email');?></span>
            <input type="email" class="form__input" placeholder="Email Address" id="email" name="email" value="<?php Sticky::stickyInput('email'); ?>">
            <label for="email" class="form__label">Email address</label>
          </div>

          <div class="form__group">
            <span class="small">Enter your phone number. This is optional</span><br />
            <span class="text-danger mb-4" id="phone_error"><?php $register->getError('phone');?></span>
            <input type="phone" class="form__input" placeholder="(+1) 234-5678" id="phone" name="phone" maxlength="12" value="<?php Sticky::stickyInput('phone'); ?>">
            <label for="phone" class="form__label">Phone</label>
          </div>
          <div class="form__group form__group--textarea">
            <span class="text-danger mb-4" id="message_error"><?php $register->getError('message');?></span>
            <label for="message" class="form__label">Message</label>
            <textarea class="form__input form__group--textarea" name="message" id="message" rows="5"><?php Sticky::stickyInput('message'); ?></textarea>
          </div>

          <div class="form__group">
            <button class="btns btn-alt" name="send_contact" id="send_contact">Submit</button>
          </div>
        </form>
       </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 contact__form-container--right">
        <ul>
          <li class="contact__form-container--address">
            <i class="fa fa-home"></i>
            <span class="text">Phones</span>
            <div class="contact__form-container--text">
              +14377722214
            </div>
          </li>

          <li class="contact__form-container--address">
            <i class="fa fa-phone"></i>
            <span class="text">Office Address</span>
            <div class="contact__form-container--text">
            3, Roundtree Road,
            Apt 506,
            <br/> Ontario, Canada
          </div>
          </li>

          <li class="contact__form-container--address">
            <i class="fa fa-clock-o"></i>
            <span class="text">Opening Hours</span>
            <div class="contact__form-container--text">
              Monday - Friday: 9:00AM - 5:00PM
              <br/>Saturday: 10:00AM - 2:00PM
              <br/>Sunday: By Appointment only
            </div>
          </li>
        </ul>
      </div>
    </div>
    <?php require APPROOT . '/views/footer.php'; ?>
    <!-- End of main container -->

  </div>



</body>

</html>
