<?php   


class editBlog extends Dcontroller { 

   public function __construct() {        
        parent::__construct();
 
        Session::checkSession();      
     
    } 

 
   
    public function editBlog($id=NULL) {   
        
        $data = array(); 
        $table = 'blog';           
         
        $blogModel = $this->load->model("blogModel");         
        $data['blogById'] = $blogModel->blogById($table, $id); 
        $this->load->view("admin/editBlog", $data);
        
        
    } 


    public function updateBlog($id=NULL) { 
        $table = 'blog';                
        
        $blog_naslov   = $_POST['polje_naslov']; 
        $blog_status   = $_POST['polje_status'];
        $blog_autor   = $_POST['polje_autor'];       
        $blog_opis   = $_POST['polje_opis'];
       
        $cond = "blog_id=$id"; 
    
        $data = array(
            'blog_naslov'  => $blog_naslov,
            'blog_autor' => $blog_autor,
            'blog_status' => $blog_status,            
            'blog_opis' => $blog_opis           
        );     

        $blogModel = $this->load->model("BlogModel");
        $result = $blogModel->updateBlog($table, $data, $cond);               
    
        if ($result == 1) { 
            echo "<script>
                alert('Izmijenjeno');
                window.location = 'http://localhost/mvc_sajt/Blog';</script>";
        } else {
            echo "<script>
            alert('Greska!');
            window.location = 'http://localhost/mvc_sajt/Blog';</script>";
            
        }
    }



    public function deaktiviraj($id=NULL) { 
        $table = 'blog';             
        
        $cond = "blog_id=$id"; 
    
        $data = array(
            'blog_status'  => 'neaktivan'             
        );                
        $blogModel = $this->load->model("blogModel");
        $result = $blogModel->deactivate($table, $data, $cond);               
    
        if ($result == 1) { 
            echo "<script>
                alert('Deaktiviran');
                window.location = 'http://localhost/mvc_sajt/blog';</script>";
        } else {
            echo "<script>
            alert('Greska!');
            window.location = 'http://localhost/mvc_sajt/blog';</script>";
            
        }
    }



    

}