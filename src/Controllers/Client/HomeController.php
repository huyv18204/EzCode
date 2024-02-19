<?php

namespace EzCode\Controllers\Client;

use \EzCode\Commons\Controller;
use EzCode\Models\Category;
use EzCode\Models\Course;
use EzCode\Models\CourseCategory;
use EzCode\Models\Order;

class HomeController extends Controller
{
    private string $folder = 'pages.';
    function home()
    {
        if(!empty($_SESSION['user']['id'])){
            $data['course_orders']  = (new Order())->getByUserId($_SESSION['user']['id']);
        }
        $data['courses']            = (new Course())->getCourseAndCategory();
        $data['categories']         = (new Category())->getAll();
        $data['course_categories']  = (new CourseCategory())->getAll();
        $this->renderViewsClient($this->folder . __FUNCTION__, $data);
    }

}
