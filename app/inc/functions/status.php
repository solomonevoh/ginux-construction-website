<?php
session_start();
$D_name = $_SESSION["driverFname"];  //get session for driver's first name
$D_id = $_SESSION["ID"]; //get session for driver's token
$formStep = $_SESSION["formStep"]; //get session for form number


//redirect to home page if session for id is empty
if(($_SESSION["driverFname"] =="") && $_SESSION["formStep"] == ""){
		header("location:index.php");
 }
 else {
	}

?>
