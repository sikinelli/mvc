<?php   


    class deleteBlog extends Dcontroller { 

    public function __construct() {        
            parent::__construct();
            
            Session::checkSession();    
                
        } 

    
    public function deleteBlog($id=NULL) {
        $table = 'blog';
        $cond = "blog_id = $id"; // WHERE uslov                                      
         
        $blogModel = $this->load->model("blogModel");
        $result = $blogModel->deleteBlog($table, $cond);               
    
        if ($result == 1) { 
            header("Location:" .BASE_URL."/Blog");
        } else {
            echo "<script>
            alert('Greska! Pokusaj ponovo.');
            window.location = 'http://localhost/mvc_sajt/Blog';</script>";
        }
        }





        

    }