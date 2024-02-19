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


    function getById($id)
    {
        $query = "SELECT * FROM {$this->tableName} WHERE id =:id";
        $params = array(
            ':id' => $id
        );
        return $this->execute($query, false, $params);
    }


    function insert($categoryName, $description, $image)
    {
        $query = "
                    INSERT INTO {$this->tableName} 
                            ( name, description, image)
                    VALUES (:name, :description, :image)
                 ";

        $params = array(
            ':name'         => $categoryName,
            ':description'  => $description,
            ':image'        => $image,
        );

        $this->execute($query, false, $params);
    }


    function update($name, $description, $image, $category_id)
    {
        $query = "
                        UPDATE {$this->tableName} 
                        SET 
                            name        = :name, 
                            description = :description, 
                            image       = :image 
                        WHERE id        = :category_id
                     ";
        $params = array(
            ':name'         => $name,
            ':description'  => $description,
            ':image'        => $image,
            ':category_id'  => $category_id,
        );
        $this->execute($query, false, $params);

    }


    function delete($id)
    {
        $query = "
                    DELETE 
                    FROM {$this->tableName} 
                    WHERE id = :id
                 ";

        $params = array(
            ':id' => $id
        );
        $this->execute($query, false, $params);
    }

}