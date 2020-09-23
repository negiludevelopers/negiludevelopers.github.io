<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['text'];

//send email
    mail(rajuloki046@gmail.com","My Subject:",$email,$message);
}
?>
