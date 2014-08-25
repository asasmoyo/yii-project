<?php

class FormLoginAdministrator extends CFormModel
{

    public $username;
    public $password;
    private $identity;

    public function rules()
    {
        return array(
            array('username, password', 'required'),
            array('username', 'validateLogin'),
        );
    }

    public function validateLogin($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $this->identity = new AdministratorUserIdentity($this->username, $this->password);
            $this->identity->authenticate();
            switch ($this->identity->errorCode) {
                case AdministratorUserIdentity::ERROR_INVALID_USERNAME_OR_PASSWORD:
                    $this->username = '';
                    $this->password = '';
                    $this->addError("username", "Username atau password anda salah.");
                    break;
            }
        }
    }

    public function login()
    {
        if (!$this->identity->errorCode) {
            Yii::app()->user->login($this->identity, 0);
        }
    }

} 