<?php

namespace EzCode\Controllers\Client;

use EzCode\Commons\Controller;
use EzCode\Models\Order;

class ProfileController extends Controller
{
    private string $folder = 'pages.';

    function profile()

    {
        if(!empty($_SESSION['user'])){
            $data['course_orders']  = (new Order())->getByUserId($_SESSION['user']['id']);
        }
        $this->renderViewsClient($this->folder . __FUNCTION__,$data);
    }
}