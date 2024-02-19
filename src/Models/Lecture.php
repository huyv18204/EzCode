<?php

namespace EzCode\Models;

use EzCode\Commons\Model;

class Lecture extends Model
{
    private string $tableName = 'lectures';

    function getById($course_code)
    {
        $query = "
                    SELECT * 
                    FROM {$this->tableName} 
                    WHERE course_code =:course_code
                 ";
        $params = array(':course_code' => $course_code);
        return $this->execute($query, true, $params);
    }

    function getUrl($id)
    {
        $query = "
                    SELECT * 
                    FROM {$this->tableName} 
                    WHERE id = :id
                 ";
        $params = array(
            ':id' => $id
        );
        return $this->execute($query, false, $params);
    }


    function getByIdAndCourseCode($course_code, $id)
    {
        $query = "
                    SELECT * 
                    FROM {$this->tableName} 
                    WHERE course_code =:course_code 
                    AND id = :id
                ";
        $params = array(
            ':course_code'  => $course_code,
            ':id'           => $id
        );
        return $this->execute($query, false, $params);
    }


    function insert($name, $url, $course_code)
    {
        $query = "
                    INSERT INTO {$this->tableName} 
                            (name, url, course_code)
                    VALUES (:name, :url,:course_code)
                 ";

        $params = array(
            ':name'         => $name,
            ':url'          => $url,
            ':course_code'  => $course_code,
        );
        $this->execute($query, false, $params);
    }

    function update($name, $url, $course_code, $id)
    {
        $query = "
                    UPDATE {$this->tableName} 
                    SET     name        = :name, 
                            url         = :url
                    WHERE   id          = :id 
                    AND     course_code = :course_code
                 ";

        $params = array(
            ':name'         => $name,
            ':url'          => $url,
            ':course_code'  => $course_code,
            ':id'           => $id,
        );
        $this->execute($query, false, $params);
    }


    function delete($course_code,$id)
    {
        $query = "
                    DELETE 
                    FROM {$this->tableName} 
                    WHERE id = :id 
                    AND course_code = :course_code
                ";
        $params = array(
            ':id'           => $id,
            ':course_code'  => $course_code
        );
        $this->execute($query, false, $params);
    }

    function deleteCode($course_code)
    {
        $query = "
                    DELETE 
                    FROM {$this->tableName} 
                    WHERE course_code = :course_code 
                ";
        $params = array(
            ':course_code'  => $course_code
        );
        $this->execute($query, false, $params);
    }

    function count($course_code){
        $query = "
                    SELECT COUNT(*) AS count_lecture
                    FROM $this->tableName 
                    WHERE course_code = :course_code";
        $params = array(
            ':course_code' => $course_code
        );
        return $this->execute($query, false, $params);
    }

}