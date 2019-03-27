<?php   


class editKarijeraEn extends Dcontroller { 

   public function __construct() {        
        parent::__construct();
  
        Session::checkSession();     
     
    } 

 
    
    public function editKarijera($id=NULL) {    
        
        $data = array(); 
        $table = 'karijera';           
         
        $karijeraModel = $this->load->model("KarijeraModel");         
        $data['karijeraById'] = $karijeraModel->karijeraById($table, $id); 
        $this->load->view("admin/editKarijeraEn", $data);
        
        
    } 


    public function updateKarijera($id=NULL) { 
        $table = 'karijera';                
        
        $karijera_naslov   = $_POST['polje_naslov']; 
        $karijera_status   = $_POST['polje_status'];
        $karijera_opis   = $_POST['polje_opis'];
        $karijera_pocetak   = $_POST['polje_pocetak'];
        $karijera_kraj   = $_POST['polje_kraj'];
        
       
        $cond = "karijera_id=$id"; 
    
        $data = array(
            'karijera_naslov'  => $karijera_naslov,
            'karijera_status' => $karijera_status,
            'karijera_opis' =>   $karijera_opis,
            'karijera_pocetak' => $karijera_pocetak,
             'karijera_kraj'  => $karijera_kraj
                
        );     

        $karijeraModel = $this->load->model("KarijeraModel");
        $result = $karijeraModel->updatekarijera($table, $data, $cond);               
    
        if ($result == 1) { 
            echo "<script>
                alert('Edited');
                window.location = 'http://localhost/mvc_sajt/Karijera';</script>";
        } else {
            echo "<script>
            alert('Error!');
            window.location = 'http://localhost/mvc_sajt/Karijera';</script>";
            
        }
    }



    public function deaktiviraj($id=NULL) { 
        $table = 'karijera';             
        
        $cond = "karijera_id=$id"; 
    
        $data = array(
            'karijera_status'  => 'neaktivan'             
        );                
        $karijeraModel = $this->load->model("KarijeraModel");
        $result = $karijeraModel->deactivate($table, $data, $cond);               
    
        if ($result == 1) { 
            echo "<script>
                alert('Deaktiviran');
                window.location = 'http://localhost/mvc_sajt/Karijera';</script>";
        } else {
            echo "<script>
            alert('Greska!');
            window.location = 'http://localhost/mvc_sajt/Karijera';</script>";
            
        }
    }



    

}