<?php
$to = "rhngpt15@gmail.com"; // this is your Email address
$from = trim($_POST['email']); // this is the sender's Email address
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$message = trim($_POST['message']);
$email = filter_var($from, FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $customer = $email;
} else {
    die;
}
$sanitised_msg = filter_var($message, FILTER_SANITIZE_SPECIAL_CHARS);
$subject = "Form submission on Website";
$subject2 = "Copy of your form submission";
$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $sanitised_msg;
// $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $sanitised_msg;

$message2 = '
       <html> 
    <head> 
        <title>Welcome to Prakash Dental Clinic</title> 
    </head> 
    <body> 
        <h1>Thanks you for joining with us!</h1> 
        <table cellspacing="0" style="border: 1px solid #004490; width: 100%;"> 
            <tr>
                <th>Name:</th>
                <td>
                  <img src="logo.png" height="20px" width="20px">
                Prakash Dental Clinic
                </td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>
                Email:
                </th>
                <td>
                prakashdental32@gmail.com
                </td> 
            </tr> 
            <tr> 
                <th>Website:</th><td><a href="http://www.prakashdental.in/">www.prakashdental.in</a></td> 
            </tr>
            <tr style="background-color: #e0e0e0;">
              <th>Message Copy: </th>
              <td>' . $sanitised_msg . '</td>
            </tr>
        </table> 
    </body> 
    </html>';

$headers = "From:" . $from;
$headers2 = "From:" . $to;
if (mail($to, $subject, $message, $headers) && mail($from, $subject2, $message2, $headers2)) {
    header("Location: thankyou.php");
    echo "Success";
    exit;
} else {
    header('Location: index.php');
    exit;
}
?>