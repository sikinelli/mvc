<?php   


class addKarijeraEn extends Dcontroller { 

   public function __construct() {        
        parent::__construct();
      
        Session::checkSession();       
        $this->home();
        
    } 

    public function home() {            
      
        $this->load->view("admin/addKarijeraEn");
             
    } 

 
    public function insertKarijera() {        

        $table = 'karijera'; 
           
        $karijera_naslov = $_POST['polje_naslov']; 
        $karijera_pocetak= $_POST['polje_pocetak'];
        $karijera_kraj = $_POST['polje_kraj']; 
        $karijera_opis = $_POST['polje_opis'];    

        $data = array(
            'karijera_naslov' => $karijera_naslov,
            'karijera_opis' => $karijera_opis,            
            'karijera_pocetak' => $karijera_pocetak,
            'karijera_kraj' => $karijera_kraj,  
            'karijera_status' => 'aktivan'                                    
            );   
    
        $karijeraModel = $this->load->model("KarijeraModel");
        $result = $karijeraModel->insertKarijera($table, $data);   
       
    
        if ($result == 1) { 
            echo "<script>
                alert('Added');
                window.location = 'http://localhost/mvc_sajt/Karijera';</script>";
        } else {
            echo "<script>
            alert('Error! Try Again.');
            window.location = 'http://localhost/mvc_sajt/addKarijera';</script>";
        }
            
    }
    


   

} 