<?php   


    class deleteProizvod extends Dcontroller { 

    public function __construct() {        
            parent::__construct();
        
            Session::checkSession();  
                
        } 

    
    public function deleteProizvod($id=NULL) {
        $table = 'proizvodi';
        $cond = "proizvod_id = $id"; // WHERE uslov                                      
         
        $proizvodModel = $this->load->model("ProizvodModel");
        $result = $proizvodModel->deleteProizv($table, $cond);               
    
        if ($result == 1) { 
            header("Location:" .BASE_URL."/Proizvodi");
        } else {
            echo "<script>
            alert('Greska! Pokusaj ponovo.');
            window.location = 'http://localhost/mvc_sajt/Proizvodi';</script>";
        }
        }





        

    }