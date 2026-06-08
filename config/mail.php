<?php

/**
 * Mail Configuration Bridge
 * This file pulls SMTP settings from config.php for PHPMailer.
 */

require_once __DIR__ . '/config.php';

return [
    // SMTP Settings
    'smtp' => [
        'host'       => SMTP_HOST,
        'auth'       => SMTP_AUTH,
        'username'   => SMTP_USERNAME,
        'password'   => SMTP_PASSWORD,
        'secure'     => SMTP_SECURE,
        'port'       => SMTP_PORT,
    ],

    // Email Identities
    'from' => [
        'email' => MAIL_FROM_EMAIL,
        'name'  => MAIL_FROM_NAME,
    ],

    // Recipients
    'recipients' => [
        'admin' => ADMIN_EMAIL,
    ],

    // Debugging
    'debug' => MAIL_DEBUG,
];
