<?php

namespace EzCode\Controllers\Client;

use EzCode\Commons\Controller;
use EzCode\Models\Course;
use EzCode\Models\Lecture;

class LearningController extends Controller
{
    private string $folder = 'pages.';
    private Course $course;
    private Lecture $lecture;
    public function __construct()
    {
        $this->course = new Course();
        $this->lecture = new Lecture();
    }
    function learning($course_code,$id)

    {
        $data['lectures'] = $this->lecture->getById($course_code);
        $data['course'] = $this->course->getById($course_code);
        $data['lecture_url'] = $this->lecture->getUrl($id);
        $this->renderViewsClient($this->folder . __FUNCTION__,$data);

    }
}