<?php

namespace EzCode\Commons;

class RegisterValidation
{
    public function checkEmail($email){
        $checkEmail = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        return preg_match($checkEmail, $email);

    }

    public function checkPassword($password){
        $checkPass = "/^.{6,}$/";
        return preg_match($checkPass, $password);
    }
}