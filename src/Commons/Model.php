<?php
namespace EzCode\Commons;
use PDO;
class Model
{
    function dataBase()
    {
        $host = DB_HOST;
        $port = DB_PORT;
        $dbname = DB_NAME;
        $username = DB_USERNAME;
        $password = DB_PASSWORD;
        try {
            $connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        } catch (PDOException $PDOException) {
            echo "Kết nối thất bại" . $PDOException->getMessage();

        }
    }

//    protected string $tableName;
//    public function __construct($tableName)
//    {
//        $this->tableName = $tableName;
//    }

    function execute($query, $selectAll = true, $params = array())
    {


        try {
            $stmt = $this->dataBase()->prepare($query);

            if (!empty($params)) {
                foreach ($params as $key => &$value) {
                    $stmt->bindParam($key, $value);
                }
            }
            $stmt->execute();
            if ($selectAll) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            }

        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }


}