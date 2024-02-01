<?php

namespace EzCode\Controllers\Admin;

use EzCode\Commons\Controller;
use EzCode\Models\Category;

class CategoryController extends Controller
{

    private string $folder = 'categories.';
    const PATH_UPLOAD = '/storages/categories/';
    function index()
    {
        $data['categories'] = (new Category())->getAll();
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function create()
    {
        if (isset($_POST['btn-add'])) {
            $courseName     = $_POST['course_name'];
            $description    = $_POST['description'];

            $image          = $_FILES['image'] ?? null;
            $imagePath      = null;
            if ($image) {
                $imagePath = self::PATH_UPLOAD . time() . $image['name'];

                if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                    $imagePath = null;
                }
            }
            (new Category())->insert(
                $courseName,
                $description,
                $imagePath);
            header("location:" . route('/admin/categories'));
        }

        $this->renderViewsAdmin($this->folder . __FUNCTION__);
    }


    function update($id)
    {
        $data['category']   = (new Category())->getById($id);
        if (isset($_POST['btn-edit'])) {
            $courseName     = $_POST['course_name'];
            $description    = $_POST['description'];

            $image          = $_FILES['image'] ?? null;
            $imagePath      = $data['category']['image'];
            $move           = false;
            if ($image) {
                $imagePath = self::PATH_UPLOAD . time() . $image['name'];

                if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                    $imagePath = $data['category']['image'];
                } else {
                    $move = true;
                }
            }

            (new Category())->update(
                $courseName,
                $description,
                $imagePath,
                $id);

            if (
                $move
                && $data['category']['image']
                && file_exists(PATH_ROOT . $data['category']['image'])
            ) {
                unlink(PATH_ROOT . $data['category']['image']);
            }
            header("location:" . route('/admin/categories'));
        }
        $this->renderViewsAdmin($this->folder . __FUNCTION__, $data);
    }

    function delete($id)
    {

        $category = (new Category())->getById($id);
        (new Category())->delete($id);
        if ($category['image'] && file_exists(PATH_ROOT . $category['image'])) {
            unlink(PATH_ROOT . $category['image']);
        }
        header("location:" . route('/admin/categories'));
    }
}