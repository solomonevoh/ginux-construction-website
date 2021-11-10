<?php
if(!isset($_SESSION))
{
    session_start();
}

if (isset($_POST['formID'])){
    $_SESSION['formStep'] = $_POST['formID'];
    exit;
  }
  else{
    echo 'An error occured. Try again.';
  }



?>
