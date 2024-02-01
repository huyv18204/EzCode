<?php

namespace EzCode\Controllers\Client;

use EzCode\Commons\Controller;

class ProfileController extends Controller
{
    private string $folder = 'pages.';

    function profile()

    {
        $this->renderViewsClient($this->folder . __FUNCTION__);
    }
}