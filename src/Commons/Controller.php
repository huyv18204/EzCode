<?php

namespace EzCode\Commons;

use eftec\bladeone\BladeOne;

class Controller
{
    public function renderViewsClient($view, $data = array())
    {
        $templatesPath = __DIR__ . '/../Views/Client';
        $blade = new BladeOne($templatesPath);
        echo $blade->run($view, $data);
    }

    public function renderViewsAdmin($view, $data = array())
    {
        $templatesPath = __DIR__ . '/../Views/Admin';
        $blade = new BladeOne($templatesPath);
        echo $blade->run($view, $data);

    }

}