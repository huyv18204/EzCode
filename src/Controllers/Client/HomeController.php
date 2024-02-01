<?php

namespace EzCode\Controllers\Client;

use \EzCode\Commons\Controller;
use EzCode\Models\Category;
use EzCode\Models\Course;
use EzCode\Models\CourseCategory;

class HomeController extends Controller
{
    private string $folder = 'pages.';
    function home()
    {
        $data['courses']            = (new Course())->getCourseAndCategory();
        $data['categories']         =(new Category())->getAll();
        $data['course_categories']  = (new CourseCategory())->getAll();
        $this->renderViewsClient($this->folder . __FUNCTION__, $data);
    }

}
