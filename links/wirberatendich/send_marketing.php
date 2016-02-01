<?php
if (isset($_POST["submit"])) {        
   $firmenname=$_POST['firmenname'];
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
    $zustandige=$_POST['zustandige'];
    $select=$_POST['select'];
    $verwendungsort=$_POST['verwendungsort'];        

//$from = 'Demo Contact Form'; 
$to = 'info@wirberatendich.ch'; 
$subject = 'wirberatendich | Versicherungen';
$headers = "From: $to\n"; 
$headers .= "Reply-To: $email";
$body ="
Firmenname: $firmenname\n
Vorname: $vorname\n
PLZ: $PLZ\n
Telefon: $telefon\n
Name: $name\n
Adresse: $adresse\n
Ort: $ort\n
E-Mail: $email\n
Wiederholung E-Mail: $wiederholungmail\n
Mobile: $mobile\n\n
Zuständige Person: $zustandige\n\n
Produkteinteressen:$select[1]\n $select[2]\n $select[3]\n $select[4]\n $select[5]\n
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