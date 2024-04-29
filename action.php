<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["phone"];
    
    // Do something with the data (for example, send an email)
    $to = "adnannawa6@gmail.com";
    $subject = "New Form Submission";
    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // Send email
    mail($to, $subject, $email_body);


   
    
    // Redirect back to the form or to a thank you page
    header("Location: thankyou.html");
    exit();
    
}  
else {
    // Redirect back to the form if accessed directly
    header("Location: index.html");
    exit();
}
?>
