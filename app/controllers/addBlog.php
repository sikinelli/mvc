<?php   



class addBlog extends Dcontroller { 

   public function __construct() {        
        parent::__construct();
        
        Session::checkSession();    
        $this->home();
        
    } 

 
    public function home() {            
      
        $this->load->view("admin/addBlog");
             
    } 
 

    public function insertBlog() {        

        $table = 'blog';    

        $blog_naslov = $_POST['polje_naslov'];
        $blog_autor = $_POST['polje_autor'];  
        $blog_opis  = $_POST['polje_opis'];  
        $blog_datum = $_POST['polje_datum'];

        $data = array(
            'blog_naslov' => $blog_naslov,
            'blog_autor' => $blog_autor,
            'blog_datum' => $blog_datum,  
            'blog_status' => 'aktivan',
            'blog_opis'   => $blog_opis          
            );   
    
        $blogModel = $this->load->model("BlogModel");
        $result = $blogModel->insertBlog($table, $data);   
       
    
        if ($result == 1) { 
            echo "<script>
                alert('Dodato');
                window.location = 'http://localhost/mvc_sajt/Blog';</script>";
        } else {
            echo "<script>
            alert('Greska! Probaj ponovo.');
            window.location = 'http://localhost/mvc_sajt/addBlog';</script>";
        }
           
    }

}