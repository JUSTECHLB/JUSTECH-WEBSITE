<?php

if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $mailTo = "contact@justechlb.tech";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name;


    mail($mailTo, $subject, $txt, $headers);

    header("Location: index.php?mailsent");

}

?>