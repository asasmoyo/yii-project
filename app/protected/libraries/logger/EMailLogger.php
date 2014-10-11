<?php

class EmailLogger extends CEmailLogRoute
{

    public $smtpServer;
    public $smtpUsername;
    public $smtpPassword;
    public $smtpPort;
    public $loggedUserAttributes = array();

    protected function sendEmail($email, $subject, $message)
    {
        $data = array();
        foreach ($this->loggedUserAttributes as $attribute) {
            $data[$attribute] = Yii::app()->user->$attribute;
        }

        $detailStr = "\r\n--- REQUEST DETAILS ---\r\n" . json_encode($data);

        $sendEmail = new SMTPMail(
            $this->smtpServer,
            $this->smtpUsername,
            $this->smtpPassword,
            $this->smtpPort
        );

        $sendEmail->sendPlainEmail(
            $this->smtpUsername,
            $this->smtpUsername,
            $email,
            $subject,
            $message . $detailStr
        );
    }

} 