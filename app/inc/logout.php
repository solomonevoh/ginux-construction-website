<?php
session_start();
session_destroy();

//Give feedback message for password change
if (isset($_GET['success']) && empty($_GET['success'])) {
	header('location:index.php?success');
} else {
	header('location:../index.php');
}
?>
