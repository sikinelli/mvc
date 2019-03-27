<?php   



class Blog extends Dcontroller { 

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
        $table = 'blog';       

        $blogModel = $this->load->model("blogModel"); 
        $data['blog'] = $blogModel->blogList($table); 
        $this->load->view("admin/blog", $data);        
        
        $this->load->view("admin/admin-footer");      
          
    } 
    


   

} 