<?php   


class Profil extends Dcontroller { 

   public function __construct() {        
        parent::__construct();
   
        Session::checkSession();     
        $this->home();
        
    } 

 
    public function home() {  
        
        $this->load->view("admin/admin-header");
        $this->load->view("admin/admin-navigation");
        $this->load->view("admin/left-sidebar"); 
               
        $table = 'users';
         
        $data = array();

        $profilModel = $this->load->model("ProfilModel"); 
        $data['korisnik'] = $profilModel->profilList($table); 
        $this->load->view("admin/Profil", $data);        
        
        $this->load->view("admin/admin-footer");      
          
    } 
    


   

} 