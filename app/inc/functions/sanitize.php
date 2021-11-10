<?php
  function escape($string) {
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
  }

  function cleanInput($data){
    return $data = trim($data);
    return $data = stripslashes($data);
    return $data = strip_tags($data);


  }

  function editYear($date){
//  $date = substr($date, 5);
  return substr($date, 5);
  }
?>
