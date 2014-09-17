<?php

class Hash
{

    public static function createSalt($length)
    {
        return base64_encode(mcrypt_create_iv($length, MCRYPT_DEV_URANDOM));
    }

    public static function createHash($password, $salt)
    {
        return hash('SHA256', $password . $salt);
    }

    public static function validatePassword($password, $salt, $hashed_password)
    {
        return $hashed_password == self::createHash($password, $salt);
    }

} 