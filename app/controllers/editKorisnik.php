<?php   


class editKorisnik extends Dcontroller { 

   public function __construct() {        
        parent::__construct();
      
        Session::checkSession();    
     
    } 

 
    
    public function editLozinka($id=NULL) {  
        
        $data = array(); 
        $table = 'users';           
         
        $profilModel = $this->load->model("ProfilModel");         
        $data['userById'] = $profilModel->userById($table, $id); 
        $this->load->view("admin/editKorisnikLozinka", $data);
        
        
    } 


    public function updateLozinka($id=NULL) { 
        
        $table = 'users';             
        $nova   = $_POST['polje_nova'];       
       
        $cond = "user_id=$id";
        $data = array(
            'password'  => $nova           
            ); 
                   

        $profilModel = $this->load->model("ProfilModel");
        $result = $profilModel->updateLozinka($table, $data, $cond);               
    
        if ($result == 1) {            
            header("Location:" .BASE_URL."/Profil");
               
        }else {
            echo "<script>
            alert('Greska!');
            window.location = 'http://localhost/mvc_sajt/Profil';
            </script>";
            
        }
    }
        
        
               
         

        
}

