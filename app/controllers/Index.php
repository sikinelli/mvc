    <?php   /** POSTOVI */
    // INDEX JE GLAVNI, I ON CE DA PREUSMJERAVA NA ODREDJENE STRANICE
    class Index extends Dcontroller { // Dcontroller je za load

    

    function __construct() {        
        parent::__construct();  
        
    }      

    public function Index() {
        $this->home();       
    }
    

    

    // Pocetna stranica koja definise sto se prikazuje na nju
    public function home(){ // Na stranicu Index.php ne moramo da stavljamo include. Samo je vazno ovdje napraviti raspored koji bi postovao pravilo (header, sadrzaj, footer)
        $this->load->view("header"); // stranica header.php  
        
/************************************************************************* */
        // Ovdje zelimo listu kategorija da pozovemo da se izlistaju
        $data = array(); // odredjujemo da je u pitanju niz
        $cat_table = 'category'; // zapamtiti ovaj dio, jer smo ovdje deklarisali parametar            

        $catModel = $this->load->model("CatModel"); // ovome catmodel se dodaje ono .php iz load klase i model metode. Ucitaj model.
        $data['cat'] = $catModel->catList($cat_table, $data); // pozivanje metode varijablom catmodel koja kupi naziv stranice, i ta sveukupna metoda ce da zove listu kategorija.  $data['cat'] ovo da se zna da je u pitanju niz. Poput onog $row
        $this->load->view("sidebar", $data);
/************************************************************************* */
        

        // Ovdje zelimo listu postova da pozovemo da se izlistaju
        $data = array(); // odredjujemo da je u pitanju niz
        $post_table = 'posts'; // zapamtiti ovaj dio, jer smo ovdje deklarisali parametar            
                
        $postModel = $this->load->model("PostModel"); // ovome catmodel se dodaje ono .php iz load klase i model metode. Ucitaj model.
        $data['allposts'] = $postModel->postList($post_table); // pozivanje metode varijablom catmodel koja kupi naziv stranice, i ta sveukupna metoda ce da zove listu kategorija.  $data['cat'] ovo da se zna da je u pitanju niz. Poput onog $row
        $this->load->view("content", $data); // stranca content.php dje je sadrzaj      
        
        
        $this->load->view("footer");
        
    }



    public function postReadMore($post_id){ // ovo je nesto novo
        $this->load->view("header");     

        /*******************  DA BI SE POJAVILA LISTA KATEGORIJA, MORAMO IMATI OVAJ SABLON ****************************************************** */
        $data = array(); 
        $cat_table = 'category'; // zapamtiti ovaj dio, jer smo ovdje deklarisali parametar            

        $catModel = $this->load->model("CatModel"); 
        $data['cat'] = $catModel->catList($cat_table, $data); 
        $this->load->view("sidebar", $data);
        /************************************************************************* */

        $data = array();             
        $post_table = 'posts';           
        $cat_table = 'category';  // ovo nam treba za izjednacavanje sa id od kategorije
        $postModel = $this->load->model("PostModel"); // ovome catmodel se dodaje ono .php iz load klase i model metode. Ucitaj model.
        $data['postById'] = $postModel->readPostById($post_table, $cat_table, $post_id); 
        $this->load->view("readMore", $data); // stranica readMore.php dje je cijeli post       
    
        $this->load->view("footer");
    }



    public function postsByCat($cat_id) {
        $this->load->view("header"); 

         /*******************  DA BI SE POJAVILA LISTA KATEGORIJA, MORAMO IMATI OVAJ SABLON ****************************************************** */
         $data = array(); 
         $cat_table = 'category'; // zapamtiti ovaj dio, jer smo ovdje deklarisali parametar            

         $catModel = $this->load->model("CatModel"); 
         $data['cat'] = $catModel->catList($cat_table, $data); 
         $this->load->view("sidebar", $data);
         /**************************************************************************/
            

        $data = array();            
        $post_table = 'posts';           
        $cat_table = 'category';  // ovo nam treba za izjednacavanje sa id od kategorije
        $postModel = $this->load->model("PostModel"); // ovome catmodel se dodaje ono .php iz load klase i model metode. Ucitaj model.
        $data['postsCat'] = $postModel->readPostsByCat($post_table, $cat_table, $cat_id); 
        $this->load->view("postsByCat", $data);           
    
        $this->load->view("footer");
    }



    } 
