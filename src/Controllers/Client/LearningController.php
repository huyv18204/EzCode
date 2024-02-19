<?php

namespace EzCode\Controllers\Client;

use EzCode\Commons\Controller;
use EzCode\Models\Course;
use EzCode\Models\Lecture;

class LearningController extends Controller
{
    private string $folder = 'pages.';

    function learning($course_code, $id)

    {
        $data['lectures']       = (new Lecture())   ->getById($course_code);
        $data['course']         = (new Course())    ->getById($course_code);
        $data['lecture_url']    = (new Lecture())   ->getUrl($id);
        $this->renderViewsClient($this->folder . __FUNCTION__, $data);

    }
}