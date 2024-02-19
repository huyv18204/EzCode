<?php

namespace EzCode\Controllers\Client;

use EzCode\Commons\Controller;
use EzCode\Commons\RegisterValidation;
use EzCode\Models\User;

class AuthController extends Controller
{
    private string $folder = 'auth.';

    public function login()
    {
        if (isset($_POST['btn-login'])) {
            $email          = $_POST['email'];
            $password       = $_POST['password'];
            if(empty($email) || empty($password)){
                $_SESSION['error'] = "Please complete all information";
            }else {
                $user = (new User())->checkLogin($email, $password);
                if (!empty($user)) {
                    if ($user['status'] == 1) {
                        $_SESSION['user'] = $user;
                        if ($user['role'] == 1) {
                            header("Location:" . route('/'));
                        } else {
                            header("Location:" . route('/admin/dashboard'));
                        }

                    }
                } else {
                    $_SESSION['error'] = "Account or password information is incorrect";
                }
            }
        }
        $this->renderViewsClient($this->folder . __FUNCTION__);
    }

    public function register()
    {
        if (isset($_POST['btn-register'])) {
            $email          = $_POST['email'];
            $name           = $_POST['name'];
            $password       = $_POST['password'];
            $rePassword     = $_POST['re-password'];
            if(empty($email) || empty($name) || empty($password) || empty($rePassword)){
                $_SESSION['error'] = "Please complete all information";
            }else{
                if(empty((new User())->getByEmail($email))){
                    if (!(new RegisterValidation())->checkEmail($email)){
                        $_SESSION['error'] = "Invalid email";
                    }elseif (!(new RegisterValidation())->checkPassword($password)){
                        $_SESSION['error'] = "Password must be 6 characters or more";
                    }else {
                        if ($password == $rePassword) {
                            (new User())->insert($email, $password, $name);
                            header("Location:" . route('/auth/login'));
                        }else{
                            $_SESSION['error'] = "Password incorrect";
                        }
                    }
                }else{
                    $_SESSION['error'] = "Account already exists";
                }

            }
        }
        $this->renderViewsClient($this->folder . __FUNCTION__);
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header("Location:" . route('/'));

    }
}