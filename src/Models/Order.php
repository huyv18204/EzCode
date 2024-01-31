<?php

namespace EzCode\Models;

use EzCode\Commons\Model;

class Order extends Model
{

    private string $tableName = 'orders';
//    function getAll()
//    {
//        return $this->execute("SELECT * FROM {$this->tableName}");
//    }

    function getByIdUserAndCourseCode($user_id,$course_code)
    {
        $query = "SELECT * FROM {$this->tableName} where user_id =:user_id and course_code = :course_code";
        $params = array(':user_id' => $user_id,':course_code'=>$course_code);
        return $this->execute($query, false, $params);
    }


    function insert($order_code, $course_code, $user_id, $order_date)
    {
        $query = "INSERT INTO {$this->tableName} 
        (order_code, course_code,user_id,order_date)
        VALUES (:order_code, :course_code, :user_id,:order_date)";

        $params = array(
            ':order_code' => $order_code,
            ':course_code' => $course_code,
            ':user_id' => $user_id,
            ':order_date' => $order_date
        );

        $this->execute($query, false, $params);
    }


}