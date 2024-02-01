<?php

namespace EzCode\Controllers\Admin;

use EzCode\Commons\Controller;
use EzCode\Models\Course;
use EzCode\Models\Lecture;

class LectureController extends Controller
{

    private string $folder = 'lectures.';

    function index($code_course)
    {
        $data['course']         =   (new Course())->getById($code_course);
        $data['lectures']       =   (new Lecture())->getById($code_course);
        $data['code_course']    =   $code_course;
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function create($course_code)
    {
        $data['course_code'] = $course_code;

        if (isset($_POST['btn-add'])) {

            $lectureName    =   $_POST['lecture_name'];
            $url            =   $_POST['url'];

            (new Lecture())->insert($lectureName, $url, $course_code);

            header("Location:" . route('/admin/lectures/' . $course_code));
        }
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }


    function update($id, $course_code)
    {
        $data['lecture']        = (new Lecture())->getByIdAndCourseCode($course_code, $id);
        $data['course_code']    = $course_code;

        if (isset($_POST['btn-edit'])) {
            $lectureName        =  $_POST['lecture_name'];
            $url                =  $_POST['url'];

            (new Lecture())->update($lectureName, $url, $course_code, $id);

            header("Location:" . route('/admin/lectures/' . $course_code));
        }
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function delete($id, $course_code)
    {
        (new Lecture())->delete($course_code, $id);

        header("Location:" . route('/admin/lectures/' . $course_code));
    }

}