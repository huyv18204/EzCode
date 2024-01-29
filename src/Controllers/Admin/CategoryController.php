<?php

namespace EzCode\Controllers\Admin;

use EzCode\Commons\Controller;
use EzCode\Models\Category;

class CategoryController extends Controller
{
    private Category $category;

    private string $folder = 'categories.';

    public function __construct()
    {
        $this->category = new Category();
    }

    function index()
    {
        $data['categories'] = $this->category->getAll();
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function create()
    {
        if (isset($_POST['btn-add'])) {
            $courseName = $_POST['course_name'] ?? null;
            $description = $_POST['description'] ?? null;
            $target_dir = "src/Uploads/";

            $imageName = $_FILES["image"]["name"] ?? null;
            $imageTmpName = $_FILES["image"]["tmp_name"] ?? null;

            if ($imageName !== null && $imageTmpName !== null) {
                $target_file = $target_dir . basename($imageName);

                if (move_uploaded_file($imageTmpName, $target_file)) {
                    $this->category->insert($courseName, $description, $imageName);
                } else {
                    echo "Không thể upload file.";
                }
            } else {
                echo "Thông tin file không hợp lệ.";
            }
            header("location:" . route('/admin/categories'));
        }

        $this->renderViewsAdmin($this->folder . __FUNCTION__);
    }


    function update($id)
    {
        $data['category'] = $this->category->getById($id);
        if (isset($_POST['btn-edit'])) {
            $courseName = $_POST['course_name'] ?? null;
            $description = $_POST['description'] ?? null;
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
            $this->category->update($courseName, $description, $imageName, $id);
            header("location:" . route('/admin/categories'));
        }
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function delete($id)
    {
        $this->category->delete($id);
        header("location:" . route('/admin/categories'));
    }
}