<?php


    class ProizvodModel extends Dmodel { 

        public function __construct() {
           parent::__construct(); 
        }
               

         
         public function proizvodList($table) { 
            
            $sql = "SELECT * FROM $table"; 
            return  $this->db->select($sql);   
          
        }

       
        public function proizvodById($table, $id) {           
            
            $sql = "SELECT * FROM $table WHERE proizvod_id=:id"; 
            $data = array(":id" => $id);
            return $this->db->select($sql, $data); 
        }

       
        public function insertProizvod($id, $data) {
           return $this->db->insert($id, $data);         
        }

        public function deleteProizv($id, $cond) {
            return $this->db->delete($id, $cond);          
         }

        
        public function updateProizvod($id, $data, $cond) {
            return $this->db->update($id, $data, $cond);          
         }


         public function deactivate($id, $data, $cond){
            return $this->db->update($id, $data, $cond); 
         }
   

    }
    