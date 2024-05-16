<?php

namespace EzCode\Controllers\Admin;

use EzCode\Commons\Controller;
use EzCode\Models\Order;
use EzCode\Models\User;

class DashboardController extends Controller
{
    private string $folder = 'dashboard.';

    function index()
    {
        $countUser = (new User())->countUser();
        $countOrder = (new Order())->countOrder();
        $sumSales = (new Order())->sumSales();
        $orders = (new Order())->getAll();
        $statistical = (new Order())->statistical();
        $this->renderViewsAdmin($this->folder . __FUNCTION__,compact(["countUser","countOrder","sumSales","orders","statistical"]));
    }
}