<?php

class SMTPMail
{

    public $host;
    public $username;
    public $password;
    public $port;
    public $debug;

    public function __construct($host = null, $username = null, $password = null, $port = null, $debug = 0)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;
        $this->debug = $debug;
    }

    public function sendPlainEmail($fromEmail, $fromName, $to, $subject, $message)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = $this->host;
        $mail->SMTPDebug = $this->debug;
        $mail->SMTPAuth = true;
        $mail->Port = $this->port;
        $mail->Username = $this->username;
        $mail->Password = $this->password;

        $mail->SetFrom($fromEmail, $fromName);
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->AddAddress($to);

        if (!$mail->Send()) {
            echo "Mailer Error: <br/>";
            var_dump($mail->ErrorInfo);
        } else {
            echo "Message sent!";
        }
    }

} 