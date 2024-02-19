<?php

namespace EzCode\Models;

use EzCode\Commons\Model;

class Order extends Model
{

    private string $tableName = 'orders';


    function getByUserId($user_id)
    {
        $query = "
                    SELECT *
                    FROM {$this->tableName}
                    INNER JOIN courses
                    ON orders.course_code      = courses.course_code
                    WHERE orders.user_id   = :user_id 
                 ";
        $params = array(
            ':user_id'          => $user_id
        );
        return $this->execute($query, true, $params);
    }

    function getByIdUserAndCourseCode($user_id,$course_code)
    {
        $query = "
                    SELECT * FROM {$this->tableName} 
                    WHERE user_id = :user_id 
                    AND course_code = :course_code";
        $params = array(
            ':user_id'          => $user_id,
            ':course_code'      =>$course_code
        );
        return $this->execute($query, false, $params);
    }


    function insert($order_code, $course_code, $user_id, $order_date)
    {
        $query = "
                    INSERT INTO {$this->tableName} 
                                (order_code,  course_code,  user_id, order_date)
                    VALUES      (:order_code, :course_code, :user_id,:order_date)
                 ";

        $params = array(
            ':order_code'       => $order_code,
            ':course_code'      => $course_code,
            ':user_id'          => $user_id,
            ':order_date'       => $order_date
        );

        $this->execute($query, false, $params);
    }


}