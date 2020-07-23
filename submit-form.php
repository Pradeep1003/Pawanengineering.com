<?php
if(isset($_POST['submit'])) {
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
    $firstname = $_POST['firstname']; // required
    $lastname = $_POST['lastname']; // required
    $number = $_POST['number']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // not required 
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($firstname)."\n";
    $email_message .= "First Name: ".clean_string($lastname)."\n";
    $email_message .= "First Name: ".clean_string($number)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Comments: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.'dugajenikhil@gmail.com'."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail("dugajenikhil@gmail.com", "00000", $email_message, $headers);  
@mail("pradeepchauhan246@gmail.com", "00000", $email_message, $headers);  

header("Location: index.php"); /* Redirect browser */
 
}
?>