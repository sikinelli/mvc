<?php
    // Post Model, Ovo je kao velika funkcija koja ce da izlistava podatke iz baze

    class PostModel extends Dmodel { // CatModel ima svoj Dmodel koji mu steluje konekciju na bazu

        public function __construct() {
           parent::__construct(); // poziva onu konekciju na bazu iz Dmodel-a
        }
               

         // Drugi(dinamicniji) kao nacin za listanje kategorija, da se sve svede na jednu funkciju u Database.php
         public function postList($post_table) { // ovo je kao sablon izlistavanja
            
            $sql = "SELECT * FROM $post_table ORDER BY post_id DESC"; // ako bih ovo sql premjestio u Database.php, gubilo bi se polje
            return  $this->db->readPosts($sql);   // pozivanje metode za izlistavanje. Ovo category je parametar za selectCategories($table){}
          
        }


        public function readPostById($post_table, $cat_table, $post_id){ // $post_id je klucan, i on nekako glumi ovo $post_id = $_GET['post_id];
            $sql = "SELECT $post_table.*, $cat_table.* FROM $post_table 
                    INNER JOIN $cat_table
                    ON $post_table.post_category_id = $cat_table.cat_id
                    WHERE $post_table.post_id = $post_id"; 
            //spojili smo posts tabelu i category tabelu, i izjednacili njihove id-eve. 
            // Moraju tagovi(zelena boja) biti saglasni sa nazivima atributa u bazu
            return  $this->db->readPosts($sql);
            
        }

        // Daj mi sve postove od 'te' kategorije
        public function readPostsByCat($post_table, $cat_table, $cat_id){ // $post_id je klucan, i on nekako glumi ovo $post_id = $_GET['post_id];
            $sql = "SELECT $cat_table.*, $post_table.* FROM $post_table 
                    INNER JOIN $cat_table
                    ON $post_table.post_category_id = $cat_table.cat_id
                    WHERE $cat_table.cat_id = $cat_id"; 
            //spojili smo posts tabelu i category tabelu, i izjednacili njihove id-eve. 
            // Moraju tagovi(zelena boja) biti saglasni sa nazivima atributa u bazu
            return  $this->db->readPosts($sql);
            
        }


                 
         

    }
    