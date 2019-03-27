<?php   


class addProizvod extends Dcontroller { 

   public function __construct() {        
        parent::__construct();
       
        Session::checkSession();     
        $this->home();
    } 

 
    public function home() {            
      
        $this->load->view("admin/addProizvod");
             
    } 


    public function insertProizvod() {        

        $table = 'proizvodi';    

        $proizvod_naziv    = $_POST['polje_naziv']; 
        $proizvod_status   = $_POST['polje_status'];
        $proizvod_kratak   = $_POST['polje_kratak_opis']; 
        $proizvod_uvodni   = $_POST['polje_uvodni_tekst'];
        $proizvod_glavni   = $_POST['polje_glavni_tekst'];            
              
        
        $data = array(
            'proizvod_naziv'  => $proizvod_naziv,
            'proizvod_status' => $proizvod_status,
            'kratak_opis'  => $proizvod_kratak,
            'uvodni_tekst'  => $proizvod_uvodni,
            'glavni_tekst'  => $proizvod_glavni, 
            'proizvod_datum' => date("Y-m-d H:i:s")             
            );   
    
        $proizvodModel = $this->load->model("ProizvodModel");
        $result = $proizvodModel->insertProizvod($table, $data);   
       
    
        if ($result == 1) { 
            echo "<script>
                alert('Dodato');
                window.location = 'http://localhost/mvc_sajt/Proizvodi';</script>";
        } else {
            echo "<script>
            alert('Greska! Probaj ponovo.');
            window.location = 'http://localhost/mvc_sajt/addProizvod';</script>";
        }
            
    }


}