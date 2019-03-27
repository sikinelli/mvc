<?php   

class Admin extends Dcontroller { // Dcontroller je za load

   public function __construct() {        
        parent::__construct();
  
        Session::checkSession();     
        $this->home(); 
        
    } 


    public function home() {  
        
        $this->load->view("admin/admin-header");
        $this->load->view("admin/admin-navigation");
        $this->load->view("admin/left-sidebar"); 
        
        $this->load->view("admin/index");

        $this->load->view("admin/admin-footer");      
          
    } 


} 