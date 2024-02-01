<?php

namespace EzCode\Controllers\Admin;

use EzCode\Commons\Controller;
use EzCode\Models\User;

class UserController extends Controller

{
    private string $folder = 'users.';

    function index()

    {
        $data['users'] = (new User())->getAll();
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);

    }

    function update($id, $status)
    {
        (new User())->update($id, $status);
        header("Location: " . route('/admin/users'));
    }
}