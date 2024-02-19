<?php

namespace EzCode\Controllers\Client;

use EzCode\Commons\Controller;
use EzCode\Models\Course;
use EzCode\Models\Lecture;
use EzCode\Models\Order;

class DetailController extends Controller
{

    private string $folder = 'pages.';

    function detail($course_code)

    {
        if(!empty($_SESSION['user'])){
            $data['course_orders']  = (new Order())->getByUserId($_SESSION['user']['id']);
            $data['order']          = (new Order())->getByIdUserAndCourseCode($_SESSION['user']['id'], $course_code);
        }
        $data['course']         = (new Course())->getById($course_code);
        $data['count_lecture']  = (new Lecture())->count($course_code);
        $data['lectures']       = (new Lecture())->getById($course_code);
        $this->renderViewsClient($this->folder . __FUNCTION__, $data);

    }
}