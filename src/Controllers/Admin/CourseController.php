<?php

namespace EzCode\Controllers\Admin;

use EzCode\Commons\Controller;
use EzCode\Models\Category;
use EzCode\Models\Course;
use EzCode\Models\CourseCategory;

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
        if (isset($_POST['btn-add'])) {
            $courseName     = $_POST['course_name'];
            $courseCode     = substr(rand(0, 9999), 0, 6);
            $price          = $_POST['price'];
            $description    = $_POST['description'];
            $category_id    = $_POST['category_id'];
            $discount       = $_POST['discount'];

            $image          = $_FILES['image'] ?? null;
            $imagePath      = null;
            if ($image) {
                $imagePath = self::PATH_UPLOAD . time() . $image['name'];

                if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                    $imagePath = null;
                }
            }
            (new Course())->insert(
                $courseName,
                $description,
                $price,
                $discount,
                $imagePath,
                $courseCode);
            (new CourseCategory())->insert($courseCode, $category_id);

            header("location:" . route('/admin/courses'));
        }
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }


    function update($id)
    {
        $data['courses']            = (new Course())->getById($id);
        $data['course_categories']  = (new CourseCategory())->getAll();
        $data['categories']         = (new Category())->getAll();

        if (isset($_POST['btn-update'])) {
            $courseName             = $_POST['course_name'];
            $price                  = $_POST['price'];
            $description            = $_POST['description'];
            $category_id            = $_POST['category_id'];
            $discount               = $_POST['discount'];

            $image                  = $_FILES['image'] ?? null;
            $imagePath              = $data['post']['p_image'];
            $move                   = false;
            if ($image) {
                $imagePath = self::PATH_UPLOAD . time() . $image['name'];

                if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                    $imagePath = $data['post']['p_image'];
                } else {
                    $move = true;
                }
            }
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
            header("location:" . route('/admin/courses'));
        }
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function delete($courseCode)
    {
        $course = (new Course())->getById($courseCode);
        (new Course())->delete($courseCode);
        (new CourseCategory())->deleteByCode($courseCode);

        if ($course['image'] && file_exists(PATH_ROOT . $course['image'])) {
            unlink(PATH_ROOT . $course['image']);
        }
        header("location:" . route('/admin/courses'));
    }

}