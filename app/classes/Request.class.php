<?php
  class Request
  {
      public $err = null;
      public static $_postStatus = [];
      protected static $_endpoint = null;
      protected $_driverToken;
      protected $_postfields = [];
      protected $formData;
      protected $fieldString;
      protected static $_isAjax = false;
      protected const ERROR_MESSAGES = [
      "Names" => [
                     'required'   => "Name is required",
                     'name'       => "Please enter your Name(s)",
                     'fullname'   => "Please enter full name. <i>*  Abbreviations are not allowed",
                     'noNumber'   => "You cannot use numbers as names. <span class='small'>",
                     'noChar'     => "Names cannot contain numbers or special Characters",
                     'noSpace'    => "Names cannot contain spaces",

                    ],

      "Email" =>    [

                      'required' => "Email is required",
                      'valid'    => "Please enter a valid email address <br>Make sure there are no empty spaces"

                    ],

        "Phone" => [

                      'required'  => "Please enter phone number",
                      'valid'     => "Enter a valid mobile number. No spaces",
                      'numbers'   => "We only accept numbers as phone numbers",
                      'short'     => "Phone number should be minimum of 11 digits",

                    ],

      "dropdown" => [

                      'gender'    =>  '* Select Gender',
                      'state'     =>  '* Select State of Residence',
                      'category'  =>  '* Select Subscription Category',
                    ],

      "login"  => [
                  'loginError'      =>  'Wrong Login Credentials',
                  'requiredError'   =>  'Please Enter Your Login Details',
                  'requiredPassword' =>  'Enter Password',
                  'requiredUsername' =>  'Enter your Username',
                  ],


      "location" => [
                      'address' => "Your residence or business address is required",
                      'city'    => "Please Enter city",
                      'state'   => "Select State of Residence",
                    ],

      "category" => [
                      'message'  => "Select service from list",
                    ],
      "message" => [
                      'message'  => "Please enter your messages...",
                    ],

      "referrer" => [
                      'message'  => "Please Select one from the above",
                    ],

      "server" => [

      'notAvailable' => "We are currently having problems connecting to the server. <br />Please try again later",
      'success' => "",
      'failure' => "Something went wrong while processing this form"
        ],
    ];
      protected static $_error = [];
      protected static $_message = false;
      protected static $_contactForm = false;
      protected static $_data = [];
      private static $_instance = null;
      private $_loginData;
      private $_isLoggedIn;
      private $_db;




      public function __construct($user = null)
      {
          if (!$user) {
              if (Session::exists('username')) {
                  $user = Session::get('username');
                  if ($this->find($user)) {
                      $this->_isLoggedIn = true;
                      Session::put('isLoggedIn', true);
                  } else {
                      //Logout
                  }
              }
          } else {
              $this->find($user);
          }
      }


      public function init_session()
      {
          session_start();
      }


      public static function RequestInstance()
      {
          if (!isset(self::$_instance)) {
              self::$_instance = new Request();
              return self::$_instance;
          }
      }

      public static function setError($index)
      {
          self::$_error = $index;
          return self::$_error;
      }



      public function getError($index)
      {
          if (isset(self::$_error)) {
              if (empty(self::$_error)) {
                  $error = "";
              } else {
                  foreach (self::$_error as $key=>$errors) {
                      if ($index == $key) {
                          echo $errors;
                          Request::setError(self::$_error);
                          return self::$_error;
                      }//end of search for index key
                  }
                  //}
              }
          }//end of isset
      }

      public static function getMessage()
      {
          return self::$_message;
      }


      public function displayMessage()
      {
          if (isset(self::$_message)) {
              if (empty(self::$_message)) {
                  $_message = "";
              } else {
                  Request::setMessage(self::$_message);
                  return true;
              }//end of search for index key
          }
          //}
      }



      public function getFormData($postBtn)
      {
          //Run if submit was clicked
          $json = file_get_contents('php://input');

          // Converts it into a PHP object
          $data = json_decode($json);

          if (isset($data->$postBtn)) {
              $this->_postfields = $data;
              return $this->_postfields;
          } elseif (isset($_POST[$postBtn])) {
              $this->_postfields = $_POST;
              return $this->_postfields;
          } else {
              return false;
          }
      }

      public function AjaxEncodeError($array)
      {
          if (self::$_isAjax) {
              echo json_encode($array);
              return true;
          }
      }

      public function sendQuote($postFields)
      {
          if (!isset($postFields)) {
              return false;
          } else {
              $this->postQuote($postFields);
          }
      }

      public function sendMessage($postFields)
      {
          if (!isset($postFields)) {
              return false;
          } else {
              $this->postMessage($postFields);
          }
      }

      public function formData()
      {
          return $this->_postfields;
      }


      public static function formatPhone($phone)
      {
          $phone = substr($phone, 1); //remove the 'zero' from the phone number entered
          $phone = '+234'.$phone; //add '+234' to number;
          return $phone;
      }

      public static function encodePhone($phone)
      {
          $phone = static::formatPhone($phone); //remove the 'zero' and add '+234' to the phone number entered
          //$phone = str_replace('%2B', '+', $phone); //add '+234' to number;
          return $phone;
      }


      private function postQuote($data)
      {
          $this->formData = $data;
          //variables from sent parameter
          $email = $data['email'];
          $name = $data['names'];
          $service = $data['service'];
          $date = new DateTime();
          $date = $date->format('M j, Y');
          //send quote to ginux email address
          //Create headers.
          $headers = "From: $email";
          $this->sendMail('support@ginux.ca', "Request for $service Quote", "$name requested a quote for $service on $date", $headers, 70, "\r\n");

          //Send client email notification
          $subject = "Request for $service Quote received";
          //Create headers.
          $headers = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          $from = 'Ginux info@ginux.ca';
          $ginuxEmail = 'info@ginux.ca';

          $headers .= 'From: '.$from."\r\n".
          'Reply-To: '.$ginuxEmail."\r\n";

          $message = '<html><body>';
          $message .= "<h3 style='font-size:18px;'>Hi $name!</h3>";
          $message .= "We have received your request for our quote on $service. <br />
          We appreciate your interest in our services. Someone will be in touch very soon.";
          $message .= "<br />Thanks</i>";
          $message .= "<h4><i>Ginux Construction and Renovations</i></h4>";
          $message .= '</body></html>';

          $this->sendMail($email, $subject, $message, $headers);
      }

      private function postMessage($data)
      {
          self::$_contactForm = true;
          $this->formData = $data;
          //variables from sent parameter
          $email = $data['email'];
          $name = $data['names'];
          $phone = $data['phone'];
          $message = $data['message'];
          $date = new DateTime();
          $date = $date->format('M j, Y');
          //send quote to ginux email address
          //Create headers.
          $headers = "From: $email";
          $this->sendMail('support@ginux.ca', "$name - From Ginux Contact Form", "$message \n Contact Phone Number: $phone", $headers, 70, "\r\n");
      }

      private function sendMail($email, $title, $mess, $headers)
      {
          $email = filter_var($email, FILTER_VALIDATE_EMAIL);
          if ($email) {
              // The message
              $message = "Line 1\r\nLine 2\r\nLine 3";

              // In case any of our lines are larger than 70 characters, we should use wordwrap()
              $message = wordwrap($mess, 70, "\r\n");


              // Send mail
              if (mail($email, $title, $message, $headers)) {
                  //create a more generic and robust feedback
                  //Display feedback
                  $name = substr($this->formData['names'], 0, strpos($this->formData['names'], ' '));
                  $service = $this->formData['service'];
                  self::$_message = true;

                  //If the mail was sent from the contact form
                  if (self::$_contactForm) {
                      $feedbackMsg = "Thanks $name for contacting us,
                    <br />We will be in touch very soon";

                      self::$_error['success'] = $feedbackMsg;
                  } else {
                      $feedbackMsg = "Thanks $name,
                  <br />We have received your request for our quote on $service.
                  We will be in touch very soon";

                      self::$_error['success'] = $feedbackMsg;
                  }

                  //Ajax Response
                  if ($this->AjaxEncodeError(['successResponse' => $feedbackMsg])) {
                      return;
                  }
              } else {
                  self::$_error['feedback'] = 'Sorry, an error occured. Email not sent.';

                  if ($this->AjaxEncodeError(['feedback' => 'Sorry, an error occured. Email not sent.'])) {
                      return;
                  }
              }
          } else {
              self::$_error['feedback'] = 'Sorry, an error occured. Email not sent.';
              if ($this->AjaxEncodeError(['feedback' => 'Sorry, an error occured. Email not sent.'])) {
                  return;
              }
          }
      }
  }
