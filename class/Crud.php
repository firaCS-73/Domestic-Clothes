<?php
require_once 'Db.php';
class Crud extends Db{

    public function insert($table_name,$data){
        if(!empty($data)){
            $fields = $placeholder = [];

            foreach($data as $field => $value){
                $fields[] = $field;
                $placeholder[] = ":{$field}";
            }
        }

        $sql = "INSERT INTO {$table_name} (". implode(',', $fields) .") VALUES(". implode(',', $placeholder). ")";
        $stmt = $this->db->prepare($sql);

        try{
            $this->db->beginTransaction();
            $stmt->execute($data);
            $this->db->commit();
            $insert_id = $this->db->lastInsertId();
            return $insert_id;

        } catch(PDOException $e){
            echo "Error: ". $e->getMessage();
        }

    }

}
?>    