<?php

namespace EzCode\Controllers\Client;

use EzCode\Commons\Controller;
use EzCode\Models\User;

class AuthController extends Controller
{
    private User $user;
    private string $folder = 'auth.';

    public function __construct()
    {
        $this->user = new User;
    }


    public function login()
    {
        if (isset($_POST['btn-login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->user->checkLogin($email, $password);
            if (!empty($user)) {
                if ($user['status'] == 1) {
                    $_SESSION['user'] = $user;
                   if($user['role'] == 1){
                       header("Location:" . route('/'));
                   }else{
                       header("Location:" . route('/admin/dashboard'));
                   }

                }
            }
        }
        $this->renderViewsClient($this->folder . __FUNCTION__);
    }

    public function register()
    {
        if (isset($_POST['btn-register'])) {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $password = $_POST['password'];
            $rePassword = $_POST['re-password'];
            if ($password == $rePassword) {
                $this->user->insert($email, $password, $name);
                header("Location:" . route('/auth/login'));
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