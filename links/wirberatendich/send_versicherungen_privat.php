<?php
if (isset($_POST["submit"])) {        
    $vorname=$_POST['vorname'];
    $name=$_POST['name'];
    $geburtsdatum=$_POST['geburtsdatum'];
    $PLZ=$_POST['PLZ'];
    $ort=$_POST['ort'];
    $nationalitat=$_POST['nationalitat'];
    $adresse=$_POST['adresse'];    
    $telefon =$_POST['telefon'];
    $email=$_POST['email'];
    $wiederholungmail=$_POST['wiederholungmail'];
    $mobile=$_POST['mobile'];    
    $sonstiges=$_POST['sonstiges'];
    
    $select1=$_POST['$select1'];
    $select2=$_POST['$select2'];
       

//$from = 'Demo Contact Form'; 
$to = 'versicherung@wirberatendich.ch'; 
$subject = 'wirberatendich | Versicherungen Privat';
$headers = "From: $to\n"; 
$headers .= "Reply-To: $email";
$body ="
Vorname: $vorname\n
Name: $name\n
Geburtsdatum: $geburtsdatum\n
Nationalität: $nationalitat\n
Adresse: $adresse\n
PLZ: $PLZ\n
Ort: $ort\n
E-Mail: $email\n
Wiederholung E-Mail: $wiederholungmail\n
Telefon: $telefon\n
Mobile: $mobile\n\n

Sprachen: $select1[1]\n $select1[2]\n $select1[3]\n $select1[4]\n $select1[5]\n $select1[6]\n $select1[7]\n $select1[8]\n $select1[9]\n\n
Dienste: $select2[1]\n $select2[2]\n $select2[3]\n $select2[4]\n $select2[5]\n $select2[6]\n $select2[7]\n $select2[8]\n $select2[9]\n $select2[10]\n
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