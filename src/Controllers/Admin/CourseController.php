<?php

namespace EzCode\Controllers\Admin;

use EzCode\Commons\Controller;
use EzCode\Models\Category;
use EzCode\Models\Course;
use EzCode\Models\CourseCategory;

class CourseController extends Controller
{
    private Course $course;
    private Category $category;

    private string $folder = 'courses.';

    public function __construct()
    {
        $this->course = new Course();
        $this->category = new Category();
    }

    function index()
    {
        $data['courses'] = $this->course->getAll();
        $courseCategory = new CourseCategory();
        $data['course_categories'] = $courseCategory->selectAllCourseCategory();
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function create()
    {
        if (isset($_POST['btn-add'])) {
            $courseName = $_POST['course_name'] ?? null;
            $courseCode = substr(rand(0, 9999), 0, 6);
            $price = $_POST['price'] ?? null;
            $description = $_POST['description'] ?? null;
            $category_id = $_POST['category_id'] ?? null;
            $discount = $_POST['discount'] ?? null;
            $target_dir = "src/Uploads/";

            $imageName = $_FILES["image"]["name"] ?? null;
            $imageTmpName = $_FILES["image"]["tmp_name"] ?? null;

            if ($imageName !== null && $imageTmpName !== null) {
                $target_file = $target_dir . basename($imageName);

                if (move_uploaded_file($imageTmpName, $target_file)) {
                    $this->course->insert($courseName, $description, $price, $discount, $imageName, $courseCode);
                    $courseCategory = new CourseCategory();
                    $courseCategory->insertCourseCategory($courseCode, $category_id);

                } else {
                    echo "Không thể upload file.";
                }
            } else {
                echo "Thông tin file không hợp lệ.";
            }
            header("location:" . route('/admin/courses'));
        }

        $this->renderViewsAdmin($this->folder . __FUNCTION__);
    }


    function update($id)
    {
        $data['courses'] = $this->course->getById($id);
        $courseCategory = new CourseCategory();
        $data['course_categories'] = $courseCategory->selectAllCourseCategory();
        $data['categories'] = $this->category->getAll();

        if (isset($_POST['btn-update'])) {
            $courseName = $_POST['course_name'] ?? null;
            $price = $_POST['price'] ?? null;
            $description = $_POST['description'] ?? null;
            $category_id = $_POST['category_id'] ?? null;
            $discount = $_POST['discount'] ?? null;
            $target_dir = "src/Uploads/";

            $imageName = $_FILES["image"]["name"] ?? null;
            $imageTmpName = $_FILES["image"]["tmp_name"] ?? null;

            if ($imageName !== null && $imageTmpName !== null) {
                $target_file = $target_dir . basename($imageName);

                if (!move_uploaded_file($imageTmpName, $target_file)) {
                    echo "Không thể upload file.";
                }
            } else {
                echo "Thông tin file không hợp lệ.";
            }
            $this->course->update($courseName, $description, $price, $discount, $imageName, $id);

            $courseCategory = new CourseCategory('course_categories');
            $courseCategory->updateCourseCategory($id, $category_id);
            header("location:" . route('/admin/courses'));

        }
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function delete($id)
    {
        $this->course->delete($id);
        header("location:" . route('/admin/courses'));
    }

}