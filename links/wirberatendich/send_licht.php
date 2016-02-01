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
    
    $select1=$_POST['select1'];
    $select2=$_POST['select2'];
    $select3=$_POST['select3'];
    $select4=$_POST['select4'];
    $select5=$_POST['select5'];
    $select6=$_POST['select6'];
    $select7=$_POST['select7'];
    $select8=$_POST['select8'];
    $select9=$_POST['select9'];
    $select10=$_POST['select10'];
    $select11=$_POST['select11'];
    $select12=$_POST['select12'];
    $select13=$_POST['select13'];
    $select14=$_POST['select14'];
    $select15=$_POST['select15'];
    

    
//$from = 'Demo Contact Form'; 
$to = 'egoomni@gmail.com'; 
$subject = 'wirberatendich| Licht';
$headers = "From: $to\n"; 
$headers .= "Reply-To: $email";
$body ="
Firmenname: $firmenname\n
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
    
Leuchtstoffröhren T8 / T5:$select1\n
E27 Stk.:$select2\n
GU10 Stk.:$select3\n\n
    
E14 Stk.:$select4\n
T8/60 cm Stk.:$select5\n
T8/90 cm Stk.:$select6\n\n

G4 Stk.:$select7\n
T8/120 cm Stk.:$select8\n
T8/150 cm Stk.:$select9\n\n
    
G9 Stk.:$select10\n
T5/60 cm Stk.:$select11\n
T5/90 cm Stk.:$select12\n\n
    
MR16 Stk.:$select13\n
T5/120 cm Stk.:$select14\n
T5/150 cm Stk.:$select15\n\n
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