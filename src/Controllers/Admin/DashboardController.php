<?php

namespace EzCode\Controllers\Admin;

use EzCode\Commons\Controller;

class DashboardController extends Controller
{
    private string $folder = 'dashboard.';
    function index()
    {
        $this->renderViewsAdmin($this->folder . __FUNCTION__);
    }
}