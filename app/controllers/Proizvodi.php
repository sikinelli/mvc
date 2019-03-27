<?php   

class Proizvodi extends Dcontroller { 

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
        $table = 'proizvodi';       

        $proizvodModel = $this->load->model("ProizvodModel"); 
        $data['proizvod'] = $proizvodModel->proizvodList($table); 
        $this->load->view("admin/proizvodi", $data);        
        
        $this->load->view("admin/admin-footer");      
          
    } 
    


   

} 