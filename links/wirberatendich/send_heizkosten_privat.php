<?php
if (isset($_POST["submit"])) {        
    $vorname=$_POST['vorname'];
    $PLZ=$_POST['PLZ'];
    $person=$_POST['person'];
    $telefon =$_POST['telefon'];
    $name=$_POST['name'];
    $adresse=$_POST['adresse'];
    $ort=$_POST['ort'];
    $email=$_POST['email'];
    $wiederholungmail=$_POST['wiederholungmail'];
    $mobile=$_POST['mobile'];
    $energie=$_POST['energie'];
    $verwendungsort=$_POST['verwendungsort'];
    //$energie = $service1[1] ." | ". $service1[2]." | ". $service1[3]." | ". $service1[4]." | ". $service1[5]; 
    
//$from = 'Demo Contact Form'; 
$to = 'heizung@wirberatendich.ch'; 
$subject = 'wirberatendich|Heizkosten Privat';
$headers = "From: $to\n"; 
$headers .= "Reply-To: $email";
$body ="
Vorname: $vorname\n
PLZ: $PLZ\n
Zuständige Person: $person\n
Telefon: $telefon\n
Name: $name\n
Adresse: $adresse\n
Ort: $ort\n
E-Mail: $email\n
Wiederholung E-Mail: $wiederholungmail\n
Mobile: $mobile\n\n    
Energie sparen heisst Geld sparen: $energie\n\n
Verwendungsort: $verwendungsort
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