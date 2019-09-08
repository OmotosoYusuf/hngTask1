<?php
 $message = 'Message sent, thank you.';
 echo '<h1 style="color: green;">' + $message + '</h1>';
 $path = 'result.txt';
 if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['title']) && isset($_POST['message'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['name'].' <br> '.$_POST['email'].' <br> '.$_POST['title'].' <br> '.$_POST['message'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>
