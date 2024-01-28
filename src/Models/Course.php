<?php

namespace EzCode\Models;
error_reporting(E_ALL);
ini_set('display_errors', 1);

use EzCode\Commons\Model;

class Course extends Model
{
    private string $tableName = 'courses';

    function getAll()
    {
        return $this->execute("SELECT * FROM {$this->tableName}");
    }

    function getById($courseCode)
    {
        $query = "SELECT * FROM {$this->tableName} where course_code =:course_code";
        $params = array(':course_code' => $courseCode);
        return $this->execute($query, false, $params);
    }

    function insert($courseName, $description, $price, $discount, $image, $courseCode, $status = 1, $registerNumber = 0)
    {
        $query = "INSERT INTO {$this->tableName} 
                    (name, description, price, discount, image ,course_code,status, register_number)
                    VALUES (:courseName, :description, :price, :discount, :image,:courseCode, :status, :registerNumber)";

        $params = array(
            ':courseName' => $courseName,
            ':description' => $description,
            ':price' => $price,
            ':discount' => $discount,
            ':image' => $image,
            ':courseCode' => $courseCode,
            ':status' => $status,
            ':registerNumber' => $registerNumber,
        );
        $this->execute($query, false, $params);
    }


    function update($courseName, $description, $price, $discount, $image, $courseCode)
    {
        if (empty($image)) {
            $query = "UPDATE {$this->tableName} 
                         set name = :courseName, description =:description, price=:price, discount = :discount
                         where course_code = :courseCode";
            $params = array(
                ':courseName' => $courseName,
                ':description' => $description,
                ':price' => $price,
                ':discount' => $discount,
                ':courseCode' => $courseCode
            );
        } else {
            $query = "UPDATE {$this->tableName} 
                                set name = :courseName, description =:description, price=:price, discount = :discount ,image = :image 
                                where course_code = :courseCode";
            $params = array(
                ':courseName' => $courseName,
                ':description' => $description,
                ':price' => $price,
                ':discount' => $discount,
                ':image' => $image,
                ':courseCode' => $courseCode
            );
        }
        $this->execute($query, false, $params);

    }

    function delete($courseId)
    {
        $query = "DELETE FROM {$this->tableName} where course_code = :id";
        $params = array(':id' => $courseId);
        $this->execute($query, false, $params);
    }

    function getCourseAndCategory()
    {
        return $this->execute( "SELECT * FROM {$this->tableName} inner join course_categories on {$this->tableName}.course_code = course_categories.course_code");
    }
}