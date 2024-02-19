<?php

namespace EzCode\Models;

use EzCode\Commons\Model;

class CourseCategory extends Model
{
    private string $mainTable = 'course_categories';
    private string $joinTable = 'categories';

    public function getAll()
    {
        return $this->execute("
                    SELECT * 
                    FROM {$this->mainTable} 
                    INNER JOIN {$this->joinTable} 
                    ON {$this->mainTable}.category_id 
                    = {$this->joinTable}.id
        ");
    }

    public function getByCode($courseCode)
    {
        $query = "
                    SELECT category_id 
                    FROM {$this->mainTable} 
                    WHERE course_code =:courseCode
                 ";
        $params = array(
            ':courseCode' => $courseCode
        );
        return $this->execute($query, true, $params);
    }

    public function insert($courseCode, $categoryIds)
    {
        $query = "
                    INSERT INTO {$this->mainTable} (course_code, category_id) 
                    VALUES                         (:course_code, :category_id)";

        foreach ($categoryIds as $categoryId) {
            $params = array(
                ':course_code' => $courseCode,
                ':category_id' => $categoryId,
            );
            $this->execute($query, false, $params);
        }

    }

    public function deleteCodeCateId($courseCode, $categoryIds)
    {
        $query = "
                    DELETE 
                    FROM {$this->mainTable} 
                    WHERE course_code = :courseCode 
                    AND category_id = :categoryId";

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
        $currentCategoryIds = CourseCategory::getByCode($courseCode);
        if (!empty($selectedCategoryIds)){
            $deletedCategoryIds = array_diff($currentCategoryIds, $selectedCategoryIds);
            if (!empty($deletedCategoryIds)) {
                foreach ($deletedCategoryIds as $categoryId) {
                    CourseCategory::deleteCodeCateId($courseCode, $categoryId);
                }
            }

            $newCategoryIds = array_diff($selectedCategoryIds, $currentCategoryIds);
            if (!empty($newCategoryIds)) {
                foreach ($newCategoryIds as $categoryId) {
                    $array = explode(', ', $categoryId);

                    CourseCategory::insert($courseCode, $array);
                }
            }
        }
    }

    public function deleteByCode($courseCode)
    {
        $query = "    
                    DELETE 
                    FROM {$this->mainTable} 
                    WHERE course_code = :courseCode
                 ";

        $params = array(
            ':courseCode' => $courseCode,
        );
        $this->execute($query, false, $params);
    }

}