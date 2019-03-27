<?php
   

    class ProfilModel extends Dmodel { 

        public function __construct() {
           parent::__construct(); 
        }
               

         
         public function profilList($table) {          
            
            $sql = "SELECT * FROM $table"; 
            return $this->db->select($sql); 
        }

         
   
        public function userById($table, $id) {             
            
            $sql = "SELECT * FROM $table WHERE user_id = :id";
            $data = array(":id" => $id);
            return $this->db->select($sql, $data);
        }
        
       
        public function updateLozinka($id, $data, $cond) {
            return $this->db->update($id, $data, $cond);          
         }


    }
    