<?php

namespace EzCode\Controllers\Admin;

use EzCode\Commons\Controller;
use EzCode\Models\Category;
use EzCode\Models\Course;
use EzCode\Models\CourseCategory;
use EzCode\Models\Lecture;

class CourseController extends Controller
{
    private string $folder = 'courses.';
    const PATH_UPLOAD = '/storages/courses/';

    function index()
    {
        $data['courses']            = (new Course())->getAll();
        $data['course_categories']  = (new CourseCategory())->getAll();
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function create()
    {
        $data['categories'] = (new Category())->getAll();
        if (!empty($_POST)) {
            $courseName     = $_POST['course_name'];
            $courseCode     = substr(rand(0, 9999), 0, 6);
            $price          = $_POST['price'];
            $description    = $_POST['description'];
            $category_id    = $_POST['category_id'] ?? null;
            $discount       = $_POST['discount'];

            $image          = $_FILES['image'] ?? null;
            $imagePath      = null;
            if ($image) {
                $imagePath = self::PATH_UPLOAD . time() . $image['name'];

                if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                    $imagePath = null;
                }
            }

            if(empty($courseName) || empty($price) || empty($category_id) || empty($description) || empty($imagePath)){
                $_SESSION['error'] = "Vui lòng điền đủ thông tin";
            }else{
                (new Course())->insert(
                    $courseName,
                    $description,
                    $price,
                    $discount,
                    $imagePath,
                    $courseCode);
                (new CourseCategory())->insert($courseCode, $category_id);
                $_SESSION['success'] = "Thao tác thành công";
            }
        }
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }


    function update($id)
    {
        $data['courses']            = (new Course())->getById($id);
        $data['course_categories']  = (new CourseCategory())->getAll();
        $data['categories']         = (new Category())->getAll();

        if (!empty($_POST)) {
            $courseName             = $_POST['course_name'];
            $price                  = $_POST['price'];
            $description            = $_POST['description'];
            $category_id            = $_POST['category_id'];
            $discount               = $_POST['discount'];

            $image                  = $_FILES['image'] ?? null;
            $imagePath              = $data['courses']['image'] ;
            $move                   = false;
            if ($image) {
                $imagePath = self::PATH_UPLOAD . time() . $image['name'];

                if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                    $imagePath = $data['courses']['image'];
                } else {
                    $move = true;
                }
            }
            if(empty($courseName) || empty($price) || empty($category_id) || empty($description)){
                $_SESSION['error'] = "Vui lòng điền đủ thông tin";
            }else {
                (new Course())->update(
                    $courseName,
                    $description,
                    $price, $discount,
                    $imagePath,
                    $id
                );
                (new CourseCategory())->updateCourseCategory($id, $category_id);

                if (
                    $move
                    && $data['courses']['image']
                    && file_exists(PATH_ROOT . $data['courses']['image'])
                ) {
                    unlink(PATH_ROOT . $data['courses']['image']);
                }
                $_SESSION['success'] = "Thao tác thành công";
            }
        }
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function delete($courseCode)
    {
        $course = (new Course())->getById($courseCode);
        (new Course())->delete($courseCode);
        (new CourseCategory())->deleteByCode($courseCode);
        (new Lecture())->deleteCode($courseCode);

        if ($course['image'] && file_exists(PATH_ROOT . $course['image'])) {
            unlink(PATH_ROOT . $course['image']);
        }
        $_SESSION['success'] = "Thao tác thành công";
        header("location:" . route('/admin/courses'));
    }

}