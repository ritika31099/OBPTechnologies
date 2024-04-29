<?php

if(isset($_POST['submit']))

{

$EmailFrom = Trim(stripslashes($_POST['email'])); 

$EmailTo = "shashishuv@gmail.com";

$Subject = "Contact Form Submission";



$Name = Trim(stripslashes($_POST['name'])); 

$Email = Trim(stripslashes($_POST['email'])); 

$mob  = Trim(stripslashes($_POST['mobile'])); 

$address = Trim(stripslashes($_POST['address']));

$comment = Trim(stripslashes($_POST['comment']));





$Body = "";

$Body .= "Name: ";

$Body .= $Name;

$Body .= "\n";



$Body .= "Email: ";

$Body .= $Email;

$Body .= "\n";



$Body .= "Mobile: ";

$Body .= $mob;

$Body .= "\n";




$Body .= "address: ";

$Body .= $address;

$Body .= "\n";



$Body .= "Message: ";

$Body .= $comment;

$Body .= "\n";



$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");



if($success )

{

       echo "<script>alert('Your mail has been sent')</script>";

       print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-us.php\">";

}

}

?>