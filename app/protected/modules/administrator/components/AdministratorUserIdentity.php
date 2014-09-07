<?php

class AdministratorUserIdentity extends CUserIdentity
{

    const ERROR_INVALID_USERNAME_OR_PASSWORD = 3;

    private $_id;

    public function authenticate()
    {
        $admin = Admin::model()->findByAttributes(array(
            'username' => $this->username
        ));

        if (!isset($admin)) {
            $this->errorCode = self::ERROR_INVALID_USERNAME_OR_PASSWORD;
        } elseif (!$this->validatePassword($this->password, $admin->hashed_password, $admin->salt)) {
            $this->errorCode = self::ERROR_INVALID_USERNAME_OR_PASSWORD;
        } else {
            $this->_id = $admin->id;
            $this->username = $admin->username;
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    private function validatePassword($password_attempt, $hashed_password, $salt)
    {
        return Hash::validatePassword($password_attempt, $salt, $hashed_password);
    }

    public function getId()
    {
        return $this->_id;
    }

}
