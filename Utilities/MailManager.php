<?php
    final class MailManager
    {
        private $recipient;
        private $subject;
        private $message;
        private $arrHeaders;

        function __construct()
        {
            $this->$recipient = "";
            $this->$subject = "";
            $this->$message = "";
            $this->$arrHeaders = "";
        }

        // Prepares the email
        public function stageMail($recipient, $subject, $message, $arrHeaders)
        {
            $this->$recipient = $recipient;
            $this->$subject = $subject;
            $this->$message = $message;
            $this->$arrHeaders = $arrHeaders;
        }

        // Attempt to send email
        public function send()
        {
            try
            {
                $message = wordwrap($message, 70, "\r\n");
                if( mail( $this->$recipient, $this->$subject, $this->$message, $this->$arrHeaders[0] ) )
                    return true;
                else
                    return false;
            }
            catch (Exception $th) 
            {
                throw new Exception("Error sending email.");
            }
        }

        // Returns recipient of email
        public function getRecipient() { return $this->$recipient; }
        // Returns subject of email
        public function getSubject() { return $this->$subject; }
        // Returns message of email
        public function getMessage() { return $this->$message; }
        // Returns list of recipients
        public function getRecipients() { return $arrHeaders; }
    }
?>