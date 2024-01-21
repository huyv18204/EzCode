<?php

class Model
{

    function selectAll($sql)
    {
        try {
            $sql =
            $stmt = $GLOBALS['connect']->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            die();
        }

    }

    function insert($sql)
    {
        try {
            $stmt = $GLOBALS['connect']->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    function selectOne($sql)
    {
        try {
            $stmt = $GLOBALS['connect']->prepare($sql);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    function delete($sql)
    {
        try {
            $stmt = $GLOBALS['connect']->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
