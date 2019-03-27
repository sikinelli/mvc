<?php   


class Karijera extends Dcontroller { 

   public function __construct() {        
        parent::__construct();
   
        Session::checkSession();      
        $this->home();
        
    } 

 
    public function home() {  
        
        $this->load->view("admin/admin-header");
        $this->load->view("admin/admin-navigation");
        $this->load->view("admin/left-sidebar"); 

        $data = array(); 
        $table = 'karijera';       

        $karijeraModel = $this->load->model("KarijeraModel"); 
        $data['karijera'] = $karijeraModel->karijeraList($table); 
        $this->load->view("admin/karijera", $data);        
        
        $this->load->view("admin/admin-footer");      
          
    } 
    


   

} 