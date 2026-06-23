<?php

/**
 * Contact Form Handler
 * Handles AJAX requests for both Contact Page and Hero Lead Forms.
 */

header('Content-Type: application/json');

// Include dependencies
require_once dirname(__DIR__) . '/vendor/autoload.php';
$mailConfig = require_once dirname(__DIR__) . '/config/mail.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

// Sanitize and collect inputs
$fname    = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$lname    = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$phone    = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$budget   = filter_input(INPUT_POST, 'budget', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$website  = filter_input(INPUT_POST, 'website', FILTER_SANITIZE_URL);
$message  = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$formType = filter_input(INPUT_POST, 'form_type', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?: 'General Contact';

// Budget now comes directly as text from the select options
$budgetDisplay = $budget;

// Validation
$isNewsletter = ($formType === 'Newsletter');
if (!$email || (!$isNewsletter && (!$fname || !$message))) {
    echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
    exit;
}

// Set defaults for newsletter
if ($isNewsletter) {
    $fname = $fname ?: 'Newsletter';
    $lname = $lname ?: 'Subscriber';
    $message = $message ?: 'User subscribed to the newsletter.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
    exit;
}

// ReCAPTCHA v3 Validation
if (defined('RECAPTCHA_SECRET_KEY') && RECAPTCHA_SECRET_KEY !== 'YOUR_SECRET_KEY_HERE' && RECAPTCHA_SECRET_KEY !== '') {
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
    
    if (empty($recaptchaResponse)) {
        echo json_encode(['status' => 'error', 'message' => 'Please complete the CAPTCHA.']);
        exit;
    }

    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $verifyData = [
        'secret' => RECAPTCHA_SECRET_KEY,
        'response' => $recaptchaResponse,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($verifyData)
        ]
    ];
    $context  = stream_context_create($options);
    $verifyResult = @file_get_contents($verifyUrl, false, $context);
    
    if ($verifyResult) {
        $responseData = json_decode($verifyResult);
        if (!$responseData->success || $responseData->score < 0.5) {
            echo json_encode(['status' => 'error', 'message' => 'CAPTCHA validation failed. Please try again.']);
            exit;
        }
    } else {
        // If Google API fails to respond, you might want to log it and either allow or reject. 
        // We'll reject for security.
        echo json_encode(['status' => 'error', 'message' => 'Failed to verify CAPTCHA with the server.']);
        exit;
    }
}

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = $mailConfig['debug'];
    $mail->isSMTP();
    $mail->Host       = $mailConfig['smtp']['host'];
    $mail->SMTPAuth   = $mailConfig['smtp']['auth'];
    $mail->Username   = $mailConfig['smtp']['username'];
    $mail->Password   = $mailConfig['smtp']['password'];
    $mail->SMTPSecure = $mailConfig['smtp']['secure'];
    $mail->Port       = $mailConfig['smtp']['port'];

    // Recipients
    $mail->setFrom($mailConfig['from']['email'], $mailConfig['from']['name']);
    $mail->addAddress($mailConfig['recipients']['admin']);
    $mail->addReplyTo($email, "$fname $lname");

    // Content
    $mail->isHTML(true);
    $mail->Subject = "New Lead from Aim Website: $formType";

    // Build Email Body
    $body = "
        <div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
            <h2 style='color: #0f172a;'>New Submission</h2>
            <p><strong>Form Type:</strong> $formType</p>
            <hr style='border: 0; border-top: 1px solid #eee;'>
            <p><strong>Name:</strong> $fname $lname</p>
            <p><strong>Email:</strong> $email</p>
            " . ($phone ? "<p><strong>Phone:</strong> $phone</p>" : "") . "
            " . ($website ? "<p><strong>Website:</strong> <a href='$website'>$website</a></p>" : "") . "
            " . ($budget ? "<p><strong>Budget:</strong> $budgetDisplay</p>" : "") . "
            <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
            <hr style='border: 0; border-top: 1px solid #eee;'>
            <p style='font-size: 0.8rem; color: #94a3b8;'>Submitted from: " . $_SERVER['HTTP_REFERER'] . "</p>
        </div>
    ";

    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
}
