<?php

namespace EzCode\Models;

use EzCode\Commons\Model;

class User extends Model
{
    private string $tableName = 'users';

    function getAll()
    {
        return $this->execute("SELECT * FROM {$this->tableName}");
    }

    function insert($email, $password, $name, $status = 1, $role = 1)
    {
        $query = "INSERT INTO {$this->tableName} 
                    (email, password,name, status, role)
                    VALUES (:email, :password,:name, :status, :role)";

        $params = array(
            ':email' => $email,
            ':password' => $password,
            ':name' => $name,
            ':status' => $status,
            ':role' => $role,
        );
        $this->execute($query, false, $params);
    }

    function update($id, $status)
    {
        $query = "UPDATE {$this->tableName} set status = :status where id = :id";
        $params = array(
            ':status' => $status == 1 ? 2 : 1,
            ':id' => $id,
        );
        $this->execute($query, false, $params);
    }

    function checkLogin($email,$password)
    {
        $query = "SELECT * FROM users where email = :email and password = :password";
        $params = array(
            ':email' => $email,
            ':password' => $password,
        );
        return $this->execute($query, false, $params);
    }


}