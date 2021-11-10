<?php
  class Session
  {
      public static function exists($name)
      {
          return (isset($_SESSION[$name])) ? true : false;
      }

      public static function put($name, $value)
      {
          return $_SESSION[$name]  = $value;
      }

      public static function get($name)
      {
          return $_SESSION[$name];
      }

      public static function delete($name)
      {
          if (self::exists($name)) {
              unset($_SESSION[$name]);
          }
      }

      public static function flash($name, $string='')
      {
          if (self::exists($name)) {
              $session = self::get($name);
              self::delete($name);
              return $session;
          } else {
              self::put($name, $string);
              return false;
          }//end of else
      } //end of method

      public function displaySessionDetails($name)
      {
          if (isset($_SESSION[$name])) {
              return $_SESSION[$name];
          }
          return $name;
      }

      public function sessionManager()
      {
          $url = 'signup.php';
          if (basename($_SERVER['PHP_SELF']) != $url) {
              unset(
            $_SESSION['ID'],
            $_SESSION['name'],
            $_SESSION['email'],
            $_SESSION['address'],
            $_SESSION['phone'],
            $_SESSION['subscription']
          );
          }
      }
  }
