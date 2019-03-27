<?php   


class editProizvod extends Dcontroller { 

   public function __construct() {        
        parent::__construct();
       
        Session::checkSession();  
     
    } 

 
    
    public function editProizvod($id=NULL) {    
                
        $table = 'proizvodi'; 
                  
        $data = array(); 
        $proizvodModel = $this->load->model("ProizvodModel");         
        $data['proizvodById'] = $proizvodModel->proizvodById($table, $id); 
        $this->load->view("admin/editProizvod", $data);
                
    } 


    public function updateProizvod($id=NULL) { 
        $table = 'proizvodi';                
        
        $proizvod_naziv    = $_POST['polje_naziv']; 
        $proizvod_status   = $_POST['polje_status'];
        $proizvod_kratak   = $_POST['polje_kratak_opis']; 
        $proizvod_uvodni   = $_POST['polje_uvodni_tekst'];
        $proizvod_glavni   = $_POST['polje_glavni_tekst'];
               
        $cond = "proizvod_id=$id"; 
        
        $data = array(
            'proizvod_naziv'  => $proizvod_naziv,
            'proizvod_status'  => $proizvod_status,
            'kratak_opis'  => $proizvod_kratak,
            'uvodni_tekst'  => $proizvod_uvodni,
            'glavni_tekst'  => $proizvod_glavni             
                    
            );                
        $proizvodModel = $this->load->model("ProizvodModel");
        $result = $proizvodModel->updateProizvod($table, $data, $cond);               
    
        if ($result == 1) { 
            echo "<script>
                alert('Izmijenjeno');
                window.location = 'http://localhost/mvc_sajt/Proizvodi';</script>";
        } else {
            echo "<script>
            alert('Greska!');
            </script>";
            
        }
    }



    public function deaktiviraj($id=NULL) { 
        $table = 'proizvodi';             
        
        $cond = "proizvod_id=$id"; 
    
        $data = array(
            'proizvod_status'  => 'neaktivan'             
        );                
        $proizvodModel = $this->load->model("ProizvodModel");
        $result = $proizvodModel->deactivate($table, $data, $cond);               
    
        if ($result == 1) { 
            echo "<script>
                alert('Deaktiviran');
                window.location = 'http://localhost/mvc_sajt/Proizvodi';</script>";
        } else {
            echo "<script>
            alert('Greska!');
            </script>";
            
        }
    }



    

}