<?php
 class Sanitize
 {
     public static function sanitizeData($field)
     {
         $field = htmlentities($field, ENT_QUOTES, "UTF-8");
         $field = strip_tags($field);
         $field = ucfirst(strtolower($field));
         $field = trim($field);
         return $field;
     }

     public static function sanitizeInput($field)
     {
         self::sanitizeData($field);
         return $field;
     }

     public static function sanitizePassword($field)
     {
         $field = htmlentities($field, ENT_QUOTES, "UTF-8");
         $field = strip_tags($field);
         $field = trim($field);
         return $field;
     }

     public static function sanitizeEmail($field)
     {
         self::sanitizeData($field);
         $field = strtolower($field);
         return $field;
     }

     public static function sanitizeNames($field)
     {
         self::sanitizeData($field);
         if ($field !== '') {
             $field = explode(' ', $field);
             if (count($field) > 1) {
                 $field = ucfirst($field[0]). ' ' .ucfirst($field[1]);
             } else {
                 $field = ucfirst($field[0]);
             }
         }
         return $field;
     }

     public static function sanitizeNumbers($field)
     {
         self::sanitizeData($field);
         $field = (int)($field);
         return $field;
     }
 }
