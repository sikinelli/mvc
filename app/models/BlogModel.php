<?php
    
    class BlogModel extends Dmodel { 

        public function __construct() {
           parent::__construct(); 
        }
               

         
         public function blogList($table) { 
            
            $sql = "SELECT * FROM $table";
            return  $this->db->select($sql);   
          
        }

         
        public function blogById($table, $id) {            
            
            $sql = "SELECT * FROM $table WHERE blog_id=:id"; 
            $data = array(":id" => $id);
            return $this->db->select($sql, $data); 
        }

     
        public function insertBlog($id, $data) {
           return $this->db->insert($id, $data);         
        }

        public function deleteBlog($id, $cond) {
            return $this->db->delete($id, $cond);          
         }


        public function updateBlog($id, $data, $cond) {
            return $this->db->update($id, $data, $cond);          
         }


         public function deactivate($id, $data, $cond){
            return $this->db->update($id, $data, $cond); 
         }
   

    }
    