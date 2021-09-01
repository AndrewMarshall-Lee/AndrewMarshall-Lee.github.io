<?php

    if(isset($_POST['submit-button'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['Email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];


        $mailTo = "andrew.marshall-lee@hotmail.co.uk";
        $headers = "From: ".$mailFrom;
        $txt = "You have have received an email from ".$name".\n\n".$message;


        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    }
?>