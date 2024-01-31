<?php

namespace EzCode\Controllers\Admin;

use EzCode\Commons\Controller;
use EzCode\Models\User;

class UserController extends Controller

{

    private User $user;

    private string $folder = 'users.';

    public function __construct()
    {
        $this->user = new User;
    }

    function index()

    {
        $data['users'] = $this->user->getAll();
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);

    }

    function update($id, $status)
    {
        $this->user->update($id, $status);
        header("Location: " . route('/admin/users'));
    }
}