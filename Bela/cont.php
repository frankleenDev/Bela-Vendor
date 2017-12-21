<?php
if(isset($_POST['first_name'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "frankgilbert911@gmail.com";
    $email_subject = "Bela Vendor Order";
 
    function died($error) {
        // your error code can go here
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['venue']) ||
        !isset($_POST['event'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $event = $_POST['event']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $venue = $_POST['venue']; // required
    $people = $_POST['people'];
   
    
    
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 

  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "\t\t\t<strong>Catering Order</strong>.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "***************  Bela Vendor  ***************\n\n";
    $email_message .= "Full Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n\n";
    $email_message .= "Type of Machine: ".clean_string($event)."\n";
    $email_message .= "Location: ".clean_string($venue)."\n";
    $email_message .= "No. of people: ".clean_string($people)."\n\n";
    $email_message .= "***************  Courtesy of bealady.com  ***************\n";



 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->

 
 
<?php
header("Location: index.php");
exit;
 
}
?>