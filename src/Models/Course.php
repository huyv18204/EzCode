<?php

namespace EzCode\Models;

use EzCode\Commons\Model;

class Course extends Model
{
    private string $tableName = 'courses';

    function getAll()
    {

        return $this->execute("SELECT * FROM {$this->tableName}");
    }

    function getById($course_code)
    {
        $query = "SELECT * FROM {$this->tableName} where course_code =:course_code";
        $params = array(
            ':course_code' => $course_code
        );
        return $this->execute($query, false, $params);
    }

    function insert($name, $description, $price, $discount, $image, $course_code, $status = 1, $register_number = 0)
    {
        $query = "
                    INSERT INTO {$this->tableName} 
                            (name, description,  price,  discount,  image , course_code, status,  register_number)
                    VALUES (:name, :description, :price, :discount, :image,:course_code, :status, :register_number)
                 ";

        $params = array(
            ':name'             => $name,
            ':description'      => $description,
            ':price'            => $price,
            ':discount'         => $discount,
            ':image'            => $image,
            ':course_code'      => $course_code,
            ':status'           => $status,
            ':register_number'  => $register_number,
        );
        $this->execute($query, false, $params);
    }


    function update($name, $description, $price, $discount, $image, $course_code)
    {
        $query = "
                    UPDATE {$this->tableName} 
                    SET 
                        name        = :name, 
                        description = :description, 
                        price       = :price, 
                        discount    = :discount ,
                        image       = :image 
                    WHERE course_code = :course_code
                 ";

        $params = array(
            ':name'             => $name,
            ':description'      => $description,
            ':price'            => $price,
            ':discount'         => $discount,
            ':image'            => $image,
            ':course_code'      => $course_code
        );
        $this->execute($query, false, $params);

    }

    function delete($course_code)
    {
        $query = "
                    DELETE 
                    FROM {$this->tableName} 
                    WHERE course_code = :course_code
                 ";

        $params = array(
            ':course_code' => $course_code
        );
        $this->execute($query, false, $params);
    }

    function getCourseAndCategory()
    {
        return $this->execute("
                    SELECT * 
                    FROM {$this->tableName} 
                    INNER JOIN course_categories 
                    ON {$this->tableName}.course_code 
                    = course_categories.course_code
                ");
    }
}