<?php   


    class deleteKarijera extends Dcontroller { 

    public function __construct() {        
            parent::__construct();
          
            Session::checkSession();      
                
        } 

    
    public function deleteKarijera($id=NULL) {
        $karijera_table = 'karijera';
        $cond = "karijera_id = $id"; // WHERE uslov                                      
         
        $karijeraModel = $this->load->model("karijeraModel");
        $result = $karijeraModel->deleteKarijera($table, $cond);               
    
        if ($result == 1) { 
            header("Location:" .BASE_URL."/Karijera");
        } else {
            echo "<script>
            alert('Greska! Pokusaj ponovo.');
            window.location = 'http://localhost/mvc_sajt/Karijera';</script>";
        }
        }





        

    }