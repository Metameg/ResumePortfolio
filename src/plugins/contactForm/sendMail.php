<?php

/**

 * Plugin Name: Contact Form Plugin

 * Author: Metameg (Alex Metzger)

 * Version: 1.0.0

*/

require_once  '../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'Exception.php';
require 'SMTP.php';

$mail = new PHPMailer(true);
 
session_start();

$dotenv = Dotenv\Dotenv::createImmutable('../..');

try {
    $dotenv->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Error loading .env file: ' . $e->getMessage()]);
    exit;
}

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        echo json_encode(['status' => 'error', 'message' => 'Please refresh the page.']);
        exit;
    }

    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    if (empty($name) || empty($phone) || empty($email)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    if (!$email) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address']);
        exit;
    }

    // if (isset($_FILES["resume"]) && $_FILES["resume"]["error"] == 0) {
    //     $targetFile = $_FILES["resume"]["name"];
    //     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    //     $allowedTypes = array("pdf", "doc", "docx");

    //     if (!in_array($fileType, $allowedTypes)) {
    //         echo json_encode(['status' => 'error', 'message' => 'Only PDF, DOC, and DOCX files are allowed.']);
    //         exit;
    //     }
    // } else {
    //     echo json_encode(['status' => 'error', 'message' => 'No file was uploaded or there was an error with the upload.']);
    //     exit;
    // }

    try {
        // Send confirmation email to the user
        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['MAIL_USERNAME'];
        $mail->Password = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $_ENV['MAIL_PORT'];

        $mail->setFrom($_ENV['MAIL_USERNAME'], 'Alex Metzger');
        $mail->addAddress($email, $name); // User's email and name

        $mail->isHTML(true);
        $mail->Subject = 'Thank you for reaching out!';
        $mail->Body = "Dear $name,<br><br>Thank you for contacting me. I have received your information and will get back to you shortly.<br><br>Best regards,<br>- Alex Metzger";

        $mail->send();

        // Send email to the administrator
        $mail->clearAddresses();
        $mail->addAddress('ametzger08@gmail.com', 'Alex Metzger'); // Admin's email and name

        $mail->Subject = 'New Form Submission on your Portfolio site';
        $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

        // $mail->addAttachment($_FILES['resume']['tmp_name'], $targetFile);

        $mail->send();

        echo json_encode(['status' => 'success', 'message' => 'Success! You should receive an email shortly.']);

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
}

// function sendMail($args) {

//     extract($args);
//     // Email parameters
//     // $to = 'admin@thedomaindesigners.com'; 
//     $subject = 'New Contact Form Submission from alex-metzger.com';

//     // Compose email message
//     if (isset($userBody)) {
//         $to = $userEmail;
//         $from = 'Alex Metzger';
//         $body = $userBody;
//         $subject = $userSubject;
//     } 
//     else {
//         $body = "New Contact Form Submission on your portfolio website: \n\n"; 
//         $body .= "Full Name: \n$fullname\n";
//         $body .= "\nEmail: \n$email\n";
//         $body .= "\nPhone:\n$phone\n";
//         $body .= "\nMessage:\n$message\n";
//         $to = $_ENV['MAIL_APP_USERNAME'];
//         $from = $fullname;
//     }

//     // Create a new PHPMailer instance
//     $mail = new PHPMailer(true);

//     try {
//         // Server settings
//         $mail->isSMTP();
//         $mail->Host = 'smtp.gmail.com';
//         $mail->SMTPAuth = true;
//         $mail->Username = $_ENV['MAIL_APP_USERNAME']; 
//         // $mail->Username = 'metameg8@gmail.com'; 
//         $mail->Password = $_ENV['MAIL_APP_PASSWORD']; 
//         // $mail->Password = $_ENV['DEVMAIL_APP_PASSWORD']; 
//         // $mail->SMTPSecure = 'ssl';
//         $mail->SMTPSecure = 'tls';
//         // $mail->Port = 465;
//         $mail->Port = $_ENV['MAIL_PORT'];

//         // Recipients
//         $mail->setFrom('ametzger08@gmail.com', $from);
//         $mail->addAddress($to);
//         // $mail->addAddress($email);

//         // Content
//         $mail->isHTML(true);
//         $mail->Subject = $subject;
//         $mail->Body = $body;

//         // Send email
//         if($mail->send()){
//             // echo "Thank you! Your message has been sent.";
//             return "success";
//         } else{
//             // echo "Oops! Something went wrong. Please try again later. Error: {$mail->ErrorInfo}";
//             return "Email not sent. Please try again";
//         }
    
//     } catch (Exception $e) {
//         // echo "Oops! Something went wrong. Please try again later. Error: {$mail->ErrorInfo}";
//     }
// }

// function capture_contact_form() {
//     session_start();
//     $valid = false;
//     $fullname = $_POST['fullname'];
//     $phone = $_POST['phone'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     if(empty($_POST['email']) || empty($_POST['fullname']) ||  empty($_POST['message']) || empty($_POST['phone'])){
//         $response = "Name, Phone, Email and Message fields required";
//     } 
    
//     else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//         // Sanitize email address
//         $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
//         $valid = true;
//     } 
//     else {
//         $response = "Invalid email";
//     }
    
//     if ($valid) {
//         $sanitizedFullName = filter_var($fullname, FILTER_SANITIZE_STRING);
//         $sanitizedCompany = filter_var($company, FILTER_SANITIZE_STRING);
//         $sanitizedMessage = filter_var($message, FILTER_SANITIZE_STRING);
//         $response = sendMail([
//                             'fullname' => $sanitizedFullName,  
//                             'phone' => $phone,
//                             'email' => $sanitizedEmail, 
//                             'company' => $sanitizedCompany,
//                             'services' => $services,
//                             'message' =>  $sanitizedMessage,
//                         ]);

//     }
    
//     return $response;
// }
// ?>