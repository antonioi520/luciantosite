<?php session_start(); ?>
<!-- the captcha needs the above line -->

<?php
if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['budget']) && isset($_POST['companyname']) && isset($_POST['description']) && isset($_POST['webneeds'])) {

    $email_to = "antonioi19961@gmail.com";
    $email_subject = "Lucianto Inquiry Form - " . $_POST['companyname'];

    function died($error)
    {
        //echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        //echo "These errors appear below.<br /><br />";
        //echo $error . "<br /><br />";
        //echo "Please fix before resubmitting.<br /><br />";
        die($error);
    }

    // validation
    if (!isset($_POST['fullname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['budget']) ||
        !isset($_POST['companyname']) ||
        !isset($_POST['description']) ||
        !isset($_POST['webneeds'])
    ) {
        died('One or more of your entries appears to be invalid, please try again.');
    }

    $fullname = $_POST['fullname'];
    $email_host = 'do-not-reply@Lucianto.com';
    $email_from = $_POST['email'];
    $budget = $_POST['budget'];
    $companyname = $_POST['companyname'];
    $description = $_POST['description'];
    $webneeds = $_POST['webneeds'];


    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'Please enter a valid email.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $fullname)) {
        $error_message .= 'Please enter a valid name.<br />';
    }

    if (strlen($description) < 2) {
        $error_message .= 'The description you entered does not appear to be valid.<br />';
    }

    if (strlen($webneeds) < 2) {
        $error_message .= 'The needs you entered does not appear to be valid.<br />';
    }

    if (strlen($error_message) > 0) {
        died($error_message);
    }


    $email_message = "Inquiry Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($fullname) . "\n";
    $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= "Company Name: " . clean_string($companyname) . "\n";
    $email_message .= "Company Description: " . clean_string($description) . "\n";
    $email_message .= "Web Needs: " . clean_string($webneeds) . "\n";
    $email_message .= "Budget: " . clean_string($budget) . "\n";

    // create email headers
    $headers = 'From: ' . $email_host . "\r\n" .
        'Reply-To: ' . $email_host . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    header('Location: http://localhost:3000/purchase.php');
}

?>
 
<!-- include success html here -->

 

