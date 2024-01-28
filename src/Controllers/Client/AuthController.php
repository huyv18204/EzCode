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
            $users = $this->user->getAll();
            foreach ($users as $user) {
                if ($user['email'] == $email && $user['password'] == $password) {
                    $_SESSION['user'] = $user;
                    var_dump($_SESSION['user']);
                    header("Location:" . route('client/'));
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
                $this->user->insert($email, $password,$name);
                header("Location:".route('auth/login'));
            }
        }
        $this->renderViewsClient($this->folder . __FUNCTION__);
    }
}