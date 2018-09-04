<?php
/**
 * mailer.php
 *
 * This file will handle the secure mail transport using the Swiftmailer
 * library with Google reCAPTCHA integration
 *
 * @author HalfMortise <halfmortise@protonmail.com>
 **/

require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

// require mail-config.php
require_once("mail-config.php");

// verify user's reCAPTCHA input
$recaptcha = new \ReCaptcha\RECaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try {
   // if there's a reCAPTCHA error, throw an exception
   if (!$resp->isSuccess()) {
      throw(new Exception("reCAPTCHA error"));
   }

   /**
    * Sanitize the inputs from the form: name, email, phone, company, message;
    * this assumes jQuery (not Angular) will be AJAX submitting the form,
    * so we're not using the $_POST superglobal.
    **/

   $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
   $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
   $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
   $company = filter_input(INPUT_POST, "company", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
   $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

}