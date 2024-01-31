<?php

namespace EzCode\Models;

use EzCode\Commons\Model;

class Lecture extends Model
{
    private string $tableName = 'lectures';

    function getById($courseCode)
    {
        $query = "SELECT * FROM {$this->tableName} where course_code =:course_code";
        $params = array(':course_code' => $courseCode);
        return $this->execute($query, true, $params);
    }

    function getUrl($id)
    {
        $query = "SELECT * FROM {$this->tableName} where id = :id";
        $params = array(':id' => $id);
        return $this->execute($query, false, $params);
    }


    function getByIdAndCourseCode($courseCode, $id)
    {
        $query = "SELECT * FROM {$this->tableName} where course_code =:course_code and id = :id";
        $params = array(':course_code' => $courseCode,':id' => $id);
        return $this->execute($query, false, $params);
    }


    function insert($lectureName, $url, $courseCode)
    {
        $query = "INSERT INTO {$this->tableName} 
                    (name, url, course_code)
                    VALUES (:lectureName, :url,:courseCode)";

        $params = array(
            ':lectureName' => $lectureName,
            ':url' => $url,
            ':courseCode' => $courseCode,
        );
        $this->execute($query, false, $params);
    }

    function update($lectureName, $url, $courseCode, $id)
    {
        $query = "UPDATE {$this->tableName} 
                         set name = :lectureName, url =:url
                         where id = :id and course_code = :courseCode";

        $params = array(
            ':lectureName' => $lectureName,
            ':url' => $url,
            ':courseCode' => $courseCode,
            ':id' => $id,
        );
        $this->execute($query, false, $params);
    }


    function delete($courseCode,$id)
    {
        $query = "DELETE FROM {$this->tableName} where id = :id and course_code = :course_code";
        $params = array(':id' => $id,':course_code'=> $courseCode);
        $this->execute($query, false, $params);
    }

    function count($courseCode){
        $query = "SELECT COUNT(*) AS count_lecture FROM $this->tableName WHERE course_code = :course_code";
        $params = array(':course_code' => $courseCode);
        return $this->execute($query, false, $params);
    }

}