<?php
/**
 * Simple class for database connection using PDO
 * Author : @DyanGalih
 * Date : 2018-05-02
 * https://github.com/DyanGalih/simple-pdo-connection
 */
class Database{
    private $conn;

    public function __construct($configuration){
        $this->conn = new PDO('mysql:host='.$configuration['database']['host'].
        ';dbname='.$configuration['database']['name'], 
        $configuration['database']['user'], 
        $configuration['database']['password']);

        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function open($sql, $params){
        $stmt = $this->conn->prepare($sql);
        $paramBind = array();
        foreach ($params as $key => $value) {
             $stmt->bindParam(":".$key, $paramBind[$key]);
             $paramBind[$key] = $params[$key];
        }
        $arr_row = array();
        if($stmt->execute()){
            while ($row = $stmt->fetch()) {
                $arr_row[] = $row;
            }
        }
        return $arr_row;
    }

    public function execute($sql, $params){
        $stmt = $this->conn->prepare($sql);
        $paramBind = array();
        foreach ($params as $key => $value) {
             $stmt->bindParam(":".$key, $paramBind[$key]);
             $paramBind[$key] = $params[$key];
        }

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
}