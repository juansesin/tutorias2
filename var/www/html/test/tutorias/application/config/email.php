<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'sendmail', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'smtp.office365.com', 
    'smtp_port' => 587,
    'smtp_user' => 'notificaciones.ptd@usa.edu.co',
    'smtp_pass' => '1c3065e46b0edb7defb8f6f5b07378bbfbe6eb0cac29783f.',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset' => 'utf8',
    'wordwrap' => TRUE
);
