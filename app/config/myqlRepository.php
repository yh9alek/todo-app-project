<?php

namespace app\config;

use app\config\Database;

class MysqlRepository {


    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();


    }

    public function selectMysql($query,$params,$fetchMode = \PDO::FETCH_ASSOC){
        try {
            
            $stmt = $this->db->prepare($query);
            if(!$stmt){
                return "Error en la sintaxis de la consulta" . $this->db->errorInfo()[2];
            }

            foreach($params as $key => $param){
                if(is_int($param)){
                    $stmt->bindValue($key + 1, $param, \PDO::PARAM_INT);
                }elseif(is_bool($param)){
                     $stmt->bindValue($key + 1, $param, \PDO::PARAM_BOOL);
                }elseif(is_null($param)){
                    $stmt->bindValue($key + 1, $param, \PDO::PARAM_NULL);
                }else{
                    $stmt->bindValue($key + 1, $param, \PDO::PARAM_STR);
                }
            }

            if(!$stmt->execute()){
                return "Error al ejecutar la consulta: " . implode('-', $stmt->errorInfo());
            }

            
            $data = [
                'data' => $stmt->fetchAll($fetchMode),
                'rows' => $stmt->rowCount()
            ];

            return $data;

        } catch (\PDOException $e) {
            return "Error en la ejecución de la consulta: " . $e->getMessage();
        }
    }
}