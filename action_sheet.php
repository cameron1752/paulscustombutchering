<?php
if($_POST["message"]) {
    mail("cam@camknickerbocker.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>