<?php

namespace EzCode\Models;
error_reporting(E_ALL);
ini_set('display_errors', 1);

use EzCode\Commons\Model;

class Category extends Model
{
    private string $tableName = 'categories';


    function getAll()
    {
        return $this->execute("SELECT * FROM {$this->tableName}");
    }


    function getById($categoryId)
    {
        $query = "SELECT * FROM {$this->tableName} where id =:id";
        $params = array(':id' => $categoryId);
        return $this->execute($query, false, $params);
    }


    function insert($categoryName, $description, $image)
    {
        $query = "INSERT INTO {$this->tableName} 
        (name, description,image)
        VALUES (:categoryName, :description, :image)";

        $params = array(
            ':categoryName' => $categoryName,
            ':description' => $description,
            ':image' => $image,
        );

        $this->execute($query, false, $params);
    }


    function update($categoryName, $description, $image, $category_id)
    {
        if (empty($image)) {
            $query = "UPDATE {$this->tableName} 
                        set name = :categoryName, description =:description 
                        where id = :category_id";
            $params = array(
                ':categoryName' => $categoryName,
                ':description' => $description,
                ':category_id' => $category_id,
            );
        } else {
            $query = "UPDATE {$this->tableName} 
                        set name = :categoryName, description =:description, image = :image 
                        where id = :category_id";
            $params = array(
                ':categoryName' => $categoryName,
                ':description' => $description,
                ':image' => $image,
                ':category_id' => $category_id,
            );
        }
        $this->execute($query, false, $params);

    }


    function delete($categoryId)
    {
        $query = "DELETE FROM {$this->tableName} where id = :id";
        $params = array(':id' => $categoryId);
        $this->execute($query, false, $params);
    }

}