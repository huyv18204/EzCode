<?php

namespace EzCode\Models;

use EzCode\Commons\Model;

class CourseCategory extends Model
{
    private string $mainTable = 'course_categories';
    private string $joinTable ='categories';

    public function selectAllCourseCategory()
    {
        return $this->execute("SELECT * FROM {$this->mainTable} inner join {$this->joinTable} on {$this->mainTable}.category_id = {$this->joinTable}.id");
    }


    public function selectOneCourseCategory($courseCode)
    {
        $query = "SELECT category_id FROM {$this->mainTable} where course_code =:courseCode";
        $params = array(':courseCode' => $courseCode);
        return $this->execute($query, false, $params);
    }

    public function insertCourseCategory($courseCode, $categoryIds)
    {
        $query = "INSERT INTO {$this->mainTable} (course_code, category_id) VALUES (:courseCode, :categoryId)";

        foreach ($categoryIds as $categoryId) {
            $params = array(
                ':courseCode' => $courseCode,
                ':categoryId' => $categoryId
            );
            $this->execute($query, false, $params);
        }
    }


    public function deleteCourseCategory($courseCode, $categoryIds)
    {
        $query = "DELETE FROM {$this->mainTable} WHERE course_code = :courseCode AND category_id = :categoryId";
        foreach ($categoryIds as $categoryId) {
            $params = array(
                ':courseCode' => $courseCode,
                ':categoryId' => $categoryId
            );
            $this->execute($query, false, $params);
        }
    }

    function updateCourseCategory($courseCode, $selectedCategoryIds)
    {
        $currentCategoryIds = CourseCategory::selectOneCourseCategory($courseCode);

//        if (is_array($currentCategoryIds) && is_array($selectedCategoryIds)) {
            $deletedCategoryIds = array_diff($currentCategoryIds, $selectedCategoryIds);
            if (!empty($deletedCategoryIds)) {
                foreach ($deletedCategoryIds as $categoryId) {
                    $array = explode(', ', $categoryId);
                    CourseCategory::deleteCourseCategory($courseCode, $array);
                }
            }

            $newCategoryIds = array_diff($selectedCategoryIds, $currentCategoryIds);
            if (!empty($newCategoryIds)) {
                foreach ($newCategoryIds as $categoryId) {
                    $array = explode(', ', $categoryId);
                    CourseCategory::insertCourseCategory($courseCode, $array);
                }
            }
        }
//    }

}