<?php
// session_start();
// error_reporting(0); //turn off errors
include_once ("../functions/sanitize.php"); //function to sanitize user input
include_once ("../mod/buffer.php");



if (isset($_POST['firstName'])){
  $f_name = $_POST['firstName'];
  $f_name = escape($f_name);
  $f_name = cleanInput($f_name);

  $l_name = $_POST['lastName'];
  $l_name = escape($l_name);
  $l_name = cleanInput($l_name);

  $email = $_POST['email'];
  $email = escape($email);
  $email = cleanInput($email);

  $phone= $_POST['phone'];
  $phone = escape($phone);
  $phone = cleanInput($phone);
  $phone = substr($phone, 1); //remove the 'zero' from the phone number entered
  $phone = '%2B234'.$phone; //add '+234' to number;


  $password= $_POST['password'];
  $password = escape($password);
  $password = cleanInput($password);

  $formStep = $_POST['step1'];

  $city = $_POST['city'];
  $refer_code = '';

    if($refer_code == ""){
    $refer_code = "";
    }
    else
    {
      // $refer_code = $refer_code;
      $refer_code= $_POST['promo_code'];
      $refer_code = escape($refer_code);
      $refer_code = cleanInput($refer_code);
    }

// Make request to API
include_once('apiRequests/apiRegisterForm1.php');

} //end of IF condition
?>
