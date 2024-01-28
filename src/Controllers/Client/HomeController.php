<?php
namespace EzCode\Controllers\Client;
use \EzCode\Commons\Controller;
use EzCode\Models\Category;
use EzCode\Models\Course;
use EzCode\Models\CourseCategory;

class HomeController extends Controller {
    private Course $course;
    private CourseCategory $courseCategory;
    private Category $category;

    private string $folder = 'pages.';

    public function __construct() {
        $this->course = new Course();
        $this->courseCategory = new CourseCategory();
        $this->category = new Category();
    }

    function home()

    {
        $data['courses'] = $this->course->getCourseAndCategory();
        $data['categories'] = $this->category->getAll();
        $data['course_categories'] = $this->courseCategory->selectAllCourseCategory();
        $this->renderViewsClient($this->folder . __FUNCTION__, $data);

    }

}
