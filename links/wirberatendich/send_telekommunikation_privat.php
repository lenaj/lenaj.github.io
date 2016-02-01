<?php
if (isset($_POST["submit"])) {        
    $vorname=$_POST['vorname'];
    $name=$_POST['name'];
    $adresse=$_POST['adresse'];
    $nationalitat=$_POST['nationalitat'];      

    $ort=$_POST['ort'];
    $PLZ=$_POST['PLZ'];
   

    $telefon =$_POST['telefon'];
    $email=$_POST['email'];
    $wiederholungmail=$_POST['wiederholungmail'];
    $mobile=$_POST['mobile'];
    $select=$_POST['select'];
       

//$from = 'Demo Contact Form'; 
$to = 'seo@wirberatendich.ch'; 
$subject = 'wirberatendich | Telekommunikation Privat';
$headers = "From: $to\n"; 
$headers .= "Reply-To: $email";
$body ="
Vorname: $vorname\n
PLZ: $PLZ\n
Telefon: $telefon\n
Name: $name\n
Adresse: $adresse\n
Ort: $ort\n
E-Mail: $email\n
Wiederholung E-Mail: $wiederholungmail\n
Mobile: $mobile\n\n
Nationalität:$nationalitat\n\n 
Festnetz:$select[1]\n $select[2]\n $select[3]\n $select[4]\n $select[5]\n $select[6]\n 
";

// If there are no errors, send the email

	if (mail ($to, $subject, $body, $headers)) {
        echo"<script>window.location = 'sent.html';</script>";
		echo '<div class="alert alert-success">Vielen Dank für Ihre Mitteilung. Wir werden Ihre Anfrage so rasch wie möglich bearbeiten. Sie hören bald von uns.</div>';       
	} else {
		echo '<div class="alert alert-danger">Leider gab es einen Fehler beim senden ihrer Nachricht. Bitte versuchen Sie es später nochmal.</div>';
	}

	
}

?>