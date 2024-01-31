<?php

namespace EzCode\Controllers\Client;

use EzCode\Commons\Controller;
use EzCode\Models\Course;
use EzCode\Models\Lecture;
use EzCode\Models\Order;

class DetailController extends Controller
{

    private string $folder = 'pages.';
    private Course $course;
    private Lecture $lecture;
    private Order $order;
    public function __construct()
    {
        $this->course = new Course();
        $this->lecture = new Lecture();
        $this->order = new Order();

    }

    function detail($course_code)

    {
        $data['order'] = $this->order->getByIdUserAndCourseCode($_SESSION['user']['id'],$course_code);
        $data['course'] = $this->course->getById($course_code);
        $data['count_lecture'] =$this->lecture->count($course_code);
        $data['lectures'] =$this->lecture->getById($course_code);
        $this->renderViewsClient($this->folder . __FUNCTION__,$data);

    }
}