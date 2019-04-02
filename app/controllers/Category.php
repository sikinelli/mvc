    <?php

    // Category kontroler koji sadrzi sablon izgleda
    class Blog extends Dcontroller {

    public function __construct(){

    parent::__construct(); // pozivamo ucitavanje load
    }

    // Ova funkcija je za prikazivanje na stranicu
    // Funkcija category ce po defaultu da pokrece model
    /**  public function categoryList(){ // prvo radimo model, a onda views. Jer moramo imati pregled podataka
    $data = array(); // odredjujemo da je u pitanju niz
    $cat_table = 'category'; // zapamtiti ovaj dio, jer smo ovdje deklarisali parametar            

    $catModel = $this->load->model("CatModel"); // ovome catmodel se dodaje ono .php iz load klase i model metode. Ucitaj model.
    $data['cat'] = $catModel->catList($cat_table, $data); // pozivanje metode varijablom catmodel koja kupi naziv stranice, i ta sveukupna metoda ce da zove listu kategorija.  $data['cat'] ovo da se zna da je u pitanju niz. Poput onog $row
    $this->load->view("category", $data); // ovdje iz load-a se dodaje ono .php
    } */



    // Ovdje sam izmijenio malo stvar, tako sto sam radio preko hedera i futera i dodao sadrzaj
    public function blogList(){ // mogao sam i home da stavim
    $this->load->view("header"); // heder

    $data = array(); // odredjujemo da je u pitanju niz
    $cat_table = 'category'; // zapamtiti ovaj dio, jer smo ovdje deklarisali parametar            

    $catModel = $this->load->model("CatModel"); // ovome catmodel se dodaje ono .php iz load klase i model metode. Ucitaj model.
    $data['cat'] = $catModel->catList($cat_table); // pozivanje metode varijablom catmodel koja kupi naziv stranice, i ta sveukupna metoda ce da zove listu kategorija.  $data['cat'] ovo da se zna da je u pitanju niz. Poput onog $row
    $this->load->view("category", $data);

    $this->load->view("footer"); //futer
    }





    public function categoryById(){ // ovaj naziv se ukucava u adress bar
    $data = array(); // odredjujemo da je u pitanju niz
    $cat_table = 'category'; // zapamtiti ovaj dio, jer smo ovdje deklarisali parametar            
    $cat_id = 2; // zapamtiti ovaj dio, jer smo ovdje deklarisali parametar  

    $catModel = $this->load->model("CatModel"); // ovome catmodel se dodaje ono .php iz load klase i model metode. Ucitaj model iliti konekciju na bazu
    $data['catbyid'] = $catModel->catById($cat_table, $cat_id); // pozivanje metode varijablom catmodel koja kupi naziv stranice, i ta sveukupna metoda ce da zove listu kategorija.  $data['cat'] ovo da se zna da je u pitanju niz.
    $this->load->view("catbyid", $data); // ovdje iz load-a se dodaje ono .php. Ovdje smo pravili novu stranicu
    }




    // stranica addCategory.php
    public function addCategory() {
    $this->load->view("addCategory"); 
    }

    public function insertCategory() {
    $cat_table = 'category';

    $cat_name = $_POST['polje_naziv']; // Iz name="polje_naziv"
    //  $cat_title = $_POST['polje_naslov'];

    $data = array(
        'cat_name' => $cat_name                                       
        );   

    $catModel = $this->load->model("CatModel");
    $result = $catModel->insertCat($cat_table, $data);

    $mdata = array();

    if ($result == 1) { // posto execute daje jedinicu ako je izvrsen, nesto poput true
        // header("Location: http://localhost/mvc_sajt/Category/addcategory"); // ovako je nogo lakse i brze
        $mdata['msg'] = "Dodato";
    } else {
        $mdata['msg'] = "Nije dodato";
    }
        $this->load->view("addCategory", $mdata); // da se na stranici pokaze i poruka, jer je view zaduzen za prikazivanje
    }



    public function deleteCategory() {
    $cat_table = 'category';
    $cond = "cat_id = 4"; // WHERE uslov
                                    
    $catModel = $this->load->model("CatModel");
    $catModel->deleteCat($cat_table, $cond);
    }





    // stranica updCategory.php. Azuriranje date kategorije
    public function updCategory() { // ovo sluzi za prikaz nekog podataka u polje
    $data = array(); // odredjujemo da je u pitanju niz
    $cat_table = 'category'; // zapamtiti ovaj dio, jer smo ovdje deklarisali parametar            
    $cat_id = 36; // zapamtiti ovaj dio, jer smo ovdje deklarisali parametar  

    $catModel = $this->load->model("CatModel"); // ovome catmodel se dodaje ono .php iz load klase i model metode. Ucitaj model iliti konekciju na bazu
    $data['catById'] = $catModel->catById($cat_table, $cat_id); // pozivanje metode varijablom catmodel koja kupi naziv stranice, i ta sveukupna metoda ce da zove listu kategorija.  $data['cat'] ovo da se zna da je u pitanju niz.
    $this->load->view("updCategory", $data);
    }

    // glavna funkcija koja deklarise sto da se unese i parametre. I ona poziva sve ostale funkcije
    public function updateCategory() { 
    $cat_table = 'category';                
    $cat_id = $_POST['polje_id'];
    $cat_name   = $_POST['polje_naziv']; // Iz name="polje_naziv"

    $cond = "cat_id=$cat_id"; // WHERE uslov

    $data = array(
        'cat_name' => $cat_name                                       
        );                
    $catModel = $this->load->model("CatModel");
    $result = $catModel->updateCat($cat_table, $data, $cond);               

    $mdata = array();
    if ($result == 1) { // posto execute daje jedinicu ako je izvrsen, nesto poput true
        // header("Location: http://localhost/mvc_sajt/Category/addcategory"); // ovako je nogo lakse i brze
        $mdata['msg'] = "Izmijenjeno";                   
    } else {
        $mdata['msg'] = "Nije Izmijenjeno";                    
    }
        $this->load->view("updCategory", $mdata);
    }


}


