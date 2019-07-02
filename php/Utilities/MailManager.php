<?php
    final class MailManager
    {
        private static $recipient;
        private static $subject;
        private static $message;
        private static $arrHeaders;

        function __construct()
        {
            self::$recipient = "";
            self::$subject = "";
            self::$message = "";
            self::$arrHeaders = "";
        }
        // Prepares the email
        public static function stage($recipient, $subject, $message, $arrHeaders)
        {
            self::$recipient = $recipient;
            self::$subject = $subject;
            self::$message = $message;
            self::$arrHeaders = $arrHeaders;
        }
        // Attempt to send email
        public static function send()
        {
            try
            {
                $message = wordwrap($message, 70, "\r\n");
                if( mail(self::recipient, self::subject, self::message, self::arrHeaders[0] ) )
                    return true;
                else
                    return false;
            }
            catch (Exception $exception) 
            {
                throw new Exception("Error sending email.");
            }
        }
        // Returns recipient of email
        public static function getRecipient() { return self::$recipient; }
        // Returns subject of email
        public static function getSubject() { return self::$subject; }
        // Returns message of email
        public static function getMessage() { return self::$message; }
        // Returns list of recipients
        public static function getRecipients() { return self::$arrHeaders; }
    }
?>