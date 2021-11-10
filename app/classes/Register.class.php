<?php
      class Register extends Request
      {
          private $_sanitizedFields = [];


          public function sanitizeCheck()
          {
              return $this->_sanitizedFields;
          }

          public function getData()
          {
              return $this->formData;
          }


          public function runSubmit()
          {
              $this->processFormSubmit();
          }

          public function runUpdate()
          {
              $this->processProdUpdate();
          }


          public function runValidation($data)
          {
              $this->validateData($data);
          }

          public function SessionLog()
          {
              if (static::$_postStatus) {
                  Session::put('ID', static::$_postStatus['userID']);
                  Session::put('email', static::$_postStatus['email']);
                  Session::put('name', static::$_postStatus['firstName'].' '.static::$_postStatus['lastName']);
                  Session::put('phone', static::$_postStatus['phone']);
                  Session::put('address', static::$_postStatus['address']);
                  Session::put('subscription', static::$_postStatus['subType']);
                  echo 'Session Created';
              } else {
                  return false;
              }
          }




          public function postfields()
          {
              return $this->fieldString;
          }


          private function validateData($data)
          {
              if (isset($data->name)  || isset($data['name'])) { //check if submit button was clicked.
                  if (gettype($data) == 'object') {
                      $names            =  $data->name;
                      $email            =  $data->email;
                      $category         =  $data->category ?? "";
                      $submitBtn        =  $data->submit_quote ?? "";
                      $send_contact     =  $data->send_contact ?? "";
                      $message          =  $data->message ?? "";
                      $phone            =  $data->phone ?? "";
                  } else {
                      //grab data from form
                      $names            = $data["name"];
                      $email            = $data["email"];
                      $category         = $data["product__type"] ?? "";
                      $message          = $data["message"] ?? "";
                      $phone            = $data["phone"] ?? "";
                  }

                  //sanitize the user input
                  $names        = Sanitize::sanitizeNames($names);
                  $email        = Sanitize::sanitizeEmail($email);
                  $category     = Sanitize::sanitizeData($category);
                  $message      = Sanitize::sanitizeData($message);

                  if (!empty($submitBtn)) {
                      self::$_isAjax = true;
                  } elseif (!empty($send_contact)) {
                      self::$_isAjax = true;
                  }


                  //VALIDATION
                  //validate name
                  if ($names == '') {
                      self::$_error['name'] = self::ERROR_MESSAGES['Names']['name'];
                      return false;
                  } elseif (is_numeric($names)) {
                      self::$_error['name'] = self::ERROR_MESSAGES['Names']['noNumber'];
                      return false;
                  } elseif (preg_match('/[^A-Za-z\s\-]+/', $names)) {
                      self::$_error['name'] =  self::ERROR_MESSAGES['Names']['noChar'];
                      return false;
                  }

                  //validate Email
                  elseif ($email == '') {
                      self::$_error['email'] =  self::ERROR_MESSAGES['Email']['required'];
                      return false;
                  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      self::$_error['email'] =  self::ERROR_MESSAGES['Email']['valid'];
                      return false;
                  }


                  //validate Category
                  elseif (isset($category) && $category == '0') {
                      self::$_error['category'] =  self::ERROR_MESSAGES['category']['message'];
                      return false;
                  }
                  //Validate phone
                  elseif (!empty($phone) && strlen($phone) < 11) {
                      echo 200;
                      self::$_error['phone'] =  self::ERROR_MESSAGES['Phone']['short'];
                      return false;
                  } elseif (!empty($phone) && !is_numeric($phone)) {
                      echo 300;
                      self::$_error['phone'] =  self::ERROR_MESSAGES['Phone']['numbers'];
                      return false;
                  }
                  //validate message
                  elseif (!empty($message) && strlen($message) < 1) {
                      echo 400;
                  // if (strlen($message) < 1 || $message == "") {
                      //     self::$_error['message'] =  self::ERROR_MESSAGES['message']['message'];
                      //     return false;
                      // }
                  } else {
                      //Merge array

                      if (empty($this->sanitizeCheck())) {
                          //initialize array to hold form data
                          $arrData = [];
                          //Check which form is sending the data
                          //Contact form
                          if ($message) {
                              //contact form data array
                              $arrData = [
                              "names"       =>$names,
                              "email"       =>$email,
                              "message"     =>$message,
                              "phone"     =>$phone
                            ];
                          } else {
                              $arrData = [
                              "names"       =>$names,
                              "email"       =>$email,
                              "service"     =>$category
                            ];
                          }
                          $this->_sanitizedFields = array_merge($this->_sanitizedFields, $arrData);
                          $this->_sanitizedFields;
                      }
                      $this->formData = $data;

                      if (empty($this->_sanitizedFields)) {
                          return false;
                      } else {
                          return $this->_sanitizedFields;
                      }
                  }
              }//end of isset
          }


          private function processFormSubmit()
          {
              //check if tokens match
              $data = $this->formData;
              if ($data) { //check if token generated matches token in session
                  $this->fieldString = $this->_sanitizedFields;
              } //end of token verification
          }


          private function processProdUpdate()
          {
              $this->fieldString = $this->_sanitizedFields;
          }
      }
