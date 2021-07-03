<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $txt = $_POST['txt'];

    $mailTo = "josefhermoch@seznam.cz";
    $headers = "From: ".$mailFrom;
    $message = "Obdrželi jste e-mail od ".$name." ".$surname."\n(+420)".$phone."\n\n".$txt;

    mail($mailTo ,$subject ,$message, $headers);
    header("Location: contact.php?mailsend");
}

?>