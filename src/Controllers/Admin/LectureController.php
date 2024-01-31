<?php

namespace EzCode\Controllers\Admin;

use EzCode\Commons\Controller;
use EzCode\Models\Course;
use EzCode\Models\Lecture;

class LectureController extends Controller
{
    private Lecture $lecture;
    private Course $course;

    private string $folder = 'lectures.';

    public function __construct()
    {
        $this->lecture = new Lecture();
        $this->course = new Course();
    }

    function index($code_course)
    {
        $data['course'] = $this->course->getById($code_course);
        $data['lectures'] = $this->lecture->getById($code_course);
        $data['code_course'] = $code_course;
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function create($course_code)
    {

        if (isset($_POST['btn-add'])) {
            $lectureName = $_POST['lecture_name'] ?? null;
            $url = $_POST['url'] ?? null;
            $this->lecture->insert($lectureName, $url, $course_code);
            header("Location:" . route('/admin/lectures/' . $course_code));
        }
        $data['course_code'] = $course_code;
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }


    function update($id, $course_code)
    {
        $data['lecture'] = $this->lecture->getByIdAndCourseCode($course_code, $id);
        $data['course_code'] = $course_code;
        if (isset($_POST['btn-edit'])) {
            $lectureName = $_POST['lecture_name'] ?? null;
            $url = $_POST['url'] ?? null;
            $this->lecture->update($lectureName, $url, $course_code, $id);
            header("Location:" . route('/admin/lectures/' . $course_code));
        }
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function delete($id, $course_code)
    {
        $this->lecture->delete($course_code, $id);
        header("Location:" . route('/admin/lectures/' . $course_code));
    }

}