<?php
// if sign up successfully completed.
if (isset($_POST['formStatus'])){
    if ($_POST['formStatus'] == 'Completed'){
    //clear session variables.
    if(!isset($_SESSION))
    {
        session_start();
        unset($_SESSION["driverFname"]);  //get session for driver's first name
        unset($_SESSION["ID"]); //get session for driver's token
        unset($_SESSION["formStep"]); //get session for form number
    }

    exit;
  }
  else{
    echo 'An error occured. Try again......';
    exit();
  }
}
?>
