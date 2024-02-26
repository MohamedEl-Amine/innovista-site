<?php

class PHP_Email_Form {
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $message = '';
    public $ajax = false; // Corrected property name

    public function add_message($content, $label, $word_limit = null) {
        // Add a message component to the email body
        // You can implement word limit logic if needed
        if ($word_limit !== null) {
            $content = implode(' ', array_slice(explode(' ', $content), 0, $word_limit));
        }
        $this->message .= "$label: $content\n";
    }

    public function send() {
        // Send the email using the configured parameters
        $headers = "From: $this->from_name <$this->from_email>";

        // You can add additional headers or use a library like PHPMailer for more advanced features

        return mail($this->to, $this->subject, $this->message, $headers);
    }
}

?>
