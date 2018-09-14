<?php
/**
 * mailer.php
 *
 * This file handles secure mail transport using the Swiftmailer library with Google reCAPTCHA integration
 *
 * @author HalfMortise <halfmortise@protonmail.com>
 **/

// require mail-config.php
require_once (dirname(__DIR__, 2) . "/vendor/autoload.php");

// require all composer dependencies
require_once ("mail-config.php");

//verify user's reCAPTCHA input
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);
try {

   //if there's a reCAPTCHA error, throw an exception
   if (!$resp->isSuccess()) {
      throw(new Exception("Please execute reCAPTCHA validation!"));
   }

   /**
    *Sanitize the inputs from the form: name, email, subject, and message. Using Jquery so implementing $_POST superglobal
    **/
   $name = filter_input(INPUT_POST, "contactName", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
   $email = filter_input(INPUT_POST, "contactEmail", FILTER_SANITIZE_EMAIL);
   $phone = filter_input(INPUT_POST, "contactPhone", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
   $company = filter_input(INPUT_POST, "contactCompany", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
   $message = filter_input(INPUT_POST, "contactMessage", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

   //create Swift message
   $swiftMessage = new Swift_Message();
   /**
    * attach the sender to the message.
    * This takes the form of an associative array where $email is the key for the key for the real name
    **/
   $swiftMessage->setFrom([$email => $name]);

   /**
    * Attach the recipients to the message
    *$MAIL_RECIPIENTS is set in mail-config.php
    **/
   $recipients = $MAIL_RECIPIENTS;
   $swiftMessage->setTo($recipients);
   // attach the subject line to the message
   $swiftMessage->setSubject($subject);

   /**
    * attach the actual message to the message
    **/
   $swiftMessage->setBody($message, "text/html");
   $swiftMessage->addPart(html_entity_decode($message), "text/plain");
   /**
    * Send the email via SMTP.
    *
    * @see http://swiftmailer.org/docs/sending.html Sending Messages - Documentation - SwitftMailer
    **/
   $smtp = new Swift_SmtpTransport("localhost", 25);
   $mailer = new Swift_Mailer($smtp);
   $numSent = $mailer->send($swiftMessage,$failedRecipients);
   /**
    * the send method returns the number of recipients that accepted the email.
    * if the number attempted !== number accepted it's an Exception
    **/
   if($numSent !== count($recipients)) {
      throw(new RuntimeException("unable to send email"));
   }

   /**report a successful send**/
   echo "<div class=\"alert alert-light\" role=\"alert\">Thank you for your email!</div>";
} catch(Exception $exception) {
   echo "<div class=\"alert alert-dark\" role=\"alert\">Unable to send email. Please check the form for all required fields." . $exception->getMessage() . "</div>";
}