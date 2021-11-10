<?php
if(isset($_POST['file_name'])){
    $file = $_POST['file_name'];
    // Add a file type check here for security purposes so that nobody can-
    // download PHP files or other sensitive files from your server by spoofing this script
    header('Content-type: application/pdf'); 
    header('Content-Disposition: attachment; filename="'.$file.'"');
    readfile('../files/legal/'.$file);
    exit();
}
?>
